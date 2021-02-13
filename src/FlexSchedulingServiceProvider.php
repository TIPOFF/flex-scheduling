<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling;

use Tipoff\FlexScheduling\Models\FlexDay;
use Tipoff\FlexScheduling\Policies\FlexDayPolicy;
use Tipoff\Support\TipoffPackage;

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
