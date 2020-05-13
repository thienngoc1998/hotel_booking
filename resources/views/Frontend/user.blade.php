@extends('Frontend.layout.index')

@section('title')
    Thông tin tài khoản
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Thông tin tài khoản</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thông tin tài khoản</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="room-list">
        <div class="container">
            <div class="row">
                <div class="col-md-9 pull-right">
                    <div class="list-content">
                        <div class="list-grid">
                            <div class="panel panel-default">
                                <div class="panel-heading">Thông tin tài khoản</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <img src="upload/images/user/{{$user->avatar}}" alt="" class="img-rounded img-responsive" />
                                        </div>
                                        <div class="col-sm-6 col-md-8">
                                            <h4>
                                                {{$user->name}}</h4>
                                            <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                                    </i></cite></small>
                                            <p>
                                                <i class="glyphicon glyphicon-envelope"></i>Email: {{$user->email}}
                                                <br />
                                                <i class="glyphicon glyphicon-phone"></i>Số điện thoại: {{$user->phone}}
                                                <br />
                                                <i class="glyphicon glyphicon-gift"></i>Ngày tạo : {{$user->created_at->format('d/m/Y')}}</p>
                                            <!-- Split button -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">
                                                    Social</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span><span class="sr-only">Social</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Twitter</a></li>
                                                    <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                                    <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Github</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sidebar pull-left">
                    <div class="dashboard-nav">
                        <div class="dashboard-nav-inner">
                            <ul>
                                <li ><a href="{{route('user.create',$user->id)}}"><i class="fas fa-dashboard"></i>Thay đổi thông tin  </a></li>
                                <li><a href="{{route('user.change-password',$user->id)}}"><i class="fas fa-r-project"></i>Đổi mật khẩu </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
