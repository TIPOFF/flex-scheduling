<?php

namespace Tipoff\FlexScheduling;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tipoff\FlexScheduling\FlexScheduling
 */
class FlexSchedulingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flex-scheduling';
    }
}
