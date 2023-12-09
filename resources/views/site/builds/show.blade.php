@extends('site.layouts.app')

@section('content')

    <!--====== Inventory Single Start ======-->

    <section class="inventory-single-area">
        @include('site.builds.partials.show.build-images')


        <div class="container">
            <div class="inventory-single-content ">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Builds</a></li>
                    <li class="breadcrumb-item active">tapas build name here </li>
                </ul>
                <div class="listing-social d-lg-flex justify-content-between">
                   {{--  <div class="listing-btn">
                        <ul class="listing-actions">
                            <li><a href="#"><i class="ion-ios-heart-outline"></i>  Save</a></li>
                            <li><a href="#"><i class="ion-checkmark"></i>  in compare list</a></li>
                            <li><a href="#"><i class="ion-speedometer"></i>  register test drive</a></li>
                            <li><a href="#"><i class="ion-document-text"></i>  brochure</a></li>
                        </ul>
                    </div> --}}
                    <div class="social-share">
                        <ul class="social">
                            <li><a class="facebook" href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a class="googleplus" href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="title-price">
                    <div class="title-excerpt">
                        <h3 class="entry-title">tapas build name here <i class="ion-android-checkmark-circle"></i></h3>
                        <p class="entry-excerpt">tapas build subtitle here</p>
                    </div>
                     
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <div class="overview">
                            <h5 class="singe-title">Build Overview</h5>

                            {{-- tapas build description here --}}
                        </div>

{{-- @include('site.builds.partials.show.tech-specs') --}}
{{-- @include('site.builds.partials.show.features') --}}

                        <div class="consumer-reviews">
                            <h5 class="singe-title">reviews</h5>

@include('site.builds.partials.show.reviews-stats')
@include('site.builds.partials.show.review')
@include('site.builds.partials.show.review-form')

                        </div>

@include('site.builds.partials.show.brand-builds')

                    </div>

                    <div class="col-xxl-3 col-lg-4">
                        <div class="sidebar">
{{-- @include('site.builds.partials.show.sidebar.trusted') --}}
{{-- @include('site.builds.partials.show.sidebar.dealer-info') --}}
@include('site.builds.partials.show.sidebar.contact')
{{-- @include('site.builds.partials.show.sidebar.similar-posts') --}}
{{-- @include('site.builds.partials.show.sidebar.similar-listings') --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <!--====== Inventory Single Ends ======-->

@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection    