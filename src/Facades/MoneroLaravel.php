<?php

namespace Rbaskam\MoneroLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rbaskam\MoneroLaravel\MoneroLaravel
 */
class MoneroLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rbaskam\MoneroLaravel\MoneroLaravel::class;
    }
}
