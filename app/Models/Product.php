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

class Product extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'products';

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
        'excerpt',
        'description',
        'price',
        'msrp',
        'paypal_prod',
        'product_type_id',
        'brand_id',
        'brand_model_id',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'paypal_prod' => 'string', 
    ];
    

    protected $with = ['media', 'categories', 'tags'];

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
        $this->addMediaConversion('product')->crop('crop-center',770,428)->format(Manipulations::FORMAT_WEBP)->nonQueued();
        $this->addMediaConversion('homepage')->crop('crop-center',321,195)->format(Manipulations::FORMAT_WEBP)->nonQueued();
        $this->addMediaConversion('excerpt')->crop('crop-center',321,321)->format(Manipulations::FORMAT_WEBP)->nonQueued();
        $this->addMediaConversion('responsive')->crop('crop-center',1170,650)->format(Manipulations::FORMAT_WEBP)->withResponsiveImages()->nonQueued();
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
            $file->product = $file->getUrl('product');
            $file->responsive = $file->getUrl('responsive');
        }

        return $file;
    }

    public function getAdditionalPhotosAttribute()
    {
        $files = $this->getMedia('additional_photos');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview   = $item->getUrl('preview');
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

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function tags()
    {
        return $this->belongsToMany(ProductTag::class);
    }

    public function technical_specs()
    {
        return $this->belongsToMany(TechnicalSpec::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class,'product_features');
    }

    public function product_type()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public static function getBySlug($slug)
    {
        return self::query()->where('slug', $slug)->first();
    }

    public function staticSeo()
    {
        return $this->hasOne(StaticSeo::class);
    }

    public function productStaticSeos()
    {
        return $this->hasMany(StaticSeo::class, 'product_id', 'id');
    }
}
