<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Observers\StaticSeoObserver;
use App\Models\StaticSeo;
use App\Observers\ProductObserver;
use App\Models\Product;
use App\Observers\PostObserver;
use App\Models\Post;
use App\Observers\ProductCategoryObserver;
use App\Models\ProductCategory;
use App\Observers\BrandObserver;
use App\Models\Brand;
use App\Observers\ProductTypeObserver;
use App\Models\ProductType;
use App\Observers\BuildObserver;
use App\Models\Build;
use App\Observers\ContentCategoryObserver;
use App\Models\ContentCategory;
use App\Observers\ContentTagObserver;
use App\Models\ContentTag;
use App\Observers\BrandModelObserver;
use App\Models\BrandModel;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * The model observers for your application.
     *
     * @var array
     */
    protected $observers = [
        StaticSeo::class => [StaticSeoObserver::class],
        Product::class => [ProductObserver::class],
        Post::class => [PostObserver::class],
        ProductCategory::class => [ProductCategoryObserver::class],
        Brand::class => [BrandObserver::class],
        ProductType::class => [ProductTypeObserver::class],
        Build::class => [BuildObserver::class],
        ContentCategory::class => [ContentCategoryObserver::class],
        ContentTag::class => [ContentTagObserver::class],
        BrandModel::class => [BrandModelObserver::class],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
