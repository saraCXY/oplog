<?php

namespace MiddleLog\Oplog;

use Closure;

class OpMiddleService
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo 'this is the middleware';
        return $next($request);
    }

    public function terminate(){
        $server = new OpService();
        $server->saveLog();
    }
}
