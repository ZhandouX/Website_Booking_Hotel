<?php
// app/Http/Middleware/SuperAdminMiddleware.php

namespace App\Http\Middleware;

use Closure;

class SuperAdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session('admin_id') || session('admin_role') !== 'superadmin') {
            abort(403, 'Akses hanya untuk superadmin');
        }

        return $next($request);
    }
}
