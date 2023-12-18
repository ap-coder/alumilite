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

                            @foreach($builds->chunk(2) as $buildSet)
                                <div class="car-col">
                                    @foreach($buildSet as $build)
                                        <div class="single-car-item mt-50">
                                            <div class="car-image">
                                                <a href="{{ route('products.show',$build->slug) }}">
                                                    @if($build->photo)
                                                        {{ $build->getFirstMedia('photo')('responsive') }}
                                                    @else
                                                        <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $build->name }}">
                                                    @endif
                                                </a>

                                            </div>
                                            <div class="car-content">
                                                <span class="body-type"><a href="javacript:void(0);">{{ $build->product_type->name }}</a></span>
                                                <h4 class="car-title"><a href="{{ route('builds.show',$build->slug) }}">{{ $build->name }}</a></h4>

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

                                @foreach($productType->builds->chunk(2) as $buildSet)
                                    <div class="car-col">
                                        @foreach($buildSet as $build)
                                            <div class="single-car-item mt-50">
                                                <div class="car-image">
                                                    <a href="{{ route('products.show',$product->slug) }}">
                                                        @if($build->photo)
                                                            {{ $build->getFirstMedia('photo')('responsive') }}
                                                        @else
                                                            <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $build->name }}">
                                                        @endif
                                                    </a>

                                                </div>
                                                <div class="car-content">
                                                    <span class="body-type"><a href="javacript:void(0);">{{ $build->product_type->name }}</a></span>
                                                    <h4 class="car-title"><a href="{{ route('builds.show',$build->slug) }}">{{ $build->name }}</a></h4>
{{--                                                    <span class="price">--}}
{{--                                                        <span class="sale-price">${{ number_format($product->price) }}</span>--}}
{{--                                                        <span class="regular-price">${{ number_format($product->msrp) }}</span>--}}
{{--                                                        --}}{{-- <span class="discount-percentage">Save 35%</span> --}}
{{--                                                    </span>--}}

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
                    <a href="{{ route('builds.index') }}" class="main-btn">See All</a>
                </div>
            </div>
        </div>
    </section>

    <!--====== Our Car Ends ======-->
