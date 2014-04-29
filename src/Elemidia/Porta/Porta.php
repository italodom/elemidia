<?php

namespace Elemidia\Porta;

use Elemidia\DispositivoSeguranca\Chave\ChaveInterface;
use Elemidia\DispositivoSeguranca\SegurancaInterface;
use Elemidia\Porta\AbstractPorta;

class Porta extends AbstractPorta implements SegurancaInterface
{
    public function destrancar(ChaveInterface $chave)
    {

    }

    public function trancar(ChaveInterface $chave)
    {

    }
}