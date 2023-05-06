<?php

namespace Rbaskam\MoneroLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rbaskam\MoneroLaravel\WalletRPC
 */
class WalletRPC extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rbaskam\MoneroLaravel\WalletRPC::class;
    }
}
