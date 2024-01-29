    <!--====== Footer Start ======-->

        <footer class="footer-area @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo) @if($seo->footer_classes) {{ $seo->footer_classes }} @endif @endforeach @endif">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-4">
                        <div class="text-widget mt-50">
                            <a href="{{ url('') }}">
                                @if ($setting->footer_logo)
                                    <img src="{{ $setting->footer_logo->getUrl() }}" alt="alumilite armor footer logo">
                                @else
                                    Logo
                                @endif
                            </a>
                            <div class="text-content">
                                <div class="single-text">
                                    <p>Parowan, UT 84761</p>
                                </div>
                                <div class="single-text">
                                    <p>
                                        @if ($setting->email)
                                            <span><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></span>
                                        @endif
                                        <span><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($footer_menu))
                        @foreach($footer_menu as $menu)
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="footer-menu mt-50">
                                    @if ($menu['link']=='')
                                        <h3 class="footer-title">{{ $menu['label'] }}</h3>
                                    @else
                                        <h3 class="footer-title">
                                            <a href="{{ preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($menu['link'], "http") === 0 ? $menu['link'] : url('', $menu['link']))) }}">{{ $menu['label'] }}</a>
                                        </h3>
                                    @endif

                                    @if( $menu['child'] )
                                        <ul class="menu-items">
                                            @foreach( $menu['child'] as $child )
                                                <li>
                                                    <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}">{{ $child['label'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif

                   {{--  @if(isset($footer_links))
                        
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="footer-menu mt-50">
                                <h3 class="footer-title">Links</h3>

                                <ul class="menu-items">
                                    @foreach($copywright_menu as $menu)
                                    <li><a href="{{ preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($menu['link'], "http") === 0 ? $menu['link'] : url('', $menu['link']))) }}">{{ $menu['label'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
 
                    @endif --}}

 

                    <div class="col-lg-3">
                        <div class="footer-newsletter mt-50">
                            <h3 class="footer-title">Newsletter</h3>

                            <div class="newsletter-wrapper">
                                <p>Subscribe to our newsletter to get the latest discount promotions and latest news.</p>

                                <div class="newsletter-form">
                                    <form action="#">
                                        <input type="text" placeholder="Email address">
                                        <button><i class="ion-ios-arrow-right"></i></button>
                                    </form>
                                </div>
                                <span>Don't worry! We don't spam</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-text">
            <div class="container">
                <div class="footer-text-wrapper d-flex flex-wrap align-items-center justify-content-between">
                    <div class="footer-copyright">
                        <p>&copy; 2023 <span> Alumilite Armor </span> Made with <i class="fa fa-heart"></i> by <a href="#">WeCodeLaravel</a></p>
                    </div>
                    @if(isset($copywright_menu))
                    <div class="footer-social">
                        <ul class="socia">
                           
                            @foreach($copywright_menu as $menu)
                            <li><a href="{{ preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($menu['link'], "http") === 0 ? $menu['link'] : url('', $menu['link']))) }}"><small>{{ $menu['label'] }}</small></a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                    @endif



                    <div class="footer-social">
                        <span class="label">Follow us</span>
                        
                        <ul class="socia">
                            @if ($setting->twitter_link)
                                <li><a href="{{ $setting->twitter_link }}" target="_blank"><i class="ion-social-twitter"></i></a></li>
                            @endif
                            @if ($setting->facebook_link)
                                <li><a href="{{ $setting->facebook_link }}" target="_blank"><i class="ion-social-facebook"></i></a></li>
                            @endif
                            @if ($setting->rss_link)
                                <li><a href="{{ $setting->rss_link }}" target="_blank"><i class="ion-social-rss"></i></a></li>
                            @endif
                            @if ($setting->instagram_link)
                                <li><a href="{{ $setting->instagram_link }}" target="_blank"><i class="ion-social-instagram-outline"></i></a></li>
                            @endif
                            @if ($setting->youtube_link)
                                <li><a href="{{ $setting->youtube_link }}" target="_blank"><i class="ion-social-youtube-outline"></i></a></li>
                            @endif
                        </ul>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>

    <!--====== Footer Ends ======-->