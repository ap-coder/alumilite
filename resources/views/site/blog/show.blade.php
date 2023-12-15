@extends('site.layouts.app')

@section('content')

    <meta itemprop="datePublished" content="{{date('yyyy-m-d', strtotime($article->created_at)) }}">
    <meta itemprop="dateModified" content="{{date('yyyy-m-d', strtotime($article->updated_at)) }}">
    <!--====== Blog Single Start ======-->
    @if($article->featured_image)
    <section class="blog-single-area blog ">
{{--        <div class="single-post-header-2 d-flex align-items-end bg_cover" style="background-image: url('{{ asset('assets/images/blog-single/blog-single-2.jpg') }}');">--}}
{{--        <div class="single-post-header-2 d-flex align-items-end bg_cover" style="background-image: url('{{ $article->getFirstMedia('featured_image')('responsive') }}');">--}}
        <div class="single-post-header-2 d-flex align-items-end bg_cover" style="background-image: url('{{ $article->featured_image->getUrl() }}');">
            <div class="container">
                <div class="single-post-header-inner-2">
                    <div class="entry-meta">
                        <ul class="meta-items">
{{--                            <li><a href="#">Review</a></li>--}}
                            <li><a href="#">{{date('F j, Y', strtotime($article->created_at)) }}</a></li>
{{--                            <li><a href="#"> </a></li>--}}
{{--                            <li><a href="#"> </a></li>--}}
                        </ul>
                    </div>
                    <h2 class="entry-title">Audi in town 2019 - the festival of  audior in florencia, italy</h2>
                </div>
            </div>
        </div>
        @endif

        <div class="single-post-main-content">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <div class="post-content-inner single-post-left">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('blog') }}">Blog</a></li>
                                <li class="breadcrumb-item active">{{ $article->title ?? '' }}</li>
                            </ul>
                            <div class="body-content">
                                {{ $article->page_text ?? '' }}
                            </div>
                            <div class="footer-content d-flex flex-wrap justify-content-between align-items-center">
{{--                                <ul class="tags">--}}
{{--                                    <li><a href="#">inventory</a></li>--}}
{{--                                    <li><a href="#">top</a></li>--}}
{{--                                    <li><a href="#">vehicle</a></li>--}}
{{--                                    <li><a href="#">wordpress</a></li>--}}
{{--                                </ul>--}}
                                <ul class="social">
                                    <li><a class="facebook" href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a class="googleplus" href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                    <li><a class="tumblr" href="#"><i class="ion-social-tumblr"></i></a></li>
                                    <li><a class="rss" href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>

{{--                        <div class="entry-author-box">--}}
{{--                            <div class="author-avatar">--}}
{{--                                <div class="avatar-image">--}}
{{--                                    <img src="{{ asset('assets/images/blog-single/author.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="avatar-info">--}}
{{--                                    <span class="sub-title">the author</span>--}}
{{--                                    <h4 class="name">Edward Goldblatt</h4>--}}
{{--                                    <p>I’m McGregor, a gentlemen and lover of life. More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla. </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        @include('site.blog.partials.related-posts')--}}
{{--                        @include('site.blog.partials.comments')--}}


                    </div>
                    <div class="col-xxl-3 col-lg-4">
                        <div class="blog-sidebar">
                            @include('site.blog.partials.show.search')
                            @include('site.blog.partials.show.blog-menu')
{{--                            @include('site.blog.partials.show.categories')--}}
{{--                            @include('site.blog.partials.show.popular-posts')--}}
{{--                            @include('site.blog.partials.show.newsletter')--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Blog Single Ends ======-->
@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection
