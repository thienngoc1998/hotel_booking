@extends('Frontend.layout.index')

@section('title')
    {{__('step.step-3')}}
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{__('step.step-3')}}</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('step.step-3')}}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="reservation-links text-center">
                <h2 class="mar-bottom-60 text-capitalize">{{__('step.title')}}</h2>
                <div class="reservation-links-content">
                    <div class="res-item">
                        <span class="active"><i class="fa fa-check"></i></span>
                        <p>{{__('step.step-1')}}</p>
                    </div>
                    <div class="res-item">
                        <span class="active"><i class="fa fa-check"></i></span>
                        <p>{{__('step.step-2')}}</p>
                    </div>
                    <div class="res-item">
                        <span class="active">3</span>
                        <p>{{__('step.step-3')}}</p>
                    </div>
                    <div class="res-item">
                        <span>4</span>
                        <p>{{__('step.step-4')}}</p>
                    </div>
                </div>
            </div>
            <div class="booking">
                <div class="row">
                    <div class="col-md-8">
                        <div class="booking-content">
                            <div class="booking-image">
                                <img src="upload/images/room-list/{{$room->avatar}}" alt="image">
                                <div class="booking-title">
                                    <div class="title-left">
                                        <h3>{{$room->name}}</h3>
                                        <div class="rating">
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
                                    <div class="title-right pull-right">
                                        <div class="title-price">
                                            <h4 class="pad-top-15"><a href="#">{{format_price($room->price)}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-desc mar-top-50">
                                <ul class="mar-bottom-15">
                                    <li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                    <li><i class="fa fa-tv" aria-hidden="true"></i> Telivision</li>
                                    <li><i class="fa fa-bath" aria-hidden="true"></i> Hot Water</li>
                                    <li><i class="fa fa-utensil-spoon" aria-hidden="true"></i> Dinner</li>
                                    <li><i class="fa fa-cogs" aria-hidden="true"></i> Fast Service</li>
                                    <li><i class="fa fa-thermometer" aria-hidden="true"></i> AC</li>
                                    <li><i class="fa fa-car" aria-hidden="true"></i> Airport Taxi</li>
                                </ul>
                                {!! $room->content !!}
                            </div>
                            @if(Auth::check())
                                <form method="post" action="{{route('frontend.confirm-booking-room')}}">
                                    @csrf
                                    {{--                            <div class="extra-services mar-top-50">--}}
                                    {{--                                <h4 class="mar-bottom-30">Add Extra Services</h4>--}}
                                    {{--                                <ul>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <span class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
                                    {{--                                            <input type="checkbox">--}}
                                    {{--                                            <span class="state p-warning-o">--}}
                                    {{--                                                <label>10 Bedrooms</label>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <span class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
                                    {{--                                            <input type="checkbox">--}}
                                    {{--                                            <span class="state p-warning-o">--}}
                                    {{--                                                <label>Wifi</label>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <span class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
                                    {{--                                            <input type="checkbox">--}}
                                    {{--                                            <span class="state p-warning-o">--}}
                                    {{--                                                <label>Television</label>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <span class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
                                    {{--                                            <input type="checkbox">--}}
                                    {{--                                            <span class="state p-warning-o">--}}
                                    {{--                                                <label>Hot Water</label>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <span class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
                                    {{--                                            <input type="checkbox">--}}
                                    {{--                                            <span class="state p-warning-o">--}}
                                    {{--                                                <label>Dinner</label>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <span class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
                                    {{--                                            <input type="checkbox">--}}
                                    {{--                                            <span class="state p-warning-o">--}}
                                    {{--                                                <label>Quick Services</label>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <span class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
                                    {{--                                            <input type="checkbox">--}}
                                    {{--                                            <span class="state p-warning-o">--}}
                                    {{--                                                <label>A/C</label>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <span class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
                                    {{--                                            <input type="checkbox">--}}
                                    {{--                                            <span class="state p-warning-o">--}}
                                    {{--                                                <label>Laundry Services</label>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <span class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
                                    {{--                                            <input type="checkbox">--}}
                                    {{--                                            <span class="state p-warning-o">--}}
                                    {{--                                                <label>AirPort Taxi</label>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                </ul>--}}
                                    {{--                            </div>--}}


                                    <div class="personal-info mar-top-50">
                                        <div class="form-title">
                                            <span>1</span>
                                            <h4 class="mar-bottom-30"> Thông tin người đặt phòng </h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Họ tên " name="name" value="{{Auth::user()->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder=" Địa chỉ email" name="email" value="{{Auth::user()->email}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder=" Số điện thoại " name="phone" value="{{Auth::user()->phone}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mar-0">
                                                    <textarea placeholder=" Ghi chú " name="note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-info mar-top-50">
                                        <div class="row">
                                            <div class="col-md-12 mar-top-15">
                                                <div class="card-btn">
                                                    <button type="submit" class="btn btn-orange"> Xác nhận đặt phòng
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <span style="color: red;">Bạn phaỉ đăng nhập để đặt phòng </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
