                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                    <div class="inventory-dealership-overview">
                                        <div class="ck-content">
                                            {!! $product->description !!}


                                        @if ($product->documents->count()>0)
                                            <div class="downloadable-documents mt-5">
                                                <h2>Documents</h2>
                                                <ul class="mt-2">
                                                    @foreach ($product->documents as $document)
                                                        <li>
                                                            <a download href="{{ $document->getUrl() }}" target="_blank"><i class="ion-android-download"></i> {{ $document->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        </div>
                                    </div>
                                </div>
