<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Wecodelaravel\Menu\Facades\Menu;
use Wecodelaravel\Menu\Models\MenuItems;
use Wecodelaravel\Menu\Models\Menus;
use App\Models\Post;
use App\Models\ContentPage;
use App\Models\Product;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
	{
        $this->middleware(function ($request, $next) {
            $env = \App::environment();
            $main_menu = Menu::getByName('Main Menu');
            $footer_menu = Menu::getByName('Footer Widget Menu');
            $copywrite_menu = Menu::getByName('Copywrite Menu');

            $posts = Post::all();
		    $landingPages = ContentPage::all();
		    $products = Product::all();

            View::share('env', $env);
            View::share('main_menu', $main_menu);
            View::share('footer_menu', $footer_menu);
            View::share('copywrite_menu', $copywrite_menu);

            View::share('posts', $posts);
            View::share('landingPages', $landingPages);
            View::share('products', $products);

            return $next($request);
        });
    }
}
