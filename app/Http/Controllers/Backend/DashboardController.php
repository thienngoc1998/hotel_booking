<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Mail\ResetPasswordMail;
use App\Models\Book;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public  $model;
    public function index()
    {
        return view('Backend.dashboard');
    }
    public function makeMode()
    {
         $this->model = Room::orderBy('id','desc');
         return $this;
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

    public function getResultSearch($params)
    {
        if (count($params) == 0)
        {
            return Room::all();
        }
        else {
            $query = Room::query();
            if (isset($params['categories']))
            {
                $categories = $params['categories'];
                $query->whereHas('category', function ($query) use ($categories) {
                    $query->whereIn('id',($categories));
                });
            }
            if (isset($params['star']))
            {
                $query->whereIn('star',$params['star']);
            }
            if (isset($params['sort']))
            {
                switch ($params['sort'])
                {
                    case "0" : $query->orderBy('price','desc');break;
                    case "1" : $query->orderBy('name','desc');break;
                    case "2" : $query->orderBy('star','desc');break;
                }
            }

            return $query->orderBy('id','desc')->paginate(5);
        }
    }

//    public function withCategory($category)
//    {
//        if (!empty($company)) {
//            $this->model
//        }
//
//        return $this;
//    }


    public function getListRoomRes(Request $request)
    {
        $rooms = $this->getResultSearch($request->all());
        $returnHTML = view('Frontend.room-response')->withRooms($rooms)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    public function divRoom()
    {

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

    public function getFormReset()
    {
        return view('Frontend.reset-password');
    }

    public function resetPasswordUser(Request $request)
    {
        $password = str_random(8);
        $user = User::whereEmail($request->email)->update(['password' => Hash::make($password)]);
        if ($user)
        {
            Mail::to($request->email)->send(new ResetPasswordMail($password));
        }
        return redirect()->back()->withFlassSuccess('Vui lòng kiểm tra email ');
    }

    public function getAvailability()
    {
        return view('Frontend.availability');
    }

    public function selectRoom(Request $request)
    {
        if (!$request->session()->has('booking'))
        {
            Session::put('booking',$request->all());
        }
        $availability = Session::get('booking');
        $rooms = Room::all()->sortByDesc('id');
        return view('Frontend.select-room')->withAvailabilit($availability)->withRooms($rooms);
    }

    public function bookingRoom($id)
    {
        if (Session::has('booking'))
        {
            Session::put('booking.id_room',$id);
        }
        $availability = Session::get('booking');
        return view('Frontend.booking')->withRoom(Room::findOrFail($id))->withAvailabilit($availability);
    }

    public function confirmBookingRoom(Request $request)
    {
        $availability = Session::get('booking');
        $book = Book::create(['username'=> $request->name,
            'email'=> $request->name,
            'phone'=> $request->phone,
            'note'=> $request->note,
            'guest'=> $availability['guests'],
            'nights' => $availability['night'],
            'id_room' => $availability['id_room'],
            'check_in' => $availability['check-in'],
            'check_out' => $availability['check-out'],
        ]);
        Session::forget('booking');
        return view('Frontend.confirm')->withBook($book);
    }
}
