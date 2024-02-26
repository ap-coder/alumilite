                        <div class="inventory-single-dealership-gallery">
                            <div class="dealership-gallery-active">
                                @if($product->photo)
                                        {{-- {{ $product->getFirstMedia('photo')('responsive') }} --}}
                                        <img src="{{ $product->photo->getUrl() }}" alt="{{ $product->name }}">
                                    @else
                                        @if ($env=='local')
                                            <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                        @endif

                                @endif

                                @if($product->additional_photos->count()>0)
                                    @foreach ($product->additional_photos as $photos)
                                        {{-- {{ $photos('responsive') }} --}}
                                        <img src="{{ $photos->getUrl() }}" alt="{{ $product->name }}">
                                    @endforeach
                                @else
                                    @if ($env=='local')
                                        <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                        <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                        <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                        <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                    @endif

                                @endif

                            </div>
                            <div class="dealership-gallery-thumb-active">
                                @if($product->photo && $product->additional_photos->count()>0)
                                    <div class="thumb-col">
                                        <div class="single-dealership-thumb">
                                            {{-- {{ $product->getFirstMedia('photo')('responsive') }} --}}
                                            <img src="{{ $product->photo->getUrl() }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                @else
                                    @if ($env=='local')
                                        <img src="{{ asset('assets/images/inventory-single-dealership/dealership-1.jpg') }}" alt="{{ $product->name }}">
                                    @endif

                                @endif

                                @if($product->additional_photos->count()>0)
                                    @foreach ($product->additional_photos as $photos)
                                        <div class="thumb-col">
                                            <div class="single-dealership-thumb">
                                                {{-- {{ $photos('responsive') }} --}}
                                                <img src="{{ $photos->getUrl() }}" alt="{{ $product->name }}">
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    @if ($env=='local')
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

                                @endif
                            </div>
                        </div>
