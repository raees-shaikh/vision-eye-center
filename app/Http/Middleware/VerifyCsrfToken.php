<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        // '/payment',
        // '/cc',
        // '/iframe/response',
        '/teleconsultation/response',
        '/teleconsultation/confirm',
        '/teleconsultation/secure/confirm',
        // '/teleconsultation/test/payment',
        // '/teleconsultation/secure/payment',
    ];
}
