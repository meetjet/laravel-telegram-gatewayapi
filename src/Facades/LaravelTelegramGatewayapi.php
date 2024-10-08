<?php

namespace Meetjet\LaravelTelegramGatewayapi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Meetjet\LaravelTelegramGatewayapi\LaravelTelegramGatewayapi
 */
class LaravelTelegramGatewayapi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Meetjet\LaravelTelegramGatewayapi\LaravelTelegramGatewayapi::class;
    }
}
