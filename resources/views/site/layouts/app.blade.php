</html>
<!doctype html>
<html class="no-js" lang="en">
{{-- class="@yield('layout', 'boxed app-layout ') @hasSection('htmlClasses') @yield('htmlClasses') @endif @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo) @if($seo->html_classes) {{ $seo->html_classes }} @endif @endforeach @endif" @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo)
@if($seo->html_schema_1) itemscope itemtype="https://schema.org/{{ $seo->html_schema_1 }}" @endif
@if($seo->html_schema_2) itemtype="https://schema.org/{{ $seo->html_schema_2 }}" @endif
@if($seo->html_schema_3) itemtype="https://schema.org/{{ $seo->html_schema_3 }}" @endif
@endforeach @endif --}}

<head>
    @if(app()->environment() === 'production') @endif
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>@yield('title')</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">

    {{-- @includeIf('site.static-seo', ['static-seo' => $seo])) --}}
    
@yield('headcss')    
@include('site.partials.head-assets')
@yield('headjs')
    
</head>

<body>
@include('site.partials.header')
@include('site.partials.header-menu')
{{-- @include('site.partials.mobile-menu') --}}

@yield('content')

@include('site.partials.footer')

    <!--====== BACK TOP TOP START ======-->

    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

    <!--====== BACK TOP TOP ENDS ======-->

@include('site.partials.bottomjs')

@yield('footjs')
    
</body>

</html>
