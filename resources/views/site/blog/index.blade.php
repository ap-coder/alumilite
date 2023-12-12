@extends('site.layouts.app')

@section('content')

    <!--====== Blog Feature Start ======-->

    <section class="blog-feature-area blog-feature-active">
        <div class="single-blog-feature bg_cover d-flex align-items-center" style="background-image: url(assets/images/blog/blog-feature-1.jpg);">
            <div class="container">
                <div class="blog-feature-content">
                    <ul class="meta">
                        <li><a href="#">News</a></li>
                        <li><a href="#">August 24th, 2019</a></li>
                        <li><a href="#">24 comments</a></li>
                    </ul>
                    <h2 class="title"><a href="#">Toyota Cars 2019, The Change of Interior</a></h2>
                    <p>Here’s a quick recap of the important aspects engineers touched in the all-new 2019 Honda CRV Chevy started with a larger and lighter frame using more...</p>
                </div>
            </div>
        </div>
        <div class="single-blog-feature bg_cover d-flex align-items-center" style="background-image: url(assets/images/blog/blog-feature-2.jpg);">
            <div class="container">
                <div class="blog-feature-content">
                    <ul class="meta">
                        <li><a href="#">News</a></li>
                        <li><a href="#">August 24th, 2019</a></li>
                        <li><a href="#">24 comments</a></li>
                    </ul>
                    <h2 class="title"><a href="#">BMW X6, Best Choice in Price Range</a></h2>
                    <p>Here’s a quick recap of the important aspects engineers touched in the all-new 2019 Honda CRV Chevy started with a larger and lighter frame using more...</p>
                </div>
            </div>
        </div>
        <div class="single-blog-feature bg_cover d-flex align-items-center" style="background-image: url(assets/images/blog/blog-feature-3.jpg);">
            <div class="container">
                <div class="blog-feature-content">
                    <ul class="meta">
                        <li><a href="#">News</a></li>
                        <li><a href="#">August 24th, 2019</a></li>
                        <li><a href="#">24 comments</a></li>
                    </ul>
                    <h2 class="title"><a href="#">2019 Danoh abr 2.5L reviews</a></h2>
                    <p>Here’s a quick recap of the important aspects engineers touched in the all-new 2019 Honda CRV Chevy started with a larger and lighter frame using more...</p>
                </div>
            </div>
        </div>
    </section>

    <!--====== Blog Feature Ends ======-->

    <!--====== Blog Start ======-->

    <section class="blog-area-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <div class="news-list-wrapper">

                        @foreach($articles as $i => $article)
                        <div class="single-news news-list">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="news-image">
                                        @if($article->featured_image)
                                        <a href="#">
                                            <img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="">
                                            {{ $article->getFirstMedia('featured_image')('responsive') }}
                                        </a>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="news-content">
                                        <div class="news-meta">
                                            <span class="meta-cat"><a href="#">{{ $article->categories->pluck('name')->first() }}</a></span>
                                            <span class="meta-date"><a href="#">{{date('F j, Y', strtotime($article->created_at)) }}</a></span>
                                            <meta itemprop="datePublished" content="{{date('yyyy-m-d', strtotime($article->created_at)) }}">
                                            <meta itemprop="dateModified" content="{{date('yyyy-m-d', strtotime($article->updated_at)) }}">
                                        </div>
                                        <h3 class="news-title"><a href="{{ route('blog.show', $article->slug ) }}">{{ $article->title }}</a></h3>
{{--                                        {!! Str::words($article->title, $limit = 15, $end = '...') !!}--}}
                                        <p>{{ $article->excerpt }}</p>
                                        <ul class="news-meta-bottom">
                                            <li><a href="#"><i class="ion-chatboxes"></i> 0 Comments </a></li>
                                            <li><span><i class="ion-eye"></i> 83 Viewed</span></li>
                                            <li><a href="#"><i class="ion-android-share-alt"></i> Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
{{--                    <div class="all-pagination">--}}
{{--                        <ul class="pagination ">--}}
{{--                            <li><a class="previous" href="#"><i class="ion-ios-arrow-back"></i> <span>Previous</span></a></li>--}}
{{--                            <li><a class="active" href="#">1</a></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">...</a></li>--}}
{{--                            <li><a href="#">8</a></li>--}}
{{--                            <li><a class="next" href="#"><span>Next</span> <i class="ion-ios-arrow-forward"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <div class="blog-sidebar">
@include('site.blog.partials.search')
@include('site.blog.partials.categories')
@include('site.blog.partials.popular-posts')
@include('site.blog.partials.newsletters')
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--====== Blog Ends ======-->
@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection
