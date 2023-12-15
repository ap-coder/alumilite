@extends('site.layouts.app')

@section('content')
    <!--====== Contact Map Start ======-->

    <div class="contact-map-area">
        <div id="contact-map"></div>
    </div>

    <!--====== Contact Map Ends ======-->

    <!--====== Contact Start ======-->

    <section class="contact-area">
        <div class="container">
            <div class="contact-info">
                <h3 class="contact-title">Contact us for any further questions, possible projects and <br> business partnerships</h3>

                <div class="contact-info-wrapper">
                    <div class="row gx-5">
                        <div class="col-lg-4">
                            <div class="single-contact-info">
                                <h4 class="info-title">Contact Directly <i class="ion-android-mail"></i></h4>

                                <p><a href="mailto:tkatwyk@gmail.com">tkatwyk@gmail.com</a></p>
                                <p><a href="tel:+05683458-868">(+1) 435-990-1012</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-contact-info">
                                <h4 class="info-title">Visit our Office <i class="ion-android-pin"></i></h4>
                                Parowan, UT 84761


                                <p> Parowan, UT <br> 84761, United States</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-contact-info">
                                <h4 class="info-title">work with us <i class="ion-briefcase"></i></h4>

                                <p>Send us an email: <br> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2 class="form-title">Get In Touch</h2>

                <form id="contact-form" action="" method="post">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-form">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-form">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-form">
                                <textarea name="message" placeholder="Write your review here..."></textarea>
                            </div>
                        </div>
                        <p class="form-message"></p>
                        <div class="col-lg-12">
                            <div class="single-form">
                                <button class="main-btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!--====== Contact Ends ======-->
@endsection

@section('headcss') @endsection
@section('headjs') @endsection

@section('footjs')
    <SCRIPT LANGUAGE="JavaScript">
        user = 'tkatwyk';site = 'gmail.com';
        document.write('<a href=\"mailto:' + user + '@' + site + '\">');
        document.write(user + '@' + site + '</a>');
    </SCRIPT>
    <!--====== Google Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <script src="{{asset('assets/js/map-script.js')}}"></script>
@endsection
