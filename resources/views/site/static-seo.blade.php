@foreach($staticseo as $seo)
@if(request()->path() == $seo->page_path)

    @env('production')
    <!-- start jsonld -->
    {!! $seo->json_ld_tag ?  : '' !!}
    @yield('jsonld')
    <!-- / start jsonld -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="keywords" content="yamaha utv parts, argo utv parts, honda utv parts, canam utv parts, kawasaki utv parts, arctic cat utv parts, polaris utv parts">
    <meta name="language" content="English">
    <meta name="revisit-after" content="5 days">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    @if($seo->canonical)
    <link rel="canonical" href="{{ url()->current() }}">
    @endif
    @if($seo->noindex)
    <meta name="robots" content="noindex,follow">
    @elseif($seo->noindex && $seo->nofollow)
    <meta name="robots" content="noindex,nofollow">
    @else
    <meta name="robots" content="index,follow">
    @endif
    @if($seo->noarchive) <meta name="robots" content="noarchive"> @endif
    @if($seo->nosnippet) <meta name="robots" content="nosnippet"> @endif
    @if($seo->meta_title)
    <title>{!! $seo->meta_title !!}</title>
    <meta property="title" content="{!! $seo->meta_title !!}"/>
    @else
    <title>Alumilite Armor Expert Custom ATV - UTV Enclosure Solutions</title>
    @endif
    @if($seo->meta_description)
    <meta property="description" content="{!! $seo->meta_description !!}"/>
    @endif
    @if($seo->facebook_title)
    <meta property="og:site_name" content="Code">
    <meta property="og:url" content="{!! url()->current() !!}"/>
    <meta property="og:type" content="{!! $seo->open_graph_type !!}"/>
    <meta property="og:title" content="{!! $seo->facebook_title !!}"/>
    @if($seo->facebook_description)
    <meta property="og:description" content="{!! $seo->facebook_description !!}"/>
    @endif
    @endif
    @if($seo->twitter_title)
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@alumilitearmor"/>
    <meta name="twitter:title" content="{!! $seo->twitter_title !!}"/>
    @if($seo->twitter_description)
    <meta name="twitter:description" content="{!! $seo->twitter_description !!}"/>
    @endif
    @endif
    @if($seo->noimageindex)
    <meta name="robots" content="noimageindex">
    @else
    @if($seo->seo_image)
    <meta property="og:image" content="{{ $seo->seo_image->getUrl('fb') }}"/>
    <meta property="twitter:image" content="{{ $seo->seo_image->getUrl('twitter') }}"/>
    <meta itemprop="thumbnailUrl" content="{{ $seo->seo_image->getUrl('cover') }}"/>
    <meta itemprop="width" content="1200"/>
    <meta itemprop="height" content="500"/>
    @else
    <meta property="og:image" content="{{ $seo->seo_image_url }}"/>
    <meta property="twitter:image" content="{{ $seo->seo_image_url }}"/>
    <meta itemprop="thumbnailUrl" content="{{ $seo->seo_image_url }}"/>
    <meta itemprop="width" content="1200"/>
    <meta itemprop="height" content="500"/>
    @endif
    @endif
    @else
    <meta name="robots" content="noindex, nofollow">
    @endenv
@endif
@endforeach
