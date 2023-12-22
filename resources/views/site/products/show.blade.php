@extends('site.layouts.app')

@section('content')
    <!--====== Page Breadcrumb Start ======-->

    <div class="page-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                        @if ($product->categories->count() > 0)
                            <li class="breadcrumb-item"><a
                                    href="javascript:void(0);">{{ $product->categories->first()->name }}</a></li>
                        @endif
                        <li class="breadcrumb-item active">{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--====== Page Breadcrumb Start ======-->

    <!--====== Inventory Single Dealership Start ======-->

    <section class="inventory-single-dealership-area">
        <div class="container">
            <div class="inventory-single-dealership-content d-lg-flex justify-content-between">
                <div class="title-price">
                    <div class="title-excerpt">
                        <h3 class="entry-title">{{ $product->name }} <i class="ion-android-checkmark-circle"></i></h3>
                        <div class="ck-content">
                            <p class="entry-excerpt">{{ $product->excerpt }}</p>
                        </div>
                    </div>
                    <div class="price">
                        <span class="price">
                            <span class="price-amount">${{ number_format($product->price) }}</span>
                            @if ($product->msrp)
                                <span class="msrp">MSRP: <strong>${{ number_format($product->msrp) }}</strong></span>
                            @endif
                        </span>
                    </div>
                </div>

                <div class="listing-social text-lg-end">
                    <div class="social-share">
                        <ul class="social">
                            <li><a class="facebook" href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a class="googleplus" href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li><a class="tumblr" href="#"><i class="ion-social-tumblr"></i></a></li>
                            <li><a class="rss" href="#"><i class="ion-social-rss"></i></a></li>
                        </ul>
                    </div>
                    {{-- <div class="listing-btn">
                        <ul class="listing-actions">
                            <li><a href="#"><i class="ion-ios-heart-outline"></i>  Save</a></li>
                            <li><a href="#"><i class="ion-checkmark"></i>  in compare list</a></li>
                            <li><a href="#"><i class="ion-speedometer"></i>  register test drive</a></li>
                            <li><a href="#"><i class="ion-document-text"></i>  brochure</a></li>
                        </ul>
                    </div>  --}}
                </div>
            </div>

            <div class="inventory-single-dealership-main">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        @include('site.products.show.partials.product-images')


                        <div class="inventory-single-dealership-tab">
                            @include('site.products.show.partials.tab-list')

                            <div class="tab-content">
                                @include('site.products.show.partials.description-tab')
                                @include('site.products.show.partials.tech-specs-tab')
                                @include('site.products.show.partials.features-tab')
                                {{-- @include('site.products.show.partials.reviews-tab') --}}
                            </div>
                        </div>

                        @includeIf('site.products.show.partials.similar-listings', [
                            'products' => $similarProducts,
                        ])

                    </div>
                    @include('site.products.show.partials.sidebar')

                </div>
            </div>
        </div>
    </section>

    <!--====== Inventory Single Dealership Ends ======-->
@endsection

@section('headcss')
@endsection
@section('headjs')
@endsection
@section('footjs')
@endsection
