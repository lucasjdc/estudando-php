<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
var_dump($primeiraConta);

$primeiraConta->defineCpfTitular('111.111.111-11');
$primeiraConta->defineNomeTitular('Lucas José Pereira da Costa');
$primeiraConta->depositar(1.99);

var_dump($primeiraConta);
