<?php

namespace App\Larademo;
Use Illuminate\Support\Facades\Facade;
class LarademoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larademo';
    }
}