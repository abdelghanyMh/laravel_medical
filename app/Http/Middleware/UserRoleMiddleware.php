<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\UserRoles;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,  $roles)
    {
        // handel 'user-role:doctor|secretary'
        $route_roles_array = explode('|', $roles);

        // ['ADMIN'=>2,...]
        $users_roles = UserRoles::values();
        // int
        $current_user_role = Auth::user()->role->value;

        // dd( UserRoles::values()[$roles]);
        // check & verify with route
        if (Auth::check()) {

            foreach ($route_roles_array as $key => $value) {
                if ($users_roles[$value] == $current_user_role ) {
                    return $next($request);
                }
            }
        }
        // TODO to be changed to 401 Unauthorized 
        return response()->json(['You do not have permission to access for this page.']);
    }
}
