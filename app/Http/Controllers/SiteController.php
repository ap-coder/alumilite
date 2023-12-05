<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Post;
use App\Models\User;
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
        $posts = Post::published()->latest()->take(6)->get();
        $products = Product::published()->latest()->get();
 
        return view('site.home.index', compact( 'posts', 'products'));
    }

    public function about()
    {
        $latest_posts = Post::published()->latest()->take(3)->get();
        
        return view('site.pages.about.index', compact('latest_posts'));
    }

    public function contact()
    {
        return view('site.pages.contact.index');
    }

}
