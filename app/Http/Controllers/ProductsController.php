<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::published()->with(['categories', 'tags', 'media'])->get();

        return view('site.products.index', compact('products'));
    }

    public function show(Product $product)
    {
        $product->load('categories', 'tags');

        return view('site.products.show', compact('product'));
    } 
}
