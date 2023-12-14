    <!--====== Footer Start ======-->

    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-4">
                        <div class="text-widget mt-50">
                            <a href="#">
                                <img src="{{ asset('assets/images/aalogo-horizontal.png') }}" alt="alumilite armor footer logo">
                            </a>
                            <div class="text-content">
                                <div class="single-text">
                                    <p>Parowan, UT 84761</p>
                                </div>
                                <div class="single-text">
                                    <p>
                                        {{-- <span><a href="mailto:tkatwyk@gmail.com">tkatwyk@gmail.com</a></span> --}}
                                        <span><a href="tel:4359901012">435-990-1012</a></span>
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
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>

    <!--====== Footer Ends ======-->