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
        if ($this->enabled()) {
            $key = $this->keygen($request->url());

            if ($this->has($key)) {
                return response($this->get($key));
            }
        }
        return $next($request);
    }
}
