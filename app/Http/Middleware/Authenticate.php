<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('login'); // Laravel Default
        // using routIs function from Request Class to determine if the incoming request has matched a admin ?
        if (!$request->expectsJson())
        {
            if ($request->routeIs('admin.*')) {
                return route('getAdmin.login');
            }
            else{
                return route('login');
            }
        }
    }
}
