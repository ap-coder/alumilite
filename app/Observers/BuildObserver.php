<?php

namespace App\Observers;

use App\Models\Build;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class BuildObserver
{
    /**
     * Handle the Build "creating" event.
     */
    public function creating(Build $build): void
    {
        if ($build->slug) {
            $slug = Str::slug($build->slug, '-');
            $slug = strtolower($slug);
            $build->slug = $slug;
        } else {
            $slug = Str::slug($build->name, '-');
            $slug = strtolower($slug);
            $build->slug = $slug;
        }
    }

    /**
     * Handle the Build "updating" event.
     */
    public function updating(Build $build): void
    {
        $build->slug = $build->slug ? $build->slug : Str::slug($build->name, '-');
    }
}
