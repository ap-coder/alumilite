<ul class="main-menu">
    @if(isset($main_menu))
        
    @foreach($main_menu as $menu)

        @if ($menu['logged_in_only']==1)

            @if (auth()->check() && empty(menuRoles($menu['id'])) && empty(menuUsers($menu['id'])))
                <li>
                    <a href="{{ preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($menu['link'], "http") === 0 ? $menu['link'] : url('', $menu['link'])))  }}" title="{{ $menu['label'] }}">
                        @if ($menu['icon_only_menu']==1)
                            <i class="{{ $menu['menu_icon_class'] }}"></i>
                        @else
                            {{ $menu['label'] }} 
                        @endif
                        
                    </a>
                    @if( $menu['child'] )
                        <ul class="sub-menu">
                            @foreach( $menu['child'] as $child )
                            @if ($child['logged_in_only']==1)

                                @if (auth()->check() && empty(menuUsers($child['id'])) && empty(menuRoles($child['id'])))
                                    <li>
                                        <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}" itemprop="url">{{ $child['label'] }}</a>
                                    </li>
                                @elseif(auth()->check() && (in_array(userID(),menuUsers($child['id'])) || array_intersect(userRoles(), menuRoles($child['id']))))
                                    <li>
                                        <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}" itemprop="url">{{ $child['label'] }}</a>
                                    </li>
                                @endif

                            @else
                                <li>
                                    <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}" itemprop="url">{{ $child['label'] }}</a>
                                </li>
                            @endif
                            @endforeach
                        </ul><!-- /.sub-menu -->
                    @endif
                </li>
            @elseif(auth()->check() && (in_array(userID(),menuUsers($menu['id'])) || array_intersect(userRoles(), menuRoles($menu['id']))))
            <li>
                <a href="{{ preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($menu['link'], "http") === 0 ? $menu['link'] : url('', $menu['link'])))  }}" title="{{ $menu['label'] }}">
                    @if ($menu['icon_only_menu']==1)
                        <i class="{{ $menu['menu_icon_class'] }}"></i>
                    @else
                        {{ $menu['label'] }} 
                    @endif
                </a>
                @if( $menu['child'] )
                    <ul class="sub-menu">
                        @foreach( $menu['child'] as $child )
                        @if ($child['logged_in_only']==1)                               

                            @if (auth()->check() && empty(menuUsers($child['id'])) && empty(menuRoles($child['id'])))
                                <li>
                                    <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}" itemprop="url">{{ $child['label'] }}</a>
                                </li>
                            @elseif(auth()->check() && (in_array(userID(),menuUsers($child['id'])) || array_intersect(userRoles(), menuRoles($child['id']))))
                                <li>
                                    <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}" itemprop="url">{{ $child['label'] }}</a>
                                </li>
                            @endif

                        @else
                            <li>
                                <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}" itemprop="url">{{ $child['label'] }}</a>
                            </li>
                        @endif
                        @endforeach
                    </ul><!-- /.sub-menu -->
                @endif
            </li>
            @endif
            
        @else
            <li>
                <a href="{{ preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($menu['link'], "http") === 0 ? $menu['link'] : url('', $menu['link'])))  }}" title="{{ $menu['label'] }}">
                    @if ($menu['icon_only_menu']==1)
                        <i class="{{ $menu['menu_icon_class'] }}"></i>
                    @else
                        {{ $menu['label'] }} 
                    @endif
                </a>
                @if( $menu['child'] )
                    <ul class="sub-menu">
                        @foreach( $menu['child'] as $child )

                            @if ($child['logged_in_only']==1)

                                @if (auth()->check() && empty(menuUsers($child['id'])) && empty(menuRoles($child['id'])))
                                    <li>
                                        <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}" itemprop="url">{{ $child['label'] }}</a>
                                    </li>
                                @elseif(auth()->check() && (in_array(userID(),menuUsers($child['id'])) || array_intersect(userRoles(), menuRoles($child['id']))))
                                    <li>
                                        <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}" itemprop="url">{{ $child['label'] }}</a>
                                    </li>
                                @endif

                            @else
                                <li>
                                    <a href="{{  preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($child['link'], "http") === 0 ? $child['link'] : url('',$child['link']))) }}" title="{{ $child['label'] }}" itemprop="url">{{ $child['label'] }}</a>
                                </li>
                            @endif
                               
                        @endforeach
                    </ul><!-- /.sub-menu -->
                @endif
            </li> 
        @endif
            
    @endforeach

    @endif
</ul>