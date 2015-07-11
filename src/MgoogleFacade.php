<?php namespace MGoogleLaravel;

use Illuminate\Support\Facades\Facade;

class MGoogleFacade extends Facade{
    protected static function getFacadeAccessor(){
        return "MGoogleAPI";
    }
}
