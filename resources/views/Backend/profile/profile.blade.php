@extends('Backend.index')
@section('title')
    Thông tin cá nhân
@endsection
@section('content')

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
                            </div>
                            <button class="button" type="submit">Lưu</button>
                           </form>
                        </div>
                    </div>
                </div>

                <!-- Change Password -->

@endsection
