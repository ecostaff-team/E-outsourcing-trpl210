<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;

class DynamicDatabaseConnection
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('db_username') && $request->session()->has('db_password')) {
            $dbUsername = $request->session()->get('db_username');
            $dbPassword = $request->session()->get('db_password');

            Config::set('database.connections.mysql.username', $dbUsername);
            Config::set('database.connections.mysql.password', $dbPassword);

            DB::purge('mysql');
            DB::reconnect('mysql');
        }

        return $next($request);
    }
}
