<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Build extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'builds';

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
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function buildReviews()
    {
        return $this->hasMany(Review::class, 'build_id', 'id');
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
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
