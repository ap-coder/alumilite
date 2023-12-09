@extends('site.layouts.app')

@section('content')

    <!--====== Page Breadcrumb Start ======-->

    <div class="page-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Page</a></li>
                        <li class="breadcrumb-item active">Services</li>
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
                <div class="services-item">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-4">
                            <div class="services-image bg_cover" style="background-image: url(assets/images/services-item-1.jpg);"></div>
                        </div>
                        <div class="col-lg-8">
                            <div class="services-content">
                                <h2 class="title">Periodic Car Maintenance</h2>
                                <p>We know there isn’t much more frustrating than being without your vehicle while it gets repaired. That’s why we have a staff that excels in providing top-notch maintenance and repair – and is able to do it quickly.</p>

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

                <div class="services-item">
                    <div class="row g-0 align-items-center flex-row-reverse">
                        <div class="col-lg-4">
                            <div class="services-image bg_cover" style="background-image: url(assets/images/services-item-2.jpg);"></div>
                        </div>
                        <div class="col-lg-8">
                            <div class="services-content">
                                <h2 class="title">car washing and decoration</h2>
                                <p>Adjusting the fan speed sends a signal through a resistor to the blower motor to  either pick up the pace or slow it down.</p>

                                {{-- <div class="services-lists">
                                    <h5 class="lists-title">include:</h5>
                                    <div class="list-wrapper">
                                        <ul class="list">
                                            <li><i class="ion-checkmark-circled"></i> Washing Exterior</li>
                                            <li><i class="ion-checkmark-circled"></i> Vacuum Cleaning Interior</li>
                                            <li><i class="ion-checkmark-circled"></i> Painting Cover</li>
                                            <li><i class="ion-checkmark-circled"></i> Car Interior Decoration</li>
                                            <li><i class="ion-checkmark-circled"></i> Car Exterior Decoration</li>
                                            <li><i class="ion-checkmark-circled"></i> Audio System</li>
                                            <li><i class="ion-checkmark-circled"></i> Leather Cover Interior</li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

 
            </div>
        </div>
    </section>

    <!--====== Build Services Ends ======-->

@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection    