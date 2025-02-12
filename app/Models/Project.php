<?php

namespace App\Models;

use App\Enum\StatusEnum;
use App\Models\Category;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'execution_date',
        'category_id',
        'slug',
        'featured',
        'status',
    ];

    protected $casts = [
        'execution_date' => 'datetime',
        'featured' => 'boolean',
        'status' => StatusEnum::class,
    ];

    public static function booted()
    {
        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function thumbnail(): Media|null
    {
        return $this->getFirstMedia();
    }

    public function scopePublished($query)
    {
        return $query->where('status', StatusEnum::PUBLISHED);
    }

    public function scopeFeatured($query)
    {
        return $query->published()->where('featured', true);
    }

    public function getThumbnailUrl(): string | null
    {
        $media = $this->media();

        if ($media->doesntExist()) {
            return null;
        }

        return $media->first()->getAvailableUrl(['optimized']);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('optimized')
            ->width(384)
            ->height(384)
            ->quality(90);
    }
}
