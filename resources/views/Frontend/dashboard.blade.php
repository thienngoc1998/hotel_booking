@extends('Frontend.layout.index')

@section('title')
    Trang chủ
@endsection
@section('content')
    <!-- Banner start -->
    <section class="banner">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(giaodien/images/slider/slider4.jpg)">
                        <div class="swiper-content">
                            <div class="slider-logo">
                                <img src="giaodien/images/icons/bed-logo.png" alt="Image">
                            </div>
                            <h3 data-animation="animated fadeInUp">The lap of Luxury</h3>
                            <h1 data-animation="animated fadeInUp">Hotel <span>Hotux</span></h1>
                            <a href="{{route('frontend.list-room')}}" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10"><i class="fa fa-book"></i> Xem phòng </a>
                            <a href="{{route('frontend.availability')}}" data-animation="animated fadeInUp" class="slider-btn btn-wt"><i class="fa fa-book"></i>  Đặt phòng </a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(giaodien/images/slider/slider2.jpg)">
                        <div class="swiper-content">
                            <div class="slider-logo">
                                <img src="giaodien/images/icons/bed-logo.png" alt="Image">
                            </div>
                            <h3 data-animation="animated fadeInUp">The lap of Luxury</h3>
                            <h1 data-animation="animated fadeInUp">Hotel <span>Hotux</span></h1>
                            <a href="{{route('frontend.list-room')}}" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10"><i class="fa fa-book"></i> Xem phòng </a>
                            <a href="{{route('frontend.availability')}}" data-animation="animated fadeInUp" class="slider-btn btn-wt"><i class="fa fa-book"></i>  Đặt phòng </a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(giaodien/images/slider/slider3.jpg)">
                        <div class="swiper-content">
                            <div class="slider-logo">
                                <img src="giaodien/images/icons/bed-logo.png" alt="Image">
                            </div>
                            <h3 data-animation="animated fadeInUp">The lap of Luxury</h3>
                            <h1 data-animation="animated fadeInUp">Hotel <span>Hotux</span></h1>
                            <a href="{{route('frontend.list-room')}}" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10"><i class="fa fa-book"></i> Xem phòng </a>
                            <a href="{{route('frontend.availability')}}" data-animation="animated fadeInUp" class="slider-btn btn-wt"><i class="fa fa-book"></i>  Đặt phòng </a>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <div class="overlay"></div>
        </div>

