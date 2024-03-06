<ul class="social">
    <li>
        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.show', $article->slug ) }}" target="_blank">
            <i class="ion-social-facebook"></i>
        </a>
    </li>
    <li>
        <a class="twitter" href="https://twitter.com/intent/tweet?text={{ $article->title }}&url={{ route('blog.show', $article->slug ) }}" target="_blank">
            <i class="ion-social-twitter"></i>
        </a>
    </li>
    <li>
        <a class="pinterest" href="https://pinterest.com/pin/create/button/?url={{ route('blog.show', $article->slug ) }}&media={{ $article->featured_image->getUrl() }}&description={{ $article->title }}" target="_blank">
            <i class="ion-social-pinterest-outline"></i>
        </a>
    </li>
    <li>
        <a class="tumblr" href="https://www.tumblr.com/share/link?url={{ route('blog.show', $article->slug ) }}&name={{ $article->title }}&description={{ $article->excerpt }}"  target="_blank">
            <i class="ion-social-tumblr"></i>
        </a>
    </li>
    <li>
        <a class="reddit" href="https://www.reddit.com/submit?url={{ route('blog.show', $article->slug ) }}&title={{ $article->title }}" target="_blank">
            <i class="ion-social-reddit"></i>
        </a>
    </li>
    <li>
        <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('blog.show', $article->slug ) }}&title={{ $article->title }}" target="_blank">
            <i class="ion-social-linkedin"></i>
        </a>
    </li>
</ul>
