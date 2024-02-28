<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use App\Models\Slider;
use App\Models\Brand;
use App\Models\BrandModel;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ProductsController extends Controller
{

    public function index(Request $request)
    {
        $category=$request->category;
        $brand=$request->brand;
        $brandModel=$request->brandModel;
        $sliders = Slider::published()->get();

        if ($category || $brand || $brandModel) {
            $productQuery = Product::published();
            if ($category) {
                $productQuery->whereHas('categories', function ($query) use ($category) {
                    $query->where('slug', $category);
                });
            }
            if ($brand) {
                $productQuery->whereHas('brand', function ($query) use ($brand) {
                    $query->where('slug', $brand);
                });
            }
            if ($brandModel) {
                $productQuery->whereHas('brand_model', function ($query) use ($brandModel) {
                    $query->where('slug', $brandModel);
                });
            }

            $products = $productQuery->paginate(12);

        } else {
            $products = Product::published()->paginate(12);
        }

        $categories = ProductCategory::published()->get();
        $brands = Brand::where('published',1)->get();
        
        if ($brand) {
            $brandData = Brand::where('slug',$brand)->first();
            $brandModels = BrandModel::where('brand_id',$brandData->id)->get();
        }else{
            $brandModels = collect();
        }  
        
        return view('site.products.index', compact('products','categories', 'sliders','brands','brandModels'));
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
