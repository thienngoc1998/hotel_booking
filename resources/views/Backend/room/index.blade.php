@extends('Backend.index')
@section('title')
    Danh sách phòng
@endsection
@section('content')
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <a href="{{route('admin.form-add-room')}}" class="btn btn-success" style="margin-bottom: 15px"><i class="fas fa-plus"></i>Thêm mới</a>
                <div class="dashboard-list-box dash-list margin-top-0">
                    <div class="row">
                        @if(isset($rooms))
                            @foreach($rooms as $room)
                                <div class="col-sm-4"><!-- list start -->
                                    <div class="list-box-listing">
                                        <div class="list-box-listing-img">
                                            <a href="{{route('admin.form-update-room',$room->id)}}"><img src="upload/images/room-list/{{$room->avatar}}" alt=""></a>
                                        </div>
                                        <div class="list-box-listing-content">
                                            <div class="inner">
                                                <a href="{{route('admin.form-update-room',$room->id)}}"><h3>{{$room->name}}</h3></a>
                                                <span>Bishop Avenue, New York</span>
                                                <div class="star-rating" data-rating="5.0">
                                                    <div class="rating-counter">(23 reviews)</div>
                                                </div>
                                                <p>{{$room->description}}</p>
                                            </div>
                                            <a href="{{route('admin.form-update-room',$room->id)}}" class="button gray"><i class="sl sl-icon-pencil"></i> Edit</a>
                                            <a href="#" class="button gray" data-toggle="modal" data-target="#modalDelete" data-delete-url="{{route('admin.delete-room', $room->id)}}"><i class="sl sl-icon-close"></i> Delete</a>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                         @endif
                    <!-- Pagination -->
                        <div class="clearfix"></div>
                        <div class="col-sm-12 pagination-container">
                            <nav class="pagination">
                                <ul>
                                    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                    <li><a href="#" class="current-page">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination / End -->

                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="modalDelete" role="dialog">
        <div class="modal-dialog mt-270">
            <div class="modal-content">
                <div class="modal-header bg-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title text-white">{{ trans('button.title') }}</h4>
                </div>
                <div class="modal-body text-center">
                    <p>{{ trans('button.content') }}</p>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <a href="#" class="btn btn-success btn-delete-submit">
                            {{ trans('button.ok') }}
                        </a>
                        <button type="button" class="btn btn-danger ml-20" data-dismiss="modal">
                            {{ trans('button.cancel') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <script type="text/javascript">
          $(document).ready(function () {
          $('#modalDelete').on('show.bs.modal', function(e) {
              var url = $(e.relatedTarget).data('delete-url');
              console.log(url);
              $(e.currentTarget).find('.btn-delete-submit').attr("href", url);
          });
          });
      </script>
@endsection

