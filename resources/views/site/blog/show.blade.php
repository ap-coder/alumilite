@extends('site.layouts.app')

@section('content')

    <meta itemprop="datePublished" content="{{date('yyyy-m-d', strtotime($article->created_at)) }}">
    <meta itemprop="dateModified" content="{{date('yyyy-m-d', strtotime($article->updated_at)) }}">
    <!--====== Blog Single Start ======-->

    <section class="blog-single-area blog">
{{--        <div class="single-post-header-2 d-flex align-items-end bg_cover" style="background-image: url('{{ asset('assets/images/blog-single/blog-single-2.jpg') }}');">--}}
{{--        <div class="single-post-header-2 d-flex align-items-end bg_cover" style="background-image: url('{{ $article->getFirstMedia('featured_image')('responsive') }}');">--}}
        @include('site.blog.partials.show.featured-image')

        <div class="single-post-main-content">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <div class="post-content-inner single-post-left">
                            @include('site.blog.partials.show.breadcrumb')
                            <div class="ck-content">
                                {!! $article->page_text ?? '' !!}
                            </div>
                            <div class="footer-content d-flex flex-wrap justify-content-between align-items-center">
                                <hr />
                                @include('site.blog.partials.show.social-share')
                            </div>
                        </div>
                        @include('site.blog.partials.show.author')

                        @if($relatedPosts->isNotEmpty())
                            @include('site.blog.partials.show.related-posts', ['relatedPosts' => $relatedPosts])
                        @endif

                        {{-- @include('site.blog.partials.comments')--}}
                    </div>
                    <div class="col-xxl-3 col-lg-4">
                        <div class="blog-sidebar">
                            @include('site.blog.partials.search')
                        {{--    @include('site.blog.partials.show.categories')--}}
                        {{--    @include('site.blog.partials.blog-menu')--}}

                             @include('site.blog.partials.show.popular-posts')
                            {{-- @include('site.blog.partials.show.newsletter')--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Blog Single Ends ======-->
@endsection

@section('headcss')
    <style>
        .single-post-main-content .post-content-inner .footer-content {
            padding-top: 0!important;
        }
    </style>
@endsection
@section('headjs') @endsection
@section('footjs') @endsection
