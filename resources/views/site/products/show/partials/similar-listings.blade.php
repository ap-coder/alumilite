<div class="inventory-single-features-car bottom">
    <h5 class="singe-title">similar Products</h5>

    <div class="row car-row cars-active-3">

        @foreach($similarProducts as $product)
        <div class="car-col col-lg-3">
            
                <div class="single-car-item mt-50">
                    <div class="car-image">
                        <a href="{{ route('products.show',$product->slug) }}">
                            @if($product->photo)
                                {{-- {{ $product->getFirstMedia('photo')('responsive') }} --}}
                                <img src="{{ $product->photo->getUrl() }}" alt="{{ $product->name }}">
                            @else
                                @if ($env=='local')
                                    <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $product->name }}">
                                @endif
                                
                            @endif
                        </a>
                        {{-- <ul class="car-meta">
                            <li>
                                <button type="button">
                                    <i class="ion-ios-loop-strong"></i>
                                    <span class="car-tooltip compare">Add To Compare </span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="ion-arrow-expand"></i>
                                    <span class="car-tooltip View">Click To View</span>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="ion-android-favorite-outline"></i>
                                    <span class="car-tooltip favourite">Add To Favourite</span>
                                </button>
                            </li>
                        </ul>
                        <span class="sale-badge">Sale</span> --}}
                    </div>
                    <div class="car-content">
                        <span class="body-type"><a href="javacript:void(0);">{{ $product->product_type->name }}</a>
                        </span>
                        @if ($product->brand)
                            <div class="author-meta">
                                <span><a href="{{ route('brands.show',$product->brand->slug) }}">{{ $product->brand->name }}</a> 
                                    @if ($product->brand_model)
                                        {{ $product->brand_model->model }}
                                    @endif
                                </span>
                            </div>
                        @endif
                        <h4 class="car-title"><a href="{{ route('products.show',$product->slug) }}">{{ $product->name }}</a></h4>
                        <span class="price">
                                @if ($product->price && $product->msrp)
                                    <span class="sale-price">${{ number_format($product->price) }}</span>
                                    <span class="regular-price">${{ number_format($product->msrp) }}</span>
                                @else
                                    <span class="price-amount">${{ number_format($product->price) }}</span>
                                @endif
                            {{-- <span class="discount-percentage">Save 35%</span> --}}
                        </span>
                        {{-- <div class="listing-colors d-flex align-items-center">
                            <span class="title">Colors:</span>
                            <ul class="color-items media-body">
                                <li><span data-color="#f2f2f2"></span></li>
                                <li><span data-color="#fff"></span></li>
                                <li><span data-color="#891717"></span></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                
        </div>
        @endforeach
    </div>
</div>