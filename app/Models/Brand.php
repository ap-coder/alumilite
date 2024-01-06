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

class Brand extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'brands';

    protected $appends = [
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'published',
        'name',
        'slug',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('original')->format(Manipulations::FORMAT_WEBP)->nonQueued();
        $this->addMediaConversion('thumb')->format(Manipulations::FORMAT_WEBP)->width(150)->height(150)->nonQueued();
        $this->addMediaConversion('preview')->format(Manipulations::FORMAT_WEBP)->width(120)->height(120)->nonQueued();
        $this->addMediaConversion('responsive')->format(Manipulations::FORMAT_WEBP)->width(1200)->height(500)->withResponsiveImages()->nonQueued();
    }

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function brandProducts()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }

    public function brandBuilds()
    {
        return $this->hasMany(Build::class, 'brand_id', 'id');
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();
        if ($file) {
            $file->url = $file->getUrl();
            $file->original = $file->getUrl('original');
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview = $file->getUrl('preview');
            $file->responsive = $file->getUrl('responsive');
        }

        return $file;
    }
}
