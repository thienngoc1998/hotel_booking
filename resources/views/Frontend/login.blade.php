@extends('Frontend.layout.index')

@section('title')
    Đăng nhập
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Đăng nhập </h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đăng nhập </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <div class="login-content">
        @include('includes.messages')
        <br>

        <div class="login-image">
            <img src="images/logo-black.png" alt="image">
        </div>
        <h3>Hello!Đăng nhập bằng tài khoản của bạn</h3>
        <form method="post" action="{{route('login-user')}}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" placeholder="Điền email của bạn">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Điền mật khẩu">
            </div>
            <div class="form-group form-checkbox">
                <input type="checkbox"> Remember Me
                <a href="#">Quên mật khẩu?</a>
            </div>

        <div class="form-btn">
            <button type="submit" class="btn btn-orange">Đăng nhập </button>
            <p>Nếu bạn chưa có tài khoản ?<a href="{{route('getFormRegister')}}"> Nhấn vào đây</a></p>
        </div>
        </form>
        <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div>
@endsection
