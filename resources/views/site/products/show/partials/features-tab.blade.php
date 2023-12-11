                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                    <div class="inventory-dealership-features">            
                                        <ul class="features-list">
                                            @if ($product->features->count()>0)
                                                @foreach ($product->features as $feature)
                                                    <li><i class="ion-checkmark-circled"></i> {{ $feature->name }}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>