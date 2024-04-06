<?php

require __DIR__ . "/src/funcoes.php";

// Cores ANSI
$corAmarela = "\033[33m";
$corReset = "\033[0m";

echo $corAmarela."\nBem-Vindo(a) ao screen match!\n".$corReset;

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
    "Thor: Ragnarok" => "aventura",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criaFilme(
    nome: "Thor: Ragnarok",
    anoLancamento: 2017,
    nota: 7.8, 
    genero: "aventura"
);

echo "\n\n";

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);
var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme);

file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);