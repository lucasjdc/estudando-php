<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$nomeDoCliente = new Titular(new Cpf('123.456.789-10'), 'Nome do Cliente');
$primeiraConta = new Conta($nomeDoCliente);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo "\n\n";
var_dump($primeiraConta);