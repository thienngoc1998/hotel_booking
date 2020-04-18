@extends('Backend.index')
@section('title')
    Quản lý Service
@endsection

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box">

                    <h4 class="gray">Service</h4>
                    <a class="btn btn-success"  href="{{route('admin.add-service')}}" style="margin: 20px 0;"><i class="fas fa-plus"></i>Thêm </a>
                    <div class="table-box">
                        <table class="basic-table booking-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ảnh</th>
                                <th>Tên dịch vụ </th>
                                <th>Mở cửa</th>
                                <th>Đóng cửa </th>
                                <th>Giá </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td><img src="upload/images/service/{{$service->image}}" height="70" width="70" alt="image service"></td>
                                <td>{{$service->name}}</td>
                                <td>
                                    {{$service->open_time}}
                                </td>
                                <td>
                                    {{$service->close_time}}
                                </td><td>
                                    {{$service->price}} VND
                                </td>

                                <td>
                                    <a href="{{route('admin.getFormUpdate-service',$service->id)}}" class="button success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="javascript:void(0)" class="button gray" data-toggle="modal" data-target="#modalDelete"  data-delete-url="{{route('admin.delete-service', $service->id)}}"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pagination-container">
                    <nav class="pagination">
                        <ul>
                            <li><a href="#" class="current-page">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDelete" role="dialog">
        <div class="modal-dialog mt-270">
            <div class="modal-content">
                <div class="modal-header bg-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title text-white">削除確認</h4>
                </div>
                <div class="modal-body text-center">
                    <p>この会社を本当に削除してもよろしいですか？</p>
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
