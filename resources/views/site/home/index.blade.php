@extends('site.layouts.app')

@section('content')

@include('site.home.partials.slider')
{{-- @include('site.home.partials.search') --}}
{{-- @include('site.home.partials.trending') --}}
{{-- @include('site.home.partials.browse-types') --}}

@includeIf('site.home.partials.products', ['products' => $products ]))
{{-- @includeIf('site.home.partials.builds', ['builds' => $builds ])) --}}
@includeIf('site.home.partials.brands', ['brands' => $brands ])
@includeIf('site.home.partials.news-section', ['posts' => $posts ])

{{-- @include('site.home.partials.dealer') --}}
{{-- @include('site.home.partials.reviews') --}}
{{-- @include('site.home.partials.choose') --}}

@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection