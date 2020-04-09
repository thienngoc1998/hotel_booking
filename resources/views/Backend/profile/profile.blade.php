@extends('Backend.index')
@section('title')
    Thông tin cá nhân
@endsection
@section('content')
    <div class="dashboard-content">
        <div class="dashboard-form">
            <div class="row">

                <!-- Profile -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                    <div class="dashboard-list-box">
                        <h4 class="gray">Thông tin Admin</h4>
                        <div class="dashboard-list-box-static">
                           <form action="{{route('admin.changeprofile',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                            <!-- Avatar -->
                            <div class="edit-profile-photo">
                                <img src="upload/admin/{{Auth::user()->avatar}}" alt="admin" class="img-circle">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Thay đổi ảnh </span>
                                        <input type="file" class="upload" name="avatar">
                                    </div>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="my-profile">

                                <label>Your Name *</label>
                                <input value="{{Auth::user()->name}}" type="text" name="name">

                                <label>Phone Number *</label>
                                <input value="{{Auth::user()->phone}}" type="text" name="phone">

                                <label>Email Address *</label>
                                <input value="{{Auth::user()->email}}" type="text" name="email">

                                <label class="twitter-input"><i class="fab fa-twitter"></i> Twitter</label>
                                <input placeholder="https://www.twitter.com/" type="text" name="twitter">

                                <label class="fb-input"><i class="fab fa-facebook"></i> Facebook</label>
                                <input placeholder="https://www.facebook.com/" type="text" name="facebook">

                            </div>

                            <button class="button" type="submit">Lưu</button>
                           </form>
                        </div>
                    </div>
                </div>

                <!-- Change Password -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                    <div class="dashboard-list-box margin-top-0">
                        <h4 class="gray">Thay đổi mật khẩu</h4>
                        <div class="dashboard-list-box-static">
                            <form action="{{route('admin.changepassword',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Change Password -->
                            <div class="my-profile">
                                <label class="margin-top-0">Mật khẩu cũ : </label>
                                <input type="password" name="old_password">

                                <label>Mật khẩu mới: *</label>
                                <input type="password" name="password">

                                <label>Nhập lại mật khẩu mới: *</label>
                                <input type="password" name="password_confirmation">

                            </div>
                            <button class="button" type="submit">Thay đổi mật khẩu </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
