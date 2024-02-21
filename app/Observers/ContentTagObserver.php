<?php

namespace App\Observers;

use App\Models\ContentTag;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class ContentTagObserver
{
    /**
     * Handle the ContentTag "creating" event.
     */
    public function creating(ContentTag $contentTag)
    {
        if ($contentTag->slug) {
            $slug = Str::slug($contentTag->slug, '-');
            $slug = strtolower($slug);
            $contentTag->slug = $slug;
        } else {
            $slug = Str::slug($contentTag->name, '-');
            $slug = strtolower($slug);
            $contentTag->slug = $slug;
        }
    }

    /**
     * Handle the ContentTag "updating" event.
     */
    public function updating(ContentTag $contentTag)
    {
        $contentTag->slug = $contentTag->slug ? $contentTag->slug : Str::slug($contentTag->name, '-');
    }
}
