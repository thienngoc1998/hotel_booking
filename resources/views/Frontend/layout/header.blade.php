<!-- header start -->
<header class="main_header_area">
    <div class="header-content">
        <div class="container">
            <div class="links links-left">
                <ul>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> info@hotux.com.np</a></li>
                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 977-222-333-444</a></li>
                    <li>
                        <select>
                            <option>Eng</option>
                            <option>Fra</option>
                            <option>Esp</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="links links-right pull-right">
                <ul>
                    @if(\Illuminate\Support\Facades\Auth::check())
                      <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
                    @else
                    <li><a href="home/login"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a></li>
                    <li><a href="{{route('getFormRegister')}}" ><i class="fa fa-pen" aria-hidden="true"></i>  Đăng ký</a></li>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li class="submenu dropdown">
                                    <a href="service.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-detail.html">Service Detail</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="aboutus.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="aboutus.html">About One</a></li>
                                        <li><a href="aboutus1.html">About Two</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery.html">Gallery 1</a></li>
                                        <li><a href="gallery1.html">Gallery 2</a></li>
                                        <li><a href="gallery2.html">Gallery Masonry</a></li>
                                        <li><a href="gallery3.html">Gallery Lightbox</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="events.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="events.html">Events One</a></li>
                                        <li><a href="events1.html">Events Two</a></li>
                                        <li><a href="events-detail.html">Events Detail</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="contact.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact.html">Contact One</a></li>
                                        <li><a href="contact1.html">Contact Two</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="404.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Error<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="404.html">Error Page 1</a></li>
                                        <li><a href="404-1.html">Error Page 1</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="comingsoon.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comming Soon<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="comingsoon.html">Coming Soon 1</a></li>
                                        <li><a href="comingsoon-1.html">Coming Soon 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="testimonial.html">Testimonials</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="terms.html">Terms and Conditions</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="restaurant.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restaurant<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="restaurant.html">Home</a></li>
                                <li><a href="restaurant-about.html">About Us</a></li>
                                <li><a href="restaurant-menu.html">Menu</a></li>
                                <li><a href="restaurant-reserve.html">Reservation</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop List</a></li>
                                <li><a href="shop-detail.html">Shop Single</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Account</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="blog-full.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-full.html">Blog Fullwidth</a></li>
                                <li><a href="blog-left.html">Blog Left</a></li>
                                <li><a href="blog-right.html">Blog Right</a></li>
                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="single-full.html">Blog Single</a></li>
                                <li><a href="single-left.html">Single Left</a></li>
                                <li><a href="single-right.html">Single Right</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="dashboard-my-profile.html">Dashboard Profile</a></li>
                                <li><a href="dashboard-booking.html">Dashboard Bookings</a></li>
                                <li><a href="dashboard-history.html">Dashboard History</a></li>
                                <li><a href="dashboard-list.html">Dashboard Listing</a></li>
                                <li><a href="dashboard-addtour.html">Dashboard Add Tour</a></li>
                                <li><a href="dashboard-reviews.html">Dashboard Reviews</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="cart.html" class="mt_cart"><i class="fa fa-shopping-cart"></i><span class="number-cart">1</span></a>
                        </li>
                    </ul>
                    <div class="nav-btn">
                        <a href="{{route('frontend.availability')}}" class="btn btn-orange">Book Now</a>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            <div id="slicknav-mobile"></div>
        </nav>
    </div>
    <!-- Navigation Bar Ends -->
</header>
<!-- header Ends -->
