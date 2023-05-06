<?php

namespace Rbaskam\MoneroLaravel;

use Rbaskam\MoneroLaravel\Commands\MoneroLaravelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MoneroLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('monero-laravel')
            ->hasConfigFile();
        // ->hasViews()
        // ->hasMigration('create_monero-laravel_table')
        // ->hasCommand(MoneroLaravelCommand::class);
    }
}
