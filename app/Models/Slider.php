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
        'published',
        'location',
        'sub_title',
        'sub_title_css',
        'main_title',
        'main_title_css',
        'sub_title_2',
        'sub_title_2_css',
        'slider_description',
        'slider_description_css',
        'text_heading',
        'text_heading_css',
        'heading_1',
        'heading_1_css',
        'heading_2',
        'heading_2_css',
        'heading_3',
        'heading_3_css',
        'text',
        'text_css',
        'main_button_text',
        'main_button_link',
        'main_button_tab_index',
        'main_button_css',
        'main_button_icon_class',
        'second_button_text',
        'second_button_link',
        'second_button_tab_index',
        'second_button_css',
        'second_button_icon_class',
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
        $this->addMediaConversion('responsive')->format(Manipulations::FORMAT_WEBP)->width(1920)->height(760)->withResponsiveImages()->nonQueued();
//        $this->addMediaConversion('slider')
//                ->fit(Manipulations::FIT_CONTAIN, 1920, 1920) // Fit the image in 1920x1920, maintaining aspect ratio
//                ->crop('crop-center', 1920, 760) // Then crop the resized image to your desired dimensions from the center
//                ->format(Manipulations::FORMAT_WEBP) // Convert the format to WebP
//                ->quality(80)
//                ->withResponsiveImages() // Generate responsive images for different screen sizes
//                ->nonQueued();
        $this->addMediaConversion('slider')
            ->fit(Manipulations::FIT_CONTAIN, 2992, 2992)
            ->crop(Manipulations::CROP_CENTER, 1920, 760)
            ->format(Manipulations::FORMAT_WEBP)
            ->quality(90)
            ->withResponsiveImages();
        $this->addMediaConversion('slider-1')
            ->fit(Manipulations::FIT_CONTAIN, 2992, 2992)
            //->crop(Manipulations::CROP_CENTER, 1920, 760)
            ->format(Manipulations::FORMAT_WEBP)
            ->quality(90)
            ->withResponsiveImages();
        $this->addMediaConversion('slider-2')
            //->fit(Manipulations::FIT_CONTAIN, 2992, 2992)
            //->crop(Manipulations::CROP_CENTER, 1920, 760)
            ->format(Manipulations::FORMAT_WEBP)
            ->quality(90)
            ->withResponsiveImages();
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
            $file->slider = $file->getUrl('slider');
        }

        return $file;
    }
}
