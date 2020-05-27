<div class="dashboard-sticky-nav">
    <div class="content-left pull-left">
        <a href="dashboard.html"><img src="giaodien/images/logo.png" alt="logo"></a>
    </div>
    <div class="content-right pull-right">
        <div class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <div class="profile-sec">
                    <div class="dash-image">
                        <img src="giaodien/images/comment.jpg" alt="">
                    </div>
                    <div class="dash-content">
                        <h4>{{auth()->user()->name }}</h4>
                        <span>Admin</span>
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu" style="width: 100%;">
                <li><a href="{{route('admin.profile',Auth::user()->id)}}"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="{{route('admin.profile',Auth::user()->id)}}"><i class="fas fa-lock"></i>Thay đổi mật khẩu</a></li>
                <li><a href="{{route('admin.logout')}}"><i class="fas fa-power-off"></i>Đăng xuất</a></li>
            </ul>
        </div>
    </div>
</div>
