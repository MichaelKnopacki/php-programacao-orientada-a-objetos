<?php

class Filme {
    public string $nome;
    public int $anoLancamento;
    public string $genero;
    public array $notas = [];

    public function avalia($nota): void {
        $this->notas[] = $nota;
    }
}
