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
        if ($this->enabled()) {
            $response = $next($request);

            $key = $this->keygen($request->url());

            if (! $this->has($key)) {
                $this->put($key, $response->getContent(), $this->config['cache_time']);
            }
        }

        return $next($request);
    }
}
