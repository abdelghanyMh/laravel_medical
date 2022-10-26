<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        // handel 'user-role:doctor|secretary'
        $roles_array = explode('|', $roles);

        // check & verify with route
        if (Auth::check() && in_array(Auth::user()->role, $roles_array)) {
            return $next($request);
        }
        // TODO to be changed to 401 Unauthorized 
        return response()->json(['You do not have permission to access for this page.']);
    }
}
