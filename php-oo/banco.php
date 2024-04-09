<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y");
$hora = date("H:i:s");

$endereco = new Endereco("Tamandaré", "Centro", "Rua Principal", "1");
$nomeDoCliente = new Titular(new Cpf('123.456.789-10'), 'Nome do Cliente', $endereco);
$primeiraConta = new Conta($nomeDoCliente);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo "-------------------\n";
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
$saldo = $primeiraConta->recuperaSaldo();
echo "-------------------\n";
echo "$data\n";
echo "$hora\n";
echo "Saldo: R$ $saldo\n" ;
echo "-------------------\n";

echo "\n\n";