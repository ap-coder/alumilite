@if ($similarBuilds->count()>0)
<div class="features-car">
    <h5 class="singe-title">Other Builds Of This Brand <a href="{{ route('builds.show',$build->slug) }}"> {{ $build->brand->name }}</a></h5>

    <div class="row car-row cars-active-3">

        @foreach($similarBuilds as $similarBuild)
        <div class="car-col col-lg-3">
                <div class="single-car-item mt-50">
                    <div class="car-image">
                        <a href="{{ route('builds.show',$similarBuild->slug) }}">
                            @if($similarBuild->photo)
                                {{-- {{ $build->getFirstMedia('photo')('excerpt') }} --}}
                                <img src="{{ $similarBuild->photo->getUrl() }}" alt="{{ $similarBuild->name }}">
                            @else
                                <img src="{{ asset('assets/images/car-2/car-1.jpg') }}" alt="{{ $similarBuild->name }}">
                            @endif
                        </a>

                    </div>
                    <div class="car-content">
                        <span class="body-type"><a href="javacript:void(0);">{{ $similarBuild->product_type ? $similarBuild->product_type->name : '' }}</a></span>
                        <h4 class="car-title"><a href="{{ route('builds.show',$similarBuild->slug) }}">{{ $similarBuild->name }}</a></h4>

                    </div>
                </div>
                </div>
                @endforeach
        
    </div>
</div>
@endif
                        