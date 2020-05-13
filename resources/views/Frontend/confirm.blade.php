@extends('Frontend.layout.index')

@section('title')
    {{__('step.step-4')}}
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2> {{__('step.step-4')}} </h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{__('step.step-4')}} </li>
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
                        <span class="active"><i class="fa fa-check"></i></span>
                        <p>{{__('step.step-3')}}</p>
                    </div>
                    <div class="res-item">
                        <span class="active">4</span>
                        <p>{{__('step.step-4')}}</p>
                    </div>
                </div>
            </div>
            <div class="success-notify">
                <div class="success-icon">
                    <i class="fa fa-check"></i>
                </div>
                <div class="success-content">
                    <h4 class="white mar-bottom-5"> Đẳt phòng thành công </h4>
                    <p class="white mar-0">Cảm ơn bạn đã đặt phòng tại khách sạn chúng tôi </p>
                </div>
                <div class="cancel-icon">
                    <i class="fa fa-times"></i>
                </div>
            </div>
{{--            <div class="confirmation booking-content mar-top-60">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-8">--}}
{{--                        <div class="confirmation-content">--}}
{{--                            <div class="booking-image">--}}
{{--                                <img src="upload/images/room-list/{{$room->avatar}}" alt="image">--}}
{{--                                <div class="booking-title">--}}
{{--                                    <div class="title-left">--}}
{{--                                        <h3>{{$room->name}}</h3>--}}
{{--                                        <div class="rating">--}}
{{--                                            <span class="fa fa-star checked"></span>--}}
{{--                                            <span class="fa fa-star checked"></span>--}}
{{--                                            <span class="fa fa-star checked"></span>--}}
{{--                                            <span class="fa fa-star checked"></span>--}}
{{--                                            <span class="fa fa-star checked"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="title-right pull-right">--}}
{{--                                        <div class="title-price">--}}
{{--                                            <h4 class="pad-top-15"><a href="#">{{$room->price}} VND<span>/Night</span></a></h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="other-details detail-table mar-top-50">--}}
{{--                                <h4 class="mar-bottom-30">Order Details</h4>--}}
{{--                                <table class="table">--}}
{{--                                    <tbody><tr>--}}
{{--                                        <td>Booking id:</td>--}}
{{--                                        <td>289-569-215</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>First Name:</td>--}}
{{--                                        <td>Cyclone</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Last Name:</td>--}}
{{--                                        <td>Themes</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>DOB:</td>--}}
{{--                                        <td>March 08, 1989</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Country:</td>--}}
{{--                                        <td>Nepal</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Email:</td>--}}
{{--                                        <td>cyclone.themes@gmail.com</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Phone</td>--}}
{{--                                        <td>977 - 222 - 444 - 666</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Zip Code</td>--}}
{{--                                        <td>44600</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Address:</td>--}}
{{--                                        <td>445 Mount Eden Road, Basundhara, Chakrapath</td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody></table>--}}
{{--                            </div>--}}
{{--                            <div class="extra-services mar-top-50">--}}
{{--                                <h4 class="mar-bottom-30">Add Extra Services</h4>--}}
{{--                                <ul>--}}
{{--                                    <li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>--}}
{{--                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>--}}
{{--                                    <li><i class="fa fa-bed" aria-hidden="true"></i> Television</li>--}}
{{--                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Hot Water</li>--}}
{{--                                    <li><i class="fa fa-bed" aria-hidden="true"></i> Dinner</li>--}}
{{--                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> AC</li>--}}
{{--                                    <li><i class="fa fa-bed" aria-hidden="true"></i> Airport Taxi</li>--}}
{{--                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Quick Service</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="payment mar-top-50">--}}
{{--                                <h4 class="mar-bottom-30">Payment</h4>--}}
{{--                                <div class="payment-desc">--}}
{{--                                    <p>Payment is done via Paypal</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="payment mar-top-50">--}}
{{--                                <h4 class="mar-bottom-30">View Booking Details</h4>--}}
{{--                                <div class="payment-desc">--}}
{{--                                    <p>https://www.hotelhotux.com.np/bookingdetails/saurav</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="detail-sidebar">--}}
{{--                            <div class="sidebar-reservation">--}}
{{--                                <h4 class="text-capitalize">Your reservation</h4>--}}
{{--                                <div class="reservation-detail">--}}
{{--                                    <div class="rd-top">--}}
{{--                                        <div class="rd-box">--}}
{{--                                            <label>Check in</label>--}}
{{--                                            <p class="bold">04</p>--}}
{{--                                            <p>August, 2019<br>Monday</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="rd-box">--}}
{{--                                            <label>Check out</label>--}}
{{--                                            <p class="bold">13</p>--}}
{{--                                            <p>August, 2019<br>Wednesday</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="rd-top">--}}
{{--                                        <div class="rd-box">--}}
{{--                                            <p class="bold">03</p>--}}
{{--                                            <p>Guest</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="rd-box">--}}
{{--                                            <p class="bold">10</p>--}}
{{--                                            <p>Night</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <table class="reservation-table table">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>1 Room x 10 Nights</td>--}}
{{--                                        <td>$12000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Tax</td>--}}
{{--                                        <td>$80</td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                    <tfoot>--}}
{{--                                    <tr>--}}
{{--                                        <td>Total</td>--}}
{{--                                        <td>$12080</td>--}}
{{--                                    </tr>--}}
{{--                                    </tfoot>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                            <div class="sidebar-support">--}}
{{--                                <h4 class="text-capitalize">Help and Support</h4>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut arnare</p>--}}
{{--                                <p><i class="fa fa-phone"></i>  977 - 222 - 444 - 666</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection
