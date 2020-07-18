<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Renan\Imposto;

class ImpostoTest  extends TestCase
{
    public function testDeveValidarMenor500Reais()
    {
        $imposto = new Imposto;
        $this->assertEquals(0, $imposto->calcular(100));
    }

    public function testDeveValidarMaior500Reais()
    {
        $imposto = new Imposto;
        $this->assertEquals(150, $imposto->calcular(600));
    }

    public function testDeveValidar500Reais()
    {
        $imposto = new Imposto;
        $this->assertEquals(0, $imposto->calcular(500));
    }
}
