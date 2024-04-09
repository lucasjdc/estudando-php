<?php

class Funcionario extends Pessoa
{    
    private string $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    } 

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
}