<div class="inventory-image-gallery">
            <div class="inventory-gallery-active">
                @if ($build->photo)
                    <div class="single-image-gallery">
                        {{ $build->getFirstMedia('photo')('responsive') }}
                    </div>
                @else
                    <div class="single-image-gallery">
                        <img src="{{ asset('assets/images/inventory-single/inventory-single-1.jpg') }}" alt="{{ $build->name }}">
                    </div>
                @endif

                @if($build->additional_photos->count()>0)
                    @foreach ($build->additional_photos as $photos)
                        {{ $photos('responsive') }}
                    @endforeach
                @else
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
                
                
            </div>

            <div class="inventory-thumb-active">

                @if ($build->photo)
                    <div class="single-image-thumb">
                        {{ $build->getFirstMedia('photo')('responsive') }}
                    </div>
                @else
                    <div class="single-image-thumb">
                        <img src="{{ asset('assets/images/inventory-single/inventory-single-1.jpg') }}" alt="{{ $build->name }}">
                    </div>
                @endif

                @if($build->additional_photos->count()>0)
                    @foreach ($build->additional_photos as $photos)
                        <div class="single-image-thumb">
                            {{ $photos('responsive') }}
                        </div>
                    @endforeach
                @else
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
                
                
            </div>
        </div>