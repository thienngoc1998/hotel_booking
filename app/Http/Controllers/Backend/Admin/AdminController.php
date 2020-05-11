<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
Use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Backend\Admin\Auth\ChangeInfoRequest;
use App\Http\Requests\Backend\Admin\Auth\ChangePasswordRequest;
use App\Repository\Admin\AdminRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    private  $repository;

    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getInfo($id)
    {
        return view('Backend.profile.profile');
    }

    public function changeInfo($id, ChangeInfoRequest $request)
    {
        $this->repository->changeInfo($id,$request);
        return redirect()->back();
    }


    public function changePassword($id, ChangePasswordRequest $request)
    {

    }

    public function index()
    {
        $admins = Admin::where('id','!=', 0)->where('id','!=', Auth::user()->id)->orderBy('id','desc')->paginate(5);
        return view('Backend.admin.index')->withAdmins($admins);
    }

    public function create()
    {
        return view('Backend.admin.create');
    }

    public function destroy($id)
    {
        Admin::find($id)->delete();
        return redirect()->route('admin.admins')->withFlashSuccess(__('alert.deleted'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $file->move('upload/images/admin', $file->getClientOriginalName());
            Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'avatar' => $file->getClientOriginalName(),
                'role' => $request->role,
                'password' =>Hash::make($request->password)
            ]);
        } else
        {
            Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
                'password' =>Hash::make($request->password)
            ]);
        }

        return redirect()->route('admin.admins')->withFlashSuccess(__('alert.created'));

    }

    public function detail($id)
    {
        return view('Backend.admin.detail')->withAdmin(Admin::find($id));
    }

    public function update(Request $request , $id)
    {
        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $file->move('upload/images/admin', $file->getClientOriginalName());
            Admin::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'avatar' => $file->getClientOriginalName(),
                'role' => $request->role,
            ]);
        } else
        {
            Admin::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role
            ]);
        }

        return redirect()->route('admin.admins')->withFlashSuccess(__('alert.updated'));
    }
}
