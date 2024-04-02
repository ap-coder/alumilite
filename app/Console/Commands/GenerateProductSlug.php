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

            $newSlug = Str::slug($product->name);

            $product->slug = $newSlug;

            $product->save();

            $this->line("Product: {$product->name} slug updated to '{$newSlug}'.");
        }

        $this->info('All product slugs have been regenerated and saved.');
    }
}
