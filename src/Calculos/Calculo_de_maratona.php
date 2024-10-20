<?php 

class Calculo_de_maratona {
    private int $duracao_maratona = 0;

    public function incluir(Titulo $titulo):void {
        $this->duracao_maratona += $titulo->duracao_em_minutos();
    }

    public function duracao_maratona(): int{
        return $this->duracao_maratona;
    }
}