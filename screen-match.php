<?php

echo "Bem-Vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;

$notaFilme = 8.8;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo\n";
}else {
    echo "Esse filme não é um lançamento\n";
}
