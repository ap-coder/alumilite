<?php

namespace App\Observers;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class ProductCategoryObserver
{
    /**
     * Handle the ProductCategory "creating" event.
     */
    public function creating(ProductCategory $productCategory)
    {
        if ($productCategory->slug) {
            $slug = Str::slug($productCategory->slug, '-');
            $slug = strtolower($slug);
            $productCategory->slug = $slug;
        } else {
            $slug = Str::slug($productCategory->name, '-');
            $slug = strtolower($slug);
            $productCategory->slug = $slug;
        }
    }

    /**
     * Handle the ProductCategory "updating" event.
     */
    public function updating(ProductCategory $productCategory)
    {
        $productCategory->slug = $productCategory->slug ? $productCategory->slug : Str::slug($productCategory->name, '-');
    }
}
