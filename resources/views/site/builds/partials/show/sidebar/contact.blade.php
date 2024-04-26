                            <div class="sidebar-dealer-contact">
                                <h4 class="sidebar-title">Contact Us</h4>

                                <div class="dealer-contact-form">
                                    <form id="contact-form" action="{{ route('builds.buildContact') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="build_name" value="{{ $build->name }}">
                                        <input type="hidden" name="build_slug" value="{{ route('builds.show',$build->slug) }}">
                                        <div class="single-input">
                                            <input type="text" placeholder="Full Name" name="name" required>
                                            <i class="ion-android-person"></i>
                                        </div>
                                        <div class="single-input">
                                            <input type="email" placeholder="Emaill Address *" name="email" required>
                                            <i class="ion-android-mail"></i>
                                        </div>
                                        <div class="single-input">
                                            <input type="text" placeholder="Phone (Optinal)" name="phone">
                                            <i class="ion-android-call"></i>
                                        </div>
                                        <div class="single-input">
                                            <input type="text" placeholder="Zip Code *" name="zipcode" required>
                                            <i class="ion-ios-location"></i>
                                        </div>
                                        <div class="single-input">
                                            <textarea required name="message" placeholder="Write your Message here..."></textarea>
                                        </div>
                                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                        <p class="form-message"></p>
                                        <div class="single-input">
                                            <button id="contactFormButton" class="main-btn d-block">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
