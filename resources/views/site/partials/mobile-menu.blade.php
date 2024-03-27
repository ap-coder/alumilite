    <!--====== Header Mobile menu Start ======-->

    <div class="header-mobile-menu header-mobile-menu-dark d-lg-none">
        <div class="container">
            <div class="header-mobile-wrapper d-flex justify-content-between align-items-center">
                <div class="header-mobile-logo">
                    <a href="{{ url('') }}">
                        @if (isset($setting->header_logo))
                            <img class="custom-logo" src="{{ $setting->header_logo->getUrl() }}" alt="alumilite armor logo">
                        @endif
                    </a>
                </div>
                <div class="header-mobile-meta">
                    <ul class="meta d-flex">
                        <li><a class="toggle-bar navbar-mobile-open" href="javascript:;"><i class="ion-navicon"></i></a></li>
                        {{-- <li>
                            <a href="vehicle-compare.html">
                                <i class="ion-ios-loop-strong"></i>
                                <span class="compare-badge">3</span>
                            </a>
                        </li>
                        <li><a href="login-register.html"><i class="ion-ios-contact-outline"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>

        <div class="mobile-navigation">
            <a href="javascript:;" class="close-navbar-mobile"><i class="fal fa-times"></i></a>
            <nav class="site-navigation">
                @include('site.partials.generated-nav')
            </nav>
            
            {{-- <div class="copyright">
                <p>&copy; 2021 <span> Corify </span> Made with <i class="fa fa-heart"></i> by <a href="#">Bootxperts</a></p>
            </div> --}}
        </div>

    </div>

    <!--====== Header Mobile menu Ends ======-->