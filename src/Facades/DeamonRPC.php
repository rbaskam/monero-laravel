<?php

namespace Rbaskam\MoneroLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rbaskam\MoneroLaravel\DeamonRPC
 */
class DeamonRPC extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rbaskam\MoneroLaravel\DeamonRPC::class;
    }
}
