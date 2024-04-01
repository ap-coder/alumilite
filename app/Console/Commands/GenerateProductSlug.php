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
    protected $description = 'Generate slugs for products';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products = Product::get();

        foreach ($products as $product) {
            $originalSlug = $product->slug;
            $newSlug = Str::slug($product->name);

            if ($originalSlug !== $newSlug) {
                $product->slug = $newSlug;
                $product->save();

                $this->line("Updated product ID {$product->id}: Slug changed from '{$originalSlug}' to '{$newSlug}'.");
            }
        }

        $this->info('Product slugs generated successfully.');
    }
}
