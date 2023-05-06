<?php

namespace Rbaskam\MoneroLaravel;

use MoneroIntegrations\MoneroPhp\walletRPC as Wallet;

class WalletRPC
{
    public function connect()
    {
        return new Wallet(
            config('monero-laravel.walletRPC.host'),
            config('monero-laravel.walletRPC.port'),
            config('monero-laravel.walletRPC.ssl'),
            config('monero-laravel.walletRPC.user'),
            config('monero-laravel.walletRPC.password'),
        );
    }
}
