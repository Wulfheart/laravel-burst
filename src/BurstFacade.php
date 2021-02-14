<?php

namespace Wulfheart\Burst;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wulfheart\Burst\Burst
 */
class BurstFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-burst';
    }
}
