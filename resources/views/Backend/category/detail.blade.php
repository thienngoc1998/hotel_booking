@extends('Backend.index')
@section('title')
    Sửa loại phòng
@endsection
@section('content')
    <div class="dashboard-form">
        <div class="row">
            <!-- Profile -->
            <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                <div class="dashboard-list-box">
                    <h4 class="gray">Thông tin loại phòng</h4>
                    <div class="dashboard-list-box-static">
                        <form method="post" action="{{route('admin.update-category',$category->id)}}" >
                        @csrf
                        <!-- Avatar -->
                            <!-- Details -->
                            <div class="my-profile">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên loại phòng </label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$category->name}}" name="name" >
                                </div>
                                <label >Trạng thái </label>
                                @if($category->active)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked >
                                    <label class="form-check-label" for="exampleRadios1" style="display: inline;">
                                        Kích hoạt
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2" style="display: inline;">
                                        Ẩn
                                    </label>
                                </div>
                                @else
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1">
                                        <label class="form-check-label" for="exampleRadios1" style="display: inline;">
                                            Kích hoạt
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0" checked>
                                        <label class="form-check-label" for="exampleRadios2" style="display: inline;">
                                            Ẩn
                                        </label>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Tạo mới </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
