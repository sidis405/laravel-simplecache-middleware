<?php

namespace Sid\SimpleCache;

use Closure;

class BeforeCacheMiddleWare extends BaseCacheMiddleware
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
            //generate e key to search by url
            $key = $this->keygen($request->url());

            //check if key is in cache
            if ($this->has($key)) {
                //fetch and return the key
                return response($this->get($key));
            }
        }
        return $next($request);
    }
}
