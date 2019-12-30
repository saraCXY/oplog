<?php

namespace MiddleLog\Oplog;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class OplogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app[Kernel::class]->pushMiddleware(OpMiddleService::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
