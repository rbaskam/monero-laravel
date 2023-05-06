# A Monero library written for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rbaskam/monero-laravel.svg?style=flat-square)](https://packagist.org/packages/rbaskam/monero-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rbaskam/monero-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rbaskam/monero-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rbaskam/monero-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rbaskam/monero-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rbaskam/monero-laravel.svg?style=flat-square)](https://packagist.org/packages/rbaskam/monero-laravel)

## Installation

You can install the package via composer:

```bash
composer require rbaskam/monero-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="monero-laravel-config"
```

This is the contents of the published config file:

```php
return [
    'daemonRPC' => [
        'host' => env('MONERO_DEAMON_RPC_HOST'),
        'port' => env('MONERO_DEAMON_RPC_PORT'),
        'ssl' => env('MONERO_DEAMON_RPC_SSL', true),
        'user' => env('MONERO_DEAMON_RPC_USER', null),
        'password' => env('MONERO_DEAMON_RPC_PASSWORD', null),
    ]
];
```

## Usage

### Sail
```
    monerod:
        image: sethsimmons/simple-monerod:latest
        user: ${FIXUID:-1000}:${FIXGID:-1000}
        restart: unless-stopped
        container_name: monerod
        volumes:
            - sail-bitmonero:/home/monero/.bitmonero
        ports:
            - 18080:18080
            - 18089:18089
        networks:
            - sail
        command:
            - "--rpc-restricted-bind-ip=0.0.0.0"
            - "--rpc-restricted-bind-port=18089"
            - "--public-node"
            - "--no-igd"
            - "--enable-dns-blocklist"
            - "--prune-blockchain"

    tor:
        image: goldy/tor-hidden-service:latest
        container_name: tor
        restart: unless-stopped
        links:
            - monerod
        networks:
            - sail
        environment:
            MONEROD_TOR_SERVICE_HOSTS: 18089:monerod:18089
            MONEROD_TOR_SERVICE_VERSION: '3'
        volumes:
            - sail-tor-keys:/var/lib/tor/hidden_service/

    watchtower:
        image: containrrr/watchtower:latest
        container_name: watchtower
        restart: unless-stopped
        networks:
            - sail
        volumes:
            - "/var/run/docker.sock:/var/run/docker.sock"
networks:
    sail:
        driver: bridge
volumes:
    sail-mysql:
        driver: local
    sail-redis:
        driver: local
    sail-bitmonero:
        driver: local
    sail-tor-keys:
        driver: local
```
### ENV
```
MONERO_DEAMON_RPC_HOST="host.docker.internal"
MONERO_DEAMON_RPC_PORT=18089
MONERO_DEAMON_RPC_SSL=false
MONERO_DEAMON_RPC_USER=
MONERO_DEAMON_RPC_PASSWORD=
```


### Connections

```php
$daemonRPC = new DeamonRPC();
$daemonRPC = $daemonRPC->connect();
$getblockcount = $daemonRPC->getblockcount();
$on_getblockhash = $daemonRPC->on_getblockhash(42069);
// $getblocktemplate = $daemonRPC->getblocktemplate('9sZABNdyWspcpsCPma1eUD5yM3efTHfsiCx3qB8RDYH9UFST4aj34s5Ygz69zxh8vEBCCqgxEZxBAEC4pyGkN4JEPmUWrxn', 60);
// $submitblock = $daemonRPC->submitblock($block_blob);
$getlastblockheader = $daemonRPC->getlastblockheader();
// $getblockheaderbyhash = $daemonRPC->getblockheaderbyhash('fc7ba2a76071f609e39517dc0388a77f3e27cc2f98c8e933918121b729ee6f27');
// $getblockheaderbyheight = $daemonRPC->getblockheaderbyheight(696969);
// $getblock_by_hash = $daemonRPC->getblock_by_hash('fc7ba2a76071f609e39517dc0388a77f3e27cc2f98c8e933918121b729ee6f27');
// $getblock_by_height = $daemonRPC->getblock_by_height(696969);
// $get_connections = $daemonRPC->get_connections();
// $get_info = $daemonRPC->get_info();
// $hardfork_info = $daemonRPC->hardfork_info();
// $setbans = $daemonRPC->setbans('8.8.8.8');
// $getbans = $daemonRPC->getbans();

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Robert Askam](https://github.com/rbaskam)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
