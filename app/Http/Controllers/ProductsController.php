<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ProductsController extends Controller
{

    public function index()
    {

        $products = Product::published()->with(['categories', 'tags', 'media'])->get();

        return view('site.products.index-list', compact('products'));
    }

    public function show(Product $product)
    {
        $product->load('categories', 'tags');

        $similarProducts = Product::whereHas('categories', function ($query) use ($product) {
            $query->whereIn('id', $product->categories->pluck('id'));
        })
        ->where('id', '!=', $product->id)
        ->take(6)
        ->get();

        return view('site.products.show', compact('product','similarProducts'));
    } 
}
