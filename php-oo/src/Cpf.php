<?php

class Cpf
{
    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function __toString() {
        return $this->numero;
    }
}
