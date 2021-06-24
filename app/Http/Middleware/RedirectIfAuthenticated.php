<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($$guard) {
            case 'endowment':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('endowment.dashboard');
                }
                break;

            case 'charity':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('charity.dashboard');
                }
                break;
            
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect(RouteServiceProvider::HOME);
                }
                break;
        }

        return $next($request);
    }
}
