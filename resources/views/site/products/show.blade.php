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
                        @if ($product->categories->count() > 0)
                            <strong>Categories: </strong> 
                            @foreach ($product->categories as $key => $category)
                                <a href="{{ route('products.index') }}?category={{ $category->slug }}">{{ $category->name }}</a> @if($product->categories->count() > $key+1), @endif
                            @endforeach
                            | 
                        @endif
                        @if($product->brand)
                            <strong>Brand: </strong> <a href="{{ route('brands.show',$product->brand->slug) }}">{{ $product->brand->name }}</a>

                            @if($product->brand_model)
                                <strong>Model: </strong> <a href="{{ route('products.index') }}?brand={{ $product->brand->slug }}&brandModel={{ $product->brand_model->slug }}">{{ $product->brand_model->model }}</a>
                            @endif

                        @endif
                        
                    </p>
                </div>
                {{-- <div class="right-group"> --}}
                    <div class="price">
                        <span class="price">
                            
                            {{-- <span class="regular-price">$28,500</span> --}}
                            {{-- <span class="msrp">MSRP: <strong style="text-decoration: line-through;">$39,000</strong></span>  <br> --}}
                            @if ($product->msrp)
                                <span class="msrp">MSRP: 
                                    <strong style="text-decoration: line-through;">
                                        ${{ number_format($product->msrp) }}
                                    </strong>
                                </span> <br>
                            @endif
                            <span class="sale-price">${{ number_format($product->price) }}</span>
                        </span>
                        <!-- Image that acts as a button link -->
                    <br>
                
                    {{-- <div class="paypal-cont">
                        <img class="pt-3" id="paypal-button" src="https://alumilitearmor.com/storage/96/paypal-button.png" alt="Buy With PayPal" style="cursor: pointer;width:15rem;">
                    </div> --}}
                {{-- </div> --}}
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

                    {{-- @include('site.products.show.partials.social-share') --}}

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

{{-- Temporary debug output --}}
{{ var_dump($product->paypal_prod) }}

    @if($product->paypal_prod)
    <script>
        document.getElementById('paypal-button').addEventListener('click', function() {
            window.open('{!! $product->paypal_prod !!}', '_blank');
        });
    </script>
    @endif
@endsection
