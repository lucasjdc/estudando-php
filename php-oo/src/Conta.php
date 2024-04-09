<?php

class Conta 
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular) 
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if (self::$numeroDeContas > 2) {
            self::$numeroDeContas--;
        }
    }
    
    public function saca(float $valorASacar): void {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível\n";
            return;
        } 
        
        $this->saldo -= $valorASacar;        
    }

    public function deposita(float $valorADepositar) {
        if ($valorADepositar <0) {
            echo "Valor precisa ser positivo\n";
            return;
        } 
            
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível\n";
            return;
        } 
            
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string 
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static  function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

}