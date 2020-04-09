<div class="dashboard-nav">
    <div class="dashboard-nav-inner">
        <ul>
            <li ><a href="{{route('admin.dashboard')}}"><i class="fas fa-dashboard"></i>Trang tổng quan </a></li>
            <li><a href="{{route('admin.profile',Auth::user()->id)}}"><i class="fas fa-r-project"></i> Thông tin cá nhân</a></li>
            <li><a href="{{route('admin.categories')}}"><i class="sl sl-icon-plus"></i> Loại phòng</a></li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Tình trạng phòng</a>
                <ul>
                    <li><a href="dashboard-list.html">Danh sách <span class="nav-tag green">6</span></a></li>
                    <li><a href="dashboard-list.html">Đang sử dụng <span class="nav-tag yellow">1</span></a></li>
                    <li><a href="dashboard-list.html">Hết hạn <span class="nav-tag red">2</span></a></li>
                </ul>
            </li>
            <li><a href="dashboard-booking.html"><i class="sl sl-icon-list"></i> Danh sách Booking </a></li>
            <li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Bình luận </a></li>
            <li><a href="{{route('admin.logout')}}"><i class="sl sl-icon-power"></i> Đăng xuất</a></li>
        </ul>
    </div>
</div>
