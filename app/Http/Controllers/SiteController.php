<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Brand;
use App\Models\Post;
use App\Models\User;
use App\Models\Slider;
use App\Models\Build;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class SiteController extends Controller
{

    public function index(Request $request)
    {
        $posts = Post::published()->latest()->take(3)->get();
        // $products = Product::published()->latest()->take(12)->get();
        $builds = Build::published()->latest()->get();
        $sliders = Slider::published()->get();
        $productTypes = ProductType::published()->get();
        $brands = Brand::published()->get();

        $brandsWithProducts = Brand::published()
        ->has('brandProducts')
        ->get();

        $totalProducts = 12; // Total number of products you want to retrieve
        $productsPerBrand = ceil($totalProducts / $brandsWithProducts->count());

        $products = collect();

        // Retrieve products for each brand
        $brands = Brand::whereHas('brandProducts', function ($query) {
            $query->published();
        })->get();

        foreach ($brands as $brand) {
            $brandProducts = $brand->brandProducts()->published()->latest()->take($productsPerBrand)->get();
            $products = $products->merge($brandProducts);
        }

        // Adjust products if there are fewer than $totalProducts
        if ($products->count() > $totalProducts) {
            $products = $products->take($totalProducts);
        }

        // Now $products contains a collection of products evenly distributed among all brands

        return view('site.home.index', compact( 'posts', 'products','sliders','brands','productTypes','builds','brandsWithProducts'));
    }

    public function about()
    {
        $latest_posts = Post::published()->latest()->take(3)->get();

       // return view('site.about.index', compact('latest_posts'));
    }

    public function contact()
    {
        return view('site.contact.index');
    }

}
