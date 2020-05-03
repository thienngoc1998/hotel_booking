<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        return view('Backend.user.index')->withUsers(User::orderBy('id','desc')->paginate(5));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users')->withFlashSuccess(__('alert.deleted'));
    }

    public function create()
    {
        return view('Backend.user.create');
    }

    public function store(RegisterUserRequest $request)
    {
        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $file->move('upload/images/user', $file->getClientOriginalName());
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'avatar' => $file->getClientOriginalName()
            ]);
        }
        else {
            User::create($request->all());
        }
        return redirect()->route('admin.users')->withFlashSuccess(__('alert.created'));
    }

    public function detail($id)
    {
        return view('Backend.user.edit')->withUser(User::findOrFail($id));
    }

    public function update($id, UpdateUserRequest $request)
    {
        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $file->move('upload/images/user', $file->getClientOriginalName());
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'avatar' => $file->getClientOriginalName()
            ]);
        }
        else {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
        }
        return redirect()->route('admin.users')->withFlashSuccess(__('alert.updated'));
    }

    public function resetPassword($id, ResetPasswordRequest $request)
    {
        $user = User::findOrFail($id)->update([
            'password' => Hash::make($request->password)
        ]);

        if ($user)
        {
            Mail::to(User::findOrFail($id)->email)->send(new ResetPasswordMail($request->password));
        }
        return redirect()->route('admin.users')->withFlashSuccess(__('alert.updated'));
    }

    public function getFormResetPassword($id)
    {
        return view('Backend.user.reset-password')->withUser(User::findOrFail($id));
    }

}
