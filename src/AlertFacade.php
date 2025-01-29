<?php

namespace Errehub\LaravelAlert;

use Illuminate\Support\Facades\Facade;

class AlertFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'alert';
    }
}
