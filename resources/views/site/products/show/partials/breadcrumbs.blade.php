<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="{{ url('') }}" itemprop="item">
            <span itemprop="name">Home</span>
            <meta itemprop="url" content="{{ url('') }}">
        </a>
        <meta itemprop="position" content="1" />
    </li>

    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="{{ url('products') }}" itemprop="item">
            <span itemprop="name">Products</span>
            <meta itemprop="url" content="{{ url('products') }}">
        </a>
        <meta itemprop="position" content="{{ $product->categories->count() > 0 ? '2' : '3' }}" />
    </li>
    <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <span itemprop="name">{{ $product->brand->name ?? '' }} {{ $product->brand_model->model ?? '' }} {{ $product->name }}</span>
        <meta itemprop="url" content="{{ url('products/'.$product->slug) }}">
        <meta itemprop="position" content="{{ $product->categories->count() > 0 ? '3' : '4' }}" />
    </li>
</ul>
