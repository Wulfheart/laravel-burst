<?php

namespace Wulfheart\Burst;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wulfheart\Burst\Commands\BurstCommand;

class BurstServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-burst')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_burst_table')
            ->hasCommand(BurstCommand::class);
    }
}
