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
                    @include('includes.messages')
                    <div class="list-content" style="margin-top: 20px;">
                        <div class="list-grid">
                            <div class="panel panel-default">

                                <div class="panel-heading"> Sửa thông tin</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form action="{{route('user.update-user',$user->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class="col-sm-6 col-md-4">
                                            <div class="edit-profile-photo" style="top: 50px;">
                                                <img :src="url? url :'upload/images/user/{{$user->avatar}}'" alt="user" class="img-rounded img-responsive" />
                                                <div class="change-photo-btn">
                                                    <div class="photoUpload">
                                                        <span><i class="fa fa-upload"></i> Thay đổi ảnh </span>
                                                        <input type="file" class="upload" name="avatar"  @change="onFileChange">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Tên </label>
                                                <input type="text" name="name" class="form-control" id="exampleInputPassword1" value="{{$user->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword2">Email </label>
                                                <input type="email" name="email" class="form-control" id="exampleInputPassword2" value="{{$user->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword3">Số điện thoại </label>
                                                <input type="text" name="phone" class="form-control" id="exampleInputPassword3" value="{{$user->phone}}">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Lưu thay đổi </button>
                                        </div>
                                        </form>
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
                                <li><a href="{{route('user.change-password',$user->id)}}"><i class="fas fa-r-project"></i>Đổi mật khẩu </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>
    <script type="text/javascript">
        const vm = new Vue({
            el: '.edit-profile-photo',
            data() {
                return {
                    url: null,
                }
            },
            methods: {
                onFileChange(e) {
                    const file = e.target.files[0];
                    this.url = URL.createObjectURL(file);
                }
            }
        })
    </script>
    @endsection
