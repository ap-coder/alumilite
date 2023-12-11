                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                    <div class="inventory-dealership-specifications">
                                        <table class="table">                                            
                                            <tbody>
                                                @if ($product->technical_specs->count()>0)
                                                    @foreach ($product->technical_specs as $specification)
                                                        <tr>
                                                            <th><i class="{{ $specification->icon_class }}"></i> {{ $specification->name }}</th>
                                                            <td>{{ $specification->value }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                          </table>
                                    </div>
                                </div>