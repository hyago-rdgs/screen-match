<?php 

class Filme extends Titulo {

    public function __construct(
        string $nome,
        int $ano_lancamento,
        Genero $genero,
        public readonly int $duracao_em_minutos,
    ){
        parent::__construct($nome, $ano_lancamento, $genero);
    }
    #[override]
    public function duracao_em_minutos() {
        return $this->duracao_em_minutos;
    } 
}