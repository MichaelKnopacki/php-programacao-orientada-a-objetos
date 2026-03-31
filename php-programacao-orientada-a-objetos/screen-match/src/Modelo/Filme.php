<?php

class Filme {
    private string $nome;
    private int $anoLancamento;
    private string $genero;
    private array $notas = [];

    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function nome(): string {
        return $this->nome;
    }

    public function defineNome(string $nome ): void {
        $this->nome = $nome;
    }

    public function ano():int {
        return $this->anoLancamento;
    }

    public function defineAno(int $anoLancamento):void {
        $this->anoLancamento = $anoLancamento;
    }

    public function genero():string{
        return $this->genero;
    }

    public function defineGenero(string $genero):void{
        $this->genero = $genero;
    }

}
