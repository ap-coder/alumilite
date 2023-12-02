@extends('site.layouts.app')

@section('content')

@include('site.products.partials.page-start')

    <!--====== Inventory Start ======-->

    <section class="inventory-area">
        <div class="container">
            <div class="inventory-top d-sm-flex justify-content-between align-items-center">
                <div class="inventory-select">
                    <form action="#">
                        <select class="optgroup_test">
                            <option value="" selected="selected">SORT BY: Date Last Added </option>
                            <option value="">SORT BY: Date First Added </option>
                            <option value="">SORT BY: Price (Low To High) </option>
                            <option value="">SORT BY: Price (High To Low) </option>
                        </select>
                    </form>
                </div>
                <div class="inventory-switcher">
                    <ul class="nav" role="tablist">
                        <li><a data-bs-toggle="tab" href="#grid" role="tab"><i class="ion-android-apps"></i></a></li>
                        <li><a class="active" data-bs-toggle="tab" href="#list" role="tab"><i class="ion-navicon"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade grid" id="grid" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-1.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                    <span class="status special"><i class="ion-flash"></i> Special</span>
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="sale-price">$23,000</span>
                                        <span class="regular-price">$28,500</span>
                                        <span class="discount-percentage">Save 35%</span>
                                    </span>
                                    <span class="body-type"><a href="#">Hatchback</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">Used 2015 BMW X1 Series </a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Eden Hazard</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-2.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                    <span class="status new"><i class="ion-star"></i> new/used</span>
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="price-amount">$12,500</span>
                                    </span>
                                    <span class="body-type"><a href="#">Sedan</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">New 2019 BMW X6 Series</a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Edison Cavani</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-3.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                    <span class="status special"><i class="ion-flash"></i> Special</span>
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="sale-price">$15,000</span>
                                        <span class="regular-price">$22,500</span>
                                        <span class="discount-percentage">Save 35%</span>
                                    </span>
                                    <span class="body-type"><a href="#">Sport Cars</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">Used 2013 Ford Focus SEL</a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Apollo Auto Center</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-4.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                    <span class="status certified"><i class="ion-android-checkmark-circle"></i> certified</span>
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="price-amount">$33,400</span>
                                    </span>
                                    <span class="body-type"><a href="#">Off-Road</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">New 2017 Bentley Scooper </a> <i class="ion-android-checkmark-circle"></i></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">TravelCars256</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-5.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                    <span class="status certified"><i class="ion-android-checkmark-circle"></i> certified</span>
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="price-amount">$6,400</span>
                                    </span>
                                    <span class="body-type"><a href="#">Convertible</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">Used 2012 Audi S5 Luxury </a> <i class="ion-android-checkmark-circle"></i></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Edision Cavani</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-6.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="price-amount">Contact</span>
                                    </span>
                                    <span class="body-type"><a href="#">Hatchback</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">2015 Toyota Elantra 2.5L</a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Apollo Auto Center</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-7.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="sold">Sold</span>
                                    </span>
                                    <span class="body-type"><a href="#">Sport Cars, Couple</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">2014 Ford Mustang 4.0 AT</a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Apollo Auto Center</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-8.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                    <span class="status special"><i class="ion-flash"></i> special</span>
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="sale-price">$4,250</span>
                                        <span class="regular-price">$6,500</span>
                                        <span class="discount-percentage">Save 35%</span>
                                    </span>
                                    <span class="body-type"><a href="#">Off-Road</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">2012 Toyota Pickup Truck i7</a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Apollo Auto Center</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-9.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="price-amount">$9,500</span>
                                    </span>
                                    <span class="body-type"><a href="#">Sport Cars</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">2018 Chevrolet Camaro</a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Apollo Auto Center</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-10.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="price-amount">$5,600</span>
                                    </span>
                                    <span class="body-type"><a href="#">SUV</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">2013 Acura Sport Version</a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Edision Cavani</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-11.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                    <span class="status special"><i class="ion-flash"></i> special</span>
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="sale-price">$7,700  </span>
                                        <span class="regular-price">$9,500</span>
                                        <span class="discount-percentage">Save 35%</span>
                                    </span>
                                    <span class="body-type"><a href="#">Pickup Truck</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">2012 Chevrolet Pick Truck 3.5L</a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Edision Cavani</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-car-item-2 mt-50">
                                <div class="car-image">
                                    <a href="inventory-single-classified.html">
                                        <img src="assets/images/car-2/car-12.jpg" alt="">
                                    </a>
                                    <ul class="car-meta">
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
                                    <span class="status new"><i class="ion-star"></i> new/used</span>
                                </div>
                                <div class="car-content">
                                    <span class="price">
                                        <span class="price-amount">$5,050</span>
                                    </span>
                                    <span class="body-type"><a href="#">Sedan</a></span>
                                    <h4 class="car-title"><a href="inventory-single-classified.html">2019 Toyota Camry SE 350</a></h4>
                                    
                                    <div class="author-meta">
                                        <span><i class="ion-android-person"></i> Dealer:  <a href="#">Eden Hazard</a></span>
                                    </div>
                                    <ul class="car-meta">
                                        <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                        <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                        <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade list show active" id="list" role="tabpanel">
                    <div class="single-car-item-list">
                        <div class="car-image">
                            <a href="#">
                                <img src="assets/images/car-list/car-1.jpg" alt="">
                            </a>
                            <ul class="car-meta">
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
                            <span class="status special"><i class="ion-flash"></i> special</span>
                        </div>
                        <div class="car-content">
                            <div class="content-title">
                                <span class="body-type"><a href="#">Hatchback</a></span>
                                <h4 class="car-title"><a href="inventory-single-classified.html">Used 2015 CMB X1 Series </a></h4>
                            </div>
                            <span class="price">
                                <span class="sale-price">$23,000</span>
                                <span class="regular-price">$28,500</span>
                                <span class="msrp">MSRP: <strong>$39,000</strong></span>
                            </span>
                            <ul class="car-meta">
                                <li>
                                    <span class="glance">
                                        <i class="ion-speedometer"></i> 
                                        <span class="label">transmission</span>
                                        <span class="value">Automatic</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-android-settings"></i> 
                                        <span class="label">Drive</span>
                                        <span class="value">4WD</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-map"></i> 
                                        <span class="label">mileage </span>
                                        <span class="value">9,000 mi</span>
                                    </span>
                                </li>
                            </ul>
                            <div class="dealer-certificates d-sm-flex justify-content-between">
                                <div class="dealer-author">
                                    <div class="author-image">
                                        <a href="#"><img src="assets/images/author-1.jpg" alt=""></a>
                                    </div>
                                    <div class="author-content">
                                        <h4 class="name"><a href="#">Eden Hazard</a></h4>
                                        <div class="rating">
                                            <ul class="rating-star">
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                            </ul>
                                            <span>(8 Rating)</span>
                                        </div>
                                        <p><i class="ion-android-pin"></i> Los Angelles, CA, United States</p>
                                    </div>
                                </div>
                                <ul class="certificates">
                                    <li>
                                        <img src="assets/images/auto-check.png" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/bestcar.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="single-car-item-list">
                        <div class="car-image">
                            <a href="#">
                                <img src="assets/images/car-list/car-2.jpg" alt="">
                            </a>
                            <ul class="car-meta">
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
                            <span class="status new"><i class="ion-star"></i> new/used</span>
                        </div>
                        <div class="car-content">
                            <div class="content-title">
                                <span class="body-type"><a href="#">Sedan</a></span>
                                <h4 class="car-title"><a href="inventory-single-classified.html">New 2019 CMB X6 Series</a></h4>
                            </div>
                            <span class="price">
                                <span class="price-amount">$12,500</span>
                                <span class="msrp">MSRP: <strong>$14,000</strong></span>
                            </span>
                            <ul class="car-meta">
                                <li>
                                    <span class="glance">
                                        <i class="ion-speedometer"></i> 
                                        <span class="label">transmission</span>
                                        <span class="value">Automatic</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-android-settings"></i> 
                                        <span class="label">Drive</span>
                                        <span class="value">4WD</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-map"></i> 
                                        <span class="label">mileage </span>
                                        <span class="value">9,000 mi</span>
                                    </span>
                                </li>
                            </ul>                            
                            <div class="dealer-certificates d-sm-flex justify-content-between">
                                <div class="dealer-author">
                                    <div class="author-image">
                                        <a href="#"><img src="assets/images/author-2.jpg" alt=""></a>
                                    </div>
                                    <div class="author-content">
                                        <h4 class="name"><a href="#">Eden Hazard</a></h4>
                                        <div class="rating">
                                            <ul class="rating-star">
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                            </ul>
                                            <span>(8 Rating)</span>
                                        </div>
                                        <p><i class="ion-android-pin"></i> Los Angelles, CA, United States</p>
                                    </div>
                                </div>                                
                            </div>                            
                        </div>
                    </div>
                    <div class="single-car-item-list">
                        <div class="car-image">
                            <a href="#">
                                <img src="assets/images/car-list/car-3.jpg" alt="">
                            </a>
                            <ul class="car-meta">
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
                            <span class="status certified"><i class="ion-android-checkmark-circle"></i> certified</span>
                        </div>
                        <div class="car-content">
                            <div class="content-title">
                                <span class="body-type"><a href="#">Off-Road</a></span>
                                <h4 class="car-title"><a href="inventory-single-classified.html">New 2017 Bontora Scooper   </a> <i class="ion-android-checkmark-circle"></i></h4>
                            </div>
                            <span class="price">
                                <span class="price-amount">$33,400</span>
                                <span class="msrp">MSRP: <strong>$36,050</strong></span>
                            </span>
                            <ul class="car-meta">
                                <li>
                                    <span class="glance">
                                        <i class="ion-speedometer"></i> 
                                        <span class="label">transmission</span>
                                        <span class="value">Automatic</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-android-settings"></i> 
                                        <span class="label">Drive</span>
                                        <span class="value">4WD</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-map"></i> 
                                        <span class="label">mileage </span>
                                        <span class="value">9,000 mi</span>
                                    </span>
                                </li>
                            </ul>
                            <div class="dealer-certificates d-sm-flex justify-content-between">
                                <div class="dealer-author">
                                    <div class="author-image">
                                        <a href="#"><img src="assets/images/author-5.jpg" alt=""></a>
                                    </div>
                                    <div class="author-content">
                                        <h4 class="name"><a href="#">TravelCars256</a></h4>
                                        <div class="rating">
                                            <ul class="rating-star">
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                            </ul>
                                            <span>(8 Rating)</span>
                                        </div>
                                        <p><i class="ion-android-pin"></i> London, UK</p>
                                    </div>
                                </div>
                                <ul class="certificates">
                                    <li>
                                        <img src="assets/images/auto-check.png" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/first-owner.png" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-car-item-list">
                        <div class="car-image">
                            <a href="#">
                                <img src="assets/images/car-list/car-4.jpg" alt="">
                            </a>
                            <ul class="car-meta">
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
                        </div>
                        <div class="car-content">
                            <div class="content-title">
                                <span class="body-type"><a href="#">Hatchback</a></span>
                                <h4 class="car-title"><a href="inventory-single-classified.html">2015 Toyota Elantra 2.5L  </a></h4>
                            </div>                            
                            <span class="price">
                                <span class="price-amount">Contact</span>
                            </span>
                            <ul class="car-meta">
                                <li>
                                    <span class="glance">
                                        <i class="ion-speedometer"></i> 
                                        <span class="label">transmission</span>
                                        <span class="value">Automatic</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-android-settings"></i> 
                                        <span class="label">Drive</span>
                                        <span class="value">4WD</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-map"></i> 
                                        <span class="label">mileage </span>
                                        <span class="value">9,000 mi</span>
                                    </span>
                                </li>
                            </ul>                            
                            <div class="dealer-certificates d-sm-flex justify-content-between">
                                <div class="dealer-author">
                                    <div class="author-image">
                                        <a href="#"><img src="assets/images/author-6.jpg" alt=""></a>
                                    </div>
                                    <div class="author-content">
                                        <h4 class="name"><a href="#">Apollo Auto Center</a></h4>
                                        <div class="rating">
                                            <ul class="rating-star">
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                            </ul>
                                            <span>(6 Rating)</span>
                                        </div>
                                        <p><i class="ion-android-pin"></i> Miami, Florida, USA</p>
                                    </div>
                                </div>
                                <ul class="certificates">
                                    <li>
                                        <img src="assets/images/auto-check.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="single-car-item-list">
                        <div class="car-image">
                            <a href="#">
                                <img src="assets/images/car-list/car-5.jpg" alt="">
                            </a>
                            <ul class="car-meta">
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
                        </div>
                        <div class="car-content">
                            <div class="content-title">
                                <span class="body-type"><a href="#">Sport Cars, Couple</a></span>
                                <h4 class="car-title"><a href="inventory-single-classified.html">2014 Dord Bustang 4.0 AT</a></h4>
                            </div>
                            <span class="price">
                                <span class="sold">Sold</span>
                            </span>
                            <ul class="car-meta">
                                <li>
                                    <span class="glance">
                                        <i class="ion-speedometer"></i> 
                                        <span class="label">transmission</span>
                                        <span class="value">Automatic</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-android-settings"></i> 
                                        <span class="label">Drive</span>
                                        <span class="value">4WD</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-map"></i> 
                                        <span class="label">mileage </span>
                                        <span class="value">9,000 mi</span>
                                    </span>
                                </li>
                            </ul>                            
                            <div class="dealer-certificates d-sm-flex justify-content-between">
                                <div class="dealer-author">
                                    <div class="author-image">
                                        <a href="#"><img src="assets/images/author-6.jpg" alt=""></a>
                                    </div>
                                    <div class="author-content">
                                        <h4 class="name"><a href="#">Apollo Auto Center</a></h4>
                                        <div class="rating">
                                            <ul class="rating-star">
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                            </ul>
                                            <span>(6 Rating)</span>
                                        </div>
                                        <p><i class="ion-android-pin"></i> Miami, Florida, USA</p>
                                    </div>
                                </div>
                                <ul class="certificates">
                                    <li>
                                        <img src="assets/images/bestcar.png" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/buy-back.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="single-car-item-list">
                        <div class="car-image">
                            <a href="#">
                                <img src="assets/images/car-list/car-6.jpg" alt="">
                            </a>
                            <ul class="car-meta">
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
                            <span class="status special"><i class="ion-flash"></i>special</span>
                        </div>
                        <div class="car-content">
                            <div class="content-title">
                                <span class="body-type"><a href="#">Pickup Truck</a></span>
                                <h4 class="car-title"><a href="inventory-single-classified.html">2012 Severlot Pick Truck 3.5L</a></h4>
                            </div>
                            <span class="price">
                                <span class="sale-price">$7,700</span>
                                <span class="regular-price">$9,500</span>
                                <span class="msrp">MSRP: <strong>$10,750</strong></span>
                            </span>
                            <ul class="car-meta">
                                <li>
                                    <span class="glance">
                                        <i class="ion-speedometer"></i> 
                                        <span class="label">transmission</span>
                                        <span class="value">Automatic</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-android-settings"></i> 
                                        <span class="label">Drive</span>
                                        <span class="value">4WD</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="glance">
                                        <i class="ion-map"></i> 
                                        <span class="label">mileage </span>
                                        <span class="value">9,000 mi</span>
                                    </span>
                                </li>
                            </ul>                            
                            <div class="dealer-certificates d-sm-flex justify-content-between">
                                <div class="dealer-author">
                                    <div class="author-image">
                                        <a href="#"><img src="assets/images/author-4.jpg" alt=""></a>
                                    </div>
                                    <div class="author-content">
                                        <h4 class="name"><a href="#">Edison Cavani</a></h4>
                                        <div class="rating">
                                            <ul class="rating-star">
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                            </ul>
                                            <span>(12 Rating)</span>
                                        </div>
                                        <p><i class="ion-android-pin"></i> San Francisco, CA, United States</p>
                                    </div>
                                </div>
                                <ul class="certificates">
                                    <li>
                                        <img src="assets/images/buy-back.png" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/first-owner.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="all-pagination">
                <ul class="pagination justify-content-center">
                    <li><a class="previous" href="#"><i class="ion-ios-arrow-back"></i> <span>Previous</span></a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">8</a></li>
                    <li><a class="next" href="#"><span>Next</span> <i class="ion-ios-arrow-forward"></i></a></li>
                </ul>
            </div>            
        </div>
    </section>

    <!--====== Inventory Ends ======-->
    
   <!--====== Call To Action Start ======-->

   <section class="call-to-action-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="call-to-action-content">
                        <h2 class="title">Become A dealer with corify?</h2>
                        <p>Sell your car <span>Free</span> with Carify and earn <span>commision up to 70%</span>.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="call-to-action-btn text-lg-end">
                        <ul>
                            <li><a class="main-btn main-btn-2" href="#">learn more</a></li>
                            <li><a class="main-btn main-btn-3" href="#"><i class="ion-model-s"></i>add car</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Call To Action Ends ======-->   

@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection    