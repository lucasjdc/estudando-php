<?php

namespace Modelo;

class Cpf
{
    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }
}
