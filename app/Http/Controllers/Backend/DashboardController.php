<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Backend.dashboard');
    }

    public function getHome()
    {
        return view('Frontend.dashboard');
    }

    public  function getListRoom()
    {
        $rooms = Room::all()->sortByDesc('id');
        return view('Frontend.list-room')->withRooms($rooms);
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email'=>$request->email,'password' => $request->password]))
        {
            return redirect()->route('frontend.home-hotel');
        }
        else {
            return redirect()->back()->withErrors('Tài khoản hoặc mật khẩu không đúng ');
        }
    }

    public function getFormLogin()
    {
        return view('Frontend.login');
    }

    public function getFormRegister()
    {
        return view('Frontend.register');
    }

    public function registerUser(RegisterUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        if ($user)
        {
            return redirect()->route('getFormLogin')->withFlassSuccess('Đăng ký thành công !Đăng nhập bằng tài khoản mới tạo');
        }
    }

    public function getDetailRoom($id)
    {
        $room = Room::find($id);
        return view('Frontend.room-detail')->withRoom($room);
    }
}
