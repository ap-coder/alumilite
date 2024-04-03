@extends('site.layouts.app')

@section('content')


    <div class="container">
        <div class="inventory-single-content ">
            @include('site.products.show.partials.breadcrumbs')

            <div class="title-price">
                <div class="title-excerpt">
                    <h3 class="entry-title" itemprop="name">{{ $product->name }} <i class="ion-android-checkmark-circle"></i></h3>
                    <p class="entry-excerpt">
                        @if ($product->categories->count() > 0)
                            <strong>Categories: </strong>
                            @foreach ($product->categories as $key => $category)
                                <a href="{{ route('products.index') }}?category={{ $category->slug }}">{{ $category->name }}</a> @if($product->categories->count() > $key+1), @endif
                            @endforeach
                            |
                        @endif
                        @if($product->brand)
                            <strong>Brand: </strong>
                            <a href="{{ route('brands.show',$product->brand->slug) }}" itemprop="brand" itemscope itemtype="http://schema.org/Brand">
                                <span itemprop="name">{{ $product->brand->name }}</span>
                            </a>

                            @if($product->brand_model)
                                | <strong>Model: </strong>
                                <a href="{{ route('products.index') }}?brand={{ $product->brand->slug }}&brandModel={{ $product->brand_model->slug }}" itemprop="model">
                                    {{ $product->brand_model->model }}
                                </a>
                            @endif
                        @endif
                        @if($product->year_to || $product->year_from)
                            | <strong>YEARS: </strong> <span class="years">{{ $product->year_from ?? '' }} - {{ $product->year_to ?? '' }}</span>
                        @endif
                    </p>
                </div>

                <div class="price">
                    <span class="price">
                        @if ($product->msrp)
                            <span class="msrp">MSRP:
                                <strong style="text-decoration: line-through;" itemprop="priceCurrency" content="USD">
                                    $<span itemprop="priceSpecification" itemscope itemtype="http://schema.org/PriceSpecification">
                                        <span itemprop="price" content="{{ $product->msrp }}">{{ number_format($product->msrp) }}</span>
                                    </span>
                                </strong>
                            </span> <br>
                        @endif
                        <span class="sale-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">$
                            <meta itemprop="priceCurrency" content="USD" />
                            <span itemprop="price" content="{{ $product->price }}">{{ number_format($product->price) }}</span>
                        </span>
                    </span>   <br>
                </div>
            </div>
        </div>
    </div>

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


@endsection

@section('headcss')
@endsection
@section('headjs')
@endsection

@section('footjs')

{{-- Temporary debug output --}}
{{-- {{ var_dump($product->paypal_prod) }} --}}

    @if(isset($product->paypal_prod))
    <script>
        document.getElementById('paypal-button').addEventListener('click', function() {

            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'paypal_button_click',
                'product_id': '{!! $product->id !!}',
                'product_name': '{!! $product->name !!}',
                'product_paypal_link': '{!! $product->paypal_prod !!}'
            });

            window.open('{!! $product->paypal_prod !!}', '_blank');
        });
    </script>

    @endif
@endsection

@section('jsonld')
<script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "{{ $product->name }}",
      "image": ["{{ $product->photo ? $product->photo->getUrl('product') : '' }}"],
      "description": "{!! $product->staticSeo ? $product->staticSeo->meta_description : '' !!}",
 
      "brand": {
        "@type": "Brand",
        "name": "{{ $product->brand ? $product->brand->name : '' }}",
        "model": "{{ $product->brand_model ? $product->brand_model->model : '' }}"
      },
     
      "offers": {
        "@type": "Offer",
        "url": "{{ route('products.show',$product->slug) }}",
        "priceCurrency": "USD",
        "price": {{ $product->price }},
        "priceValidUntil": "{{ $product->created_at }}",
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock"
      }
    }
    </script>
@endsection


