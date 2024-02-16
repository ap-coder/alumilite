<!DOCTYPE html>
    <html lang="en" class="no-js @hasSection('htmlClasses') @yield('htmlClasses') @endif @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo) @if($seo->html_classes) {{ $seo->html_classes }} @endif @endforeach @endif" @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo)
    @if($seo->html_schema_1) itemscope itemtype="https://schema.org/{{ $seo->html_schema_1 }}" @endif
    @if($seo->html_schema_2) itemtype="https://schema.org/{{ $seo->html_schema_2 }}" @endif
    @if($seo->html_schema_3) itemtype="https://schema.org/{{ $seo->html_schema_3 }}" @endif
    @endforeach @endif
    >

<head>
    @if(app()->environment() === 'production') @endif
    <meta charset="utf-8">
    
    @include('site.static-seo')

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">

    {{-- @includeIf('site.static-seo', ['static-seo' => $seo])) --}}
    
@yield('headcss')    
@include('site.partials.head-assets')
@yield('headjs')
    
</head>

<body @hasSection('bodyData') data-plugin-page-transition="@yield('bodyData')" @endif class="@hasSection('bodyClasses') @yield('bodyClasses')  @endif @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo) @if($seo->body_classes) {{ $seo->body_classes }} @endif @endforeach @endif"
    @foreach($staticseo as $seo) @if(request()->path() == $seo->page_path)
    @if($seo->body_schema) itemscope="" itemtype="http://schema.org/{{ $seo->body_schema }}" @endif
    @if($seo->body_schema_itemid) itemid="{{ $seo->body_schema_itemid }}" @endif
    @endif @endforeach >

@include('site.partials.header')
@include('site.partials.header-menu')
{{-- @include('site.partials.mobile-menu') --}}

<div role="main" class="@yield('main-classes') @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo) @if($seo->main_classes) {{ $seo->main_classes }} @endif @endforeach @endif">
    @yield('page-title-section')
    @yield('masthead')
    @include('site.layouts.partials.top_sections')
    @yield('above-content')
    @yield('content')
    @yield('below-content')
    @include('site.layouts.partials.bottom_sections')

</div>


@include('site.partials.footer')

    <!--====== BACK TOP TOP START ======-->

    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

    <!--====== BACK TOP TOP ENDS ======-->

@include('site.partials.bottomjs')

@yield('footjs')
    
</body>

</html>
