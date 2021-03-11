<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling\Tests\Support\Providers;

use Tipoff\FlexScheduling\Nova\FlexDay;
use Tipoff\TestSupport\Providers\BaseNovaPackageServiceProvider;

class NovaPackageServiceProvider extends BaseNovaPackageServiceProvider
{
    public static array $packageResources = [
        FlexDay::class,

    ];
}