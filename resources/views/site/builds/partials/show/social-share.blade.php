<div class="social-share">
    <ul class="social">
        <li>
            <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ route('builds.show', $build->slug ) }}" target="_blank">
                <i class="ion-social-facebook"></i>
            </a>
        </li>
        <li>
            <a class="twitter" href="https://twitter.com/intent/tweet?text={{ $build->name }}&url={{ route('builds.show', $build->slug ) }}" target="_blank">
                <i class="ion-social-twitter"></i>
            </a>
        </li>
        <li>
            <a class="pinterest" href="https://pinterest.com/pin/create/button/?url={{ route('builds.show', $build->slug ) }}&media={{ $build->photo ? $build->photo->getUrl() : '' }}&description={{ $build->name }}" target="_blank">
                <i class="ion-social-pinterest-outline"></i>
            </a>
        </li>
        <li>
            <a class="tumblr" href="https://www.tumblr.com/share/link?url={{ route('builds.show', $build->slug ) }}&name={{ $build->name }}&description={{ $build->excerpt }}"  target="_blank">
                <i class="ion-social-tumblr"></i>
            </a>
        </li>
        <li>
            <a class="reddit" href="https://www.reddit.com/submit?url={{ route('builds.show', $build->slug ) }}&title={{ $build->name }}" target="_blank">
                <i class="ion-social-reddit"></i>
            </a>
        </li>
        <li>
            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('builds.show', $build->slug ) }}&title={{ $build->name }}" target="_blank">
                <i class="ion-social-linkedin"></i>
            </a>
        </li>
    </ul>
</div>
