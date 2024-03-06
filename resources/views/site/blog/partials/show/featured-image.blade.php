@if($article->featured_image)
    <div class="single-post-header-2 d-flex align-items-end bg_cover" style="background-image: url('{{ $article->featured_image->getUrl('banner') }}');">
        <div class="container">
            <div class="single-post-header-inner-2">
                <div class="entry-meta">
                    <ul class="meta-items">
                        <li><a href="#">{{date('F j, Y', strtotime($article->created_at)) }}</a></li>
                    </ul>
                </div>
                <h2 class="entry-title">{{ $article->title ?? '' }}</h2>
            </div>
        </div>
    </div>
@endif
