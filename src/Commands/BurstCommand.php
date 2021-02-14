<?php

namespace Wulfheart\Burst\Commands;

use Illuminate\Console\Command;

class BurstCommand extends Command
{
    public $signature = 'laravel-burst';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
