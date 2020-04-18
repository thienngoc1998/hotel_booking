@extends('Frontend.layout.index')

@section('title')
    Đăng ký
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Đăng ký</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <div class="login-content">
        @include('includes.messages')
        <br>
        <div class="login-image">
            <img src="giaodien/images/logo-black.png" alt="image">
        </div>
        <h3>Awesome! Hãy tạo tài khoản</h3>
        <form action="{{route('user-register')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Nhập họ tên">
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Nhập địa chỉ email">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu">
            </div>
            <div class="form-btn">
                <button type="submit" class="btn btn-orange">Đăng ký</button>
            </div>
        </form>
        <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa-bed fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div>

@endsection
