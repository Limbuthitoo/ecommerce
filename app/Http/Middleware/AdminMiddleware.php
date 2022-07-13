<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

             /** @var User $user */
            $user = Auth::user();

            // if user is not customer take him to his dashboard
            if ( $user-> hasRole('customer')) {
                return redirect(route('customer'));
            }
            // if user is admin take him to his dashboard
            else if ( $user->hasRole('admin')) {
                return $next($request);
            }
        }
        abort('403'); // permission denied error
    }
}
