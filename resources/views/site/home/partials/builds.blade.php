<!--====== Our Car Start ======-->

    <section class="cars-area cars-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="title">Builds</h2>
                    </div>
                </div>
            </div>
            <div class="cars-wrapper">
                <div class="cars-tab-menu">
                    <ul class="nav" role="tablist">
                        <li><a class="active" data-bs-toggle="tab" href="#tabBuildAll" role="tab">All</a></li>
                        @foreach ($productTypes as $key => $productType)
                            <li>
                                <a data-bs-toggle="tab" href="#buildtab{{ $key }}" role="tab"> {{ $productType->name }} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabBuildAll" role="tabpanel">
                        <div class="row">

                            @foreach($builds as $build)
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-car-item mt-50">
                                        <div class="car-image">
                                            <a href="{{ route('builds.show',$build->slug) }}">
                                                @if($build->photo)
                                                    {{-- {{ $build->getFirstMedia('photo')('excerpt') }} --}}
                                                    <img src="{{ $build->photo->getUrl('excerpt') }}" alt="{{ $build->name }}">
                                                @else
                                                    @if ($env=='local')
                                                        <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $build->name }}">
                                                    @endif
                                                @endif
                                            </a>

                                        </div>
                                        <div class="car-content">
                                            <span class="body-type"><a href="javacript:void(0);">{{ $build->product_type ? $build->product_type->name : '' }}</a></span>
                                            <h4 class="car-title"><a href="{{ route('builds.show',$build->slug) }}">{{ $build->name }}</a></h4>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        
                        </div>
                    </div>

                    @foreach ($productTypes as $key => $productType)
                        <div class="tab-pane" id="buildtab{{ $key }}" role="tabpanel">
                            <div class="row">
                                
                                @foreach($productType->builds as $build)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-car-item mt-50">
                                            <div class="car-image">
                                                <a href="{{ route('builds.show',$build->slug) }}">
                                                    @if($build->photo)
                                                        {{-- {{ $build->getFirstMedia('photo')('excerpt') }} --}}
                                                        <img src="{{ $build->photo->getUrl('excerpt') }}" alt="{{ $build->name }}">
                                                    @else
                                                        @if ($env=='local')
                                                            <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $build->name }}">
                                                        @endif
                                                    @endif
                                                </a>

                                            </div>
                                            <div class="car-content">
                                                <span class="body-type"><a href="javacript:void(0);">{{ $build->product_type ? $build->product_type->name : '' }}</a></span>
                                                <h4 class="car-title"><a href="{{ route('builds.show',$build->slug) }}">{{ $build->name }}</a></h4>

                                            </div>
                                        </div>
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
