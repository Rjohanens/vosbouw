<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class PageView extends Model
{
    protected $fillable = [
        'url',
        'ip',
        'user_agent',
        'viewed_at'
    ];

    protected $casts = [
        'viewed_at' => 'datetime'
    ];

    public static function track()
    {
        if (Str::startsWith(Route::currentRouteName(), 'auth.') || Str::startsWith(Route::currentRouteName(), 'livewire.')) {
            return;
        }

        $data = [
            'url' => request()->path(),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'viewed_at' => now()
        ];

        // Check if there's an existing view within the last 24 hours
        $existingView = self::where('url', $data['url'])
            ->where('ip', $data['ip'])
            ->where('viewed_at', '>=', now()->subHours(24))
            ->first();

        if (!$existingView) {
            try {
                self::create($data);
            } catch (\Exception $e) {
                // Skip for now
            }
        }

        return $existingView;
    }

    public static function getStats()
    {
        return self::query()
            ->selectRaw('url, COUNT(*) as views')
            ->groupBy('url')
            ->get();
    }

    public function scopeHome($query)
    {
        return $query->where('url', '/');
    }

    public function scopeContact($query)
    {
        return $query->where('url', 'contact');
    }

    public function scopeProject($query)
    {
        return $query->where('url', 'projecten');
    }

    public function scopeService($query)
    {
        return $query->where('url', 'diensten');
    }
}
