@extends('site.layouts.app')

@section('content')

    <!--====== Page Breadcrumb Start ======-->
    <div class="container">
    <div class="inventory-single-content ">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            @if ($product->categories->count() > 0)
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $product->categories->first()->name }}</a></li>
            @endif
            <li class="breadcrumb-item active">{{ $product->name }}</li>
        </ul>

        <div class="title-price">
            <div class="title-excerpt">
                <h3 class="entry-title">{{ $product->name }} <i class="ion-android-checkmark-circle"></i></h3>
                <p class="entry-excerpt">
                    @if($product->brand)
                        <strong>Brand: </strong> <a href="{{ route('brands.show',$product->brand->slug) }}">{{ $product->brand->name }}</a>
                    @endif
                    {{ $product->brand_model ? '| Model: ' . $product->brand_model->model : '' }}
                </p>
            </div>
            <div class="price">
                <span class="price">
                    <span class="sale-price">${{ number_format($product->price) }}</span>
                    {{-- <span class="regular-price">$28,500</span>
                    <span class="msrp">MSRP: <strong>$39,000</strong></span> --}}
                    @if ($product->msrp)
                        <span class="msrp">MSRP: <strong>${{ number_format($product->msrp) }}</strong></span>
                    @endif
                </span>
            </div>
        </div>
    </div>
    </div>
    <!--====== Inventory Single Dealership Start ======-->

    <section class="inventory-single-dealership-area">
        <div class="container">
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

                        <div class="listing-social d-lg-flex justify-content-between">
                            @include('site.products.show.partials.social-share')
                        </div>
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
