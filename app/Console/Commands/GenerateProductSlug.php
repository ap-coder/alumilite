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
            $product->slug = Str::slug($product->name);
            $product->save();
        }

        $this->info('Product slugs generated successfully.');
    }
}
