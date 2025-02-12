<?php

namespace App\Http\Middleware;

use App\Models\PageView;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
