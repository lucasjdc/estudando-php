<?php

namespace Modelo;

class Funcionario extends Pessoa
{    
    private string $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);       
        $this->cargo = $cargo;
    } 

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    protected function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}