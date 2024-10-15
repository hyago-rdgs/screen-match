<?php 
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Model/Genero.php";

echo "Bem-vindo(a) ao ScreenMatch" . PHP_EOL;

$filme = new Filme(
    "O Homem do Futuro",
    2011,
    Genero::Ficcao_Cientifica
);

$filme->avalia(10);
$filme->avalia(9);
$filme->avalia(7.8);
$filme->avalia(5.6);
$filme->avalia(8.9);
$filme->avalia(10);
$filme->avalia(8.9);
$filme->avalia(9.9);

var_dump($filme);

echo $filme->media_notas();