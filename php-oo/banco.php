<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$cpf = new Cpf("123.456.789-00");
$nome = "Nome do Cliente";

$primeiraConta = new Conta(new Titular($cpf, $nome));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo "\n\n";
var_dump($primeiraConta);