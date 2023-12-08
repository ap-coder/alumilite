
    
    <!--====== Slider Start ======-->

    <section class="slider-area slider-dark slider-active">
        @foreach ($sliders as $slider)

            @php
            if($env=='local'){
                $sliderImage = 'assets/images/slider/slider-3.jpg';
            }elseif ($slider->image) {
                $sliderImage = $slider->image->getUrl();
            } else {
                $sliderImage = 'assets/images/slider/slider-3.jpg';
            }
            @endphp

            <div class="single-slider bg_cover" style="background-image: url({!! $sliderImage !!});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h4 class="sub-title">{{ $slider->sub_title }}</h4>
                                <h2 class="main-title">{{ $slider->main_title }}</h2>
                                <p class="sub-title-2">{{ $slider->sub_title_2 }}</p>

                                <div class="slider-description">
                                    <p class="text-heading">
                                        <span class="heading-1">{{ $slider->heading_1 }}</span>
                                        <span class="heading-2">{{ $slider->heading_2 }}</span>
                                        <span class="heading-3">{{ $slider->heading_3 }}</span>
                                    </p>
                                    <p>{{ $slider->slider_description }}</p>
                                </div>
                                <ul class="slider-btn">
                                    <li><a class="main-btn main-btn-2" target="_blank" href="{{ $slider->main_button_link }}">{{ $slider->main_button_text }}</a></li>
                                    <li><a class="main-btn" target="_blank" href="{{ $slider->second_button_link }}"><i class="ion-speedometer"></i> {{ $slider->second_button_text }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
        {{-- <div class="single-slider bg_cover" style="background-image: url(assets/images/slider/slider-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider-content">
                            <h4 class="sub-title">LIMITED EDITION</h4>
                            <h2 class="main-title">JAGUAR XJ </h2>
                            <p class="sub-title-2">Cayman <span>S</span></p>

                            <div class="slider-description">
                                <p class="text-heading">
                                    <span class="heading-1">$225</span>
                                    <span class="heading-2">/</span>
                                    <span class="heading-3">Month</span>
                                </p>
                                <p>$0 first payment paid by Porsche up to $325.<br>Taxes, title and fees extra. </p>
                            </div>
                            <ul class="slider-btn">
                                <li><a class="main-btn main-btn-2" href="#">LEARN MORE</a></li>
                                <li><a class="main-btn" href="#"><i class="ion-speedometer"></i> TEST DRIVE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>

    <!--====== Slider Ends ======-->