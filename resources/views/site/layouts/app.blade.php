</html>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>@yield('title')</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    
@yield('headcss')    
@include('site.partials.head-assets')
@yield('headjs')
    
</head>

<body>
@include('site.partials.header')
@include('site.partials.header-menu')
@include('site.partials.mobile-menu')

@yield('content')

@include('site.partials.footer')

    <!--====== BACK TOP TOP START ======-->

    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

    <!--====== BACK TOP TOP ENDS ======-->

@include('site.partials.bottomjs')

@yield('footjs')
    
</body>

</html>
