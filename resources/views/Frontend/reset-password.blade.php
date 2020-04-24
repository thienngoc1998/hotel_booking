@extends('Frontend.layout.index')

@section('title')
    Quên mật khẩu
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Đăng ký</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quên mật khẩu</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="forgot-password">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="fp-content">
                        @include('includes.messages')
                        <br>

                        <p class="bold">Please provide your email address. Click in the provided link to retrieve you account.</p>
                        <form action="{{route('frontend.reset-pass-user')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label>Enter Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Điền email của bạn ">
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-orange">Reset Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
