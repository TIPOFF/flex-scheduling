<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\FlexScheduling\Models\FlexDay;
use Tipoff\FlexScheduling\Tests\TestCase;

class FlexDayModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        $model = FlexDay::factory()->create();
        $this->assertNotNull($model);
    }
}
