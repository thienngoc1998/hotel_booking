@extends('Backend.index')
@section('title')

@endsection

@section('content')
    <div class="dashboard-content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box">

                    <h4 class="gray">Loại phòng</h4>
                    <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin: 20px 0;"><i class="fas fa-plus"></i>Thêm </button>
                    <div class="table-box">
                        <table class="basic-table booking-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên loại phòng</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at->format('d/m/Y')}}</td>
                                <td>
                                    @if($category->active)
                                    <span class="paid t-box">{{__('status.active')}}</span>
                                    @else
                                     <span class="unpaid t-box">{{__('status.unactive')}}</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="#" class="button success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="button gray"><i class="fas fa-times"></i></a>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
@endsection
