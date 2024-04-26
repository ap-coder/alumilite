                            <div class="sidebar-dealer-contact">
                                <h4 class="sidebar-title">CONTACT US</h4>

                                <div class="dealer-contact-form">
                                    <form id="contact-form" action="{{ route('products.productContact') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_name" value="{{ $product->name }}">
                                        <input type="hidden" name="product_slug" value="{{ route('products.show',$product->slug) }}">
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