    <!--====== Our Car Start ======-->

    <section class="cars-area cars-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="title">Products</h2>
                    </div>
                </div>
            </div>
            <div class="cars-wrapper">
                <div class="cars-tab-menu">
                    <ul class="nav" role="tablist">
                        <li><a class="active" data-bs-toggle="tab" href="#tabAll" role="tab">All</a></li>
                        @foreach ($productTypes as $key => $productType)
                            <li>
                                <a data-bs-toggle="tab" href="#tab{{ $key }}" role="tab"> {{ $productType->name }} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabAll" role="tabpanel">
                        <div class="car-row cars-active">
                            
                            @foreach($products->chunk(2) as $productSet)
                                <div class="car-col">
                                    @foreach($productSet as $product)
                                        <div class="single-car-item mt-50">
                                            <div class="car-image">
                                                <a href="{{ route('products.show',$product->slug) }}">
                                                    @if($product->photo)
                                                        <img src="{{ $product->photo->getUrl() }}" alt="{{ $product->name }}">
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
                                                <span class="body-type"><a href="javacript:void(0);">{{ $product->product_type->name }}</a></span>
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
                                        @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @foreach ($productTypes as $key => $productType)
                        <div class="tab-pane" id="tab{{ $key }}" role="tabpanel">
                            <div class="car-row cars-active">
                                
                                @foreach($productType->products->chunk(2) as $productSet)
                                    <div class="car-col">
                                        @foreach($productSet as $product)
                                            <div class="single-car-item mt-50">
                                                <div class="car-image">
                                                    <a href="{{ route('products.show',$product->slug) }}">
                                                        @if($product->photo)
                                                            <img src="{{ $product->photo->getUrl() }}" alt="{{ $product->name }}">
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
                                                    <span class="body-type"><a href="javacript:void(0);">{{ $product->product_type->name }}</a></span>
                                                    <h4 class="car-title"><a href="{{ route('products.show',$product->slug) }}">{{ $product->name }}</a></h4>
                                                    <span class="price">
                                                        <span class="sale-price">${{ number_format($product->price) }}</span>
                                                        <span class="regular-price">${{ number_format($product->msrp) }}</span>
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
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    
                    
                    
                </div>
                
                {{-- <div class="cars-more mt-50 text-center">
                    <a href="{{ route('products.index') }}" class="main-btn">See All</a>
                </div> --}}
            </div>
        </div>
    </section>

    <!--====== Our Car Ends ======-->