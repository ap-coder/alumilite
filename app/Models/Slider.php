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

class Slider extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'sliders';

    protected $appends = [
        'image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const LOCATION_SELECT = [
        '1' => 'HomePage',
        '2' => 'Blog',
        '3' => 'Products',
    ];

    protected $fillable = [
        'location',
        'sub_title',
        'main_title',
        'sub_title_2',
        'slider_description',
        'text_heading',
        'heading_1',
        'heading_2',
        'heading_3',
        'text',
        'main_button_text',
        'main_button_link',
        'main_button_tab_index',
        'second_button_text',
        'second_button_link',
        'second_button_tab_index',
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
        $this->addMediaConversion('responsive')->format(Manipulations::FORMAT_WEBP)->width(1200)->height(500)->withResponsiveImages()->nonQueued();
        $this->addMediaConversion('slider')
        // Assuming you want to ensure the image fits within certain dimensions before cropping
        ->fit(Manipulations::FIT_CONTAIN, 1920, 1920) // Fit the image in 1920x1920, maintaining aspect ratio
        ->crop('crop-center', 1920, 760) // Then crop the resized image to your desired dimensions from the center
        ->format(Manipulations::FORMAT_WEBP) // Convert the format to WebP
        ->quality(80)
        ->withResponsiveImages() // Generate responsive images for different screen sizes
        ->nonQueued();
    }

    public function getImageAttribute()
    {
        $file = $this->getMedia('image')->last();
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
