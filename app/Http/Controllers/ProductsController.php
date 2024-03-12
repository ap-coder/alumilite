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

        $products->appends(request()->query());
        
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

        // dd($product->description);

        return view('site.products.show', compact('product','similarProducts'));
    }

    public function GetByBrands(Request $request)
    {
        $id=$request->id;

        if ($id=='all') {
            $products = Product::published()->latest()->take(12)->get();
        }else{
            $products = Product::published()->where('brand_id',$id)->latest()->take(12)->get();
        }

        $html = view('site.home.partials.product-data', compact('products'))->render();

        $data['html'] = $html;

        return response()->json($data);

    }

    public function GetByBrandModels(Request $request)
    {
        $brandId=$request->brandId;
        $modelId=$request->modelId;

        if ($modelId=='all') {
            $products = Product::published()->where('brand_id',$brandId)->latest()->take(12)->get();
        }else{
            $products = Product::published()->where('brand_id',$brandId)->where('brand_model_id',$modelId)->latest()->take(12)->get();
        }

        $html = view('site.home.partials.product-data', compact('products'))->render();

        $data['html'] = $html;

        return response()->json($data);

    }

    public function GetModelsByBrand(Request $request)
    {
        $brandId=$request->brandId;

        $html = '<option value="">All models</option>';

        if ($brandId) {
            $brand = Brand::where('slug',$brandId)->first();
            $models = BrandModel::where('brand_id',$brand->id)->get();

            foreach ($models as $key => $model) {
                $html .= '<option value="'.$model->slug.'">'.$model->model.'</option>';
            }
        }

        $data['html'] = $html;

        return response()->json($data);

    }
}
