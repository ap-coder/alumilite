                        <div class="inventory-single-dealership-gallery">
                            <div class="dealership-gallery-active">
                                @if($product->photo)
                                    <img src="{{ $product->photo->getUrl() }}" alt="{{ $product->name }}">
                                    @else
                                    <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                @endif

                                @if($product->additional_photos->count()>0)
                                    @foreach ($product->additional_photos as $photos)
                                        <img src="{{ $photos->getUrl() }}" alt="{{ $product->name }}">
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
                                            <img src="{{ $product->photo->getUrl() }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                @else
                                    <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                @endif
                                
                                @if($product->additional_photos->count()>0)
                                    @foreach ($product->additional_photos as $photos)
                                        <div class="thumb-col">
                                            <div class="single-dealership-thumb">
                                                <img src="{{ $photos->getUrl() }}" alt="{{ $product->name }}">
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