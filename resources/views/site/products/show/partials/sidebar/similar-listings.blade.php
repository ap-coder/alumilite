                            <div class="sidebar-similar-listing">
                                <h4 class="sidebar-title">Similar Products</h4>

                                <ul class="similar-listing-items">
                                    @foreach ($products as $product)
                                        <li>
                                            <div class="single-listing">
                                                <div class="listing-image">
                                                    <a href="{{ route('products.show',$product->slug) }}">
                                                        @if($product->photo)
                                                            <img src="{{ $product->photo->getUrl() }}" alt="{{ $product->name }}">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="listing-content">
                                                    <h2 class="title"><a href="{{ route('products.show',$product->slug) }}">{{ $product->name }}</a></h2>
                                                    <div class="price">
                                                        @if ($product->price && $product->msrp)
                                                            <span class="price-sale">${{ number_format($product->price) }}</span>
                                                            <span class="regular-price">${{ number_format($product->msrp) }}</span>
                                                        @else
                                                            <span class="price-amount">${{ number_format($product->price) }}</span>
                                                        @endif
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>