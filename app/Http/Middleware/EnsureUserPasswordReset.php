<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserPasswordReset
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Access the authenticated user
        $user = Auth::user(); // Using the Auth facade

        // OR
        // $user = $request->user(); // Using the request object
        // if ($user->password_reset_at === null); {
        //     return redirect('/user/profile#password_reset');
        // }

        return $next($request);
    }
}
