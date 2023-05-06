<?php

namespace Rbaskam\MoneroLaravel\Commands;

use Illuminate\Console\Command;

class MoneroLaravelCommand extends Command
{
    public $signature = 'monero-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
