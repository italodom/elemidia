<?php

namespace Elemidia\DispositivoAbertura;

use Exception;

class Dobradica implements AberturaInterface
{
    protected $estaAberta;

    public function __construct()
    {
        // Premissa (1)
        $this->estaAberta = false;
    }

    // C1 (1)
    public function abrir()
    {
        // C1 (1.2)
        if ($this->estaAberta) {
            throw new Exception('A dobradiça já está aberta');
        }

        $this->estaAberta = true;

        // C1 (2)
        return true;
    }

    // C2 (1)
    public function fechar()
    {
        // C2 (1.1)
        if ($this->estaAberta === false) {
            throw new Exception('A dobradiça já está fechada');
        }

        $this->estaAberta = false;

        // C2 (2)
        return true;
    }
}
