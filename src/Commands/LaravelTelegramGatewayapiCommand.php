<?php

namespace Meetjet\LaravelTelegramGatewayapi\Commands;

use Illuminate\Console\Command;

class LaravelTelegramGatewayapiCommand extends Command
{
    public $signature = 'laravel-telegram-gatewayapi';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
