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

            $menuposts = Post::all();
		    $menuLandingPages = ContentPage::all();
		    $menuProducts = Product::all();

            View::share('env', $env);
            View::share('main_menu', $main_menu);
            View::share('footer_menu', $footer_menu);
            View::share('copywrite_menu', $copywrite_menu);

            View::share('menuposts', $menuposts);
            View::share('menuLandingPages', $menuLandingPages);
            View::share('menuProducts', $menuProducts);

            return $next($request);
        });
    }
}
