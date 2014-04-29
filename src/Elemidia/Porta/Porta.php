<?php

namespace Elemidia\Porta;

use Elemidia\DispositivoAbertura\AberturaInterface;
use Elemidia\DispositivoSeguranca\Chave\ChaveInterface;
use Elemidia\DispositivoSeguranca\Fechadura;
use Elemidia\DispositivoSeguranca\SegurancaInterface;
use Elemidia\Porta\AbstractPorta;

class Porta extends AbstractPorta implements SegurancaInterface
{
    /**
     *
     * @var Fechadura
     */
    private $fechadura;

    public function __construct(AberturaInterface $dobradica, SegurancaInterface $fechadura)
    {
        parent::__construct($dobradica);
        $this->fechadura = $fechadura;
    }

    public function destrancar(ChaveInterface $chave)
    {
        return $this->fechadura->destrancar($chave);
    }

    public function trancar(ChaveInterface $chave)
    {
        return $this->fechadura->trancar($chave);
    }

}