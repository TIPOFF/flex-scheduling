<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling;

use Tipoff\FlexScheduling\Models\FlexDay;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;


class FlexSchedulingServiceProvider extends TipoffServiceProvider
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
