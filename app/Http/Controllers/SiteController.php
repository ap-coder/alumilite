<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductCategory;
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
use App\Mail\ContactMail;

class SiteController extends Controller
{

    public function index(Request $request)
    {
        $posts = Post::published()->latest()->take(3)->get();
        $products = Product::published()->latest()->take(12)->get();
        $builds = Build::published()->latest()->get();
        $sliders = Slider::published()->get();
        $productTypes = ProductType::published()->get();
        $brands = Brand::published()->get();
        $categories = ProductCategory::published()->get();

        // Retrieve products for each brand
        $brandsWithProducts = Brand::whereHas('brandProducts', function ($query) {
            $query->published();
        })->get();

        
        return view('site.home.index', compact( 'posts', 'products','sliders','brands','productTypes','builds','brandsWithProducts','categories'));
    }

    public function about()
    {
        $latest_posts = Post::published()->latest()->take(3)->get();

       // return view('site.about.index', compact('latest_posts'));
    }

    public function contact()
    {
        // $mailData = [
        //     'title' => 'Mail from itcodestuff.com',
        //     'body' => 'This is for testing email using smtp.'
        // ];

        // Mail::to('testingdata282@gmail.com')->send(new ContactMail($mailData));

        // dd('Email is sent successfully.');

        return view('site.contact.index');
    }

}
