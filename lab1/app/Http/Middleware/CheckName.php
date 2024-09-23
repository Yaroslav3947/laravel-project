<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckName
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->has('name')) {
            return redirect('/contact');
        }

        return $next($request);
    }
}
