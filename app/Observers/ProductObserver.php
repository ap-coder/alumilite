<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ProductObserver
{
    /**
     * Handle the Product "creating" event.
     */
    public function creating(Product $product)
    {
        $originalSlug = $product->slug;

        if ($product->slug) {

            $slug = '';

            if ($product->brand) {
                $slug .= Str::slug($product->brand->name, '-') . '-';
            }

            if ($product->brand_model) {
                $slug .= Str::slug($product->brand_model->model, '-') . '-';
            }

            // Append additional attributes to the slug
            $slug .= Str::slug($product->slug, '-');

            // Convert the slug to lowercase
            $slug = strtolower($slug);

            $product->slug = $slug;

        } else {

            $slug = '';

            if ($product->brand) {
                $slug .= Str::slug($product->brand->name, '-') . '-';
            }

            if ($product->brand_model) {
                $slug .= Str::slug($product->brand_model->model, '-') . '-';
            }

            // Append additional attributes to the slug
            $slug .= Str::slug($product->name, '-');

            // Convert the slug to lowercase
            $slug = strtolower($slug);

            $product->slug = $slug;
        }

        if ($product->slug !== $originalSlug) {
            Log::info('Product creating: Slug changed from "' . $originalSlug . '" to "' . $product->slug . '"');
        }
    }

    /**
     * Handle the Product "updating" event.
     */
    public function updating(Product $product)
    {
        $originalSlug = $product->getOriginal('slug');

        if ($product->slug) {

            $slug = '';

            if ($product->brand) {
                $slug .= Str::slug($product->brand->name, '-') . '-';
            }

            if ($product->brand_model) {
                $slug .= Str::slug($product->brand_model->model, '-') . '-';
            }

            // Append additional attributes to the slug
            $slug .= Str::slug($product->slug, '-');

            // Convert the slug to lowercase
            $slug = strtolower($slug);

            $product->slug = $slug;

        } else {

            $slug = '';

            if ($product->brand) {
                $slug .= Str::slug($product->brand->name, '-') . '-';
            }

            if ($product->brand_model) {
                $slug .= Str::slug($product->brand_model->model, '-') . '-';
            }

            // Append additional attributes to the slug
            $slug .= Str::slug($product->name, '-');

            // Convert the slug to lowercase
            $slug = strtolower($slug);

            $product->slug = $slug;
        }

        if ($product->slug !== $originalSlug) {
            Log::info('Product updating: Slug changed from "' . $originalSlug . '" to "' . $product->slug . '"');
        }

    }
}
