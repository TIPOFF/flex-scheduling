<?php

namespace Tipoff\FlexScheduling;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tipoff\FlexScheduling\FlexSchedulingFacade
 */
class FlexSchedulingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flex-scheduling';
    }
}
