@extends('Backend.index')
@section('title')
    Danh sách đặt phòng
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="dashboard-list-box">

                <h4 class="gray">Đặt phòng</h4>
                <a href="#" class="btn btn-success btn-print" style="margin: 20px 0;"><i class="fas fa-print"></i>In </a>
                <div class="table-box">
                    <table class="basic-table booking-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên </th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Số người </th>
                            <th>Đêm </th>
                            <th>Phòng  </th>
                            <th>Trạng thái </th>
                            <th>Ngày taọ </th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->username}}</td>
                                <td>{{$book->email}}</td>
                                <td>{{$book->phone}}</td>
                                <td>{{$book->guest}}</td>
                                <td>{{$book->nights}}</td>
                                <td><a href="{{route('frontend.detail-room',$book->id_room)}}">{{$book->room->name}}</a></td>
                                <td>
                                    @if($book->status == 0)
                                    <span class="paid t-box"> Đang chờ </span>
                                    @elseif($book->status == 1)
                                     <span class="unpaid t-box"> Nhận phòng </span>
                                    @endif
                                </td>
                                <td>{{$book->created_at->format('d/m/Y')}}</td>
                                <td>
                                    <a href="#"  data-toggle="modal" data-target="#modalActive" data-active-url="{{route('admin.book-change-status', $book->id)}}" class="button success"><i class="fas fa-flag"></i></a>
                                    <a href="#" class="button gray" data-toggle="modal" data-target="#modalDelete" data-delete-url="{{route('admin.book-destroy', $book->id)}}"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pagination-container">
                @include('includes.pagination', ['paging' => $books])
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
    <div class="modal fade" id="modalActive" role="dialog">
        <div class="modal-dialog mt-270">
            <div class="modal-content">
                <div class="modal-header bg-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title text-white">{{ trans('button.title') }}</h4>
                </div>
                <div class="modal-body text-center">
                    <p> Bạn có muốn thay đổi trạng thái không ?</p>
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
            $('#modalActive').on('show.bs.modal', function(e) {
                var url = $(e.relatedTarget).data('active-url');
                $(e.currentTarget).find('.btn-delete-submit').attr("href", url);
            });
        });
        $('.btn-print').click(function (e) {
            e.preventDefault();
            window.print();
        });
    </script>
@endsection
