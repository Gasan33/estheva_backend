<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_description',
        'service_price',
        'service_images',
        'service_video',
        'service_benefits',
        'service_rating',
        'service_reviews',
        'service_sale_tag',
        'category_id',
    ];

    protected $casts = [
        'service_images' => 'array',
        'service_benefits' => 'array',
    ];

    /**
     * Get the category that owns the service.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
