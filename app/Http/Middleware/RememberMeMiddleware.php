<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class RememberMeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() && $request->hasCookie('remember_me'))  {
            $email = $request->cookie('remember_me');
            $user = User::where('email', $email)->first();

            if ($user) {
                Auth::login($user);
            }
        }

        return $next($request);
    }
}