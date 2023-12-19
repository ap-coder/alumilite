                            <div class="reviews-form">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                                <form action="{{ route('builds.review.store') }}" method="post">
                                    @csrf
                                    <h4 class="form-title">Submit your review</h4>

                                    <div class="your-rating">
                                        <p>Your rating of this product:</p>
                                        <ul id='stars'>
                                            <li class='star selected' title='Poor' data-value='1'>
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
                                        <input type="hidden" name="rating" id="rating" value="1">
                                    </div>

                                    <div class="form-input-items">
                                        <div class="row gx-4">
                                            <div class="col-md-4">
                                                <div class="single-input">
                                                    <input type="text" placeholder="NAME" name="signiture" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="single-input">
                                                    <input type="text" placeholder="WEBSITE" name="website">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="single-input">
                                                    <input type="text" placeholder="TITLE" name="title" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-input">
                                                    <textarea name="body" placeholder="Write your review here..." required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="add-car-upload">
                                                    <div class="add-car-title">
                                                        <h4 class="title">Avatar</h4>
                                                    </div>
                                                    <p>Upload Author Avatar</p>

                                                    <div class="single-upload file-input mt-40">
                                                        <input name="avatar" type='file'>
                                                        <span class='button'>Choose file</span>
                                                        <span class='label' data-js-label>No file choosen</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-6">
                                                <div class="add-car-upload">
                                                    <div class="add-car-title">
                                                        <h4 class="title">Photo</h4>
                                                    </div>
                                                    <p>Upload a photo of your vehicle</p>

                                                    <div class="single-upload file-input mt-40">
                                                        <input name="photo" type='file'>
                                                        <span class='button'>Choose file</span>
                                                        <span class='label' data-js-label>No file choosen</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="build_id" id="build_id" value="{{ $build->id }}">
                                            <div class="col-md-12">
                                                <div class="single-input">
                                                    <button class="main-btn">Submit Review</button>
                                                </div>
                                            </div>
                                            

                                        </div>
                                    </div>
                                </form>
                            </div>
