<?php

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;    
    
    public function sacar(float $valorASacar): void {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível\n";
            return;
        } 
        
        $this->saldo -= $valorASacar;        
    }

    public function depositar(float $valorADepositar) {
        if ($valorADepositar <0) {
            echo "Valor precisa ser positivo\n";
            return;
        } 
            
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível\n";
            return;
        } 
            
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);        
    }

    public function recuperarSaldo(): float {
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf): void {
        $this->cpfTitular = $cpf;
    }

    public function recuperarCpfTitular(): string {
        return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nome): void {
        $this->nomeTitular = $nome;
    }

    public function recuperarNomeTitular(): string {
        return $this->nomeTitular;
    }
}
