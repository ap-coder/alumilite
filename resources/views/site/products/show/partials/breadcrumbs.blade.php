<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="{{ url('') }}" itemprop="item">
            <span itemprop="name">Home</span>
            <meta itemprop="url" content="{{ url('') }}">
        </a>
        <meta itemprop="position" content="1" />
    </li>
{{--    @if ($product->categories->count() > 0)--}}
{{--        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">--}}
{{--            <a href="javascript:void(0);" itemprop="item">--}}
{{--                <span itemprop="name">{{ $product->categories->first()->name }}</span>--}}
{{--                <!-- Assuming no URL for categories in JavaScript void; otherwise, add meta tag for URL here -->--}}
{{--            </a>--}}
{{--            <meta itemprop="position" content="2" />--}}
{{--        </li>--}}
{{--    @else--}}
{{--        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">--}}
{{--            <a href="{{ url('products') }}" itemprop="item">--}}
{{--                <span itemprop="name">Products</span>--}}
{{--                <meta itemprop="url" content="{{ url('products') }}">--}}
{{--            </a>--}}
{{--            <meta itemprop="position" content="{{ $product->categories->count() > 0 ? '3' : '2' }}" />--}}
{{--        </li>--}}
{{--    @endif--}}
    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="{{ url('products') }}" itemprop="item">
            <span itemprop="name">Products</span>
            <meta itemprop="url" content="{{ url('products') }}">
        </a>
        <meta itemprop="position" content="{{ $product->categories->count() > 0 ? '3' : '2' }}" />
    </li>
    <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <span itemprop="name">{{ $product->brand->name }} {{ $product->name }}</span>
        <meta itemprop="url" content="{{ url('products/'.$product->slug) }}">
{{--        <meta itemprop="position" content="{{ $product->categories->count() > 0 ? '4' : '3' }}" />--}}
    </li>
</ul>
