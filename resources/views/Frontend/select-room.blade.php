@extends('Frontend.layout.index')

@section('title')
    Chọn phòng
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Đăng ký</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quên mật khẩu</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="content reservation-main">
        <div class="container">
            <div class="reservation-links text-center">
                <h2 class="mar-bottom-60 text-capitalize">Make Your Reservation</h2>
                <div class="reservation-links-content">
                    <div class="res-item">
                        <span class="active"><i class="fa fa-check"></i></span>
                        <p>Check Availability</p>
                    </div>
                    <div class="res-item">
                        <span class="active">2</span>
                        <p>Select Room</p>
                    </div>
                    <div class="res-item">
                        <span>3</span>
                        <p>Booking</p>
                    </div>
                    <div class="res-item">
                        <span>4</span>
                        <p>Confirmation</p>
                    </div>
                </div>
            </div>
            <div class="banner-form form-style-1">
                <div class="form-content">

                    <div class="table-item">
                        <label>Check In</label>
                        <div class="form-group">
                            <select class="niceSelect" style="display: none;">
                                <option value="1">05/Jan</option>
                                <option value="2">06/Jan</option>
                                <option value="3">07/Jan</option>
                                <option value="4">08/Jan</option>
                                <option value="5">09/Jan</option>
                            </select><div class="nice-select niceSelect" tabindex="0"><span class="current">05/Jan</span><ul class="list"><li data-value="1" class="option selected">05/Jan</li><li data-value="2" class="option">06/Jan</li><li data-value="3" class="option">07/Jan</li><li data-value="4" class="option">08/Jan</li><li data-value="5" class="option">09/Jan</li></ul></div>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>Check Out</label>
                        <div class="form-group">
                            <select class="niceSelect" style="display: none;">
                                <option value="1">05/Jan</option>
                                <option value="2">06/Jan</option>
                                <option value="3">07/Jan</option>
                                <option value="4">08/Jan</option>
                                <option value="5">09/Jan</option>
                            </select><div class="nice-select niceSelect" tabindex="0"><span class="current">05/Jan</span><ul class="list"><li data-value="1" class="option selected">05/Jan</li><li data-value="2" class="option">06/Jan</li><li data-value="3" class="option">07/Jan</li><li data-value="4" class="option">08/Jan</li><li data-value="5" class="option">09/Jan</li></ul></div>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>Guests</label>
                        <div class="form-group">
                            <select class="niceSelect" style="display: none;">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                            </select><div class="nice-select niceSelect" tabindex="0"><span class="current">01</span><ul class="list"><li data-value="1" class="option selected">01</li><li data-value="2" class="option">02</li><li data-value="3" class="option">03</li><li data-value="4" class="option">04</li><li data-value="5" class="option">05</li></ul></div>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>Nights</label>
                        <div class="form-group">
                            <select class="niceSelect" style="display: none;">
                                <option value="1">05</option>
                                <option value="2">06</option>
                                <option value="3">07</option>
                                <option value="4">08</option>
                                <option value="5">09</option>
                            </select><div class="nice-select niceSelect" tabindex="0"><span class="current">05</span><ul class="list"><li data-value="1" class="option selected">05</li><li data-value="2" class="option">06</li><li data-value="3" class="option">07</li><li data-value="4" class="option">08</li><li data-value="5" class="option">09</li></ul></div>
                        </div>
                    </div>
                    <div class="table-item">
                        <div class="form-btn mar-top-35">
                            <a class="btn btn-orange">Check Availability</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-list mar-top-60">
                <div class="row">
                    <div class="col-md-9 pull-right">
                        <div class="list-results">
                            <div class="list-results-sort pull-left pad-top-5">
                                <p class="mar-0">Showing 1-5 of 80 results</p>
                            </div>
                            <div class="click-menu pull-right">
                                <div class="dropdown bootstrap-select bs3" style="width: 120px;"><select class="selectpicker" data-width="120px" title="Sort By" tabindex="-98"><option class="bs-title-option" value=""></option>
                                        <option data-icon="fa fa-long-arrow-alt-up" value="0">Price</option>
                                        <option data-icon="fa fa-user" value="1">Name</option>
                                        <option data-icon="fa fa-star" value="1">Rating</option>
                                    </select><button type="button" class="btn dropdown-toggle btn-default bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Sort By"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Sort By</div></div> </div><span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><div class="inner open" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner " role="presentation"></ul></div></div></div>
                                <div class="change-list f-active mar-right-10"><a href="roomlist-1.html"><i class="fa fa-bars"></i></a></div>
                                <div class="change-grid"><a href="roomlist-1.html"><i class="fa fa-th"></i></a></div>
                            </div>
                        </div>
                        <div class="list-content">
                            <div class="list-grid">
                                @foreach($rooms as $room)
                                    <div class="room-grid">
                                        <div class="grid-image">
                                            <img src="upload/images/room-list/{{$room->avatar}}" alt="image">
                                        </div>
                                        <div class="grid-content">
                                            <div class="room-title">
                                                <h4>{{$room->name}}</h4>
                                                <p class="mar-top-5"><i class="fa fa-tag"></i> $900/Night</p>
                                                <div class="deal-rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                            </div>
                                            <div class="room-detail">
                                                <p> {{$room->description}}</p>
                                            </div>
                                            <div class="room-services">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <i class="fa fa-bed" aria-hidden="true"></i> {{$room->amount_bed}}
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid-btn mar-top-20">
                                                <a href="{{route('frontend.detail-room',$room->id)}}" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                                <a href="{{route('frontend.booking-room',$room->id)}}" class="btn btn-orange">BOOK NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination-content text-center">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 sidebar pull-left">
                        <div class="list-sidebar">
                            <div class="room-type list-sidebar-item">
                                <h4>Room Types</h4>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Single Rooms</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Double Rooms</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Studio Rooms</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Kingsize Rooms</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Presidentsuite Rooms</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Murphy Rooms</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Connecting Rooms</label>
                                    </div>
                                </div>
                            </div>
                            <div class="price list-sidebar-item">
                                <h4>Price</h4>
                                <div class="range-slider">
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                        <span class="min-value">0 $</span>
                                        <span class="max-value">2000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ratings list-sidebar-item">
                                <h4>Ratings</h4>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>
                                            <span class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>
                                            <span class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>
                                            <span class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>

                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>
                                            <span class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>
                                            <span class="rating">
                                                <span class="fa fa-star"></span>

                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="services list-sidebar-item">
                                <h4>Services</h4>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>24/7 Reception</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Parking</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Bar</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Restaurant</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Satellite Television</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Lift/ELevator</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox">
                                    <div class="state p-warning-o">
                                        <label>Luggage Storage </label>
                                    </div>
                                </div>
                            </div>
                            <div class="info-1 list-sidebar-item">
                                <i class="fa fa-phone-volume"></i>
                                <h5>Need help? Call us</h5>
                                <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                                <small>Monday to Friday 9.00am - 7.30pm</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
