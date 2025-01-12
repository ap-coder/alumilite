<!DOCTYPE html>
    <html lang="en" class="no-js @hasSection('htmlClasses') @yield('htmlClasses') @endif @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo) @if($seo->html_classes) {{ $seo->html_classes }} @endif @endforeach @endif" @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo)
    @if($seo->html_schema_1) itemscope itemtype="https://schema.org/{{ $seo->html_schema_1 }}" @endif
    @if($seo->html_schema_2) itemtype="https://schema.org/{{ $seo->html_schema_2 }}" @endif
    @if($seo->html_schema_3) itemtype="https://schema.org/{{ $seo->html_schema_3 }}" @endif
    @endforeach @endif
    >

    <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MQXHGNH2');</script>
    <!-- End Google Tag Manager -->

    @if(app()->environment() === 'production') @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('site.static-seo')


    <style>
        .spinner-border { width: 2rem; height: 2rem; border-width: 0.25em; }
        .spinner-border::after { width: 2rem; height: 2rem; border-width: 0.25em; }
        .spinner-border, .spinner-border::before, .spinner-border::after { border-color: #000; /* Change the color as needed */ border-right-color: transparent; }
        @keyframes spinner-border {
            to { transform: rotate(360deg); }
        }
        .spinner-border { display: inline-block; position: relative; width: 2rem; height: 2rem; vertical-align: text-bottom; border: 0.25em solid currentColor; border-right-color: transparent; border-radius: 50%; animation: spinner-border .75s linear infinite; margin-top: 6px; }
    </style>
@yield('headcss')
@include('site.partials.head-assets')
@yield('headjs')

</head>

    <body @hasSection('bodyData') data-plugin-page-transition="@yield('bodyData')" @endif class="@hasSection('bodyClasses') @yield('bodyClasses')  @endif @if($staticseo) @foreach($staticseo->where('page_path',request()->path()) as $seo) @if($seo->body_classes) {{ $seo->body_classes }} @endif @endforeach @endif"
    @foreach($staticseo as $seo) @if(request()->path() == $seo->page_path)
    @if($seo->body_schema) itemscope="" itemtype="http://schema.org/{{ $seo->body_schema }}" @endif
    @if($seo->body_schema_itemid) itemid="{{ $seo->body_schema_itemid }}" @endif
    @endif @endforeach >

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQXHGNH2"  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

@include('site.partials.header')
@include('site.partials.header-menu')
@include('site.partials.mobile-menu')

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
