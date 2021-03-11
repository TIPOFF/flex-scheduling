<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling\Tests;

use Tipoff\Authorization\AuthorizationServiceProvider;
use Tipoff\FlexScheduling\FlexSchedulingServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            SupportServiceProvider::class,
            AuthorizationServiceProvider::class,
            FlexSchedulingServiceProvider::class,
        ];
    }
}
