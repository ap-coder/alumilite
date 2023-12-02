<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
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
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
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
