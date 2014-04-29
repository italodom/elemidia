<?php

namespace Elemidia\DispositivoAbertura;

use Exception;

class Dobradica implements AberturaInterface
{
    protected $estaAberta;

    public function __construct()
    {
        $this->estaAberta = false;
    }

    public function abrir()
    {
        if ($this->estaAberta) {
            throw new Exception('A porta já está aberta');
        }

        $this->estaAberta = true;

        return true;
    }

    public function fechar()
    {
        if ($this->estaAberta === false) {
            throw new Exception('A porta já está fechada');
        }

        $this->estaAberta = false;

        return true;
    }
}
