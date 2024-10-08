<?php

namespace Meetjet\LaravelTelegramGatewayapi\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Meetjet\LaravelTelegramGatewayapi\LaravelTelegramGatewayapiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Meetjet\\LaravelTelegramGatewayapi\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelTelegramGatewayapiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-telegram-gatewayapi_table.php.stub';
        $migration->up();
        */
    }
}
