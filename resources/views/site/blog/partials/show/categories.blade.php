@if($categories)
                            <div class="blog-sidebar-category">
                                <h3 class="sidebar-title">categories</h3>

                                <div class="category-list">
                                    <ul class="list">
                                        <li><a href="#">News<span>(12)</span></a></li>
                                        <li><a href="#">Inspiration<span>(6)</span></a></li>
                                        <li><a href="#">Review<span>(24)</span></a></li>
                                        <li><a href="#">Technology<span>(5)</span></a></li>
                                        <li><a href="#">Community<span>(9)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            @if($blog_menu)
                            <div class="blog-sidebar-category">
                                <h3 class="sidebar-title">Menu</h3>

                                <div class="category-list">
                                    <ul class="list">
                                        @foreach($blog_menu as $menu)
                                        <li><a href="{{ preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($menu['link'], "http") === 0 ? $menu['link'] : url('', $menu['link']))) }}">{{ $menu['label'] }}</a></li>
                                        @enforeach

                                    </ul>
                                </div>
                            </div>
                            @endif
