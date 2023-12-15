@if($blog_menu)
    <div class="blog-sidebar-category">
        <h3 class="sidebar-title">Menu</h3>

        <div class="category-list">
            <ul class="list">
                @foreach($blog_menu as $menu)
                <li><a href="{{ preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode(strpos($menu['link'], "http") === 0 ? $menu['link'] : url('', $menu['link']))) }}">{{ $menu['label'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
