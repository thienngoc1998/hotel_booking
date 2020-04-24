@if(isset($rooms))
    @foreach($rooms as $room)
        <div class="room-grid">
            <div class="grid-image">
                <img src="upload/images/room-list/{{$room->avatar}}" alt="image">
            </div>
            <div class="grid-content">
                <div class="room-title">
                    <h4>{{$room->name}}</h4>
                    <p class="mar-top-5"><i class="fa fa-tag"></i> {{$room->price}} VND/Night</p>
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
                    <a href="{{route('frontend.detail-room',$room->id)}}" class="btn btn-black mar-right-10"> Chi tiết phòng </a>
                    <a href="{{route('frontend.booking-room',$room->id)}}" class="btn btn-orange"> Đặt phòng </a>
                </div>
            </div>
        </div>
    @endforeach
@else
    <h3>Không có dữ liệu </h3>
@endif
