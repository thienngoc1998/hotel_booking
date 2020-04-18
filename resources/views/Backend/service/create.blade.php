@extends('Backend.index')
@section('title')
    Thông tin cá nhân
@endsection
@section('content')

    <div class="dashboard-form">
        <div class="row">

            <!-- Profile -->
            <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                <div class="dashboard-list-box">
                    <h4 class="gray">Thông tin Admin</h4>
                    <div class="dashboard-list-box-static">
                        <form action="{{route('admin.store-service')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Avatar -->
                            <div class="edit-profile-photo">
                                <img   :src="url? url :'upload/default/hotel-bell.jpg'" alt="admin" class="img-circle">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Thay đổi ảnh </span>
                                        <input type="file" class="upload"  @change="onFileChange" name="image">
                                    </div>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="my-profile">
                                <label>Tên dịch vụ *</label>
                                <input type="text" name="name">

                                <label>Mở cửa *</label>
                                <input type="text" name="open_time">

                                <label>Đóng cửa *</label>
                                <input type="text" name="close_time">

                                <label>Giá*</label>
                                <input type="text" name="price">

                                <label>Content *</label>
                                <textarea id="demo" class="ckeditor" name="content"></textarea>
                            </div>

                            <button class="button" type="submit">Lưu</button>
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
