<?php

namespace Wulfheart\Burst\Commands;

use Illuminate\Console\Command;

class BurstInstallCommand extends Command
{
    public $signature = 'burst:install';

    public $description = 'Installs Burst';

    public function handle()
    {
        $this->comment('Publishing Burst Assets');
        $this->callSilent('vendor:publish', ['--tag' => 'burst-assets', '--force' => true]);

        $this->info('Burst assets published successfully.');

    }
}
