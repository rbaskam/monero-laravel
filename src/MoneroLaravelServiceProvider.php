<?php

namespace Rbaskam\MoneroLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rbaskam\MoneroLaravel\Commands\MoneroLaravelCommand;

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
