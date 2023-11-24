<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter as FacadesRateLimiter;
use Symfony\Component\HttpFoundation\Response;

class ThrottleLoginAttempts
{
    protected $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function handle(Request $request, Closure $next, $maxAttempts = 5, $decayMinutes = 1)
    {
        if ($this->limiter->tooManyAttempts($this->throttleKey($request), $maxAttempts, $decayMinutes)) {
            return $this->buildResponse($this->limiter->availableIn($this->throttleKey($request)));
        }

        $this->limiter->hit($this->throttleKey($request));

        $response = $next($request);

        if ($this->limiter->attempts($this->throttleKey($request)) >= $maxAttempts) {
            $this->limiter->clear($this->throttleKey($request));
        }

        return $response;
    }

    protected function throttleKey(Request $request)
    {
        return mb_strtolower($request->input('email')) . '|' . $request->ip();
    }

    protected function buildResponse($seconds)
    {
        return new Response(
            'Too Many Login Attempts. Please try again in ' . $seconds . ' seconds.',
            429
        );
    }
}
