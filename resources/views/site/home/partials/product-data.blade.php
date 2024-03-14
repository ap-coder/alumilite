@foreach($products as $product)
    <div class="col-lg-3 col-md-6">
        <div class="single-car-item mt-50 product-item">
                <div class="car-image">
                    <a href="{{ route('products.show',$product->slug) }}">
                        @if($product->photo)
                            {{-- {{ $product->getFirstMedia('photo')('responsive') }} --}}
                            <img src="{{ $product->photo->getUrl('excerpt') }}" alt="{{ $product->name }}">
                        @else
                            @if ($env=='local')
                                <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $product->name }}">
                            @endif

                        @endif
                    </a>

                </div>
                <div class="car-content">

                    @if ($product->brand)
                        <div class="author-meta">
                            <span><a href="{{ route('brands.show',$product->brand->slug) }}">{{ $product->brand->name }}</a>
                                @if ($product->brand_model)
                                    | {{ $product->brand_model->model }}
                                @endif
                                @if($product->year_to || $product->year_from)
                                    | <span class="years">{{ $product->year_to ?? '' }} - {{ $product->year_from ?? '' }}</span>
                                @endif
                            </span>
                        </div>
                    @endif
                    <h4 class="car-title"><a href="{{ route('products.show',$product->slug) }}">{{ $product->name }}</a></h4>
                        <p>{!! Str::words($product->excerpt, $limit = 15, $end = ' ...') !!}</p>
                    <span class="price">
                        @if ($product->price && $product->msrp)
                                <span class="sale-price">${{ number_format($product->price) }}</span>
                                <span class="regular-price">${{ number_format($product->msrp) }}</span>
                            @else
                                <span class="price-amount">${{ number_format($product->price) }}</span>
                            @endif
                    </span>

                </div>
            </div>

        </div>
    @endforeach
