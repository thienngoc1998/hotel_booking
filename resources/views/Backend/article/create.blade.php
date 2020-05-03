@extends('Backend.index')
@section('title')
    Tạo mới phòng
@endsection
@section('content')
    <div class="dashboard-form">
        <div class="row">
            <!-- Profile -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                    <div class="dashboard-list-box">
                        <h4 class="gray">Thông tin Admin</h4>
                        <div class="dashboard-list-box-static">
                            <form method="post" action="{{route('admin.article-store')}}" enctype="multipart/form-data">
                                @csrf
                            <!-- Avatar -->
                            <div class="edit-profile-photo">
                                <img   :src="url? url :'upload/default/hotel-default.jpg'" alt="admin" class="img-circle">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Thay đổi ảnh </span>
                                        <input type="file" class="upload"  @change="onFileChange" name="avatar">
                                    </div>
                                </div>

                            </div>

                            <!-- Details -->
                            <div class="my-profile">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên bài viết </label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{old('name')}}" name="name" >
                                </div>
                                <div class="form-group">
                                    <label > Mô tả </label>
                                    <textarea name="desc" >{{old('desc')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label> Chi tiết bài viết </label>
                                    <textarea id="demo" class="ckeditor" name="content_article">{{old('content_article')}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Tạo mới </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
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
