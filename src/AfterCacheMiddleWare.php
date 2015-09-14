<?php

namespace Sid\SimpleCache;

use Closure;

class AfterCacheMiddleWare extends BaseCacheMiddleware
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
        //check if cache is enabled
        if ($this->enabled()) {
            //hold next request
            $response = $next($request);

            //generate e key to search by url
            $key = $this->keygen($request->url());

            //check if key is in cache
            if (! $this->has($key)) {
                //if not stored it by key and return the value
                $this->put($key, $response->getContent(), $this->config['cache_time']);
            }
        }

        return $next($request);
    }
}
