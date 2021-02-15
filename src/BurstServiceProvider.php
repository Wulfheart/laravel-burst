<?php

namespace Wulfheart\Burst;

use Laravel\Fortify\Fortify;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wulfheart\Burst\Commands\BurstInstallCommand;

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
            ->name('burst')
            ->hasConfigFile()
            ->hasViews()
            ->hasAssets()
            ->hasTranslations()
            ->hasRoute('web')
            ->hasMigration('create_laravel_burst_table')
            ->hasCommand(BurstInstallCommand::class);

    }
}
