@extends('site.layouts.app')

{{-- added this part for custom css for this page only. --}}
@section('headcss')
    @if (isset($page->custom_css))
        <style>
            {!! $page->custom_css !!}
        </style>
    @endif
@endsection


@section('masthead')
    @includeIf('site.contentpage.partials.masthead', ['featured_image' => @$page->featured_image])
@endsection

@section('above-content')

    @if(isset($page->pagesFrontContentSections))
        @foreach($page->pagesFrontContentSections as $ts)
            @if ($ts->location=='content_top')
                {!! $ts->section !!}
            @endif
        @endforeach
    @endif

@endsection

@section('content')

<!-- #wrapper-content start -->

        <div id="pageSectionDiv">

        @if($page)
                @foreach($page->pagesFrontPagesections as $ps)
                    <div class="ps-wrapper-{{ $ps->id }}">
                    {{--  {{ $ps->nickname }} --}}

                    @if($ps->ps_css)
                        @section('headcss')
                            {!! $ps->ps_cdn_css !!}
                            <style>
                                {!! $ps->ps_css !!}
                            </style>
                        @endsection
                    @endif

                    {!! $ps->section !!}

                    @if($ps->ps_js)
                        @section('footjs')
                            @parent
                            {!! $ps->ps_cdn_js !!}
                            <script>
                                {!! $ps->ps_js !!}
                            </script>
                        @endsection
                    @endif
                    </div>
                @endforeach
            @endif
        </div>

@endsection

@section('below-content')

  {{-- THIS IS FOR BELOW CONTENT > CONTENT SECTION FOR PAGES CRUD --}}

  @if(isset($page->pagesFrontContentSections))
    @foreach($page->pagesFrontContentSections as $ts)
        @if ($ts->location=='content_bottom')
            {!! $ts->section !!}
        @endif
    @endforeach
  @endif

@endsection

@section('footjs')
    @parent
    <script>
        $( document ).ready(function() {
            $('#pageSectionDiv').find("img").each(function(k, el) {
                var src=$(el).attr("src");
                var result = src.split('/');
                var lastEl = result[result.length-1];

                var newSrc = $(el).attr("src").replace(src, "{{ asset('site/img/landing-pages') }}/"+lastEl);
                $(el).attr("src", newSrc);

            });
        });
    </script>
@endsection
