@extends('Backend.index')
@section('title')
    Tạo mới phòng
@endsection
@section('content')
    <div class="dashboard-content">
        <div class="dashboard-form">
            <div class="row">

                <!-- Profile -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                    <div class="dashboard-list-box">
                        <h4 class="gray">Thông tin Admin</h4>
                        <div class="dashboard-list-box-static">
                            <form action="{{route('admin.store-room')}}" method="POST" enctype="multipart/form-data">
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
                                    <label>Loại Phòng : *</label>
                                    <select name="id_cate">
                                        <option value="">Hãy chọn loại phòng :</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    <label>Tên Phòng : *</label>
                                    <input  type="text" name="name">

                                    <label>Số lượng giường *</label>
                                    <input  type="text" name="amount_bed">
                                    <label>Môi tả *</label>
                                    <textarea name="description" id="" cols="30" rows="10"></textarea>

                                </div>

                                <button class="button" type="submit">Lưu</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Change Password -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                    <div class="dashboard-list-box margin-top-0">
                        <h4 class="gray">Thông tin chi tiết</h4>
                        <div class="dashboard-list-box-static">
{{--                            <form action="" method="POST" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
                            <!-- Change Password -->
                                <div class="my-profile">
                                    <label class="margin-top-0">Mật khẩu cũ : </label>
                                    <input type="password" name="old_password">

                                    <label>Mật khẩu mới: *</label>
                                    <input type="password" name="password">

                                    <label>Nhập lại mật khẩu mới: *</label>
                                    <input type="password" name="password_confirmation">

                                </div>
                                <button class="button" type="submit">Thay đổi mật khẩu </button>
{{--                            </form>--}}
                        </div>
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
