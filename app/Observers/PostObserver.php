<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Handle the Post "creating" event.
     */
    public function creating(Post $post)
    {
        if ($post->slug) {
            $slug = Str::slug($post->slug, '-');
            $slug = strtolower($slug);
            $post->slug = $slug;
        } else {
            $slug = Str::slug($post->title, '-');
            $slug = strtolower($slug);
            $post->slug = $slug;
        }
    }

    /**
     * Handle the Post "updating" event.
     */
    public function updating(Post $post)
    {
        $post->slug = $post->slug ? $post->slug : Str::slug($post->title, '-');
    }
}
