<!-- header start -->
<header class="main_header_area">
    <div class="header-content">
        <div class="container">
            <div class="links links-left">
                <ul>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>syquangbn@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 0977-222-333</a></li>
                </ul>
            </div>
            <div class="links links-right pull-right">
                <ul>
                    @if(Auth::guest())
                        <li><a href="home/login"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a></li>
                        <li><a href="{{route('getFormRegister')}}" ><i class="fa fa-pen" aria-hidden="true"></i>  Đăng ký</a></li>
                    @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->name}}
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="background-color: #343a40;">
                                <li><a href="#">Menu</a></li>
                                <li><a href="{{route('user.info-user',Auth::user()->id)}}"> Tài khoản</a></li>
                                <li><a href="{{route('user.info-booking',Auth::user()->id)}}"> Thông tin đặt phòng</a></li>
                                <li><a href="{{route('home-logout')}}"> Đăng xuất </a></li>
                            </ul>
                        </li>
                    @endif
                    <li>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Navigation Bar -->
    <div class="header_menu affix-top">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('frontend.home-hotel')}}">
                        <img alt="logo" src="giaodien/images/logo.png" class="logo-white">
                        <img alt="logo1" src="giaodien/images/logo-black.png" class="logo-black">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">
                        <li class="submenu dropdown">
                            <a href="{{route('frontend.list-room')}}" >Phòng</a>
                        </li>
                        <li class="submenu dropdown">
                            <a href="{{route('frontend.article')}}" > Bài viết </a>
                        </li>
                        <li class="submenu dropdown">
                            <a href="{{route('frontend.about-hotel')}}" > Liên hệ </a>
                        </li>
                    </ul>
                    <div class="nav-btn">
                        <a href="{{route('frontend.availability')}}" class="btn btn-orange">{{__('step.booking-now')}}</a>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            <div id="slicknav-mobile"></div>
        </nav>
    </div>
    <!-- Navigation Bar Ends -->
</header>
<!-- header Ends -->
