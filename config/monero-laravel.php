<?php

// config for Rbaskam/MoneroLaravel
return [
    /*
    |--------------------------------------------------------------------------
    | Connection Parameters for Deamon
    |--------------------------------------------------------------------------
    |
    |
    */
    'daemonRPC' => [
        'host' => env('MONERO_DEAMON_RPC_HOST'),
        'port' => env('MONERO_DEAMON_RPC_PORT'),
        'ssl' => env('MONERO_DEAMON_RPC_SSL', true),
        'user' => env('MONERO_DEAMON_RPC_USER', null),
        'password' => env('MONERO_DEAMON_RPC_PASSWORD', null),
    ],

    /*
    |--------------------------------------------------------------------------
    | Connection Parameters for wallet
    |--------------------------------------------------------------------------
    |
    |
    */
    'walletRPC' => [
        'host' => env('MONERO_WALLET_RPC_HOST'),
        'port' => env('MONERO_WALLET_RPC_PORT'),
        'ssl' => env('MONERO_WALLET_RPC_SSL', true),
        'user' => env('MONERO_WALLET_RPC_USER', null),
        'password' => env('MONERO_WALLET_RPC_PASSWORD', null),
    ],

];
