<?php

namespace Meetjet\LaravelTelegramGatewayapi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Meetjet\LaravelTelegramGatewayapi\Commands\LaravelTelegramGatewayapiCommand;

class LaravelTelegramGatewayapiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-telegram-gatewayapi')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_telegram_gatewayapi_table')
            ->hasCommand(LaravelTelegramGatewayapiCommand::class);
    }
}
