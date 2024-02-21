<?php

namespace App\Observers;

use App\Models\Brand;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class BrandObserver
{
    /**
     * Handle the Brand "creating" event.
     */
    public function creating(Brand $brand)
    {
        if ($brand->slug) {
            $slug = Str::slug($brand->slug, '-');
            $slug = strtolower($slug);
            $brand->slug = $slug;
        } else {
            $slug = Str::slug($brand->name, '-');
            $slug = strtolower($slug);
            $brand->slug = $slug;
        }
    }

    /**
     * Handle the Brand "updating" event.
     */
    public function updating(Brand $brand)
    {
        $brand->slug = $brand->slug ? $brand->slug : Str::slug($brand->name, '-');
    }
}
