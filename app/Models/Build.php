<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Build extends Model implements HasMedia, Viewable
{
    use SoftDeletes, InteractsWithMedia, HasFactory, InteractsWithViews;

    public $table = 'builds';

    protected $removeViewsOnDelete = true;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'photo',
        'additional_photos',
        'documents',
    ];

    protected $fillable = [
        'published',
        'name',
        'subtitle',
        'excerpt',
        'description',
        'brand_id',
        'brand_model_id',
        'timeframe',
        'slug',
        'customer_company',
        'customer_name',
        'customer_link',
        'customer_website',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('original')->format(Manipulations::FORMAT_WEBP)->nonQueued();
        $this->addMediaConversion('thumb')->format(Manipulations::FORMAT_WEBP)->width(150)->height(150)->nonQueued();
        $this->addMediaConversion('preview')->format(Manipulations::FORMAT_WEBP)->width(120)->height(120)->nonQueued();
        $this->addMediaConversion('excerpt')->crop('crop-center',400,580)->format(Manipulations::FORMAT_WEBP)->nonQueued();
        $this->addMediaConversion('responsive')->crop('crop-center',400,580)->format(Manipulations::FORMAT_WEBP)->withResponsiveImages()->nonQueued();
    }

    public function buildReviews()
    {
        return $this->hasMany(Review::class, 'build_id', 'id')->where('published',1);
    }

    public function averageRating()
    {
        return $this->buildReviews->avg('rating');
    }

    public function getRatingPercentages()
    {
        $ratings = [1, 2, 3, 4, 5];
        $percentages = [];

        foreach ($ratings as $rating) {
            $count = $this->buildReviews->where('rating', $rating)->count();
            $total = $this->buildReviews->count();

            $percentages[$rating] = $total > 0 ? ($count / $total) * 100 : 0;
        }

        return $percentages;
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();
        if ($file) {
            $file->url = $file->getUrl();
            $file->original = $file->getUrl('original');
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview = $file->getUrl('preview');
            $file->excerpt = $file->getUrl('excerpt');
            $file->responsive = $file->getUrl('responsive');
        }

        return $file;
    }

    public function getAdditionalPhotosAttribute()
    {
        $files = $this->getMedia('additional_photos');
        $files->each(function ($item) {
            $item->url = $item->getUrl();
            $item->original = $item->getUrl('original');
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview = $item->getUrl('preview');
            $item->excerpt = $item->getUrl('excerpt');
            $item->responsive = $item->getUrl('responsive');
        });

        return $files;
    }

    public function getDocumentsAttribute()
    {
        return $this->getMedia('documents');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function brand_model()
    {
        return $this->belongsTo(BrandModel::class, 'brand_model_id');
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class);
    }
}
