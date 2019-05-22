<?php
namespace DivineOmega\LaravelDomainToLocale\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DomainToLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        

        return $next($request);
    }
}