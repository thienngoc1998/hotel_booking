<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }


    public function username()
    {
        return 'email';
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email'=> $request->email,'password' => $request->password]))
        {
            return redirect()->route('frontend.home-hotel');
        }
        else {
            return redirect()->back()->withErrors('Tài khoản hoặc mật khẩu không đúng ');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend.home-hotel');
    }
}
