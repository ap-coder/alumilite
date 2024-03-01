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
                    <ul class="nav products-filter">
                        <li class="active" data-filter="*"><a href="javascript:void(0);">All</a></li>
                        @foreach ($brandsWithProducts as $key => $brand)
                            <li data-filter=".{{ $brand->slug }}"> <a href="javascript:void(0);"> {{ $brand->name }} </a></li>
                        @endforeach
                    </ul>
                    @foreach ($brandsWithProducts as $key => $brand) 
                        @if ($brand->models->isNotEmpty())
                            <ul class="nav model-filter {{ $brand->slug }}-model" style="display: none;">
                                {{-- <li class="active" data-filter="*"><a href="javascript:void(0);">All</a></li> --}}
                                @foreach ($brand->models as $model)
                                    @if ($model->brandModelProducts->isNotEmpty())
                                        <li data-filter=".{{ $model->slug }}"><a href="javascript:void(0);">{{ $model->model }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active">
                        <div class="row">
                            <div class="product-column">
                                {{-- @foreach($products->chunk(2) as $productSet)
                                <div class="car-col"> --}}
                                    @foreach($products as $product)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-car-item mt-50 product-item {{ $product->brand ? $product->brand->slug : '' }} {{ $product->brand_model ? $product->brand_model->slug : '' }}">
                                                <div class="car-image">
                                                    <a href="{{ route('products.show',$product->slug) }}">
                                                        @if($product->photo)
                                                            {{-- {{ $product->getFirstMedia('photo')('responsive') }} --}}
                                                            <img src="{{ $product->photo->getUrl('homepage') }}" alt="{{ $product->name }}">
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
                                                    </span>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        @endforeach
                                {{-- </div>
                            @endforeach --}}
                            </div>
                        </div>
                    </div>


                </div>

                <div class="cars-more mt-50 text-center">
                    <a href="{{ route('products.index') }}" class="main-btn">See All</a>
                </div>
            </div>
        </div>
    </section>

    <!--====== Our Car Ends ======-->
