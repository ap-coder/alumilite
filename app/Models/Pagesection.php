<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Manipulations;
use Spatie\Image\Image;

class Pagesection extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    public $table = 'page_sections';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'published',
        'section',
        'section_nickname',
        'order',
        'created_at',
        'updated_at',
        'deleted_at',
        'select_crud_section',
        'use_crud_section',
        'ps_cdn_css',
        'ps_cdn_js',
        'ps_js',
        'ps_css',
    ];

    protected $appends = [
        'section_preview',
    ];

    public const SELECT_CRUD_SECTION = [
        '1'  => 'Latest post section',
        '2'  => 'Recent post section',
    ];

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function pages()
    {
        return $this->belongsToMany(ContentPage::class,'page_pagesection','pagesection_id','page_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function assign_pages()
    {
        return $this->belongsToMany(ContentPage::class,'page_pagesection','pagesection_id','page_id');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->format(Manipulations::FORMAT_WEBP)->width(150)->height(150)->nonQueued();
        $this->addMediaConversion('preview')->format(Manipulations::FORMAT_WEBP)->width(120)->height(120)->nonQueued();
    }

    public function getSectionPreviewAttribute()
    {
        $file = $this->getMedia('section_preview')->last();

        if ($file) {
            $file->url = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview = $file->getUrl('preview');
        }

        return $file;
    }
}
