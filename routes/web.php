<?php
use Illuminate\Http\Request;

// Route::redirect('/login', '/login');

Route::get('/admin', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
Route::get('/', 'HomeController@index')->name('admin.home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    Route::get('/menu', 'MenuController@index')->name('menu.index');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Product Category
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tag
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');

    // Static Seo
    Route::delete('static-seos/destroy', 'StaticSeoController@massDestroy')->name('static-seos.massDestroy');
    Route::post('static-seos/media', 'StaticSeoController@storeMedia')->name('static-seos.storeMedia');
    Route::post('static-seos/ckmedia', 'StaticSeoController@storeCKEditorImages')->name('static-seos.storeCKEditorImages');
    Route::resource('static-seos', 'StaticSeoController');

    // Technical Spec
    Route::delete('technical-specs/destroy', 'TechnicalSpecController@massDestroy')->name('technical-specs.massDestroy');
    Route::resource('technical-specs', 'TechnicalSpecController');

    // Brands
    Route::delete('brands/destroy', 'BrandsController@massDestroy')->name('brands.massDestroy');
    Route::post('brands/media', 'BrandsController@storeMedia')->name('brands.storeMedia');
    Route::post('brands/ckmedia', 'BrandsController@storeCKEditorImages')->name('brands.storeCKEditorImages');
    Route::resource('brands', 'BrandsController');

    // Features
    Route::delete('features/destroy', 'FeaturesController@massDestroy')->name('features.massDestroy');
    Route::resource('features', 'FeaturesController');

    // Product Types
    Route::delete('product-types/destroy', 'ProductTypesController@massDestroy')->name('product-types.massDestroy');
    Route::post('product-types/media', 'ProductTypesController@storeMedia')->name('product-types.storeMedia');
    Route::post('product-types/ckmedia', 'ProductTypesController@storeCKEditorImages')->name('product-types.storeCKEditorImages');
    Route::resource('product-types', 'ProductTypesController');

    // Content Category
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tag
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Page
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');

    // Post
    Route::delete('posts/destroy', 'PostController@massDestroy')->name('posts.massDestroy');
    Route::post('posts/media', 'PostController@storeMedia')->name('posts.storeMedia');
    Route::post('posts/ckmedia', 'PostController@storeCKEditorImages')->name('posts.storeCKEditorImages');
    Route::resource('posts', 'PostController');

    // Slider
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::post('sliders/media', 'SliderController@storeMedia')->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', 'SliderController@storeCKEditorImages')->name('sliders.storeCKEditorImages');
    Route::resource('sliders', 'SliderController');

    // Settings
    Route::delete('settings/destroy', 'SettingsController@massDestroy')->name('settings.massDestroy');
    Route::post('settings/media', 'SettingsController@storeMedia')->name('settings.storeMedia');
    Route::post('settings/ckmedia', 'SettingsController@storeCKEditorImages')->name('settings.storeCKEditorImages');
    Route::resource('settings', 'SettingsController');
    
    Route::post('add_env_conditionals', function(Request $request) {

		if($request->evnsData){
		
			foreach ($request->evnsData as $key => $value) {
				\DB::table('admin_menu_items')->where('id', $value['menu_id'])->update( [$value['envs'] => $value['check']]);
			}
		}

   })->name('add_env_conditionals');

   Route::post('logged_in_only', function (Request $request) {
        \DB::table('admin_menu_items')->where('id', $request->menu_id)->update(['logged_in_only' => $request->check]);
    })->name('logged_in_only');

    Route::post('icon_only_menu', function (Request $request) {
        \DB::table('admin_menu_items')->where('id', $request->menu_id)->update(['icon_only_menu' => $request->check]);
    })->name('icon_only_menu');

    Route::post('add_menu_icon_class', function (Request $request) {
        \DB::table('admin_menu_items')->where('id', $request->menu_id)->update(['menu_icon_class' => $request->icon]);
    })->name('add_menu_icon_class');

    Route::post('MenuUsers', function (Request $request) {
        \DB::table('user_admin_menu_item')->where('admin_menu_item_id', $request->menu_id)->delete();
        if ($request->users) {
            foreach ($request->users as $key => $user) {
                \DB::table('user_admin_menu_item')->insert(
                    [
                        'user_id' => $user,
                        'admin_menu_item_id' => $request->menu_id,
                    ]
                );
            }
        }
    })->name('MenuUsers');

    Route::post('MenuRoles', function (Request $request) {
        \DB::table('role_admin_menu_item')->where('admin_menu_item_id', $request->menu_id)->delete();
        if ($request->roles) {
            foreach ($request->roles as $key => $role) {
                \DB::table('role_admin_menu_item')->insert(
                    [
                        'role_id' => $role,
                        'admin_menu_item_id' => $request->menu_id,
                    ]
                );
            }
        }
    })->name('MenuRoles');

});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});


Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('user.logout');