@extends('Frontend.layout.index')

@section('title')
    Giới thiệu
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Giới thiệu </h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giới thiệu </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-para mar-top-50">
                        <h4>Vài nét về khách sạn </h4>
                        <p>Là nhóm khách sạn đạt tiêu chuẩn 3 sao trở lên, tọa lạc ở các địa điểm du lịch, nghỉ dưỡng nổi tiếng trên toàn quốc với thiết kế tinh tế cùng phong cách phục vụ chuyên nghiệp nhằm mang đến cho du khách kì nghỉ tiện nghi và thoải mái. </p>
                        <p>Giới thiệu, nhân rộng, lan tỏa những nét đẹp truyền thống, tinh hoa văn hóa và niềm tự hào Việt tới du khách trong và ngoài nước nhằm bảo tồn và xây dựng giá trị văn hóa các dân tộc Việt.
                            Là điểm đến mang đậm văn hóa vùng miền. Mỗi thành viên có vai trò là một sứ giả trong cuộc giao lưu và quảng bá nét đẹp truyền thống dân tộc.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="about-us-image mar-top-50">
                        <img src="upload/images/aboutus2.jpg" alt="image">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="about-us-image">
                        <img src="upload/images/aboutus1.jpg" alt="image">
                    </div>
                </div>
            </div>
            <div class="about-tag">
                <div class="tag-no">
                    <span>19</span>
                </div>
                <div class="tag-info">
                    <span>years</span>
                    <span class="orange">experience</span>
                    <span>working</span>
                </div>
            </div>
        </div>
    </section>
    <section class="about-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-item">
                        <p class="icon1"><i class="fa fa-suitcase"></i></p>
                        <h3 class="room">264</h3>
                        <p>Phòng </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-item">
                        <p class="icon1"><i class="fa fa-users"></i></p>
                        <h3 class="staff">576</h3>
                        <p>Nhân viên </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-item">
                        <p class="icon1"><i class="fa fa-glass-cheers"></i></p>
                        <h3 class="restaurant">487</h3>
                        <p>Dịch vụ </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-item">
                        <p class="icon1"><i class="fa fa-trophy"></i></p>
                        <h3 class="award">320</h3>
                        <p>Giải thưởng </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="awards">
        <div class="container">
            <div class="section-title title-white">
                <h2>Giải thưởng và thành tích </h2>
                <p>Một số giải thưởng đạt được </p>
            </div>
            <div class="award-slider slick-initialized slick-slider">








                <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3204px; transform: translate3d(-801px, 0px, 0px);" role="listbox"><div class="award-item slick-slide slick-cloned" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide06" data-slick-index="-2" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award3.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>World Luxury Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide slick-cloned" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide07" data-slick-index="-1" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award4.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>World Luxury Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="0" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award1.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>World Luxury Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide slick-current slick-active" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="1" aria-hidden="false">
                            <div class="award-image">
                                <img src="upload/images/awards/award2.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>Prestigious Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide slick-active" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="2" aria-hidden="false">
                            <div class="award-image">
                                <img src="upload/images/awards/award3.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>Reader's Choice Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide03" data-slick-index="3" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award4.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>World Best Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide04" data-slick-index="4" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award1.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>World Luxury Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide05" data-slick-index="5" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award2.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>World Luxury Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide06" data-slick-index="6" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award3.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>World Luxury Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide07" data-slick-index="7" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award4.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>World Luxury Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide slick-cloned" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="8" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award1.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>World Luxury Award</h5>
                                <p>2019</p>
                            </div>
                        </div><div class="award-item slick-slide slick-cloned" style="width: 237px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="9" aria-hidden="true">
                            <div class="award-image">
                                <img src="upload/images/awards/award2.png" alt="image">
                            </div>
                            <div class="award-content">
                                <h5>Prestigious Award</h5>
                                <p>2019</p>
                            </div>
                        </div></div></div></div>
        </div>
    </section>
@endsection
