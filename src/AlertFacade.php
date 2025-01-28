<?php

namespace Errehub\Alert;

use Illuminate\Support\Facades\Facade;

class AlertFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'alert'; // Matches the key in the service provider's singleton registration
    }
}
