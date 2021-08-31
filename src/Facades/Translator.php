<?php

namespace AwStudio\Deeplable\Facades;

use Illuminate\Support\Facades\Facade;

class Translator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'deeplable.translator';
    }
}