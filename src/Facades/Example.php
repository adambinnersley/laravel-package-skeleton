<?php

namespace VendorName\MyPackageName\Facades;

use Illuminate\Support\Facades\Facade;

class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'helpers';
    }
}
