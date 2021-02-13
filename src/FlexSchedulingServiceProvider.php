<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling;

use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;
use Tipoff\FlexScheduling\Models\FlexDay;
use Tipoff\FlexScheduling\Policies\FlexDayPolicy;

class FlexSchedulingServiceProvider extends PackageServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                FlexDay::class => FlexDayPolicy::class,
            ])
            ->name('flex-scheduling')
            ->hasConfigFile();
    }
}
