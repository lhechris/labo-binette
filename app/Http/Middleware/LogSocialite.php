<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;


class LogSocialite
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (str_contains($request->path(), 'oauth')) {
            Log::info('PASSAGE ROUTE FILAMENT SOCIALITE', [
                'path' => $request->path(),
                'full' => $request->fullUrl(),
            ]);
        }

        return $next($request);
    }
}
