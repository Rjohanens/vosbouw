<?php

namespace App\Models;

use App\Enum\ProjectStatus;
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
        'status' => ProjectStatus::class,
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
        return $query->where('status', ProjectStatus::PUBLISHED);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }
}
