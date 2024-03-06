    <!--====== Our Car Start ======-->
@if ($products->count()>0)
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
                                            <span class="body-type"><a href="javacript:void(0);">{{ $product->product_type->name }}</a></span>
                                            <h4 class="car-title"><a href="{{ route('products.show',$product->slug) }}">{{ $product->name }}</a></h4>
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
                                                        
                                                        <img src="{{ $product->photo->getUrl('excerpt') }}" alt="{{ $product->name }}">
                                                    @else
                                                        @if ($env=='local')
                                                            <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $product->name }}">
                                                        @endif
                                                    @endif
                                                </a>
                                              
                                            </div>
                                            <div class="car-content">
                                                <span class="body-type"><a href="javacript:void(0);">{{ $product->product_type->name }}</a></span>
                                                <h4 class="car-title"><a href="{{ route('products.show',$product->slug) }}">{{ $product->name }}</a></h4>
                                                <span class="price">
                                                    <span class="sale-price">${{ number_format($product->price) }}</span>
                                                    <span class="regular-price">${{ number_format($product->msrp) }}</span>
                                                    {{-- <span class="discount-percentage">Save 35%</span> --}}
                                                </span>
                              
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                
                
                
            </div>
            
            <div class="cars-more mt-50 text-center">
                <a href="{{ route('products.index') }}" class="main-btn">See All</a>
            </div>
        </div>
    </div>
</section>
@endif
    

    <!--====== Our Car Ends ======-->