@extends('Frontend.layout.index')

@section('title')
    Thông tin đặt phòng
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Thông tin đặt phòng</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thông tin đặt phòng</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="room-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pull-right">
                    @include('includes.messages')
                    <div class="list-content" style="margin-top: 20px;">
                        <div class="list-grid">
                            <div class="panel panel-default">

                                <div class="panel-heading"> Thông tin đặt phòng</div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ Tên </th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Ngày đến </th>
                                            <th>Ngày đi </th>
                                            <th>Số người </th>
                                            <th>Đêm </th>
                                            <th>Phòng  </th>
                                            <th> Tổng tiền </th>
                                            <th>Ngày taọ </th>
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
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
