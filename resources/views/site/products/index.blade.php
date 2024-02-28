@extends('site.layouts.app')

@section('content')

{{--@include('site.products.partials.page-start')--}}

@include('site.products.partials.slider')
    <!--====== Inventory Start ======-->

    <section class="inventory-area">
        <div class="container">
            
            @include('site.products.partials.filter')

            <div class="tab-content">
                <div class="tab-pane fade grid active" id="grid" role="tabpanel">
                    <div class="row">

                        @foreach ($products as $product)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="{{ route('products.show',$product->slug) }}">
                                        @if ($product->photo)
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
                                    <span class="status special"><i class="ion-flash"></i> Special</span> --}}
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="sale-price">${{ number_format($product->price) }}</span>
                                        @if ($product->msrp)
                                            <span class="regular-price">${{ number_format($product->msrp) }}</span>
                                        @endif
                                        {{-- <span class="discount-percentage">Save 35%</span> --}}
                                    </span>
                                    @if ($product->categories->count()>0)
                                        @foreach ($product->categories as $key => $category)
                                            <span class="body-type"><a href="javascript:void(0);">{{ $category->name }}</a></span> @if($product->categories->count() != $key+1) | @endif
                                        @endforeach
                                    @endif

                                    <h4 class="car-title"><a href="{{ route('products.show',$product->slug) }}">{{ $product->name }}</a></h4>

                                    @if ($product->brand)
                                        <div class="author-meta">
                                            <span><a href="{{ route('brands.show',$product->brand->slug) }}">{{ $product->brand->name }}</a>
                                                @if ($product->brand_model)
                                                    {{ $product->brand_model->model }}
                                                @endif
                                            </span>
                                        </div>
                                    @endif

                                    <ul class="car-meta">
                                        @if ($product->technical_specs->count()>0)
                                            @foreach ($product->technical_specs->take(3) as $specification)
                                                <li><a href="javascript:void(0);"><i class="{{ $specification->icon_class }}"></i> {{ $specification->name }}</a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="tab-pane fade list show" id="list" role="tabpanel">

                    @foreach ($products as $product)
                    <div class="single-car-item-list">
                        <div class="car-image">
                            <a href="{{ route('products.show',$product->slug) }}">
                                @if ($product->photo)
                                    {{-- {{ $product->getFirstMedia('photo')('responsive') }} --}}
                                    <img src="{{ $product->photo->getUrl() }}" alt="{{ $product->name }}">
                                @else
                                    @if ($env=='local')
                                        <img src="{{ asset('assets/images/car-list/car-1.jpg') }}" alt="{{ $product->name }}">
                                    @endif
                                @endif
                            </a>

                        </div>
                        <div class="car-content">
                            <div class="content-title">
                                @if ($product->categories->count()>0)
                                    @foreach ($product->categories as $key => $category)
                                        <span class="body-type"><a href="javascript:void(0);">{{ $category->name }}</a></span> @if($product->categories->count() != $key+1) | @endif
                                    @endforeach
                                @endif
                                <h4 class="car-title"><a href="{{ route('products.show',$product->slug) }}">{{ $product->name }}</a></h4>
                                @if ($product->brand)
                                    <div class="author-meta">
                                        <span><a href="{{ route('brands.show',$product->brand->slug) }}">{{ $product->brand->name }}</a>
                                            @if ($product->brand_model)
                                                {{ $product->brand_model->model }}
                                            @endif
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <span class="price">
                                <span class="sale-price">${{ number_format($product->price) }}</span>
                                {{-- <span class="regular-price">$28,500</span> --}}
                                @if ($product->msrp)
                                    <span class="msrp">MSRP: <strong>${{ number_format($product->msrp) }}</strong></span>
                                @endif
                            </span>
                            <ul class="car-meta">

                                @if ($product->technical_specs->count()>0)
                                    @foreach ($product->technical_specs->take(3) as $specification)
                                        <li>
                                            <span class="glance">
                                                <i class="{{ $specification->icon_class }}"></i>
                                                <span class="label">{{ $specification->name }}</span>
                                                <span class="value">{{ $specification->value }}</span>
                                            </span>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                            <div class="dealer-certificates d-sm-flex justify-content-between">
                            @if($product->excerpt)
                                {!! $product->excerpt ?? '' !!}
                            @else
                                {!! \Str::limit($product->description, $limit = 200, $end = '...') !!}
                            @endif


                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            {{-- <div class="all-pagination">
                <div class="pagination justify-content-center">
                    {{ $products->links() }}
                </div>
            </div> --}}
            {{-- /home/tapas78/alumalite/resources/views/vendor/pagination/default.blade.php --}}
            <div class="all-pagination">
                {{ $products->links('vendor.pagination.default') }}
            </div>

            {{-- <div class="all-pagination">
                <ul class="pagination justify-content-center">
                    <li><a class="previous" href="#"><i class="ion-ios-arrow-back"></i> <span>Previous</span></a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">8</a></li>
                    <li><a class="next" href="#"><span>Next</span> <i class="ion-ios-arrow-forward"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </section>

    <!--====== Inventory Ends ======-->

{{--    @include('site.products.partials.call-to-action')--}}

@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs')

<script>
    $(function () {

        $('.productFilter').change(function(){
            var category = $('#productCategory').val();
            var brand = $('#productBrand').val();
            var brandModel = $('#productBrandModel').val();

            var type = $(this).attr('type');

            if (type=='brand') {
                window.location.href = "{{ url('products') }}?category="+category+"&brand="+brand+"&brandModel=";
            } else {
                window.location.href = "{{ url('products') }}?category="+category+"&brand="+brand+"&brandModel="+brandModel;
            }
            
        });

    });
</script>

@endsection
