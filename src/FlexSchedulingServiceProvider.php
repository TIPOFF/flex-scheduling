<?php

namespace Tipoff\FlexScheduling;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tipoff\FlexScheduling\Commands\FlexSchedulingCommand;

class FlexSchedulingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('flex-scheduling')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_flex_scheduling_table')
            ->hasCommand(FlexSchedulingCommand::class);
    }
}
