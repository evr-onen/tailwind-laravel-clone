<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;


class CheckToken
{
    public function handle($request, Closure $next)
    {
        $token = $request->cookie('token');
        if (!$token) {
            return redirect()->route('login');
        }
        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        try {
            $user = JWTAuth::setToken($token)->authenticate();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid tokenasdasdasd'], 401);
        }

        return $next($request);
    }
}
