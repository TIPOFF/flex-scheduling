<?php

namespace Tipoff\FlexScheduling;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tipoff\FlexScheduling\FlexDayFacade
 */
class FlexDayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flexdays';
    }
}
