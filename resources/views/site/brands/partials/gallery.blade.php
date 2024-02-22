    <div class="gallery">
        @foreach ($buildPhotos->chunk(3) as $buildPhoto)
            <div class="gallery__column">
                @foreach ($buildPhoto as $photo)
                    @if ($photo->photo)
                        <a href="{{ route('builds.show',$photo->slug) }}" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="{{ $photo->photo->getUrl('homepage') }}" alt="{{ $photo->name }}" class="gallery__image">
                                <figcaption class="gallery__caption">{{ $photo->name }}</figcaption>
                            </figure>
                        </a>
                    @endif
                @endforeach
            </div>
        @endforeach
        

         {{-- <div class="gallery__column">
            <a href="https://unsplash.com/@hikiapp" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/A9rQeI2AdR4/300x300" alt="Portrait by Hikiapp" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Hikiapp</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@von_co" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/dnL6ZIpht2s/300x300" alt="Portrait by Ivana Cajina" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Ivana Cajina</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@j_erhunse" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/vp9mRauo68c/300x500" alt="Portrait by Jeffery Erhunse" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Jeffery Erhunse</figcaption>
                </figure>
            </a>
        </div>

       <div class="gallery__column">
            <a href="https://unsplash.com/@marilezhava" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/Xm9-vA_bhm0/300x500" alt="Portrait by Mari Lezhava" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Mari Lezhava</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@ethanhaddox" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/NTjSR3zYpsY/300x300" alt="Portrait by Ethan Haddox" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Ethan Haddox</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@mr_geshani" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/2JH8d3ChNec/300x300" alt="Portrait by Amir Geshani" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Amir Geshani</figcaption>
                </figure>
            </a>
        </div>

        <div class="gallery__column">
            <a href="https://unsplash.com/@nixcreative" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/sh3LSNbyj7k/300x300" alt="Portrait by Tyler Nix" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Tyler Nix</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@majestical_jasmin" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/OQd9zONSx7s/300x300" alt="Portrait by Jasmin Chew" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Jasmin Chew</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@dimadallacqua" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/XZkEhowjx8k/300x500" alt="Portrait by Dima DallAcqua" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Dima DallAcqua</figcaption>
                </figure>
            </a>
        </div> --}}
    </div>