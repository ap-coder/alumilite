
    
    <!--====== Slider Start ======-->

    <section class="slider-area slider-dark slider-active">
        @foreach ($sliders as $slider)
            @if ($slider->published == '1')
                @if ($slider->location == '1')
                @php
                if ($slider->image) {
                    $sliderImage = $slider->image->getUrl('slider');
                } else {
                    if ($env=='local') {
                        $sliderImage = 'assets/images/slider/slider-3.jpg';
                    } else {
                        $sliderImage = '';
                    }
                }
                @endphp

                <div class="single-slider bg_cover" style="background-image: url({!! $sliderImage !!});">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    
                                    @if($slider->sub_title)
                                    <h4 class="sub-title">{{ $slider->sub_title }}</h4>
                                    @endif
                                    @if($slider->main_title)
                                    <h2 class="main-title">{{ $slider->main_title }}</h2>
                                    @endif
                                    @if($slider->sub_title_2)
                                    <p class="sub-title-2">{{ $slider->sub_title_2 }}</p>
                                    @endif
                                    <div class="slider-description">
                                        <p class="text-heading">
                                            @if($slider->heading_1)
                                            <span class="heading-1">{{ $slider->heading_1 }}</span>
                                            @endif
                                            @if($slider->heading_2)
                                            <span class="heading-2">{{ $slider->heading_2 }}</span>
                                            @endif
                                            @if($slider->heading_3)
                                            <span class="heading-3">{{ $slider->heading_3 }}</span>
                                            @endif
                                        </p>
                                        @if($slider->slider_description)
                                        <p>{{ $slider->slider_description }}</p>
                                        @endif
                                    </div>
                                    @if($slider->main_button_text)
                                    <ul class="slider-btn">
                                        <li><a class="main-btn main-btn-2" target="_blank" href="{{ $slider->main_button_link }}">{{ $slider->main_button_text }}</a></li>
                                        @if($slider->second_button_text)
                                        <li><a class="main-btn" target="_blank" href="{{ $slider->second_button_link }}"><i class="ion-speedometer"></i> {{ $slider->second_button_text }}</a></li>
                                        @endif
                                    </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endif
        @endforeach
 
    </section>

    <!--====== Slider Ends ======-->