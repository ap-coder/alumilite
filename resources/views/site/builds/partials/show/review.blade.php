                            <div class="reviews-comment">
                                <ul class="reviews-comments-items">
                                    @if ($build->buildReviews->count()>0)
                                        @foreach ($build->buildReviews as $review)
                                        <li>
                                            <div class="single-reviews-comment">
                                                <div class="comment-author">
                                                    @if ($review->avatar)
                                                        <img src="{{ $review->avatar->getUrl() }}" alt="{{ $review->signiture }}">
                                                    @else
                                                        <img src="{{ asset('assets/images/empty-testamonial.jpg') }}" alt="{{ $review->signiture }}" width="100">
                                                    @endif
                                                </div>
                                                <div class="comment-content">
                                                    <div class="rating-name">
                                                        <ul class="author-rating">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $review->rating)
                                                                    <li class="rating-on"><i class="ion-android-star"></i></li>
                                                                @else
                                                                    <li><i class="ion-android-star"></i></li>
                                                                @endif
                                                            @endfor
                                                            {{-- <li class="rating-on"><i class="ion-android-star"></i></li>
                                                            <li class="rating-on"><i class="ion-android-star"></i></li>
                                                            <li class="rating-on"><i class="ion-android-star"></i></li>
                                                            <li class="rating-on"><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li> --}}
                                                        </ul>
                                                        <div class="author-name">
                                                            <h4 class="name">{{ $review->title }}</h4>
                                                        </div>
                                                    </div>
                                                    <ul class="meta">
                                                        <li>by <a href="javascript:void(0);">{{ $review->signiture }}
                                                            {{-- | SIGNITURE_COMPANY --}}
                                                        </a></li>
                                                        <li>{{ $review->time_ago }}</li>
                                                    </ul>
                                                    @if ($review->photo->count()>0)
                                                        <img src="{{ $review->photo->getUrl() }}" alt="Check out my vehicle">
                                                    @endif

                                                    <p>{!! $review->body !!}</p>

                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
