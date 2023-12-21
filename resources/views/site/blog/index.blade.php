@extends('site.layouts.app')

@section('content')

    @include('site.blog.partials.blog-slider')
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
                                        <a href="{{ route('blog.show', $article->slug ) }}">
                                             {{ $article->getFirstMedia('featured_image')('excerpt') }}
                                            {{-- <img src="{{ $article->featured_image->getUrl() }}" alt="{{ $article->title }}"> --}}
                                        </a>
                                        @else
                                            <img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="">
                                        @endif
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="news-content">
                                           <div class="news-meta">
                                               <span class="meta-cat">{{ $article->categories->pluck('name')->first() }}</span>
                                               <span class="meta-date"><a href="javascript:void(0);">{{date('F j, Y', strtotime($article->created_at)) }}</a></span>
                                               <meta itemprop="datePublished" content="{{date('yyyy-m-d', strtotime($article->created_at)) }}">
                                               <meta itemprop="dateModified" content="{{date('yyyy-m-d', strtotime($article->updated_at)) }}">
                                           </div>
                                           <h3 class="news-title"><a href="{{ route('blog.show', $article->slug ) }}">{{ $article->title }}</a></h3>
                                            {{-- {!! Str::words($article->title, $limit = 15, $end = '...') !!}--}}
                                            <div class="ck-content">
                                                <p>{{ $article->excerpt }}</p>
                                            </div>
                                        
                                           {{--<ul class="news-meta-bottom">
                                               <li><a href="#"><i class="ion-chatboxes"></i> 0 Comments </a></li>
                                               <li><span><i class="ion-eye"></i> 83 Viewed</span></li>
                                               <li><a href="#"><i class="ion-android-share-alt"></i> Share</a></li>
                                       </ul>--}}
                                   </div>
                               </div>
                           </div>
                       </div>
                       @endforeach

                   </div>

                   <div class="all-pagination">
                    {{ $articles->links('vendor.pagination.default') }}
                </div>

                   {{-- @include('site.blog.partials.pagination') --}}

                </div>
                <div class="col-xxl-3 col-lg-4">
                    <div class="blog-sidebar">
                        @include('site.blog.partials.search')
                        @include('site.blog.partials.blog-menu')
{{--                        @include('site.blog.partials.categories')--}}
{{--                        @include('site.blog.partials.popular-posts')--}}
{{--                        @include('site.blog.partials.newsletters')--}}
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--====== Blog Ends ======-->

@endsection

{{--@section('headcss') @endsection--}}
{{--@section('headjs') @endsection--}}
{{--@section('footjs') @endsection--}}
