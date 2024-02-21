<?php

namespace App\Observers;

use App\Models\ProductType;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class ProductTypeObserver
{
    /**
     * Handle the ProductType "creating" event.
     */
    public function creating(ProductType $productType)
    {
        if ($productType->slug) {
            $slug = Str::slug($productType->slug, '-');
            $slug = strtolower($slug);
            $productType->slug = $slug;
        } else {
            $slug = Str::slug($productType->name, '-');
            $slug = strtolower($slug);
            $productType->slug = $slug;
        }
    }

    /**
     * Handle the ProductType "updating" event.
     */
    public function updating(ProductType $productType)
    {
        $productType->slug = $productType->slug ? $productType->slug : Str::slug($productType->name, '-');
    }
}
