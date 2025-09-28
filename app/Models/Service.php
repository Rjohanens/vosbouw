<?php

namespace App\Models;

use App\Enum\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'slug',
        'name',
        'description',
        'status',
        'featured',
    ];

    protected $casts = [
        'status' => StatusEnum::class,
        'featured' => 'boolean',
    ];

    public static function booted()
    {
        static::creating(function ($service) {
            $service->slug = Str::slug($service->name);
        });
    }

    public function scopePublished($query)
    {
        return $query->where('status', StatusEnum::PUBLISHED);
    }

    public function scopeFeatured($query)
    {
        return $query->published()->where('featured', true);
    }

    public function getThumbnailUrl(): ?string
    {
        $media = $this->media();

        if ($media->doesntExist()) {
            return null;
        }

        return $media->first()->getAvailableUrl(['optimized']);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('optimized')
            ->width(1024)
            ->height(1024);
    }
}
