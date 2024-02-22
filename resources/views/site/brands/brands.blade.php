@extends('site.layouts.app')

@section('content')

    <section class="team-area-2">
        <div class="container">
            <div class="team-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h2 class="title">Brands</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($brands as $brand)
                        <a href="{{ route('brands.show',$brand->slug) }}" class="col-lg-3 team-col">
                            <div class="single-team">
                                <div class="team-image">
                                    @if ($brand->logo)
                                        <img src="{{ $brand->logo->getUrl() }}" alt="{{ $brand->name }}">
                                    @else
                                        @if ($env=='local')
                                            <img src="https://placehold.co/300x300?text=Brand+Logo" alt="{{ $brand->name }}">
                                        @endif
                                    @endif
                                </div>
                                <!--  <div class="team-content">
                                    <h5 class="name"><a href="#">Alexander Arnold</a></h5>
                                    <span class="designation">Senior Mechanic</span>
                                </div> -->
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection
