<!--====== Slider Start ======-->
@if ($sliders->where('published', 1)->where('location', 2)->count() > 0)
    <section class="slider-area slider-dark slider-active">
        @foreach ($sliders->where('published', 1)->where('location', 2) as $slider)
            @php
                $sliderImage = $slider->image ? $slider->image->getUrl('slider2') : asset('assets/images/slider/slider-3.jpg');
            @endphp

            <div class="single-slider bg_cover" style="background-image: url({{ $sliderImage }});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content">
                                {{-- Subtitle --}}
                                @if ($slider->sub_title)
                                    <h4 class="sub-title" style="{{ $slider->sub_title_css }}">{{ $slider->sub_title }}</h4>
                                @endif

                                {{-- Main Title --}}
                                @if ($slider->main_title)
                                    <h2 class="main-title" style="{{ $slider->main_title_css }}">{{ $slider->main_title }}</h2>
                                @endif

                                {{-- Second Subtitle --}}
                                @if ($slider->sub_title_2)
                                    <p class="sub-title-2" style="{{ $slider->sub_title_2_css }}">{{ $slider->sub_title_2 }}</p>
                                @endif

                                {{-- Description --}}
                                <div class="slider-description">
                                    <p class="text-heading" style="{{ $slider->text_heading_css }}">
                                        @if ($slider->heading_1)
                                            <span class="heading-1" style="{{ $slider->heading_1_css }}">{{ $slider->heading_1 }}</span><br>
                                        @endif
                                        @if ($slider->heading_2)
                                            <span class="heading-2" style="{{ $slider->heading_2_css }}">{{ $slider->heading_2 }}</span><br>
                                        @endif
                                        @if ($slider->heading_3)
                                            <span class="heading-3" style="{{ $slider->heading_3_css }}">{{ $slider->heading_3 }}</span><br>
                                        @endif
                                    </p>
                                    @if ($slider->slider_description)
                                        <p style="{{ $slider->slider_description_css }}">{{ $slider->slider_description }}</p>
                                    @endif
                                </div>

                                {{-- Buttons --}}
                                @if ($slider->main_button_text)
                                    <ul class="slider-btn">
                                        <li>
                                            <a class="main-btn main-btn-2" style="{{ $slider->main_button_css }}" target="_blank" href="{{ $slider->main_button_link }}">
                                                @if ($slider->main_button_icon_class)
                                                    <i class="{{ $slider->main_button_icon_class }}"></i>
                                                @endif
                                                {{ $slider->main_button_text }}
                                            </a>
                                        </li>
                                        @if ($slider->second_button_text)
                                            <li>
                                                <a class="main-btn" style="{{ $slider->second_button_css }}" target="_blank" href="{{ $slider->second_button_link }}">
                                                    @if ($slider->second_button_icon_class)
                                                        <i class="{{ $slider->second_button_icon_class }}"></i>
                                                    @endif
                                                    {{ $slider->second_button_text }}
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endif
<!--====== Slider Ends ======-->
