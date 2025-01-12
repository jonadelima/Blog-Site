<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class RoleChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {



        if (!Auth::check()) {
            return redirect('/login');
        }

        // Fetch the user's role as a string
        $userRole = Auth::user()->role;

        // Check if the role is "1" (admin)
        if ($userRole === '1') {
            return $next($request);
        }

        // Return unauthorized for non-admin users
        return response()->view('errors.unauthorized', [], 403);



    }
}
