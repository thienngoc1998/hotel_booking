@extends('Frontend.layout.index')

@section('title')
    Chọn phòng
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{__('step.step-2')}}</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('step.step-2')}}</li>
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
                        <span class="active"><i class="fa fa-check"></i></span>
                        <p>{{__('step.step-1')}}</p>
                    </div>
                    <div class="res-item">
                        <span class="active">2</span>
                        <p>{{__('step.step-2')}}</p>
                    </div>
                    <div class="res-item">
                        <span>3</span>
                        <p>{{__('step.step-3')}}</p>
                    </div>
                    <div class="res-item">
                        <span>4</span>
                        <p>{{__('step.step-4')}}</p>
                    </div>
                </div>
            </div>
            <section class="room-list mar-top-60">
                    <div class="row">
                        <div class="col-md-9 pull-right">
                            <div class="list-results">
                                <div class="list-results-sort pull-left pad-top-5">
                                </div>
                                <div class="click-menu pull-right">
                                    <div class="dropdown bootstrap-select bs3" style="width: 120px;">
                                        <select class="selectpicker" data-width="120px" title=" Sắp xếp " id="dropDownId">
                                            <option class="bs-title-option" value=""></option>
                                            <option data-icon="fa fa-long-arrow-alt-up" value="0"> Giá </option>
                                            <option data-icon="fa fa-user" value="1"> Tên </option>
                                            <option data-icon="fa fa-star" value="2"> Sao </option>
                                        </select>

                                        <div class="dropdown-menu open">
                                            <div class="inner open" role="listbox" id="bs-select-1" tabindex="-1">
                                                <ul class="dropdown-menu inner " role="presentation"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <div class="list-grid">

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
                                    <h4>Loại phòng</h4>
                                    @foreach($category as $item)
                                        <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                            <input type="checkbox" class="common_selector type_room" value="{{$item->id}}" name="category">
                                            <div class="state p-warning-o">
                                                <label>{{$item->name}}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="ratings list-sidebar-item">
                                    <h4>Ratings</h4>
                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                        <input type="checkbox"  class="common_selector star" value="5">
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
                                        <input type="checkbox"  class="common_selector star" value="4">
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
                                        <input type="checkbox" class="common_selector star" value="3">
                                        <div class="state p-warning-o" >
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
                                        <input type="checkbox" class="common_selector star" value="2">
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
                                        <input type="checkbox" class="common_selector star" value="1">
                                        <div class="state p-warning-o">
                                            <label>
                                        <span class="rating">
                                            <span class="fa fa-star"></span>
                                        </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="services list-sidebar-item">--}}
{{--                                    <h4>Services</h4>--}}
{{--                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
{{--                                        <input type="checkbox">--}}
{{--                                        <div class="state p-warning-o">--}}
{{--                                            <label>24/7 Reception</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
{{--                                        <input type="checkbox">--}}
{{--                                        <div class="state p-warning-o">--}}
{{--                                            <label>Parking</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
{{--                                        <input type="checkbox">--}}
{{--                                        <div class="state p-warning-o">--}}
{{--                                            <label>Bar</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
{{--                                        <input type="checkbox">--}}
{{--                                        <div class="state p-warning-o">--}}
{{--                                            <label>Restaurant</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
{{--                                        <input type="checkbox">--}}
{{--                                        <div class="state p-warning-o">--}}
{{--                                            <label>Satellite Television</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">--}}
{{--                                        <input type="checkbox">--}}
{{--                                        <div class="state p-warning-o">--}}
{{--                                            <label>Lift/ELevator</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="pretty p-default p-thick p-pulse">--}}
{{--                                        <input type="checkbox">--}}
{{--                                        <div class="state p-warning-o">--}}
{{--                                            <label>Luggage Storage </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                </div>
            </section>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });
            filter_data();

            function filter_data() {
                let sort = $('#dropDownId').val();
                console.log(sort);
                let categories = get_filter('type_room');
                let star = get_filter('star');
                $.ajax({
                    type:'POST',
                    url:'/get-room',
                    data:{categories : categories,star : star, sort: sort},

                    success:function(data){
                        if(data.html === "" ) {
                            $('.list-grid').html("<h3 class='text-center'>Không có dữ liệu </h3>");
                            $('.show-result').text('Không tìm thấy kết quả ');
                        } else {
                            $('.list-grid').html(data.html);
                        }


                    }

                });
            }

            $('#dropDownId').on('change',function(){
                filter_data();
            });

            $('.common_selector').click(function(){
                filter_data();
            });

        });
        function get_filter(class_name)
        {
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }
    </script>
@endsection
