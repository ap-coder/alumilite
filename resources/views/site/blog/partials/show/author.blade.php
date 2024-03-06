@if(isset($article->author))
<div class="entry-author-box">
    <div class="author-avatar">
        <div class="avatar-image">
            @if($article->author->avatar)
                {{ $article->author->getFirstMedia('avatar')('avatar') }}
            {{-- <img src="{{ $article->author->avatar }}" alt="{{ $article->author->name }}">--}}
            @else
                <img src="{{ asset('assets/images/blog-single/author.jpg') }}" alt="dummy author">
            @endif
        </div>
        <div class="avatar-info">
            <span class="sub-title">The Author</span>
            <h4 class="name">{{ $article->author->name }}</h4>
            <p>{{ $article->author->bio }}</p>
        </div>
    </div>
</div>
@endif
