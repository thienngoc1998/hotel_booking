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
                            <a href="{{route('frontend.list-room')}}" data-animation="animated fadeInUp"
                               class="slider-btn btn-or mar-right-10"><i class="fa fa-book"></i> Xem phòng </a>
                            <a href="{{route('frontend.availability')}}" data-animation="animated fadeInUp"
                               class="slider-btn btn-wt"><i class="fa fa-book"></i> Đặt phòng </a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(giaodien/images/slider/slider2.jpg)">
                        <div class="swiper-content">
                            <div class="slider-logo">
                                <img src="giaodien/images/icons/bed-logo.png" alt="Image">
                            </div>
                            <h3 data-animation="animated fadeInUp">The lap of Luxury</h3>
                            <h1 data-animation="animated fadeInUp">Hotel <span>Hotux</span></h1>
                            <a href="{{route('frontend.list-room')}}" data-animation="animated fadeInUp"
                               class="slider-btn btn-or mar-right-10"><i class="fa fa-book"></i> Xem phòng </a>
                            <a href="{{route('frontend.availability')}}" data-animation="animated fadeInUp"
                               class="slider-btn btn-wt"><i class="fa fa-book"></i> Đặt phòng </a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(giaodien/images/slider/slider3.jpg)">
                        <div class="swiper-content">
                            <div class="slider-logo">
                                <img src="giaodien/images/icons/bed-logo.png" alt="Image">
                            </div>
                            <h3 data-animation="animated fadeInUp">The lap of Luxury</h3>
                            <h1 data-animation="animated fadeInUp">Hotel <span>Hotux</span></h1>
                            <a href="{{route('frontend.list-room')}}" data-animation="animated fadeInUp"
                               class="slider-btn btn-or mar-right-10"><i class="fa fa-book"></i> Xem phòng </a>
                            <a href="{{route('frontend.availability')}}" data-animation="animated fadeInUp"
                               class="slider-btn btn-wt"><i class="fa fa-book"></i> Đặt phòng </a>
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
                <h2>Giới thiệu <span>Chúng tôi</span></h2>
                <p></p>
            </div>
            <div class="about-outer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3 class="mar-bottom-30">Tiện nghi và sang trọng </h3>
                            <p>Là nhóm khách sạn đạt tiêu chuẩn 3 sao trở lên, tọa lạc ở các địa điểm du lịch, nghỉ
                                dưỡng nổi tiếng trên toàn quốc với thiết kế tinh tế cùng phong cách phục vụ chuyên
                                nghiệp nhằm mang đến cho du khách kì nghỉ tiện nghi và thoải mái. </p>

                            <a href="{{route('frontend.about-hotel')}}" class="btn btn-orange mar-top-10">Biết thêm về
                                chúng tôi <i class="fas fa-angle-double-right"></i></a>
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
                <h2>Phòng</h2>
            </div>
            <div class="room-outer">
                <div class="row">
                    @foreach($rooms as $room)
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="room-item">
                                <div class="room-image">
                                    <img src="upload/images/room-list/{{$room->avatar}}" alt="image">
                                </div>
                                <div class="room-content">
                                    <div class="room-title">
                                        <h4>{{$room->name}}</h4>
                                        <p>{{format_price($room->price)}}</p>
                                        <div class="deal-rating">
                                            @if($room->star == 1)
                                                <span class="fa fa-star checked"></span>
                                            @elseif ($room->star == 2)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @elseif ($room->star == 3)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @elseif ($room->star == 4)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @elseif ($room->star == 5)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="room-services mar-bottom-15">
                                        <ul>
                                            <li><i class="fa fa-bed" aria-hidden="true"></i> {{$room->amount_bed}}</li>
                                            <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                        </ul>
                                    </div>
                                    <p>{{$room->description}}</p>
                                    <div class="room-btns mar-top-20">
                                        <a href="{{route('frontend.detail-room',$room->id)}}"
                                           class="btn btn-black mar-right-10">Chi tiết phòng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="section-btn">
                <a href="{{route('frontend.list-room')}}" class="btn btn-black mar-right-10"> Xem tất cả <i
                        class="fas fa-angle-double-right"></i></a>
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
                        <h2 class="white mar-bottom-25">
                            KHÁM PHÁ MỘT KHÁCH SẠN <span>ĐẲNG CẤP</span></h2>
                        <p>Là nhóm khách sạn đạt tiêu chuẩn 3 sao trở lên, tọa lạc ở các địa điểm du lịch, nghỉ dưỡng
                            nổi tiếng trên toàn quốc với thiết kế tinh tế cùng phong cách phục vụ chuyên nghiệp nhằm
                            mang đến cho du khách kì nghỉ tiện nghi và thoải mái. </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="call-button">
                        <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                data-channel="vimeo"><i class="fa fa-play"></i></button>
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
                <h2>Dich vụ </h2>
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
                <h2> Bình luận </h2>
            </div>
            <div class="review-slider">
                @foreach($comments as $comment)
                    <div class="slider-item">
                        <div class="slider-image">
                            <img src="upload/images/user/{{$comment->user->avatar}}" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>{{$comment->content}}</p>
                            <h4>{{$comment->user->name}}</h4>
                        </div>
                        <div class="slider-quote">
                            <img src="upload/images/icon/quote.png" alt="Image">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Reviews Ends -->

    <!-- News Starts -->
    <section class="news">
        <div class="container">
            <div class="section-title">
                <h2>Tin <span>Tức </span></h2>
            </div>
            <div class="news-outer">
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="news-item">
                                <div class="news-image">
                                    <img src="upload/images/article/{{$article->img}}" alt="image">
                                </div>
                                <div class="news-content">
                                    <p class="date mar-bottom-5">{{$article->created_at->format('d/m/Y')}}</p>
                                    <h4>
                                        <a href="{{route('frontend.article-detail',$article->id)}}">{{$article->title}}</a>
                                    </h4>
                                    <div class="room-services mar-bottom-10">
                                        <ul>
                                        </ul>
                                    </div>
                                    <p>{{$article->desc}}</p>
                                    <a href="{{route('frontend.article-detail',$article->id)}}">Đọc thêm <i
                                            class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="section-btn">
                <a href="{{route('frontend.article')}}" class="btn btn-black mar-right-10">Xem tất cả <i
                        class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </section>
    <!-- News Ends -->

    <!-- Newsletter Starts -->
    <section class="newsletter">
        <div class="container">
            <div class="section-title title-white">
                <h2>Đăng ký để nhận thông báo <span>mới nhất</span></h2>
            </div>
            <div class="newsletter-form">
                <form>
                    <input type="email" placeholder="example@example.com">
                    <a href="javascript:void(0)" class="btn btn-orange"> Đăng ký </a>
                </form>
            </div>
        </div>
    </section>
    <!-- Newsletter Ends -->
@endsection
