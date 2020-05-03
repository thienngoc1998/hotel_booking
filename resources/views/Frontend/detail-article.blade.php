@extends('Frontend.layout.index')

@section('title')
    Tin tức
@endsection
@section('content')
    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Tin tức</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tin tức </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="single">
        <div class="container">
            <div class="single-image">
                <img src="upload/images/article/{{$article->img}}" alt="image">
            </div>
            <div class="single-detail mar-top-30">
                <div class="row">
                    <div class="col-md-1 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="single-date">
                            <p>{{$article->created_at->format('d/m/Y')}}</p>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="single-content">
                            <h4>{{$article->title}} </h4>
                            <ul class="author">
                                <li><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</li>
                                <li><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</li>
                            </ul>
                            {!! $article->content !!}
                        </div>
                        <div class="detail-review">
                            <h4>3 Comments</h4>
                            <div class="review-outer">
                                <ul>
                                    <li>
                                        <div class="review-item">
                                            <div class="review-image">
                                                <img src="images/review1.jpg" alt="image">
                                            </div>
                                            <div class="review-content">
                                                <h5>Micheal Clordy</h5>
                                                <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                                <p class="date">November 10,2018 at 3:10 pm</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id iaculis arcu. Aenean non dolor magna. In sed consectetur nisi. Sed venenatis, nibh sit amet sodales ullamcorper, ipsum orci condimentum tortor, et cursus veli.tturpis at justo. Vivamus pellentesque volutpat urna vel eleifend. </p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="review-item">
                                                    <div class="review-image">
                                                        <img src="images/review2.jpg" alt="image">
                                                    </div>
                                                    <div class="review-content">
                                                        <h5>Micheal Clordy</h5>
                                                        <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                                        <p class="date">November 10,2018 at 3:10 pm</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id iaculis arcu. Aenean non dolor magna. In sed consectetur nisi. Sed venenatis, nibh sit amet sodales ullamcorper, ipsum orci condimentum tortor, et cursus veli.tturpis at justo. Vivamus pellentesque volutpat urna vel eleifend. </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="review-item">
                                            <div class="review-image">
                                                <img src="images/review3.jpg" alt="image">
                                            </div>
                                            <div class="review-content">
                                                <h5>Micheal Clordy</h5>
                                                <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                                <p class="date">November 10,2018 at 3:10 pm</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id iaculis arcu. Aenean non dolor magna. In sed consectetur nisi. Sed venenatis, nibh sit amet sodales ullamcorper, ipsum orci condimentum tortor, et cursus veli.tturpis at justo. Vivamus pellentesque volutpat urna vel eleifend. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="comment-box mar-top-20">
                                <h4>Leave a message</h4>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-xs-6">
                                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <input type="text" class="form-control" id="phnumber" placeholder="Phone">
                                        </div>
                                        <div class="textarea col-xs-12">
                                            <textarea placeholder="Enter a message"></textarea>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="comment-btn">
                                                <a href="#" class="btn btn-orange">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
