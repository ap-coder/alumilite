                            <ul class="nav" role="tablist">
                                <li><a class="active" data-bs-toggle="tab" href="#tab1" role="tab">Overview</a></li>
                                @if ($product->technical_specs->count()>0)
                                <li><a data-bs-toggle="tab" href="#tab2" role="tab">Specifications</a></li>
                                @endif
                                @if ($product->features->count()>0)
                                <li><a data-bs-toggle="tab" href="#tab3" role="tab">features</a></li>
                                @endif
                                {{-- <li><a data-bs-toggle="tab" href="#tab4" role="tab">Reviews</a></li> --}}
                            </ul>
