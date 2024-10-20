<?php 

class Serie extends Titulo {
    public function __construct(
        string $nome,
        int $ano_lancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodios_por_temporada,
        public readonly int $duracao_por_episodio
    ){
        parent::__construct(
            $nome,
            $ano_lancamento,
            $genero,
        );
    }

    #[override]
    public function duracao_em_minutos() {
        return $this->temporadas * $this->episodios_por_temporada * $this->duracao_por_episodio; 
    } 
}