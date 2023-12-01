@extends('site.layouts.app')

@section('content')

@include('site.partials.home.slider')
@include('site.partials.home.search')
@include('site.partials.home.trending')
@include('site.partials.home.browse-types')
@include('site.partials.home.products')
@include('site.partials.home.testimonial')
@include('site.partials.home.brands')
@include('site.partials.home.dealer')
@include('site.partials.home.choose')
@include('site.partials.home.news-section')

@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection