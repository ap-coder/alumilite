@extends('site.layouts.app')

@section('content')

    <!--====== Inventory Single Start ======-->

    <section class="inventory-single-area">
        @include('site.builds.partials.show.build-images')


        <div class="container">
            <div class="inventory-single-content ">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('builds.index') }}">Builds</a></li>
                    <li class="breadcrumb-item active">{{ $build->name }}</li>
                </ul>
                <div class="listing-social d-lg-flex justify-content-between">
                    {{--  <div class="listing-btn">
                        <ul class="listing-actions">
                            <li><a href="#"><i class="ion-ios-heart-outline"></i>  Save</a></li>
                            <li><a href="#"><i class="ion-checkmark"></i>  in compare list</a></li>
                            <li><a href="#"><i class="ion-speedometer"></i>  register test drive</a></li>
                            <li><a href="#"><i class="ion-document-text"></i>  brochure</a></li>
                        </ul>
                    </div> --}}
                    <div class="social-share">
                        <ul class="social">
                            <li><a class="facebook" href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a class="googleplus" href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="title-price">
                    <div class="title-excerpt">
                        <h3 class="entry-title">{{ $build->name }} <i class="ion-android-checkmark-circle"></i></h3>
                        <p class="entry-excerpt">{{ $build->subtitle }}</p>
                    </div>

                </div>
                
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <div class="inventory-single-dealership-tab">
                            @include('site.builds.partials.show.tab-list')

                            <div class="tab-content">
                                <div class="ck-content tab-pane fade show active" id="tab1" role="tabpanel">
                                    {!! $build->description !!}
                                </div>
                                @include('site.builds.partials.show.ducuments-tab')
                                @include('site.builds.partials.show.review-form')
                            </div>
                        </div>

                        {{-- @include('site.builds.partials.show.tech-specs') --}}
                        {{-- @include('site.builds.partials.show.features') --}}

                        <div class="consumer-reviews">
                            <h5 class="singe-title">Reviews</h5>

                            @include('site.builds.partials.show.reviews-stats')
                            @include('site.builds.partials.show.review')
                            

                        </div>

                        @include('site.builds.partials.show.brand-builds')

                    </div>

                    <div class="col-xxl-3 col-lg-4">
                        <div class="sidebar">
                            {{-- @include('site.builds.partials.show.sidebar.trusted') --}}
                            {{-- @include('site.builds.partials.show.sidebar.dealer-info') --}}
                            @include('site.builds.partials.show.sidebar.contact')
                            {{-- @include('site.builds.partials.show.sidebar.similar-posts') --}}
                            {{-- @include('site.builds.partials.show.sidebar.similar-listings') --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Inventory Single Ends ======-->

@endsection

@section('headcss')
@endsection
@section('headjs')
@endsection
@section('footjs')
    <script>
        $('#stars li').click(function() {
            var rating = $(this).data('value');
            $('#rating').val(rating);
        });
    </script>
@endsection
