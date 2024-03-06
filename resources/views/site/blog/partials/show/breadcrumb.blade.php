<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="{{ url('/') }}" itemprop="item">
            <span itemprop="name">Home</span>
        </a>
        <meta itemprop="position" content="1">
    </li>
    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="{{ url('blog') }}" itemprop="item">
            <span itemprop="name">Blog</span>
        </a>
        <meta itemprop="position" content="2">
    </li>
    <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <span itemprop="name">Current Page Title</span>
        <meta itemprop="position" content="3">
    </li>
</ul>
<hr />
