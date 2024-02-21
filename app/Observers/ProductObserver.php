<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class ProductObserver
{
    /**
     * Handle the Product "creating" event.
     */
    public function creating(Product $product)
    {
        if ($product->slug) {
            $slug = Str::slug($product->slug, '-');
            $slug = strtolower($slug);
            $product->slug = $slug;
        } else {
            $slug = Str::slug($product->name, '-');
            $slug = strtolower($slug);
            $product->slug = $slug;
        }
    }

    /**
     * Handle the Product "updating" event.
     */
    public function updating(Product $product)
    {
        $product->slug = $product->slug ? $product->slug : Str::slug($product->name, '-');
    }
}
