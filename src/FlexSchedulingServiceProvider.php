<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tipoff\FlexScheduling\Models\FlexDay;
use Tipoff\FlexScheduling\Policies\FlexDayPolicy;

class FlexSchedulingServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        parent::boot();
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->hasModelInterfaces([
                FlexDayInterface::class => FlexDay::class,
            ])
            ->hasPolicies([
                FlexDay::class => FlexDayPolicy::class,
            ])
            ->name('flex-scheduling')
            ->hasConfigFile();
    }
}
