@extends('Backend.index')
@section('title')
    Sửa thông tin phòng
@endsection
@section('content')
        <div class="dashboard-form">
            <div class="row">
                <form action="{{route('admin.update-room',$room->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Profile -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                    <div class="dashboard-list-box">
                        <h4 class="gray">Thông tin phòng</h4>
                        <div class="dashboard-list-box-static">

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
                                    <select name="cate_type">
                                        <option value="">Hãy chọn loại phòng :</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if ( $category->id == $room->id ) selected @endif>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    <label>Tên Phòng : *</label>
                                    <input  type="text" name="name" value="{{$room->name}}">

                                    <label>Số lượng giường *</label>
                                    <input  type="text" name="amount_bed" value="{{$room->amount_bed}}">
                                    <label>Môi tả *</label>
                                    <textarea name="description"  id="" cols="30" rows="10">{{$room->description}}</textarea>

                                </div>
                        </div>
                    </div>
                </div>
                <!-- Change Password -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                    <div class="dashboard-list-box margin-top-0">
                        <h4 class="gray">Thông tin chi tiết</h4>
                        <div class="dashboard-list-box-static">
                            <div class="my-profile">
                                <label class="margin-top-0">Kích thước : </label>
                                <input type="text" name="size" value="{{$room->size}}" >
                                <label class="margin-top-0">Gía : </label>
                                <input type="text" name="price" value="{{$room->price}}">
                                <label class="margin-top-0">Số lượng : </label>
                                <input type="text" name="number" value="{{$room->number}}">
                                <label>Nổi bật: *</label>
                                @if($room->status == 1)
                                <input type="radio" name="status" value="1" checked >Có
                                <input type="radio" name="status" value="0" style="margin-left: 15px;">Không
                                @else
                                    <input type="radio" name="status" value="1"  >Có
                                    <input type="radio" name="status" value="0" checked style="margin-left: 15px;">Không
                                @endif
                                <label>Kích hoạt: *</label>
                                @if($room->status == 1)
                                <input type="radio" name="active" value="1" checked >Có
                                <input type="radio" name="active" value="0" style="margin-left: 15px;">Không
                                @else
                                    <input type="radio" name="active" value="1"  >Có
                                    <input type="radio" name="active" value="0" checked style="margin-left: 15px;">Không
                                @endif
                                <label>Thông tin phòng: *</label>
                                <textarea id="demo" class="ckeditor" name="content_room">{{$room->content}}</textarea>

                            </div>
                            <button class="button" type="submit"> Sửa phòng </button>
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
