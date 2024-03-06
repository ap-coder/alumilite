    <!--====== Brand Ends ======-->
    <section class="testimonial-brand-area testimonial-brand only-brands">
        <div class="brand-area brand-area-only">
            <div class="container">
                <div class="brand-wrapper only-brand-wrapper">
                    <div class="row brand-active">

                        @foreach ($brands as $brand)
                            <div class="col-lg-2 col-sm-4 col-6 brand-col">
                                <a class="single-brand" href="{{ route('brands.show',$brand->slug) }}">
                                    @if($brand->logo)
                                       <img class="brand" src="{{ $brand->logo->getUrl('original') }}" alt="{{ $brand->name }}">
                                        {{-- {{ $brand->getFirstMedia('logo')('responsive') }}  --}}
                                    @endif
                                    {{-- <img class="brand-hover" src="assets/images/brand/partner-hover-1.png" alt=""> --}}
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Brand Ends ======-->
