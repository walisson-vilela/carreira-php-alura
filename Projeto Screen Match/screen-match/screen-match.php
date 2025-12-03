<?php

require __DIR__ . '/funcoes.php';

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

exibirAnoLancamento($anoLancamento);

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($i = 1; $i < $argc; $i++) {
    $notas[] = (float) $argv[$i];
}

if ($quantidadeDeNotas > 0) {
    $notaFilme = array_sum($notas) / $quantidadeDeNotas;
} else {
    $notaFilme = 0;
}
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";


$genero = match ($nomeFilme) {
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
