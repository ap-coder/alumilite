@extends('site.layouts.app')

@section('content')

    <!--====== Page Breadcrumb Start ======-->

    <div class="page-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                        <li class="breadcrumb-item active">Builds</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--====== Page Breadcrumb Start ======-->

    <!--====== Build Services Start ======-->

    <section class="services-page">
        <div class="container">
            <div class="page-title">
                <h4 class="title">Alumilite Armor understands what consumers want and expect.</h4>
                <p>Alumilite Armor which has produced hundreds of enclosures for people all over North America, Canada and even a few for Central America and Europe. What makes this enclosure better than the rest? First aluminum is tough, corrosion resistant yet light-weight, giving you the ability to load more of the things you need.</p>
            </div>

            <div class="services-items">

                @foreach ($builds as $i => $build)
                    <div class="services-item">
                        <div class="row g-0 align-items-center {{ $direction = $i % 2 === 0 ? '' : 'flex-row-reverse' }}">
                            <div class="col-lg-4">

                                    @if ($build->photo)
                                        <a href="{{ route('builds.show',$build->slug) }}" class="services-image bg_cover" style="background-image: url({{ $build->photo->getUrl('excerpt') }});"></a>
                                    @else
                                        <a href="{{ route('builds.show',$build->slug) }}" class="services-image bg_cover" style="background-image: url(assets/images/services-item-1.jpg);"></a>
                                    @endif
                            </div>
                            <div class="col-lg-8">
                                <div class="services-content">
                                    <a href="{{ route('builds.show',$build->slug) }}">
                                        <h2 class="title">{{ $build->name }}</h2>
                                    </a>
                                    {!! $build->excerpt !!}

                                    {{-- <div class="services-lists">
                                        <h5 class="lists-title">include:</h5>
                                        <div class="list-wrapper">
                                            <ul class="list">
                                                <li><i class="ion-checkmark-circled"></i> General Automotive Repair</li>
                                                <li><i class="ion-checkmark-circled"></i> Preventative Car Maintenance</li>
                                                <li><i class="ion-checkmark-circled"></i> Air Conditioning and Heater Service</li>
                                                <li><i class="ion-checkmark-circled"></i> Cooling System and Radiator Repair</li>
                                                <li><i class="ion-checkmark-circled"></i> Synthetic Motor Oil Replacement</li>
                                                <li><i class="ion-checkmark-circled"></i> Oil Filter Replacement</li>
                                                <li><i class="ion-checkmark-circled"></i> Brake Repair</li>
                                                <li><i class="ion-checkmark-circled"></i> Engine Diagnostic</li>
                                                <li><i class="ion-checkmark-circled"></i> CBelts, Hoses, Fluids</li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!--====== Build Services Ends ======-->

@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection
