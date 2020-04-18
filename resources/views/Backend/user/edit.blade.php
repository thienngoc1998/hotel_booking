@extends('Backend.index')
@section('title')
    Sửa thông tin người dùng
@endsection
@section('content')
    <div class="dashboard-form">
        <div class="row">
            <form action="{{route('admin.update-user',$user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Profile -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                    <div class="dashboard-list-box">
                        <h4 class="gray">Thông tin người dùng </h4>
                        <div class="dashboard-list-box-static">

                            <!-- Avatar -->
                            <div class="edit-profile-photo">
                                <img   :src="url? url :'upload/images/user/{{$user->avatar}}'" alt="user" class="img-circle">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Thay đổi ảnh </span>
                                        <input type="file" class="upload"  @change="onFileChange" name="avatar">
                                    </div>
                                </div>

                            </div>

                            <!-- Details -->
                            <div class="my-profile">
                                <label>Ho Tên : *</label>
                                <input  type="text" name="name" value="{{$user->name}}">
                                <label>Email: *</label>
                                <input  type="email" name="email" value="{{$user->email}}">
                                <label>Số điện thoại *</label>
                                <input  type="text" name="phone" value="{{$user->phone}}">
                            </div>
                            <button class="button" type="submit"> Sửa </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
@section('script')

@endsection
