<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    }else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

echo "Bem-Vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$notaFilmeArredondado = round($notaFilme, 1);
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilmeArredondado\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

echo $filme["ano"];

// Função usada em ambiente de desenvolvimento
var_dump($notas);

sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo $menorNota;