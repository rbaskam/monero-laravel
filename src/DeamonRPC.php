<?php

namespace Rbaskam\MoneroLaravel;

use MoneroIntegrations\MoneroPhp\daemonRPC;

class DeamonRPC
{
    public function connect()
    {
        return new daemonRPC(
            config('monero-laravel.daemonRPC.host'),
            config('monero-laravel.daemonRPC.port'),
            config('monero-laravel.daemonRPC.ssl'),
            config('monero-laravel.daemonRPC.user'),
            config('monero-laravel.daemonRPC.password'),
        );
    }
}
