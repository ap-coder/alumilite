@if(isset($article->author))
<div class="entry-author-box">
    <div class="author-avatar">
        <div class="avatar-image">
            @if($article->author->avatar)
                {{-- {{ $article->author->getFirstMedia('avatar')('avatar') }} --}}
            <img src="{{ $article->author->avatar->getUrl('avatar') }}" alt="{{ $article->author->name }}">
            @else
                <img src="{{ asset('assets/images/blog-single/author.jpg') }}" alt="{{ $article->author->name }}">
            @endif
        </div>
        <div class="avatar-info">
            <span class="sub-title">The Author</span>
            <h4 class="name">{{ $article->author->name }}</h4>
            {!! $article->author->bio !!}
        </div>
    </div>
</div>
@endif
