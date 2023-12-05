<?php
use Illuminate\Support\Facades\Cache;

// Route::get('/', function () {
//     return view('site.home.index');
// })->name('site.home');

Route::get('/', 'SiteController@index')->name('homepage');
Route::get('contact', 'SiteController@contact')->name('contact');
Route::resource('blog', 'BlogController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

// // Route::get('load-more-data', 'BlogController@more_data');
// // Route::get('load-more-blog', 'BlogController@more_press_blog')->name('load-more-blog');

Route::resource('products', 'ProductsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

