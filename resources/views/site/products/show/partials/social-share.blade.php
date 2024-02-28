<div class="product-social">
    <div class="social-share">
        <ul class="social">
            <li>
                <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ route('products.show', $product->slug ) }}" target="_blank">
                    <i class="ion-social-facebook"></i>
                </a>
            </li>
            <li>
                <a class="twitter" href="https://twitter.com/intent/tweet?text={{ $product->name }}&url={{ route('products.show', $product->slug ) }}" target="_blank">
                    <i class="ion-social-twitter"></i>
                </a>
            </li>
            <li>
                <a class="pinterest" href="https://pinterest.com/pin/create/button/?url={{ route('products.show', $product->slug ) }}&media={{ $product->photo ? $product->photo->getUrl() : '' }}&description={{ $product->name }}" target="_blank">
                    <i class="ion-social-pinterest-outline"></i>
                </a>
            </li>
            <li>
                <a class="tumblr" href="https://www.tumblr.com/share/link?url={{ route('products.show', $product->slug ) }}&name={{ $product->name }}&description={{ $product->excerpt }}"  target="_blank">
                    <i class="ion-social-tumblr"></i>
                </a>
            </li>
            <li>
                <a class="reddit" href="https://www.reddit.com/submit?url={{ route('products.show', $product->slug ) }}&title={{ $product->name }}" target="_blank">
                    <i class="ion-social-reddit"></i>
                </a>
            </li>
            <li>
                <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('products.show', $product->slug ) }}&title={{ $product->name }}" target="_blank">
                    <i class="ion-social-linkedin"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
