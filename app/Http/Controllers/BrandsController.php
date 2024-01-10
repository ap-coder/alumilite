<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\Brand;
use App\Models\ProductType;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BrandsController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $brands = Brand::published()->get();
            
        $models = BrandModel::all();

        return view('site.brands.brands', compact('brands', 'models'));
    }

 
    /**
     * @param  \App\Models\Brand  $brand
     * @param $slug
     *  @return \Illuminate\View\View
     */
    public function show(Brand $brand)
    {
        // $brand = Brand::where('slug', $slug)->first();
 
        if (\App::environment()=='production') {
            views($brand)->record();
            $viewcount = views($brand)->unique()->remember()->count();
        } else {
            $viewcount = 0;
        }

        $productTypes = ProductType::published()->get();
        
        return view('site.brands.brand', compact('brand', 'viewcount','productTypes'));
    }
 
}
