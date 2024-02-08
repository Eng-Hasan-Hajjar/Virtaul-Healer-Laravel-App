<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next ,string $role): Response
    {
        if (!auth()->check() || auth()->user()->role !== $role) {
            return redirect('error');
        //   abort(403, 'غير مسموح لك بالدخول بصفتك مريض.');
        }
        return $next($request);
    }
}
