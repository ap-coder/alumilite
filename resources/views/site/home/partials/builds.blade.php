    <!--====== News Start ======-->
    @if($builds->count() > 0)
        <section class="news-area news-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2 class="title">Our Builds</h2>
                        </div>
                    </div>
                </div>
                <div class="news-wrapper">
                    <div class="row">
                        @foreach ($builds as $build)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-news mt-50">
                                    <div class="news-image">
                                        <a href="{{ route('builds.show',$build->slug) }}">
                                            @if($build->photo)
                                                {{ $build->getFirstMedia('featured_image')('excerpt') }}
                                            @else
                                                <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $build->title }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <div class="news-meta">
                                                <span class="meta-cat">
                                                    <a href="javascript:void(0);">
                                                        @if($build->categories->isNotEmpty())
                                                            {{ $build->categories->first()->name }}
                                                        @endif
                                                        </a>
                                                </span>
                                            <span class="meta-date"><a href="javascript:void(0);"> {{ date('M d, Y',strtotime($build->created_at)) }}</a></span>
                                        </div>
                                        <h3 class="news-title">
                                            <a href="{{ route('builds.show',$build->slug) }}">{{ $post->title }}</a>
                                        </h3>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--====== News Ends ======-->



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
                                                <a href="{{ route('builds.show',$build->slug) }}">
                                                    @if($build->photo)
                                                        {{ $build->getFirstMedia('photo')('excerpt') }}
                                                    @else
                                                        <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $build->name }}">
                                                    @endif
                                                </a>

                                            </div>
                                            <div class="car-content">
                                                <span class="body-type"><a href="javacript:void(0);">{{ $build->product_type ? $build->product_type->name : '' }}</a></span>
                                                <h4 class="car-title"><a href="{{ route('builds.show',$build->slug) }}">{{ $build->name }}</a></h4>

                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>





                </div>

                <div class="cars-more mt-50 text-center">
                    <a href="{{ route('builds.index') }}" class="main-btn">See All</a>
                </div>
            </div>
        </div>
    </section>

    <!--====== Our Car Ends ======-->
