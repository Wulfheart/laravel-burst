<?php

namespace Wulfheart\Burst\Commands;

use Illuminate\Console\Command;

class BurstInstallCommand extends Command
{
    public $signature = 'burst:install';

    public $description = 'Installs laravel-burst';

    public function handle()
    {
        $this->comment('Publishing burst Assets');
        $this->callSilent('vendor:publish', ['--tag' => 'burst-assets', '--force']);
    }
}
