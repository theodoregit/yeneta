<?php

namespace App\Http\Middleware;

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
        switch ($guard) {
            case 'registrar':
                if (Auth::guard($guard)->check()) {
                    return redirect('/yeneta/registrar/home');
                }
                break;  
            case 'instructor':
                if (Auth::guard($guard)->check()) {
                    return redirect('/yeneta/instructor/home');
                }
                break;  
            case 'student':
                if (Auth::guard($guard)->check()) {
                    return redirect('/yeneta/student/home');
                }
                break;  
            case 'dean':
                if (Auth::guard($guard)->check()) {
                    return redirect('/yeneta/dean/home');
                }
                break;  
            case 'finance':
                if (Auth::guard($guard)->check()) {
                    return redirect('/yeneta/finance/home');
                }
                break;          
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        return $next($request);
    }
}
