<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling\Tests;

use Laravel\Nova\NovaCoreServiceProvider;
use Tipoff\FlexScheduling\FlexSchedulingServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;
use Spatie\Permission\PermissionServiceProvider;
use Tipoff\FlexScheduling\Tests\Support\Providers\NovaPackageServiceProvider;
use Tipoff\Authorization\AuthorizationServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            SupportServiceProvider::class,
            FlexSchedulingServiceProvider::class,
            PermissionServiceProvider::class,
            NovaPackageServiceProvider::class,
            NovaCoreServiceProvider::class,
            AuthorizationServiceProvider::class
        ];
    }
}
