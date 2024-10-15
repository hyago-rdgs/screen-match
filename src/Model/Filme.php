<?php 

class Filme {

    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly string $ano_lancamento,
        public readonly Genero $genero,
    ){
        $this->notas = [];
    }

    public function avalia(float $nota): void{
        $this->notas[] = $nota;
    }

    public function media_notas(): float{
        $soma_notas = array_sum($this->notas);
        $quantidade_notas = count($this->notas);

        return $soma_notas/$quantidade_notas;
    }

}