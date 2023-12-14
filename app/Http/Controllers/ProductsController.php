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

    public function index(Request $request)
    {
        $category=$request->category;

        if ($category) {
            $products = Product::published()->whereHas('categories', function ($query) use ($category) {
                $query->where('slug', $category);
            })
            ->paginate(12);
        } else {
            $products = Product::published()->paginate(12);
        }

        $categories = ProductCategory::published()->get();

        return view('site.products.index', compact('products','categories'));
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
