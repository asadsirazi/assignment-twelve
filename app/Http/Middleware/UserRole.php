<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        $current_user_role = \App\Enums\UserRole::tryFrom(auth()->user()->user_role);
        $authenticated = false;

        foreach($role as $user_role) {
            if($user_role === strtolower($current_user_role->name)) {
                $authenticated = true;
                break;
            }
        }

        if( ! $authenticated) abort(Response::HTTP_UNAUTHORIZED, "Unauthorized");
        return $next($request);
    }
}
