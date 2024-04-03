<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\StaticSeo;
use App\Models\Product;

class GenerateStaticSeoProductPagePath extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'staticSeo:generate-static-seo-product-page-path';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate static seo product page path for all products regardless of current value';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $staticSeos = StaticSeo::where('content_type','product')->get();

        foreach ($staticSeos as $key => $staticSeo) {
            $product=Product::where('id',$staticSeo->product_id)->first();

            if ($product) {
                $staticSeo->page_path = 'products/'.$product->slug;
                $staticSeo->save();
            }
            
        }

        $this->info('All static seo product page path have been regenerated and saved.');
    }
}
