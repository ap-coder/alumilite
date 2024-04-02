<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\Product;

class GenerateProductSlug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:generate-slug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate slugs for all products regardless of current value';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products = Product::get();

        foreach ($products as $product) {

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

            $product->save();

            if ($product->slug !== $originalSlug) {
                $this->line('Product creating: Slug changed from "' . $originalSlug . '" to "' . $product->slug . '"');
            }

            // Optionally, you can log each slug generation to the CLI for visibility
           
        }

        $this->info('All product slugs have been regenerated and saved.');
    }
}
