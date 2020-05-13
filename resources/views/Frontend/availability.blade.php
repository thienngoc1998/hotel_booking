@extends('Frontend.layout.index')

@section('title')
    Chọn ngày
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{__('step.step-1')}}</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('step.step-1')}}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="content reservation-main">
        <div class="container">
            <div class="reservation-links text-center">
                <h2 class="mar-bottom-60 text-capitalize">{{__('step.title')}}</h2>
                <div class="reservation-links-content">
                    <div class="res-item">
                        <span class="active">1</span>
                        <p> {{__('step.step-1')}}</p>
                    </div>
                    <div class="res-item">
                        <span>2</span>
                        <p>{{__('step.step-2')}}</p>
                    </div>
                    <div class="res-item">
                        <span>3</span>
                        <p>{{__('step.step-3')}}</p>
                    </div>
                    <div class="res-item">
                        <span>4</span>
                        <p> {{__('step.step-4')}} </p>
                    </div>
                </div>
            </div>
            <div class="banner-form form-style-1">
                <div class="form-content">
                    <form action="{{route('frontend.select-room')}}" style="display: contents;">

                    <div class="table-item">
                        <label>{{__('step.check-in')}}</label>
                        <div class="form-group form-icon">
                            <div class="date-range-inner-wrapper">
                                <input id="date-range2" class="form-control" name="check-in">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>{{__('step.check-out')}}</label>
                        <div class="form-group">
                            <div class="date-range-inner-wrapper">
                                <input id="date-range3" class="form-control" name="check-out">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>{{__('step.guests')}}</label>
                        <div class="form-group form-icon">
                            <select name="guests">
                                <option value="0">{{__('step.guests')}}</option>
                                <option value="1">0</option>
                                <option value="2">1</option>
                                <option value="3">2</option>
                                <option value="4">3</option>
                                <option value="5">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>{{__('step.nights')}}</label>
                        <div class="form-group form-icon">
                            <select name="night">
                                <option value="0">{{__('step.nights')}}</option>
                                <option value="1">0</option>
                                <option value="2">1</option>
                                <option value="3">2</option>
                                <option value="4">3</option>
                                <option value="5">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <div class="form-btn mar-top-35">
                            <button type="submit" class="btn btn-orange" style="padding: 10px 12px;">{{__('step.step-2')}}</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
