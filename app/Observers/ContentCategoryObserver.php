<?php

namespace App\Observers;

use App\Models\ContentCategory;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class ContentCategoryObserver
{
    /**
     * Handle the ContentCategory "creating" event.
     */
    public function creating(ContentCategory $contentCategory)
    {
        if ($contentCategory->slug) {
            $slug = Str::slug($contentCategory->slug, '-');
            $slug = strtolower($slug);
            $contentCategory->slug = $slug;
        } else {
            $slug = Str::slug($contentCategory->name, '-');
            $slug = strtolower($slug);
            $contentCategory->slug = $slug;
        }
    }

    /**
     * Handle the ContentCategory "updating" event.
     */
    public function updating(ContentCategory $contentCategory)
    {
        $contentCategory->slug = $contentCategory->slug ? $contentCategory->slug : Str::slug($contentCategory->name, '-');
    }
}
