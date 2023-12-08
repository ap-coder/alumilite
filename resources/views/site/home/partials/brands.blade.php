        <!--====== Brand Ends ======-->

     {{-- TAPAS ADD BRANDS LOOP HERE  --}}
    <section class="testimonial-brand-area testimonial-brand only-brands">
        <div class="brand-area brand-area-only">
            <div class="container">
                <div class="brand-wrapper only-brand-wrapper">
                    <div class="row brand-active">

                        @foreach ($brands as $brand)
                            <div class="col-lg-2 col-sm-4 col-6 brand-col">
                                <div class="single-brand">
                                    @if ($env=='local')
                                        <img class="brand" src="assets/images/brand/partner-dark-1.png" alt="{{ $brand->name }}">
                                    @elseif($brand->logo)
                                        <img class="brand" src="{{ $brand->logo->getUrl() }}" alt="{{ $brand->name }}">
                                    @else
                                        <img class="brand" src="assets/images/brand/partner-dark-1.png" alt="{{ $brand->name }}">
                                    @endif
                                    
                                    {{-- <img class="brand-hover" src="assets/images/brand/partner-hover-1.png" alt=""> --}}
                                </div>
                            </div>
                        @endforeach
                        
                        {{-- <div class="col-lg-2 col-sm-4 col-6 brand-col">
                            <div class="single-brand">
                                <img class="brand" src="assets/images/brand/partner-dark-2.png" alt="">
                                <img class="brand-hover" src="assets/images/brand/partner-hover-2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 brand-col">
                            <div class="single-brand">
                                <img class="brand" src="assets/images/brand/partner-dark-3.png" alt="">
                                <img class="brand-hover" src="assets/images/brand/partner-hover-3.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 brand-col">
                            <div class="single-brand">
                                <img class="brand" src="assets/images/brand/partner-dark-4.png" alt="">
                                <img class="brand-hover" src="assets/images/brand/partner-hover-4.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 brand-col">
                            <div class="single-brand">
                                <img class="brand" src="assets/images/brand/partner-dark-5.png" alt="">
                                <img class="brand-hover" src="assets/images/brand/partner-hover-5.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 brand-col">
                            <div class="single-brand">
                                <img class="brand" src="assets/images/brand/partner-dark-1.png" alt="">
                                <img class="brand-hover" src="assets/images/brand/partner-hover-1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 brand-col">
                            <div class="single-brand">
                                <img class="brand" src="assets/images/brand/partner-dark-3.png" alt="">
                                <img class="brand-hover" src="assets/images/brand/partner-hover-3.png" alt="">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Brand Ends ======-->