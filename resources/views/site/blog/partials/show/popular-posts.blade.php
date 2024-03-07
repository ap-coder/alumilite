                            <div class="blog-sidebar-post">
                                <h3 class="sidebar-title">Popular posts</h3>

                                <ul class="post-items">

                                    @foreach ($popularPosts as $popularPost)
                                    <li>
                                        <div class="single-post">
                                            <div class="post-image">
                                                <a href="{{ route('blog.show', $popularPost->slug) }}">
                                                    @if($popularPost->featured_image)
                                                         <img src="{{ $popularPost->featured_image->excerpt }}" alt="{{ $popularPost->title }}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="news-meta">
                                                    <span class="meta-cat">
                                                        <a href="javascript:void(0);">
                                                            @if ($popularPost->categories->count()>0)
                                                                {{ $popularPost->categories->first()->name }}
                                                            @endif
                                                        </a>
                                                    </span>
                                                    <span class="meta-date"><a href="javascript:void(0);">{{ $popularPost->created_at->format('F d, Y') }}</a></span>
                                                </div>
                                                <h6 class="post-title"><a href="{{ route('blog.show', $popularPost->slug) }}">{{ $popularPost->title ?? '' }}</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>