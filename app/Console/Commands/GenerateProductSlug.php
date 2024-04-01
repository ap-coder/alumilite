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
    protected $description = 'Generate slugs for all products based on brand, model, and name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products = Product::all();

        foreach ($products as $product) {
            $originalSlug = $product->slug;

            $slug = '';
            if ($product->brand) {
                $slug .= Str::slug($product->brand->name, '-') . '-';
            }

            if ($product->brand_model) {
                $slug .= Str::slug($product->brand_model->model, '-') . '-';
            }

            $slugSuffix = $product->slug ? $product->slug : $product->name;
            $slug .= Str::slug($slugSuffix, '-');

            $slug = strtolower($slug);

            if ($slug !== $originalSlug) {
                $product->slug = $slug;
                $product->save();
                $this->info("Slug for product ID {$product->id} updated: '{$originalSlug}' -> '{$slug}'");
            }
        }

        $this->info('All product slugs have been updated.');
    }
}
