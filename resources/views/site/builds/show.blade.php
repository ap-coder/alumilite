@extends('site.layouts.app')

@section('content')

    <!--====== Inventory Single Start ======-->

    <section class="inventory-single-area">
        @include('site.builds.partials.show.build-images')


        <div class="container">
            <div class="inventory-single-content ">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Builds</a></li>
                    <li class="breadcrumb-item active">tapas build name here </li>
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
                        <h3 class="entry-title">Used 2018 Audi S8 <i class="ion-android-checkmark-circle"></i></h3>
                        <p class="entry-excerpt">The Audi S8 is a high-performance version of the Audi Series</p>
                    </div>
                    <div class="price">
                        <span class="price">
                            <span class="sale-price">$23,000</span>
                            <span class="regular-price">$28,500</span>
                            <span class="msrp">MSRP: <strong>$39,000</strong></span>
                        </span>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <div class="overview">
                            <h5 class="singe-title">Vehicle Overview</h5>

                            <p>Black Full leather interior, 2 seats, Metallic Imola Grey, We are delighted to offer this stunning Mercedes SLS AMG Roadster for sale. Finished in a very nice AMG colour of Imola Grey with a Black Soft Top and Black Soft Semi Anilin Leather the car is very stylish indeed. <br> <br> This beautiful car benefits from the following equipment : AMG Carbon Fibre Trim; Reversing Camera; Blind Spot Assistant; Auto Dimming Interior & Exterior Mirrors; Electric Seats with Memory; AMG Performance Steering Wheel in Leather & Alcantara; AIRSCARF; Tyre Pressure Monitoring System; AMG Ride Control sports Suspension with Adjustable Damper System; Electric Folding Exterior Mirrors; COMAND APS with DVD  Changer; Media Interface; Thermotronic Climate Control; Bi Xenon Headlamps; AMG Polished Alloy Wheels. <br> <br> This car is immaculate in every way – a simply stunning vehicle that would give years of pleasure and enjoyment or could grace any collection!</p>
                        </div>

                        <div class="specifications">
                            <h5 class="singe-title">technical specifications</h5>

                            <div class="specifications-wrapper">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-android-car"></i> 
                                            <span class="label">Body</span>
                                            <span class="value">Sedan</span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-gear-a"></i> 
                                            <span class="label">Drive</span>
                                            <span class="value">4WD, RWD </span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-map"></i> 
                                            <span class="label">mileage</span>
                                            <span class="value">9,000 mi</span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-waterdrop"></i> 
                                            <span class="label">Fuel Type</span>
                                            <span class="value">Gasoline </span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-speedometer"></i> 
                                            <span class="label">transmission</span>
                                            <span class="value">Automatic</span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-ios-cog-outline"></i> 
                                            <span class="label">Engine</span>
                                            <span class="value">2,000 </span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-contrast"></i> 
                                            <span class="label">exterior col...</span>
                                            <span class="value">Silver </span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-contrast"></i> 
                                            <span class="label">Interior Col...</span>
                                            <span class="value">Jet Black</span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <span class="icon">&copy;</span>
                                            <span class="label">registered</span>
                                            <span class="value">2018</span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-pricetag"></i> 
                                            <span class="label">stock id</span>
                                            <span class="value">#AD5409</span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-android-calendar"></i> 
                                            <span class="label">history</span>
                                            <span class="value">N/A</span>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6 glance-col">
                                        <span class="glance">
                                            <i class="ion-clipboard"></i> 
                                            <span class="label">VIN:</span>
                                            <span class="value">5YFBURHE6</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="features">
                            <h5 class="singe-title">features & options</h5>

                            <ul class="features-list">
                                <li><i class="ion-checkmark-circled"></i> Auxiliary Heating</li>
                                <li><i class="ion-checkmark-circled"></i> Bluetooth</li>
                                <li><i class="ion-checkmark-circled"></i> Floor Mats</li>
                                <li><i class="ion-checkmark-circled"></i> Head-up Display</li>
                                <li><i class="ion-checkmark-circled"></i> Electric side mirror</li>
                                <li><i class="ion-checkmark-circled"></i> Not accident</li>
                                <li><i class="ion-checkmark-circled"></i> Alloy Wheels</li>
                                <li><i class="ion-checkmark-circled"></i> Voice Control System</li>
                                <li><i class="ion-checkmark-circled"></i> Exterior - extra clean</li>
                                <li><i class="ion-checkmark-circled"></i> MP3 Interface</li>
                                <li><i class="ion-checkmark-circled"></i> Reversing Camera</li>
                            </ul>
                        </div>

                        <div class="consumer-reviews">
                            <h5 class="singe-title">consumer reviews</h5>

                            <div class="point-rating">
                                <div class="rating-score">
                                    <h5 class="score-title">Average Rating</h5>
                                    <span class="score-point">4.5</span>
                                    <div class="score-star">
                                        <ul class="star">
                                            <li class="rating-on"><i class="ion-android-star"></i></li>
                                            <li class="rating-on"><i class="ion-android-star"></i></li>
                                            <li class="rating-on"><i class="ion-android-star"></i></li>
                                            <li class="rating-on"><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                        </ul>
                                        <span>(8 Reviews)</span>
                                    </div>
                                </div>

                                <div class="rating-progress">
                                    <div class="single-progress">
                                        <div class="progress-star">
                                            <span>5 Star</span>
                                        </div>
                                        <div class="progress-line">
                                            <div class="line-bar" style="width: 80%;"></div>
                                        </div>
                                        <div class="progress-percent">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                    <div class="single-progress">
                                        <div class="progress-star">
                                            <span>4 Star</span>
                                        </div>
                                        <div class="progress-line">
                                            <div class="line-bar" style="width: 10%;"></div>
                                        </div>
                                        <div class="progress-percent">
                                            <span>10%</span>
                                        </div>
                                    </div>
                                    <div class="single-progress">
                                        <div class="progress-star">
                                            <span>3 Star</span>
                                        </div>
                                        <div class="progress-line">
                                            <div class="line-bar" style="width: 10%;"></div>
                                        </div>
                                        <div class="progress-percent">
                                            <span>10%</span>
                                        </div>
                                    </div>
                                    <div class="single-progress">
                                        <div class="progress-star">
                                            <span>2 Star</span>
                                        </div>
                                        <div class="progress-line">
                                            <div class="line-bar" style="width: 0%;"></div>
                                        </div>
                                        <div class="progress-percent">
                                            <span>0%</span>
                                        </div>
                                    </div>
                                    <div class="single-progress">
                                        <div class="progress-star">
                                            <span>1 Star</span>
                                        </div>
                                        <div class="progress-line">
                                            <div class="line-bar" style="width: 0%;"></div>
                                        </div>
                                        <div class="progress-percent">
                                            <span>0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="reviews-comment">
                                <ul class="reviews-comments-items">
                                    <li>
                                        <div class="single-reviews-comment">
                                            <div class="comment-author">
                                                <img src="assets/images/author-1.jpg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <div class="rating-name">
                                                    <ul class="author-rating">
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                    </ul>
                                                    <div class="author-name">
                                                        <h4 class="name">Nicest car I have ever owned</h4>
                                                    </div>
                                                </div>
                                                <ul class="meta">
                                                    <li>by <a href="#">Ron Wteasley</a></li>
                                                    <li>15 hours ago</li>
                                                </ul>
                                                <p>This car has been a blessing to me and my family so far. I will be returning to buy my second car. Go see him at Carify Center</p>
                                                <a href="#" class="replay">Replay</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-reviews-comment">
                                            <div class="comment-author">
                                                <img src="assets/images/author-2.jpg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <div class="rating-name">
                                                    <ul class="author-rating">
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                    </ul>
                                                    <div class="author-name">
                                                        <h4 class="name">Stylish and Sexy!</h4>
                                                    </div>
                                                </div>
                                                <ul class="meta">
                                                    <li>by <a href="#">Anna Rooly</a></li>
                                                    <li>September 22, 2020</li>
                                                </ul>
                                                <p>This car has been a blessing to me and my family so far. I will be returning to buy my second car. Go see him at Carify Center</p>
                                                <a href="#" class="replay">Replay</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-reviews-comment">
                                            <div class="comment-author">
                                                <img src="assets/images/author-3.jpg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <div class="rating-name">
                                                    <ul class="author-rating">
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li class="rating-on"><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                    </ul>
                                                    <div class="author-name">
                                                        <h4 class="name">Nicest car I have ever owned</h4>
                                                    </div>
                                                </div>
                                                <ul class="meta">
                                                    <li>by <a href="#">Anna Rooly</a></li>
                                                    <li>September 16, 2020</li>
                                                </ul>
                                                <p>This car has been a blessing to me and my family so far. I will be returning to buy my second car. Go see him at Carify Center</p>
                                                <a href="#" class="replay">Replay</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="more-reviews">
                                    <a href="#" class="more">see more reviews (5) <i class="ion-ios-arrow-down"></i></a>
                                </div>
                            </div>

                            <div class="reviews-form">
                                <form action="#">
                                    <h4 class="form-title">Submit your review</h4>

                                    <div class="your-rating">
                                        <p>Your rating of this product:</p>
                                        <ul id='stars'>
                                            <li class='star' title='Poor' data-value='1'>
                                                <i class="ion-android-star"></i>
                                            </li>
                                            <li class='star' title='Fair' data-value='2'>
                                                <i class="ion-android-star"></i>
                                            </li>
                                            <li class='star' title='Good' data-value='3'>
                                                <i class="ion-android-star"></i>
                                            </li>
                                            <li class='star' title='Excellent' data-value='4'>
                                                <i class="ion-android-star"></i>
                                            </li>
                                            <li class='star' title='WOW!!!' data-value='5'>
                                                <i class="ion-android-star"></i>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="form-input-items">
                                        <div class="row gx-4">
                                            <div class="col-md-4">
                                                <div class="single-input">
                                                    <input type="text" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="single-input">
                                                    <input type="text" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="single-input">
                                                    <input type="text" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-input">
                                                    <textarea placeholder="Write your review here..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-input">
                                                    <button class="main-btn">Submit Review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="features-car">
                            <h5 class="singe-title">more vehicles by <a href="#">travelcars256</a></h5>

                            <div class="row car-row cars-active-3">
                                <div class="car-col col-lg-3">
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
                                                <span><i class="ion-android-person"></i> Dealer:  <a href="dealer-details.html">Eden Hazard</a></span>
                                            </div>
                                            <ul class="car-meta">
                                                <li><a href="#"><i class="ion-speedometer"></i> Automatic</a></li>
                                                <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                                <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-col col-lg-3">
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
                                        </div>
                                        <div class="car-content">
                                            <span class="price">
                                                <span class="price-amount">$33,400</span>
                                            </span>
                                            <span class="body-type"><a href="#">Hatchback</a></span>
                                            <h4 class="car-title"><a href="inventory-single-classified.html">New 2019 BMW X6 Series</a></h4>
                                            
                                            <div class="author-meta">
                                                <span><i class="ion-android-person"></i> Dealer:  <a href="dealer-details.html">Eden Hazard</a></span>
                                            </div>
                                            <ul class="car-meta">
                                                <li><a href="#"><i class="ion-speedometer"></i> Semi-Auto</a></li>
                                                <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                                <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-col col-lg-3">
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
                                        </div>
                                        <div class="car-content">
                                            <span class="price">
                                                <span class="sale-price">$15,000</span>
                                                <span class="regular-price">$22,500</span>
                                                <span class="discount-percentage">Save 35%</span>
                                            </span>
                                            <span class="body-type"><a href="#">Hatchback</a></span>
                                            <h4 class="car-title"><a href="inventory-single-classified.html">Used 2013 Ford Focus SEL Sport </a></h4>
                                            
                                            <div class="author-meta">
                                                <span><i class="ion-android-person"></i> Dealer:  <a href="dealer-details.html">Eden Hazard</a></span>
                                            </div>
                                            <ul class="car-meta">
                                                <li><a href="#"><i class="ion-speedometer"></i> Manual</a></li>
                                                <li><a href="#"><i class="ion-android-settings"></i> AWD</a></li>
                                                <li><a href="#"><i class="ion-map"></i> 9,000 mi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-col col-lg-3">
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
                                        </div>
                                        <div class="car-content">
                                            <span class="price">
                                                <span class="price-amount">$34,400</span>
                                            </span>
                                            <span class="body-type"><a href="#">Hatchback</a></span>
                                            <h4 class="car-title"><a href="inventory-single-classified.html">New 2017 Bentley Scooper </a> <i class="ion-android-checkmark-circle"></i></h4>
                                            
                                            <div class="author-meta">
                                                <span><i class="ion-android-person"></i> Dealer:  <a href="dealer-details.html">Eden Hazard</a></span>
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
                    </div>
                    <div class="col-xxl-3 col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-trusted">
                                <div class="single-logo">
                                    <img src="assets/images/auto-check.png" alt="">
                                </div>
                                <div class="single-logo">
                                    <img src="assets/images/certified.png" alt="">
                                </div>
                            </div>

                            <div class="sidebar-dealer-info">
                                <div class="dealer-title">
                                    <h4 class="sidebar-title">dealer info</h4>
                                </div>
                                <div class="dealer-map">
                                    <div id="contact-map"></div>
                                </div>
                                <div class="dealer-info">
                                    <div class="dealer-profile">
                                        <div class="profile-image">
                                            <img src="assets/images/author-5.jpg" alt="">
                                        </div>
                                        <div class="profile-content">
                                            <h5 class="name"><a href="#">TravelCars256</a></h5>
                                            <div class="profile-rating">
                                                <ul class="star">
                                                    <li class="rating-on"><i class="ion-android-star"></i></li>
                                                    <li class="rating-on"><i class="ion-android-star"></i></li>
                                                    <li class="rating-on"><i class="ion-android-star"></i></li>
                                                    <li class="rating-on"><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                </ul>
                                                <span>(24 Rating)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="info-items">
                                        <li>
                                            <i class="ion-ios-location"></i>
                                            <span>568 Library St, Newington, London, UK</span>
                                        </li>
                                        <li>
                                            <i class="ion-ios-telephone"></i>
                                            <span><a class="call" href="tel:001586869862">(+0015) 86 86 9862</a></span>
                                        </li>
                                        <li>
                                            <i class="ion-android-mail"></i>
                                            <span><a href="mailto:support@travelcars256.com">support@travelcars256.com</a></span>
                                        </li>
                                        <li>
                                            <i class="ion-android-globe"></i>
                                            <span><a class="site" href="#">travelcars256.com</a></span>
                                        </li>
                                    </ul>
                                    <ul class="social">
                                        <li><a class="facebook" href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a class="googleplus" href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                        <li><a class="tumblr" href="#"><i class="ion-social-tumblr"></i></a></li>
                                        <li><a class="rss" href="#"><i class="ion-social-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-dealer-contact">
                                <h4 class="sidebar-title">contact dealer</h4>

                                <div class="dealer-contact-form">
                                    <form action="#">
                                        <div class="single-input">
                                            <input type="text" placeholder="Full Name">
                                            <i class="ion-android-person"></i>
                                        </div>
                                        <div class="single-input">
                                            <input type="email" placeholder="Emaill Address *">
                                            <i class="ion-android-mail"></i>
                                        </div>
                                        <div class="single-input">
                                            <input type="text" placeholder="Phone (Optinal)">
                                            <i class="ion-android-call"></i>
                                        </div>
                                        <div class="single-input">
                                            <input type="text" placeholder="Zip Code *">
                                            <i class="ion-ios-location"></i>
                                        </div>
                                        <div class="single-input">
                                            <textarea placeholder="Write your Message here..."></textarea>
                                        </div>
                                        <div class="single-input">
                                            <button class="main-btn d-block">check availability</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar-calculator">
                                <h4 class="sidebar-title">financing calculator</h4>

                                <div class="calculator-form">
                                    <form action="#">
                                        <div class="calculator-input">
                                            <span class="placeholder">
                                                Car Price <span>($)</span>
                                            </span>
                                            <div class="input">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="calculator-input">
                                            <span class="placeholder">
                                                Interested Rate <span>(%)</span>
                                            </span>
                                            <div class="input">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="calculator-input">
                                            <span class="placeholder">
                                                Period <span>(month)</span>
                                            </span>
                                            <div class="input">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="calculator-input">
                                            <span class="placeholder">
                                                Down Payment <span>($)</span>
                                            </span>
                                            <div class="input">
                                                <input type="text">
                                            </div>
                                        </div>

                                        <div class="calculator-form-result">
                                            <div class="single-result">
                                                <span class="title">Monthly Payment:</span>
                                                <span class="main-result">$1,250.52</span>
                                            </div>
                                            <div class="single-result">
                                                <span class="title">Total Interest Payment:</span>
                                                <span class="main-result">$628.63</span>
                                            </div>
                                            <div class="single-result">
                                                <span class="title">Total Amount to Pay:</span>
                                                <span class="main-result">$24,350.65</span>
                                            </div>
                                        </div>

                                        <div class="calculator-btn">
                                            <div class="single-btn">
                                                <button class="main-btn d-block">calculate</button>
                                            </div>
                                            <div class="single-btn">
                                                <button class="main-btn d-block main-btn-2">Clear</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar-post">
                                <h4 class="sidebar-title">related posts</h4>
                                
                                <div class="post-wrapper">
                                    <div class="single-news mt-30">
                                        <div class="news-image">
                                            <a href="blog-single-with-sidebar.html">
                                                <img src="assets/images/blog/blog-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-meta">
                                                <span class="meta-cat"><a href="#">News</a></span>
                                                <span class="meta-date"><a href="#">July 31, 2020</a></span>
                                            </div>
                                            <h3 class="news-title"><a href="blog-single-with-sidebar.html">BMW X6, The Car Trending in 2019, Best Choice...</a></h3>
                                            <ul class="news-meta-bottom">
                                                <li><a href="#"><i class="ion-chatboxes"></i> 0 Comments </a></li>
                                                <li><span><i class="ion-eye"></i> 83 Viewed</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-news mt-30">
                                        <div class="news-image">
                                            <a href="blog-single-with-sidebar.html">
                                                <img src="assets/images/blog/blog-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-meta">
                                                <span class="meta-cat"><a href="#">News</a></span>
                                                <span class="meta-date"><a href="#">July 31, 2020</a></span>
                                            </div>
                                            <h3 class="news-title"><a href="blog-single-with-sidebar.html">BMW X6, The Car Trending in 2019, Best Choice...</a></h3>
                                            <ul class="news-meta-bottom">
                                                <li><a href="#"><i class="ion-chatboxes"></i> 0 Comments </a></li>
                                                <li><span><i class="ion-eye"></i> 83 Viewed</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-similar-listing">
                                <h4 class="sidebar-title">Similar listing</h4>

                                <ul class="similar-listing-items">
                                    <li>
                                        <div class="single-listing">
                                            <div class="listing-image">
                                                <a href="inventory-single-classified.html">
                                                    <img src="assets/images/car-2/car-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="listing-content">
                                                <h2 class="title"><a href="inventory-single-classified.html">New 2015 Toyota Elantra 2.5L </a></h2>
                                                <div class="price">
                                                    <span class="price-amount">$5,500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-listing">
                                            <div class="listing-image">
                                                <a href="inventory-single-classified.html">
                                                    <img src="assets/images/car-2/car-8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="listing-content">
                                                <h2 class="title"><a href="inventory-single-classified.html">2012 Toyota Pickup Truck i7</a></h2>
                                                <div class="price">
                                                    <span class="price-amount">$4,250</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-listing">
                                            <div class="listing-image">
                                                <a href="inventory-single-classified.html">
                                                    <img src="assets/images/car-2/car-11.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="listing-content">
                                                <h2 class="title"><a href="inventory-single-classified.html">2012 Chervelot Pickup Truck 3.5L</a></h2>
                                                <div class="price">
                                                    <span class="price-sale">$7,700</span>
                                                    <span class="regular-price">$9,500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <!--====== Inventory Single Ends ======-->

@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection    