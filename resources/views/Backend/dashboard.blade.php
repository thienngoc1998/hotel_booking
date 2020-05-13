@extends('Backend.index')
@section('title')
    Trang tổng quan
@endsection
@section('content')
        <div class="row">

            <!-- Item -->
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="dashboard-stat color-1">
                    <div class="dashboard-stat-content"><h4>{{$room}}</h4> <span>Số lượng Phòng </span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                    <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="dashboard-stat color-2">
                    <div class="dashboard-stat-content"><h4>{{$service}}</h4> <span>Số lượng dịch vụ </span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
                    <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                </div>
            </div>


            <!-- Item -->
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="dashboard-stat color-3">
                    <div class="dashboard-stat-content"><h4>{{$user}}</h4> <span>Số lượng người dùng </span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
                    <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="dashboard-stat color-4">
                    <div class="dashboard-stat-content"><h4>{{$comment}}</h4> <span>Số bình luận </span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
                    <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 traffic">
                <div class="dashboard-list-box">
                    <h4 class="gray">Đặt phòng </h4>
                    <div class="table-box">
                        <table class="basic-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên </th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Ngày đến </th>
                                <th>Ngày đi </th>
                                <th>Số người </th>
                                <th>Đêm </th>
                                <th>Phòng  </th>
                                <th> Tổng tiền </th>
                                <th>Ngày taọ </th>
                                <th>Trạng thái </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->username}}</td>
                                    <td>{{$book->email}}</td>
                                    <td>{{$book->phone}}</td>
                                    <td>{{$book->check_in}}</td>
                                    <td>{{$book->check_out}}</td>
                                    <td>{{$book->guest}}</td>
                                    <td>{{$book->nights}}</td>
                                    <td>{{$book->room->name}}</td>
                                    <td>{{$book->total}}</td>
                                    <td>{{$book->created_at->format('d/m/Y')}}</td>
                                    <td>
                                        @if($book->status == 0)
                                            <span class="paid t-box"> Đang chờ </span>
                                        @elseif($book->status == 1)
                                            <span class="unpaid t-box"> Nhận phòng </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Recent Activity -->
            <div class="col-lg-7 col-md-12 col-xs-12 traffic">
                <div class="dashboard-list-box with-icons margin-top-20">
                    <h4 class="gray">Bình luận mới nhất </h4>
                    <ul>
                        @foreach($comments as $item)
                        <li>
                            <i class="list-box-icon sl sl-icon-layers"></i> {{$item->user->name}}<strong> đã bình luận vào </strong> {{$item->room->name}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12 traffic">
                <div class="dashboard-list-box margin-top-20 user-list">
                    <h4 class="gray">Danh sách người dùng </h4>
                    <ul>
                        @foreach($users as $item)
                        <li>
                            <div class="user-list-item">
                                <div class="user-list-image">
                                    <img src="upload/images/user/{{$item->avatar}}" alt="anh">
                                </div>
                                <div class="user-list-content">
                                    <h4>{{$item->name}}</h4>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
@endsection
