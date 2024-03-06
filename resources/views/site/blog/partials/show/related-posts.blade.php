<div class="related-post">
    <div class="section-title">
        <h2 class="title">Posts You’d Might Like</h2>
    </div>

    <div class="row">
        @foreach($relatedPosts as $relatedPost)
            <div class="col-md-6">
                <div class="single-news mt-50">
                    <div class="news-image">
                        <a href="{{ route('posts.show', $relatedPost->slug) }}">
                            @if($relatedPost->featured_image)
                                {{--  <img src="{{ $relatedPost->featured_image->url }}" alt="{{ $relatedPost->title }}">--}}
                                {{ $article->getFirstMedia('featured_image')('responsive') }}
{{--                                {{ $article->getFirstMedia('featured_image')('excerpt') }}--}}
                            @else
                                <img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="">
                            @endif
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="meta-cat">
                                @foreach($relatedPost->categories as $category)
                                    <a href="#">{{ $category->name }}</a>
                                @endforeach
                            </span>
                            <span class="meta-date">
                                <a href="#">{{ $relatedPost->created_at->format('F d, Y') }}</a>
                            </span>
                        </div>
                        <h3 class="news-title"><a href="{{ route('posts.show', $relatedPost->slug) }}">{{ $relatedPost->title }}</a></h3>
                        <ul class="news-meta-bottom">
                            <li><a href="#"><i class="ion-chatboxes"></i> {{ $relatedPost->comments_count ?? '0' }} Comments </a></li>
                            <li><span><i class="ion-eye"></i> {{ views($relatedPost)->count() }} Viewed</span></li>
                            <!-- Assuming you're using the laravel-views package for view count -->
                            <li><a href="#"><i class="ion-android-share-alt"></i> Share</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
