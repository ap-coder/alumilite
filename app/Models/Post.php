<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Intervention\Image\ImageManager;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

class Post extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'posts';

    protected $with = ['categories', 'tags', 'media'];

    protected $casts = [
        'published' => 'boolean',
    ];

    protected $appends = [
        'featured_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'published',
        'title',
        'page_text',
        'excerpt',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public static function getBySlug($slug)
    {
        return self::query()->where('slug', $slug)->first();
    }

    public function togglePublish($id)
    {
        $post = $this->find($id);

        $post->published = ($post->published) ? false : true;

        $post->save();

        return response()->json(['result' => 'success', 'changed' => ($post->published) ? 1 : 0]);
    }

    public static function last()
    {
        return static::all()->last();
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('original')->format(Manipulations::FORMAT_WEBP)->nonQueued();
        $this->addMediaConversion('thumb')->format(Manipulations::FORMAT_WEBP)->width(50)->height(50)->nonQueued();
        $this->addMediaConversion('preview')->format(Manipulations::FORMAT_WEBP)->width(120)->height(120)->nonQueued();
        // $this->addMediaConversion('excerpt')->format(Manipulations::FORMAT_WEBP)->width(370)->height(230)->withResponsiveImages()->nonQueued();
        $this->addMediaConversion('excerpt')->crop('crop-center',370, 230)->format(Manipulations::FORMAT_WEBP)->withResponsiveImages()->nonQueued();
        $this->addMediaConversion('responsive')->format(Manipulations::FORMAT_WEBP)->width(1200)->height(500)->withResponsiveImages()->nonQueued();
    }

    public function categories()
    {
        return $this->belongsToMany(ContentCategory::class);
    }

    public function tags()
    {
        return $this->belongsToMany(ContentTag::class);
    }

    public function getFeaturedImageAttribute()
    {
        $file = $this->getMedia('featured_image')->last();
        if ($file) {
            $file->url = $file->getUrl();
            $file->original = $file->getUrl('original');
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview = $file->getUrl('preview');
            $file->preview = $file->getUrl('excerpt');
            $file->responsive = $file->getUrl('responsive');
        }

        return $file;
    }

    // public function postStaticSeos()
    // {
    //     return $this->hasMany(StaticSeo::class, 'post_id', 'id');
    // }

    // public function staticSeo()
    // {
    //     return $this->hasOne(StaticSeo::class);
    // }
}
