<div class="dashboard-nav">
    <div class="dashboard-nav-inner">
        <ul>
            <li ><a href="{{route('admin.dashboard')}}"><i class="fas fa-dashboard"></i>Trang tổng quan </a></li>
            <li><a href="{{route('admin.profile',Auth::user()->id)}}"><i class="fas fa-r-project"></i> Thông tin cá nhân</a></li>
            <li><a href="{{route('admin.categories')}}"><i class="sl sl-icon-plus"></i> Loại phòng</a></li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Phòng</a>
                <ul>
                    <li><a href="{{route('admin.rooms')}}">Danh sách </a></li>
                </ul>
            </li>
            <li><a href="{{route('admin.service')}}"><i class="sl sl-icon-list"></i> Dịch vụ </a></li>
            <li><a href="{{route('admin.users')}}"><i class="sl sl-icon-list"></i> Nguời dùng </a></li>
            <li><a href="{{route('admin.booking')}}"><i class="sl sl-icon-list"></i> Đặt phòng </a></li>
            <li><a href="{{route('admin.article')}}"><i class="sl sl-icon-list"></i>Tin tức </a></li>
            <li><a href="{{route('admin.review')}}"><i class="sl sl-icon-star"></i> Bình luận </a></li>
            <li><a href="{{route('admin.logout')}}"><i class="sl sl-icon-power"></i> Đăng xuất</a></li>
        </ul>
    </div>
</div>
