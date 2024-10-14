<?php 

$arquivo_json = file_get_contents(__DIR__ . "/filmes.json");
$filme = json_decode($arquivo_json, true);

var_dump($filme);