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
Route::get('products/{product:slug}', 'ProductsController@show')->name('products.show');

Route::resource('builds', 'BuildsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);
Route::get('builds/{build:slug}', 'BuildsController@show')->name('builds.show');






Route::get('r', function () {
    function philsroutes()
    {
        $routeCollection = Route::getRoutes();
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
        echo "<div class='container'><div class='col-md-12'><a target='_blank' href='".url('/')."' type='button' class='btn btn-primary' style='position: fixed;top:5rem;right:13rem;'>Live Site</a><table class='table table-striped' style='width:100%'>";
        echo '<tr><td>'.\App::environment().'</td></tr>';
        echo '<tr>';
        //  echo '<td><h4>Domain</h4></td>';
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='30%'><h4>URL</h4></td>";
        echo "<td width='30%'><h4>Route</h4></td>";
        echo "<td width='30%'><h4>Corresponding Action</h4></td>";
        echo '</tr>';

        foreach ($routeCollection as $value) {
            echo '<tr>';
            //    echo '<td>lcadashboard.com</td>';
            echo '<td>'.$value->methods()[0].'</td>';
            echo "<td><a href='".$value->uri()."' target='_blank'>".$value->uri().'</a> </td>';
            echo '<td>'.$value->getName().'</td>';
            echo '<td>'.$value->getActionName().'</td>';
            echo '</tr>';
        }

        echo '</table></div></div>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';
    }

    return philsroutes();
})->name('assigned-routes');