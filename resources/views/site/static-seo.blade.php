@foreach($staticseo as $seo)
    @if(request()->path() == $seo->page_path)

    @env('production')
        <meta name="language" content="English">
        <meta name="revisit-after" content="8 days">
        @if($seo->noindex)
        <meta name="robots" content="noindex,follow">
        @elseif($seo->noindex && $seo->noindex)
        <meta name="robots" content="noindex,nofollow">
        @else
        <meta name="robots" content="index,follow">
        @endif
        @if($seo->noarchive) <meta name="robots" content="noarchive"> @endif
        @if($seo->nosnippet) <meta name="robots" content="nosnippet"> @endif
    @else
        <meta name="robots" content="noindex, nofollow">
    @endenv

        @if($seo->meta_title)
            <title>{!! $seo->meta_title !!}</title>
            <meta property="title" content="{!! $seo->meta_title !!}"/>
            @if($seo->meta_description)
                <meta property="description" content="{!! $seo->meta_description !!}"/>
            @endif
        @endif
        <!-- start jsonld -->
        {!! $seo->json_ld_tag ?  : '' !!}
        @yield('jsonld')
        <!-- / start jsonld -->

        @if($seo->facebook_title)
            <!-- CUSTOM META FROM CODE -->
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

    @endif
@endforeach
