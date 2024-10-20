<?php 
require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Calculos/Calculo_de_maratona.php";

echo "Bem-vindo(a) ao ScreenMatch" . PHP_EOL;

$filme = new Filme(
    "O Homem do Futuro",
    2011,
    Genero::Ficcao_Cientifica,
    180,
);

$filme->avalia(9.9);

var_dump($filme);

echo $filme->media_notas();

$serie = new Serie(
    "Supernatural",
    2006,
    Genero::Terror,
    10,
    30,
    45,
);
$serie->avalia(9.5);
$serie->avalia(7.5);
$serie->avalia(10);

echo $serie->media_notas() . "\n";
var_dump($serie);

$calculo_de_maratona = new Calculo_de_maratona;
$calculo_de_maratona->incluir($filme);
$calculo_de_maratona->incluir($serie);

echo $calculo_de_maratona->duracao_maratona();