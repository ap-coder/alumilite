@extends('site.layouts.app')

@section('content')

@include('site.home.partials.slider')
{{-- @include('site.home.partials.search') --}}
{{-- @include('site.home.partials.trending') --}}
{{-- @include('site.home.partials.browse-types') --}}
@include('site.home.partials.products')
{{-- @include('site.home.partials.testimonial') --}}
@include('site.home.partials.brands')
{{-- @include('site.home.partials.dealer') --}}
{{-- @include('site.home.partials.choose') --}}
@include('site.home.partials.news-section')

@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection