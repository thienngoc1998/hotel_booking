@extends('Backend.index')
@section('title')
    Đổi mật khẩu
@endsection
@section('content')

    <div class="dashboard-form">
        <div class="row">

            <!-- Profile -->
            <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                <div class="dashboard-list-box">
                    <h4 class="gray">Đổi mật khẩu</h4>
                    <div class="dashboard-list-box-static">
                        <form action="" method="POST">
                        @csrf
                            <!-- Details -->
                            <div class="my-profile">
                                <label>Mật khẩu cũ: *</label>
                                <input  type="password" name="password-old">

                                <label>Mật khẩu mới: *</label>
                                <input type="password" name="password">

                                <label>Xác nhận mật khẩu: *</label>
                                <input  type="password" name="password_confirmation">
                            </div>
                            <button class="button" type="submit">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Change Password -->

@endsection
