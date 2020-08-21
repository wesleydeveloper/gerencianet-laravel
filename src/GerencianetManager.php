<?php


namespace Wesleydeveloper\Gerencianet\Laravel;

use Gerencianet\Gerencianet;

class GerencianetManager extends Gerencianet
{
        public function __construct($options, $requester = null)
        {
            parent::__construct($options, $requester);
        }
}
