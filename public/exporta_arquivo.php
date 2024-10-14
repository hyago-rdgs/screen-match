<?php 

require "../functions.php";
$filme = criar_filme(
    nome: $_POST['nome'],
    ano_lancamento: $_POST['ano'],
    nota: $_POST['nota'],
    genero: $_POST['genero']
);

file_put_contents("filme.json", json_encode($filme));

header("Location: /sucesso.php?filme=" . $filme['nome']);