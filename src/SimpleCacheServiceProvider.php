<?php

namespace Sid\SimpleCache;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class SimpleCacheServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot()
    {
        $provider->publishes([
        __DIR__.'/../resources/config/acl.php' => config_path('simplecache.php'),
        ]);
    }
}
