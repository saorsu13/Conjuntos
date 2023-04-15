<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role = null): Response
    {
        if ($role) {
            $roles_array = explode("|", $role);
            $rol_nombre = $request->user()->rol;
            foreach ($roles_array as $rol) {
                if ($rol_nombre == $rol) {
                    return $next($request);
                }
            }
            return response()->view('Vendor.403', [], 403);
        }
        return $next($request);
    }
}
