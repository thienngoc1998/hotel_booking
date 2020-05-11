<?php

namespace App\Http\Controllers\Backend;

use App\Article;
use App\Http\Requests\ChangePassUserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\ResetPasswordMail;
use App\Models\Book;
use App\Models\Review;
use App\Models\Room;
use App\Models\User;
use App\Star;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
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
            return Room::orderBy('id','desc')->paginate(5);
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
        return response()->json(array('success' => true, 'html'=> $returnHTML));
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
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
        $comments = Review::where('id_room',$id)->where('active','=',1)->orderBy('id','desc')->get();
        return view('Frontend.room-detail')->withRoom($room)->withComments($comments);
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

    public function getInfoUser($id)
    {
        return view('Frontend.user')->withUser(User::findOrFail($id));
    }
    public function getFormChangeInfoUser($id)
    {
        return view('Frontend.change-info')->withUser(User::findOrFail($id));
    }

    public function changeInfoUser(UpdateUserRequest $request, $id)
    {
        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $file->move('upload/images/user', $file->getClientOriginalName());
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'avatar' => $file->getClientOriginalName(),
            ]);
        } else
        {
            User::find($id)->update($request->only('name', 'email', 'phone'));
        }
        return redirect()->back()->withFlassSuccess('Thay đổi thông tin thành công !!!');
    }

    public function getFormChangePassword($id)
    {
        return view('Frontend.change-password')->withUser(User::findOrFail($id));
    }

    public function reviewRoom(Request $request,$id)
    {
       $room = Room::findOrFail($id);
       $value = floor(intval($request->value + $room->star)/2);
       $room->update([
           'star' => $value
       ]);
       echo ' Đánh giá thành công !!!';
    }

    public function commentRoom(Request $request, $id)
    {
        $comment = Review::create([
            'content' =>$request->value,
            'id_user' => $request->userId,
            'id_room' => $id,
        ]);
        $returnHTML = view('Frontend.review-response')->withComment($comment)->render();
        return response()->json(array('message' => ' Bình luận thành công !!!', 'html'=> $returnHTML),200);

    }

    public function getArticles()
    {
        $articles = Article::orderBy('id','desc')->paginate(6);
        return view('Frontend.article-list')->withArticles($articles);
    }

    public function getDetailArticle($id)
    {
        $article = Article::findOrFail($id);
        return view('Frontend.detail-article')->withArticle($article);
    }

    public function changePasswordUser(ChangePassUserRequest $request,$id)
    {
        User::find($id)->update([
           'password' => Hash::make($request->password)
        ]);
        Auth::logout();
        return redirect()->route('getFormLogin');
    }

    public function getAboutHotel()
    {
        return view('Frontend.about');
    }
}
