<?php

namespace Elemidia\Porta;

use Elemidia\DispositivoSeguranca\Chave\ChaveInterface;
use Exception;

class PortaAco extends AbstractPorta
{
    public function destrancar(ChaveInterface $chave)
    {
        throw new Exception('Essa porta não destranca');
    }

    public function trancar(ChaveInterface $chave)
    {
        throw new Exception('Essa porta não tranca');
    }

}