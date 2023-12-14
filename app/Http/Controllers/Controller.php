<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Wecodelaravel\Menu\Facades\Menu;
use Wecodelaravel\Menu\Models\MenuItems;
use Wecodelaravel\Menu\Models\Menus;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\Post;
use App\Models\ContentPage;
use App\Models\Product;
use App\Models\StaticSeo;
use App\Models\Brand;
use App\Models\BrandModel;
use App\Models\Build;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
	{
        $this->middleware(function ($request, $next) {
            $env = \App::environment();
            $pagename = \Route::current()->getName();
            $staticseo = StaticSeo::get();
            // $posts = Post::all();
            // $products = Product::all();
            // $builds = Build::all();


            $main_menu = Menu::getByName('Main Menu');
            $footer_menu = Menu::getByName('Footer Widget Menu');
            $footer_Links = Menu::getByName('Footer Links');
            $copywright_menu = Menu::getByName('Copyright Menu');
            $blog_menu = Menu::getByName('Blog Sidebar Menu');
            $products_menu = Menu::getByName('Products Sidebar Menu');
            $builds_menu = Menu::getByName('Builds Sidebar Menu');

            $menuposts = Post::all();
		    $menuLandingPages = ContentPage::all();
		    $menuProducts = Product::all();

            View::share('env', $env);
            View::share('main_menu', $main_menu);
            View::share('footer_menu', $footer_menu);
            View::share('footer_links', $footer_links);
            View::share('copywright_menu', $copywright_menu);
            View::share('blog_menu', $blog_menu);
            View::share('builds_menu', $builds_menu);
            View::share('products_menu', $products_menu);

            View::share('menuposts', $menuposts);
            View::share('menuLandingPages', $menuLandingPages);
            View::share('menuProducts', $menuProducts);

            View::share('staticseo', $staticseo);
            // View::share('posts', $posts);
            // View::share('products', $products);

            return $next($request);
        });
    }
}
