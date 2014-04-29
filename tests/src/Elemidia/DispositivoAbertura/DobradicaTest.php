<?php

namespace Elemidia\DispositivoAbertura;

use Exception;
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
        $this->dobradica = null;
    }

    public function testDobradicaIniciaFechada()
    {
        $this->assertFalse(\PHPUnit_Framework_Assert::readAttribute($this->dobradica, 'estaAberta'));
    }

    public function testAbrir()
    {
        $this->assertTrue($this->dobradica->abrir());
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage A dobradiça já está aberta
     */
    public function testAvisaSeDobradicaJaEstiverAberta()
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
     * @expectedException Exception
     * @expectedExceptionMessage A dobradiça já está fechada
     */
    public function testAvisaSeDobradicaJaEstiverFechada()
    {
        $this->dobradica->fechar();
    }
}