    <!--====== Header Desktop Menu Start ======-->

    <div class="header-menu header-menu-dark d-none d-lg-block">
        <div class="container">
            <div class="header-menu-inner d-flex align-items-center justify-content-between">
                <nav class="site-navigation">
                    {{-- <ul class="main-menu">
                        <li>
                            <a class="active" href="#">Home </a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                                <li><a href="index-dark.html">Home 01 Dark</a></li>
                                <li><a href="index-2-dark.html">Home 02 Dark</a></li>
                                <li><a href="index-3-dark.html">Home 03 Dark</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul> --}}
                    @include('site.partials.generated-nav')
                </nav>
                <div class="header-social-compare-login d-flex align-items-center">
                    <div class="header-social-menu">
                        <ul class="social">
                            @if (isset($setting->twitter_link))
                                <li><a href="{{ $setting->twitter_link }}" target="_blank"><i class="ion-social-twitter"></i></a></li>
                            @endif
                            @if (isset($setting->facebook_link))
                                <li><a href="{{ $setting->facebook_link }}" target="_blank"><i class="ion-social-facebook"></i></a></li>
                            @endif
                            @if (isset($setting->rss_link))
                                <li><a href="{{ $setting->rss_link }}" target="_blank"><i class="ion-social-rss"></i></a></li>
                            @endif
                            @if (isset($setting->instagram_link))
                                <li><a href="{{ $setting->instagram_link }}" target="_blank"><i class="ion-social-instagram-outline"></i></a></li>
                            @endif
                            @if (isset($setting->youtube_link))
                                <li><a href="{{ $setting->youtube_link }}" target="_blank"><i class="ion-social-youtube-outline"></i></a></li>
                            @endif
                        </ul>
                    </div>
                    {{-- <div class="header-compare-login">
                        <ul class="compare-login">
                            <li>
                                <a href="vehicle-compare.html">
                                    <i class="ion-ios-loop-strong"></i> 
                                    <span>Compare</span> 
                                    <span class="compare-badge">3</span>
                                </a>
                            </li>
                            <li><a href="login-register.html"><i class="ion-ios-contact-outline"></i> <span>Log in</span></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!--====== Header Desktop Menu Ends ======-->