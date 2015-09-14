<?php

namespace Sid\SimpleCache;

use Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

class BaseCacheMiddleware
{
    public $config;
    
    public function __construct()
    {
        $this->config = Config::get('simplecache');
    }

    public function has($key)
    {
        return Cache::has($key);
    }

    public function get($key)
    {
        return Cache::get($key);
    }

    public function put($key, $content, $time)
    {
        return Cache::put($key, $content, $time);
    }

    public function enabled()
    {
        return $this->config['enabled'];
    }

    protected function keygen($url)
    {
        return 'route_' . str_slug($url);
    }
}
