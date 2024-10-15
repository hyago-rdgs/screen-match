<?php

require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/functions.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

// $incluidoNoPlano = incluido_no_plano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

// exibe_mensagem_ano_lancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

// $filme = criar_filme(
//     nome: "Thor: Ragnarok", 
//     ano_lancamento: 2021, 
//     nota: 9.8, 
//     genero: "super-herói");

echo $filme->ano_lancamento . "\n";

$arquivo_json = json_encode($filme);

file_put_contents(__DIR__ . "/filmes.json", $arquivo_json);