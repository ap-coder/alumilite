                        <div class="inventory-single-dealership-gallery">
                            <div class="dealership-gallery-active">
                                @if($product->photo)
                                        {{ $product->getFirstMedia('photo')('responsive') }}
                                    @else
                                    <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                @endif

                                @if($product->additional_photos->count()>0)
                                    @foreach ($product->additional_photos as $photos)
                                        {{ $photos('responsive') }}
                                    @endforeach
                                @else
                                    <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                    <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                    <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                    <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                @endif
                               
                            </div>
                            <div class="dealership-gallery-thumb-active">
                                @if($product->photo)
                                    <div class="thumb-col">
                                        <div class="single-dealership-thumb">
                                            {{ $product->getFirstMedia('photo')('responsive') }}
                                        </div>
                                    </div>
                                @else
                                    <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                @endif
                                
                                @if($product->additional_photos->count()>0)
                                    @foreach ($product->additional_photos as $photos)
                                        <div class="thumb-col">
                                            <div class="single-dealership-thumb">
                                                {{ $photos('responsive') }}
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="thumb-col">
                                        <div class="single-dealership-thumb">
                                            <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="thumb-col">
                                        <div class="single-dealership-thumb">
                                            <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="thumb-col">
                                        <div class="single-dealership-thumb">
                                            <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="thumb-col">
                                        <div class="single-dealership-thumb">
                                            <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>