@extends('Backend.index')
@section('title')
Quản lý người dùng
@endsection

@section('content')
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box">

                    <h4 class="gray">Người dùng</h4>
                    <a href="{{route('admin.create-user')}}" class="btn btn-success" style="margin: 20px 0;"><i class="fas fa-plus"></i>Thêm </a>
                    <div class="table-box">
                        <table class="basic-table booking-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ảnh đại diên</th>
                                <th>Tên </th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Ngày tạo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>
                                    <img src="upload/images/user/{{$user->avatar}}"  height="70" alt="user image">
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->created_at->format('d/m/Y')}}</td>
{{--                                <td>--}}
{{--                                    @if($category->active)--}}
{{--                                    <span class="paid t-box">{{__('status.active')}}</span>--}}
{{--                                    @else--}}
{{--                                     <span class="unpaid t-box">{{__('status.unactive')}}</span>--}}
{{--                                    @endif--}}
{{--                                </td>--}}

                                <td>
                                    <a href="{{route('admin.detail-user',$user->id)}}" class="button success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="button gray" data-toggle="modal" data-target="#modalDelete" data-delete-url="{{route('admin.destroy-user', $user->id)}}"><i class="fas fa-times"></i></a>
                                    <a href="{{route('admin.form-reset-password', $user->id)}}" class="button success"><i class="fas fa-flag"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pagination-container">
                    @include('includes.pagination', ['paging' => $users])
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