{{--        <div class="banner-form">--}}
{{--            <div class="container">--}}
{{--                <div class="form-content">--}}
{{--                    <div class="table-item">--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="date-range-inner-wrapper">--}}
{{--                                <input id="date-range2" class="form-control" value="Check In">--}}
{{--                                <span class="input-group-addon">--}}
{{--                                    <i class="fa fa-calendar" aria-hidden="true"></i>--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="table-item">--}}
{{--                        <div class="form-group form-icon">--}}
{{--                            <div class="date-range-inner-wrapper">--}}
{{--                                <input id="date-range3" class="form-control" value="Check Out">--}}
{{--                                <span class="input-group-addon">--}}
{{--                                    <i class="fa fa-calendar" aria-hidden="true"></i>--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="table-item">--}}
{{--                        <div class="form-group form-icon">--}}
{{--                            <select>--}}
{{--                                <option value="0">Guest</option>--}}
{{--                                <option value="1">0</option>--}}
{{--                                <option value="2">1</option>--}}
{{--                                <option value="3">2</option>--}}
{{--                                <option value="4">3</option>--}}
{{--                                <option value="5">4</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="table-item">--}}
{{--                        <div class="form-group form-icon">--}}
{{--                            <select>--}}
{{--                                <option value="0">Nights</option>--}}
{{--                                <option value="1">0</option>--}}
{{--                                <option value="2">1</option>--}}
{{--                                <option value="3">2</option>--}}
{{--                                <option value="4">3</option>--}}
{{--                                <option value="5">4</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="table-item">--}}
{{--                        <div class="form-btn">--}}
{{--                            <a class="btn btn-orange">Check Availability</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
    <!-- Banner Ends -->

    <!-- About Us Start -->
    <section class="about-us">
        <div class="container">
            <div class="section-title">
                <h2>About <span>Us</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="about-outer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3 class="mar-bottom-30">Finest and Luxurious Hotel in the Town</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius iaculis gravida. Nunc vel maximus libero. Quisque ligula nisi, hendrerit et scelerisque et, scelerisque vitae magna. Integer sollicitudin, ex auctor iaculis tempor, mauris odio accumsan odio.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius iaculis gravida. Nunc vel maximus libero. Quisque ligula nisi, hendrerit et scelerisque et, scelerisque vitae magna. Integer sollicitudin, ex auctor iaculis tempor, mauris odio accumsan odio.</p>
                            <a class="btn btn-orange mar-top-10">KNOW MORE ABOUT US <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image">
                            <div class="image-box">
                                <div class="image-1 abt-image">
                                    <img src="giaodien/images/about1.jpg" alt="image">
                                </div>
                                <div class="image-2 abt-image">
                                    <img src="giaodien/images/about2.jpg" alt="image">
                                </div>
                            </div>
                            <div class="image-box">
                                <div class="image-3 abt-image">
                                    <img src="giaodien/images/about3.jpg" alt="image">
                                </div>
                                <div class="image-4 abt-image">
                                    <img src="giaodien/images/about4.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Ends -->

    <!-- Rooms starts -->
    <section class="rooms">
        <div class="container">
            <div class="section-title">
                <h2>Explore <span>Rooms</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="room-outer">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="room-item">
                            <div class="room-image">
                                <img src="giaodien/images/room1.jpg" alt="image">
                            </div>
                            <div class="room-content">
                                <div class="room-title">
                                    <h4>Super Deluxe</h4>
                                    <p>$1200/Night</p>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                                <div class="room-services mar-bottom-15">
                                    <ul>
                                        <li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
                                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                <div class="room-btns mar-top-20">
                                    <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                    <a href="#" class="btn btn-orange">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="room-item">
                            <div class="room-image">
                                <img src="giaodien/images/room2.jpg" alt="image">
                            </div>
                            <div class="room-content">
                                <div class="room-title">
                                    <h4>Junior Suite</h4>
                                    <p>$1200/Night</p>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                                <div class="room-services mar-bottom-15">
                                    <ul>
                                        <li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
                                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                <div class="room-btns mar-top-20">
                                    <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                    <a href="#" class="btn btn-orange">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="room-item">
                            <div class="room-image">
                                <img src="giaodien/images/room3.jpg" alt="image">
                            </div>
                            <div class="room-content">
                                <div class="room-title">
                                    <h4>Executive Suite</h4>
                                    <p>$1200/Night</p>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                                <div class="room-services mar-bottom-15">
                                    <ul>
                                        <li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
                                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                <div class="room-btns mar-top-20">
                                    <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                    <a href="#" class="btn btn-orange">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-btn">
                <a href="#" class="btn btn-black mar-right-10">EXPLORE ALL ROOMS <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </section>
    <!-- Room Ends -->

    <!-- Call To Action Starts -->
    <section class="call-to-action">
        <div class="container-fluid">
            <div class="row display-flex">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="call-content pad-left-30">
                        <h2 class="white mar-bottom-25">Discover a brand <span>luxurious</span> hotel</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor, eros nec porttitor viverra, felis libero luctus nisi, non volutpat purus felis ut erat ipsum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor, eros nec porttitor viverra, felis libero luctus nisi, non volutpat purus felis ut erat ipsum.</p>
                        <a href="#" class="btn btn-orange mar-top-20">READ MORE <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="call-button">
                        <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo"><i class="fa fa-play"></i></button>
                    </div>
                    <div class="video-figure"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Ends -->

    <!-- Services Starts -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Explore <span>Services</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="service-outer">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="giaodien/images/service1.jpg" alt="Image">
                            </div>
                            <div class="service-content">
                                <h4><a href="service-detail.html">Restaurant</a></h4>
                                <p>Breakfast and Dinner</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="giaodien/images/service2.jpg" alt="Image">
                            </div>
                            <div class="service-content">
                                <h4><a href="service-detail.html">Massage</a></h4>
                                <p>Opens Daily</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="giaodien/images/service3.jpg" alt="Image">
                            </div>
                            <div class="service-content">
                                <h4><a href="service-detail.html">Conference Room</a></h4>
                                <p>Air Conditioning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Ends -->

    <!-- Reviews Starts -->
    <section class="reviews">
        <div class="container">
            <div class="section-title title-white">
                <h2>Explore <span>Reviews</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="review-slider">
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="giaodien/images/review1.jpg" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                        <h4>Micheal Clordy</h4>
                        <span>Germany</span>
                    </div>
                    <div class="slider-quote">
                        <img src="giaodien/images/icons/quote.png" alt="Image">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="giaodien/images/review2.jpg" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                        <h4>Ketty Perry</h4>
                        <span>Australia</span>
                    </div>
                    <div class="slider-quote">
                        <img src="giaodien/images/icons/quote.png" alt="Image">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="giaodien/images/review1.jpg" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                        <h4>Micheal Clordy</h4>
                        <span>Germany</span>
                    </div>
                    <div class="slider-quote">
                        <img src="giaodien/images/icons/quote.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews Ends -->

    <!-- News Starts -->
    <section class="news">
        <div class="container">
            <div class="section-title">
                <h2>Latest <span>News</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="news-outer">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="giaodien/images/news1.jpg" alt="image">
                            </div>
                            <div class="news-content">
                                <p class="date mar-bottom-5">16 DECEMBER 2019</p>
                                <h4><a href="single-right.html">Why choose Hotux Hotel to travel this summer</a></h4>
                                <div class="room-services mar-bottom-10">
                                    <ul>
                                        <li><a href="single-right.html"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a></li>
                                        <li><a href="single-right.html"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                <a href="single-left.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="giaodien/images/news2.jpg" alt="image">
                            </div>
                            <div class="news-content">
                                <p class="date mar-bottom-5">16 DECEMBER 2019</p>
                                <h4><a href="single-right.html">Why choose Hotux Hotel to travel this summer</a></h4>
                                <div class="room-services mar-bottom-10">
                                    <ul>
                                        <li><a href="single-right.html"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a></li>
                                        <li><a href="single-right.html"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                <a href="single-left.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="giaodien/images/news3.jpg" alt="image">
                            </div>
                            <div class="news-content">
                                <p class="date mar-bottom-5">16 DECEMBER 2019</p>
                                <h4><a href="single-right.html">Why choose Hotux Hotel to travel this summer</a></h4>
                                <div class="room-services mar-bottom-10">
                                    <ul>
                                        <li><a href="single-right.html"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a></li>
                                        <li><a href="single-right.html"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                <a href="single-left.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-btn">
                <a href="#" class="btn btn-black mar-right-10">EXPLORE ALL <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </section>
    <!-- News Ends -->

    <!-- Newsletter Starts -->
    <section class="newsletter">
        <div class="container">
            <div class="section-title title-white">
                <h2>Subscribe to our <span>Newsletter</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="newsletter-form">
                <form>
                    <input type="email" placeholder="Enter your email">
                    <a href="#" class="btn btn-orange">SIGN UP</a>
                </form>
            </div>
        </div>
    </section>
    <!-- Newsletter Ends -->
@endsection
