<div class="point-rating">
    <div class="rating-score">
        <h5 class="score-title">Average Rating</h5>
        <span class="score-point">{{ $build->averageRating() }}</span>
        <div class="score-star">
            <ul class="star">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $build->averageRating())
                        <li class="rating-on"><i class="ion-android-star"></i></li>
                    @else
                        <li><i class="ion-android-star"></i></li>
                    @endif
                @endfor
            </ul>
            <span>({{ $build->buildReviews->count() }} Reviews)</span>
        </div>
    </div>

    <div class="rating-progress">
        @foreach ($build->getRatingPercentages() as $rating => $percentage)
            <div class="single-progress">
                <div class="progress-star">
                    <span>{{ $rating }} Star</span>
                </div>
                <div class="progress-line">
                    <div class="line-bar" style="width: {{ $percentage }}%;"></div>
                </div>
                <div class="progress-percent">
                    <span>{{ $percentage }}%</span>
                </div>
            </div>
        @endforeach
    </div>
</div>