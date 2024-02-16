    <!--====== Header Start ======-->

    <header class="header-area  d-none d-lg-block">
        <div class="header-main">
            <div class="container">
                <div class="header-main-wrapper d-flex justify-content-between align-items-center">
                    <div class="header-brand">
                        <a href="{{ url('') }}">
                            @if (isset($setting->header_logo))
                                <img class="custom-logo" src="{{ $setting->header_logo->getUrl() }}" alt="alumilite armor logo">
                            @else
                                Logo
                            @endif
                        </a>
                    </div>
                    <div class="header-main-content d-flex">
                        <div class="single-content-block d-flex">
                            <div class="block-icon">
                                <i class="ion-android-pin"></i>
                            </div>
                            <div class="block-content media-body">
                                {{-- <span class="text">PAROWAN<br>UT, 84761, USA</span> --}}
                                <span class="label">Address</span>
                                <span class="text">{!! $setting->address ?? '' !!}</span>
                            </div>
                        </div>
                        <div class="single-content-block d-flex">
                            <div class="block-icon">
                                <i class="ion-android-call"></i>
                            </div>
                            <div class="block-content media-body">
                                <span class="label">Hotline</span>
                                <span class="text-2"><a href="tel:{{ str_replace('-', '', @$setting->phone) }}">{{ $setting->phone ?? '' }}</a></span>
                            </div>
                        </div>
                        @if (isset($setting->working_hours))
                            <div class="single-content-block d-flex">
                                <div class="block-icon">
                                    <i class="ion-clock"></i>
                                </div>
                                <div class="block-content media-body">
                                    <span class="label">Working Hours</span>
                                    <span class="text">{{ $setting->working_hours }}</span>
                                </div>
                            </div>
                        @endif

                    </div>
        {{--             <div class="header-main-btn">
                        <a href="add-car.html" class="main-btn"><i class="ion-model-s"></i> Add Car </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </header>

    <!--====== Header Ends ======-->
