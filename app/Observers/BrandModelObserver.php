<?php

namespace App\Observers;

use App\Models\BrandModel;
use Illuminate\Support\Str;

class BrandModelObserver
{
    /**
     * Handle the Brand model "creating" event.
     */
    public function creating(BrandModel $brandModel)
    {
        if ($brandModel->slug) {
            $slug = Str::slug($brandModel->slug, '-');
            $slug = strtolower($slug);
            $brandModel->slug = $slug;
        } else {
            $slug = Str::slug($brandModel->model, '-');
            $slug = strtolower($slug);
            $brandModel->slug = $slug;
        }
    }

    /**
     * Handle the Brand model "updating" event.
     */
    public function updating(BrandModel $brandModel)
    {
        $brandModel->slug = $brandModel->slug ? $brandModel->slug : Str::slug($brandModel->model, '-');
    }
}
