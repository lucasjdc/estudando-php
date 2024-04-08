<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta("111.111.111-11", "Nome do títular");
$primeiraConta->depositar(1.99);


echo "Nome: " . $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo "CPF: " . $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo "Saldo: R$ " . $primeiraConta->recuperarSaldo() . PHP_EOL;