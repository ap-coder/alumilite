    <!--====== News Start ======-->
    @if($posts->count() > 0)
        <section class="news-area news-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2 class="title">Blog & News</h2>
                        </div>
                    </div>
                </div>
                <div class="news-wrapper">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-news mt-50">
                                    <div class="news-image">
                                        <a href="blog-single-with-sidebar.html">
                                            @if($post->featured_image)
                                                <img src="{{ $post->featured_image->getUrl() }}" alt="{{ $post->title }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <div class="news-meta">
                                            <span class="meta-cat">
                                                <a href="javascript:void(0);">
                                                    @if($post->categories->isNotEmpty())
                                                            {{ $post->categories->first()->name }}
                                                        @endif
                                                    </a>
                                            </span>
                                            <span class="meta-date"><a href="javascript:void(0);"> {{ date('M d, Y',strtotime($post->created_at)) }}</a></span>
                                        </div>
                                        <h3 class="news-title">
                                            <a href="{{ route('blog.show',$post->slug) }}">{{ $post->title }}</a>
                                        </h3>
                                        <ul class="news-meta-bottom">
                                            <li><a href="javascript:void(0);"><i class="ion-chatboxes"></i> 0 Comments </a></li>
                                            <li><span><i class="ion-eye"></i> 83 Viewed</span></li>
                                            <li><a href="javascript:void(0);"><i class="ion-android-share-alt"></i> Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--====== News Ends ======-->