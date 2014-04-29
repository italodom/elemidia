<?php

namespace Elemidia\DispositivoSeguranca;

use Elemidia\DispositivoSeguranca\Chave\ChaveInterface;
use Elemidia\DispositivoSeguranca\SegurancaInterface;

class FechaduraEletronica implements SegurancaInterface
{
    public function destrancar(ChaveInterface $chave)
    {

    }

    public function trancar(ChaveInterface $chave)
    {

    }
}