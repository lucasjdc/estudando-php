<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta("111.111.111-11", "Fulano");
$primeiraConta->depositar(1.99);
$segundaConta = new Conta("222.222.222-22", "Outro Fulano");
unset($segundaConta);

new Conta("333.222.222-22", "Nome do titular");

echo "Nome: " . $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo "CPF: " . $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo "Saldo: R$ " . $primeiraConta->recuperarSaldo() . PHP_EOL;

echo Conta::recuperarNumeroDeContas() . PHP_EOL;