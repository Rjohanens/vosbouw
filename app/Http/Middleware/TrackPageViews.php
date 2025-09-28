<?php

namespace App\Http\Middleware;

use App\Models\PageView;
use Closure;

class TrackPageViews
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($request->isMethod('GET')) {
            PageView::track();
        }

        return $response;
    }
}
