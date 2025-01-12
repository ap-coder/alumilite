<div class="inventory-image-gallery">
            <div class="inventory-gallery-active">
                @if ($build->photo)
                    <div class="single-image-gallery">
                        {{ $build->getFirstMedia('photo')('responsive') }}
                    </div>
                @else
                    @if ($env=='local')
                        <div class="single-image-gallery">
                            <img src="{{ asset('assets/images/inventory-single/inventory-single-1.jpg') }}" alt="{{ $build->name }}">
                        </div>
                    @endif
                @endif

                @if($build->additional_photos->count()>0)
                    @foreach ($build->additional_photos as $photos)
                        {{ $photos('responsive') }}
                    @endforeach
                @else
                    @if ($env=='local')
                        <div class="single-image-gallery">
                            <img src="{{ asset('assets/images/inventory-single/inventory-single-2.jpg') }}" alt="{{ $build->name }}">
                        </div>
                        <div class="single-image-gallery">
                            <img src="{{ asset('assets/images/inventory-single/inventory-single-3.jpg') }}" alt="{{ $build->name }}">
                        </div>
                        <div class="single-image-gallery">
                            <img src="{{ asset('assets/images/inventory-single/inventory-single-2.jpg') }}" alt="{{ $build->name }}">
                        </div>
                    @endif

                @endif


            </div>

            <div class="inventory-thumb-active">

                @if ($build->photo && $build->additional_photos->count() > 0)
                    <div class="single-image-thumb">
                        {{-- {{ $build->getFirstMedia('photo')('responsive') }} --}}
                        <img src="{{ $build->photo->getUrl() }}" alt="{{ $build->name }}">
                    </div>
                @else
                    @if ($env=='local')
                        <div class="single-image-thumb">
                            <img src="{{ asset('assets/images/inventory-single/inventory-single-1.jpg') }}" alt="{{ $build->name }}">
                        </div>
                    @endif
                @endif

                @if($build->additional_photos->count()>0)
                    @foreach ($build->additional_photos as $photos)
                        <div class="single-image-thumb">
                            {{-- {{ $photos('responsive') }} --}}
                            <img src="{{ $photos->getUrl() }}" alt="{{ $build->name }}">
                        </div>
                    @endforeach
                @else
                    @if ($env=='local')
                        <div class="single-image-thumb">
                            <img src="{{ asset('assets/images/inventory-single/inventory-single-2.jpg') }}" alt="{{ $build->name }}">
                        </div>
                        <div class="single-image-thumb">
                            <img src="{{ asset('assets/images/inventory-single/inventory-single-3.jpg') }}" alt="">
                        </div>
                        <div class="single-image-thumb">
                            <img src="{{ asset('assets/images/inventory-single/inventory-single-2.jpg') }}" alt="{{ $build->name }}">
                        </div>
                    @endif

                @endif


            </div>
        </div>
