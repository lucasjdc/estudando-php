<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta("111.111.111-11", "Lucas Costa");
$primeiraConta->depositar(1.99);

echo "Nome: " . $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo "CPF: " . $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo "Saldo: R$ " . $primeiraConta->recuperarSaldo() . PHP_EOL;

echo Conta::recuperarNumeroDeContas() . PHP_EOL;