<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechnicalSpec extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'technical_specs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'published',
        'name',
        'value',
        'icon_class',
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
}
