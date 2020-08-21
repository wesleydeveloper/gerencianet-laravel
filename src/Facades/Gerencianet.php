<?php


namespace Wesleydeveloper\Gerencianet\Laravel\Facades;


use Illuminate\Support\Facades\Facade;

class Gerencianet extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Wesleydeveloper\Gerencianet\Laravel\GerencianetManager';
    }
}
