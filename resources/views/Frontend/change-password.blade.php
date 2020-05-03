@extends('Frontend.layout.index')

@section('title')
    Đổi mật khẩu
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Đổi mật khẩu </h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đổi mật khẩu </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="room-list">
        <div class="container">
            <div class="row">
                <div class="col-md-9 pull-right">
                    @include('includes.messages')
                    <div class="list-content">
                        <div class="list-grid">
                            <div class="panel panel-default">
                                <div class="panel-heading"> Đổi mật khẩu </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">

                                            <form action="{{route('user.change-password-user',$user->id)}}" method="post">
                                                @csrf
                                            <div class="form-group">
                                                <label for="exampleInputPassword1"> Mật khẩu cũ: </label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" name="password-old">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword2">Mật khẩu mới: </label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" name="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword3">Xác nhận mật khẩu: </label>
                                                <input type="password" class="form-control" id="exampleInputPassword3" name="password_confirmation">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Đổi mật khẩu </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sidebar pull-left">
                    <div class="dashboard-nav">
                        <div class="dashboard-nav-inner">
                            <ul>
                                <li ><a href="{{route('user.create',$user->id)}}"><i class="fas fa-dashboard"></i>Thay đổi thông tin  </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
