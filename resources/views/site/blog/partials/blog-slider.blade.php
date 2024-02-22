    @php
        $blogSliders = $sliders->filter(function ($slider) {
            return $slider->location == '2';
        });
    @endphp

    @if ($blogSliders->isNotEmpty())
    <!--====== Blog Feature Start ======-->
    <section class="blog-feature-area blog-feature-active">
        @foreach ($sliders as $slider)
            @if ($slider->location == '2')
                @php
                if ($slider->image) {
                    $sliderImage = $slider->image->getUrl();
                } else {
                    if ($env=='local') {
                        $sliderImage = 'assets/images/slider/slider-3.jpg';
                    }else{
                        $sliderImage = '';
                    }
                }
                @endphp
                <div class="single-blog-feature bg_cover d-flex align-items-center" style="background-image: url({!! $sliderImage !!});">
                    <div class="container">
                        <div class="blog-feature-content">
                            {{-- <ul class="meta">
                                <li><a href="#">News</a></li>
                                <li><a href="#">August 24th, 2019</a></li>
                                <li><a href="#">24 comments</a></li>
                            </ul> --}}
                            <h2 class="title"><a href="#">ATV's 2023, The Change of Interior</a></h2>
                            {{-- <p>Here’s a quick recap of the important aspects engineers touched in the all-new 2 Honda ATV started with a larger and lighter frame using more...</p> --}}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </section>
    <!--====== Blog Feature Ends ======-->
    @endif