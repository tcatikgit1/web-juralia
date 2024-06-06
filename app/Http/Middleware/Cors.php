<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        $response = $next($request);

        $IlluminateResponse = 'Illuminate\Http\Response';
        $SymfonyResponse = 'Symfony\Component\HttpFoundation\Response';
        $headers = [
            'Access-Control-Allow-Origin' => '*',
            'Strict-Transport-Security' => 'max-age=31536000',
            'X-Frame-Options' =>  '*',
            'Content-Security-Policy' => "default-src *; frame-src *.google.com; script-src 'self' *.google.com *.googletagmanager.com *.gstatic.com *.google-analytics.com *.juralia.es 'unsafe-inline'; style-src 'self' *.googletagmanager.com *.google-analytics.com *.juralia.es 'unsafe-inline'; img-src 'self' *.googletagmanager.com *.google-analytics.com *.juralia.es data: ",
            'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE',
            'Access-Control-Allow-Headers' => 'X-Requested-With, Content-Type, X-Token-Auth, Authorization',
        ];

        if($response instanceof $IlluminateResponse || $response instanceof $SymfonyResponse) {
            foreach ($headers as $key => $value) {
                $response->headers->set($key, $value);
            }
        }

        return $response;
    }
}
