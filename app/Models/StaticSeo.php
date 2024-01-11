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

class StaticSeo extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'static_seos';

    protected $appends = [
        'seo_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const OPEN_GRAPH_TYPE_SELECT = [
        'website' => 'Website',
        'article' => 'Article',
        'product' => 'Product',
    ];

    public const CONTENT_TYPE_SELECT = [
        'custom'     => 'Pages Builder',
        'post'       => 'Blog Post',
        'build'    => 'Build',
        'product'    => 'Product',
        'brand'    => 'Brand',
  
    ];

    protected $fillable = [
        'page_name',
        'page_path',
        'post_id',
        'product_id',
        'build_id',
        'brand_id',
        'meta_title',
        'facebook_title',
        'twitter_title',
        'content_type',
        'json_ld_tag',
        'canonical',
        'html_schema_1',
        'html_schema_2',
        'html_schema_3',
        'body_schema',
        'facebook_description',
        'twitter_description',
        'meta_description',
        'open_graph_type',
        'menu_name',
        'seo_image_url',
        'noindex',
        'nofollow',
        'noimageindex',
        'noarchive',
        'nosnippet',
        'footer_classes',
        'main_classes',
        'body_classes',
        'html_classes',
        'meta_title_check',
        'meta_desc_check',
        'facebook_title_check',
        'facebook_desc_check',
        'twitter_title_check',
        'twitter_desc_check',
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
        $this->addMediaConversion('preview')
            ->format(Manipulations::FORMAT_WEBP)
            ->width(120)
            ->height(120)
            ->nonQueued();

        $this->addMediaConversion('twitter')
            ->format(Manipulations::FORMAT_WEBP)
            ->width(1200)
            ->height(600)
            ->withResponsiveImages()
            ->nonQueued();

        $this->addMediaConversion('fb')
            ->format(Manipulations::FORMAT_WEBP)
            ->width(1200)
            ->height(600)
            ->withResponsiveImages()
            ->nonQueued();

        $this->addMediaConversion('cover')
            ->format(Manipulations::FORMAT_WEBP)
            ->width(1200)
            ->height(500)
            ->withResponsiveImages()
            ->nonQueued();
    }

    public function getSeoImageAttribute()
    {
        $file = $this->getMedia('seo_image')->last();
        if ($file) {
            $file->preview = $file->getUrl('preview');
            $file->twitter = $file->getUrl('twitter');
            $file->fb = $file->getUrl('fb');
            $file->cover = $file->getUrl('cover');
        }

        return $file;
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function build()
    {
        return $this->belongsTo(Build::class, 'build_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
