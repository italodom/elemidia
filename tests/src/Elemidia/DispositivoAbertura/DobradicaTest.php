<?php

namespace Elemidia\DispositivoAbertura;

use PHPUnit_Framework_TestCase;

class DobradicaTest extends PHPUnit_Framework_TestCase
{
    protected $dobradica;

    protected function setUp()
    {
        $this->dobradica = new Dobradica();
    }

    protected function tearDown()
    {

    }

    public function testAbrir()
    {
        $this->assertTrue($this->dobradica->abrir());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage A porta já está aberta
     */
    public function testAvisaSeAPortaJaEstiverAberta()
    {
        $this->dobradica->abrir();
        $this->dobradica->abrir();
    }


    public function testFechar()
    {
        $this->dobradica->abrir();
        $this->assertTrue($this->dobradica->fechar());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage A porta já está fechada
     */
    public function testAvisaSeAPortaJaEstiverFechada()
    {
        $this->dobradica->fechar();
    }
}