<?php

namespace Codeboxr\Writelog\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void log()
 */
class WriteLog extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'writelog';
    }
}
