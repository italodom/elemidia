<?php

namespace Elemidia\Porta;

use Elemidia\DispositivoAbertura\AberturaInterface;

abstract class AbstractPorta implements AberturaInterface
{
    /**
     *
     * @var Dobradica
     */
    protected $dobradica;

    public function __construct(AberturaInterface $dobradica)
    {
        $this->dobradica = $dobradica;
    }

    public function abrir()
    {
        return $this->dobradica->abrir();
    }

    public function fechar()
    {
        return $this->dobradica->fechar();
    }
}