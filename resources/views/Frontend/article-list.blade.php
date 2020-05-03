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
    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="list-content">
                        <div class="row">
                         @foreach($articles as $article)
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="news-item">
                                    <div class="news-image">
                                        <img src="upload/images/article/{{$article->img}}" alt="image">
                                    </div>
                                    <div class="news-content">
                                        <p class="date">{{$article->created_at->format('d/m/Y')}}</p>
                                        <h4>{{$article->title}}</h4>
                                        <div class="room-services">
                                            <ul>
                                                <li><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</li>
                                            </ul>
                                        </div>
                                        <p>{{$article->desc}}</p>
                                        <a href="{{route('frontend.article-detail',$article->id)}}">READ MORE <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                        </div>
                    </div>
                    <div class="pagination-content text-center">
                        @include('includes.pagination', ['paging' => $articles])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
