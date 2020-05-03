@extends('Frontend.layout.index')

@section('title')
    Chi tiết phòng
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Chi tiết phòng</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('frontend.home-hotel')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết phòng</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="detail-slider">
                        <div class="slider-1 slider-for slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="">Previous</button>
                            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 6750px;" role="listbox"><div class="detail-slider-item slick-slide" data-slick-index="0" aria-hidden="true" style="width: 750px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide10">
                                        <img src="giaodien/images/detail-slider/slider1.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 750px; position: relative; left: -750px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide11">
                                        <img src="giaodien/images/detail-slider/slider2.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 750px; position: relative; left: -1500px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide12">
                                        <img src="giaodien/images/detail-slider/slider3.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="3" aria-hidden="true" style="width: 750px; position: relative; left: -2250px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide13">
                                        <img src="giaodien/images/detail-slider/slider4.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="4" aria-hidden="true" style="width: 750px; position: relative; left: -3000px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide14">
                                        <img src="giaodien/images/detail-slider/slider5.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-current slick-active" data-slick-index="5" aria-hidden="false" style="width: 750px; position: relative; left: -3750px; top: 0px; z-index: 999; opacity: 1;" tabindex="-1" role="option" aria-describedby="slick-slide15">
                                        <img src="giaodien/images/detail-slider/slider6.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="6" aria-hidden="true" style="width: 750px; position: relative; left: -4500px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide16">
                                        <img src="giaodien/images/detail-slider/slider7.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="7" aria-hidden="true" style="width: 750px; position: relative; left: -5250px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide17">
                                        <img src="giaodien/images/detail-slider/slider8.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="8" aria-hidden="true" style="width: 750px; position: relative; left: -6000px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide18">
                                        <img src="giaodien/images/detail-slider/slider9.jpg" alt="image">
                                    </div></div></div>








                            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="">Next</button></div>
                        <div class="slider-1 slider-nav slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="">Previous</button>
                            <div aria-live="polite" class="slick-list draggable" style="padding: 0px 50px;"><div class="slick-track" style="opacity: 1; width: 2730px; transform: translate3d(-1170px, 0px, 0px);" role="listbox"><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="-6" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider4.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider5.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider6.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider7.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider8.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider9.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="0" aria-hidden="true" style="width: 130px;" tabindex="-1" role="option" aria-describedby="slick-slide20">
                                        <img src="giaodien/images/detail-slider/slider1.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 130px;" tabindex="-1" role="option" aria-describedby="slick-slide21">
                                        <img src="giaodien/images/detail-slider/slider2.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 130px;" tabindex="-1" role="option" aria-describedby="slick-slide22">
                                        <img src="giaodien/images/detail-slider/slider3.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 130px;" tabindex="-1" role="option" aria-describedby="slick-slide23">
                                        <img src="giaodien/images/detail-slider/slider4.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 130px;" tabindex="-1" role="option" aria-describedby="slick-slide24">
                                        <img src="giaodien/images/detail-slider/slider5.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-current slick-active slick-center" data-slick-index="5" aria-hidden="false" style="width: 130px;" tabindex="-1" role="option" aria-describedby="slick-slide25">
                                        <img src="giaodien/images/detail-slider/slider6.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-active" data-slick-index="6" aria-hidden="false" style="width: 130px;" tabindex="-1" role="option" aria-describedby="slick-slide26">
                                        <img src="giaodien/images/detail-slider/slider7.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-active" data-slick-index="7" aria-hidden="false" style="width: 130px;" tabindex="-1" role="option" aria-describedby="slick-slide27">
                                        <img src="giaodien/images/detail-slider/slider8.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide" data-slick-index="8" aria-hidden="true" style="width: 130px;" tabindex="-1" role="option" aria-describedby="slick-slide28">
                                        <img src="giaodien/images/detail-slider/slider9.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider1.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider2.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider3.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider4.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider5.jpg" alt="image">
                                    </div><div class="detail-slider-item slick-slide slick-cloned" data-slick-index="14" aria-hidden="true" style="width: 130px;" tabindex="-1">
                                        <img src="giaodien/images/detail-slider/slider6.jpg" alt="image">
                                    </div></div></div>

                            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="">Next</button></div>
                    </div>
                    <div class="detail-content">
                        <div class="detail-title">
                            <div class="title-left">
                                <h3>{{$room->name}}</h3>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <div class="title-right pull-right">
                                <ul>
                                    <li class="facebook"><i class="fab fa-facebook"></i></li>
                                    <li class="twitter"><i class="fab fa-twitter"></i></li>
                                    <li class="linkedin"><i class="fab fa-linkedin"></i></li>
                                    <li class="pinterest"><i class="fab fa-pinterest"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div id="exTab1">
                            <ul class="nav nav-pills">
                                <li class=""><a href="#1a" data-toggle="tab" aria-expanded="true"> Tổng quan </a></li>
                                <li class=""><a href="#2a" data-toggle="tab" aria-expanded="false"> Gía phòng </a></li>
                                <li class="active"><a href="#3a" data-toggle="tab" aria-expanded="false"> Dịch vụ </a></li>
                                <li class=""><a href="#4a" data-toggle="tab" aria-expanded="false">Đánh giá </a></li>
                                <li class=""><a href="#5a" data-toggle="tab" aria-expanded="false"> Bình luận</a></li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane" id="1a">
                                    <div class="detail-overview detail-box">
                                        <h4>Thông tin chi tiết</h4>
                                        {!!$room->content !!}
                                        <ul class="amenities">
                                            <li><i class="fa fa-bed" aria-hidden="true"></i> {{$room->amount_bed}} Bedrooms</li>
                                            <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                            <li><i class="fa fa-tv" aria-hidden="true"></i> Telivision</li>
                                            <li><i class="fa fa-bath" aria-hidden="true"></i> Hot Water</li>
                                            <li><i class="fa fa-utensil-spoon" aria-hidden="true"></i> Dinner</li>
                                            <li><i class="fa fa-cogs" aria-hidden="true"></i> Quick Service</li>
                                            <li><i class="fa fa-thermometer" aria-hidden="true"></i> AC</li>
                                            <li><i class="fa fa-bath" aria-hidden="true"></i> Laundry Service</li>
                                            <li><i class="fa fa-car" aria-hidden="true"></i> Airport Taxi</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <div class="price-table detail-box">
                                        <h4>Price and Rates(/Night)</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <td>Sun</td>
                                                <td>Mon</td>
                                                <td>Tues</td>
                                                <td>Wed</td>
                                                <td>Thurs</td>
                                                <td>Fri</td>
                                                <td>Sat</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{$room->price}} VND</td>
                                                <td>{{$room->price}} VND</td>
                                                <td>{{$room->price}} VND</td>
                                                <td>{{$room->price}} VND</td>
                                                <td>{{$room->price}} VND</td>
                                                <td>{{$room->price}} VND</td>
                                                <td>{{$room->price}} VND</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="3a">
                                    <div class="detail-places detail-box">
                                        <h4>Places Around</h4>
                                        <div class="service-outer">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="service-item">
                                                        <div class="service-image">
                                                            <img src="giaodien/images/service1.jpg" alt="Image">
                                                        </div>
                                                        <div class="service-content">
                                                            <h3>Restaurant</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="service-item">
                                                        <div class="service-image">
                                                            <img src="giaodien/images/service2.jpg" alt="Image">
                                                        </div>
                                                        <div class="service-content">
                                                            <h3>Massage</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="service-item">
                                                        <div class="service-image">
                                                            <img src="giaodien/images/service3.jpg" alt="Image">
                                                        </div>
                                                        <div class="service-content">
                                                            <h3>Swimming Pool</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="4a">
                                    @if(Auth::check())
                                    <div class="reviews-tab">
                                            <input type="hidden" resource="product" name="ratingResource" id="ratingResource" value="15060">
                                            <div class="product-rating" style="text-align:center;">
                                                Đánh giá của bạn:
                                                <label>
                                                    <input value="1" type="radio" name="ratingStar"> <i class="fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <label>
                                                    <input value="2" type="radio" name="ratingStar"> <i class="fa fa-star" aria-hidden="true"> </i> <i class="fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <label>
                                                    <input value="3" type="radio" name="ratingStar"> <i class="fa fa-star" aria-hidden="true"> </i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <label>
                                                    <input value="4" type="radio" name="ratingStar"> <i class="fa fa-star" aria-hidden="true"> </i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <label>
                                                    <input value="5" type="radio" name="ratingStar" > <i class="fa fa-star" aria-hidden="true"> </i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                                                </label>
                                            </div>
                                            <div class="sep"></div>
                                        <div id="ratingNotify"></div>
                                    </div>
                                        @else
                                        <span> Ban phải đăng nhập để có thể đánh giá </span>
                                    @endif
                                </div>
                                <div class="tab-pane" id="5a">
                                    <div class="detail-review">
                                        <div class="review-outer">
                                            <ul id="box-comment">
                                                @if(isset($comments) && count($comments) > 0)
                                                @foreach($comments as $comment)
                                                    <li>
                                                        <div class="review-item">
                                                            <div class="review-image">
                                                                <img src="upload/images/user/{{$comment->user->avatar}}" alt="image" height="87px">
                                                            </div>
                                                            <div class="review-content">
                                                                <h5>{{$comment->user->name}}</h5>
                                                                <p class="date">{{$comment->created_at->format('d/m/Y')}}</p>
                                                                <p>{{$comment->content}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                                @else
                                                    <li id="comment-zero" style="color: red;">Chưa có bình luận nào</li>

                                                @endif
                                            </ul>
                                        </div>

                                        @if(\Illuminate\Support\Facades\Auth::check())
                                        <div class="comment-box">
                                            <h4>Ý kiến của bạn :</h4>
                                            <div class="row">
                                                <div class="textarea col-xs-12">
                                                    <textarea placeholder="Enter a message" id="comment-value"></textarea>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="comment-btn">
                                                        <a href="javascript:void(0)" class="btn btn-orange btn-comment" data-id="{{Auth::user()->id}}">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                            <span> Ban phải đăng nhập để có thể bình luận  </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="detail-sidebar">
{{--                        <div class="sidebar-form reservation-form">--}}
{{--                            <div class="form-price">--}}
{{--                                <img src="giaodien/images/icons/bed-orange.png" alt="image">--}}
{{--                                <div class="title-price">--}}
{{--                                    <h2>$1200<span>/Night</span></h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="banner-form form-style-2">--}}

{{--                                <div class="form-content">--}}
{{--                                    <div class="form-content-inner">--}}
{{--                                        <div class="table-item">--}}
{{--                                            <label>Check In</label>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="date-range-inner-wrapper">--}}
{{--                                                    <input id="date-range2" class="form-control" value="Check In">--}}
{{--                                                    <span class="input-group-addon">--}}
{{--                                                        <i class="fa fa-calendar" aria-hidden="true"></i>--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="table-item">--}}
{{--                                            <label>Check Out</label>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="date-range-inner-wrapper">--}}
{{--                                                    <input id="date-range3" class="form-control" value="Check Out">--}}
{{--                                                    <span class="input-group-addon">--}}
{{--                                                        <i class="fa fa-calendar" aria-hidden="true"></i>--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="table-item">--}}
{{--                                            <label>Guests</label>--}}
{{--                                            <div class="form-group form-icon">--}}
{{--                                                <select>--}}
{{--                                                    <option value="1">0</option>--}}
{{--                                                    <option value="2">1</option>--}}
{{--                                                    <option value="3">2</option>--}}
{{--                                                    <option value="4">3</option>--}}
{{--                                                    <option value="5">4</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="table-item">--}}
{{--                                            <label>Nights</label>--}}
{{--                                            <div class="form-group form-icon">--}}
{{--                                                <select>--}}
{{--                                                    <option value="1">0</option>--}}
{{--                                                    <option value="2">1</option>--}}
{{--                                                    <option value="3">2</option>--}}
{{--                                                    <option value="4">3</option>--}}
{{--                                                    <option value="5">4</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="table-item">--}}
{{--                                            <div class="form-btn">--}}
{{--                                                <a class="btn btn-orange">Book Now</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related-rooms">
        <div class="container">
            <div class="section-title">
                <h2>Explore <span>Rooms</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="room-outer">
                <div class="row team-slider slick-initialized slick-slider">
                    <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3900px; transform: translate3d(-1950px, 0px, 0px);" role="listbox"><div class="col-md-4 slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 390px;" tabindex="-1">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/images/room2.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Junior Suite</h4>
                                            <p><i class="fa fa-tag"></i> $500/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="-1">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="-1">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 390px;" tabindex="-1">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/images/room3.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Executive Suite</h4>
                                            <p><i class="fa fa-tag"></i> $8120/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="-1">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="-1">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 390px;" tabindex="-1">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/images/room4.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Royal Suite</h4>
                                            <p><i class="fa fa-tag"></i> $1500/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="-1">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="-1">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 slick-slide" data-slick-index="0" aria-hidden="true" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/images/room1.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Super Deluxe</h4>
                                            <p><i class="fa fa-tag"></i> $1000/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="-1">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="-1">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 slick-slide" data-slick-index="1" aria-hidden="true" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/images/room2.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Junior Suite</h4>
                                            <p><i class="fa fa-tag"></i> $500/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="-1">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="-1">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/images/room3.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Executive Suite</h4>
                                            <p><i class="fa fa-tag"></i> $8120/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="0">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="0">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide03">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/images/room4.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Royal Suite</h4>
                                            <p><i class="fa fa-tag"></i> $1500/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="0">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="0">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 slick-slide slick-cloned slick-active" data-slick-index="4" aria-hidden="false" style="width: 390px;" tabindex="-1">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/mages/room1.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Super Deluxe</h4>
                                            <p><i class="fa fa-tag"></i> $1000/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="0">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="0">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 390px;" tabindex="-1">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/images/room2.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Junior Suite</h4>
                                            <p><i class="fa fa-tag"></i> $500/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="-1">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="-1">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 390px;" tabindex="-1">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="giaodien/images/room3.jpg" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>Executive Suite</h4>
                                            <p><i class="fa fa-tag"></i> $8120/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="-1">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange" tabindex="-1">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div></div></div>



                </div>
            </div>
            <div class="section-btn">
                <a href="#" class="btn btn-black mar-right-10">EXPLORE ALL ROOMS</a>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            var test = {{$room->id}};
            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

            $('input[type="radio"]').click(function(){
                if ($(this).is(':checked'))
                {
                    let value = $(this).val();
                     danhGia(value,test);
                }
            });

            $('.btn-comment').click(function () {
                let value = $('#comment-value').val();
                if(value !== '')
                {
                    comment(value, test, $(this).data('id'));
                } else {
                    toastr.error(' Bạn chưa nhập bình luận !!!');
                    return false;
                }
            });

        });
        function danhGia(value,roomId)
        {
            $.ajax({
                type:'POST',
                url:'/review/'+roomId,
                data:{value: value},

                success:function(data){
                    toastr.success(data);
                }

            });
        }

        function comment(value, roomID, userId) {
            $.ajax({
                type:'POST',
                url:'/comment/'+roomID,
                data:{value: value, userId: userId},

                success:function(data){
                    toastr.success(data.message);
                    $('#comment-zero').remove();
                    $('#box-comment').append(data.html);

                }
            });
        }
    </script>
@endsection
