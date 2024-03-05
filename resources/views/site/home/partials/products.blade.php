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
                        <li class="active" data-filter="all" data-id="all"><a href="javascript:void(0);">All</a></li>
                        @foreach ($brandsWithProducts as $key => $brand)
                            <li data-filter=".{{ $brand->slug }}" data-id="{{ $brand->id }}"> <a href="javascript:void(0);"> {{ $brand->name }} </a></li>
                        @endforeach
                    </ul>
                    @foreach ($brandsWithProducts as $key => $brand) 
                        @if ($brand->models->isNotEmpty())
                            <ul class="nav model-filter {{ $brand->slug }}-model" style="display: none;">
                                <li class="active" brand-id="{{ $brand->id }}" model-id="all"><a href="javascript:void(0);">All</a></li>
                                @foreach ($brand->models as $model)
                                    @if ($model->brandModelProducts->isNotEmpty())
                                        <li brand-id="{{ $brand->id }}" model-id="{{ $model->id }}" data-type="model"><a href="javascript:void(0);">{{ $model->model }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active">
                        <div class="row">
                            <div class="product-column col-md-12" id="product-data">
                                @includeIf('site.home.partials.product-data', ['products' => $products ])
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

    <!-- Spinner and overlay -->
<div id="products-loader-overlay" class="products-loader-overlay">
    <div class="productsloader"></div>
</div>


    <!--====== Our Car Ends ======-->
