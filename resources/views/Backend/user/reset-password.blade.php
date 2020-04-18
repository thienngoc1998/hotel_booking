@extends('Backend.index')
@section('title')
    Thay đổi mật khẩu
@endsection
@section('content')
    <div class="dashboard-form">
        <div class="row">
            <form action="{{route('admin.reset-password',$user->id)}}" method="POST">
            @csrf
            <!-- Profile -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                    <div class="dashboard-list-box">
                        <h4 class="gray">Thay đổi mật khẩu </h4>
                        <div class="dashboard-list-box-static">
                            <!-- Details -->
                            <div class="my-profile">
                                <label>Mật khẩu: *</label>
                                <input  type="password" name="password">
                                <label>Xác nhận mật khẩu: *</label>
                                <input  type="password" name="password_confirmation">
                            </div>
                            <button class="button" type="submit"> Thay đổi </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')

@endsection
