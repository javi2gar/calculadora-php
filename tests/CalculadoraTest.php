<?php

namespace Src;

require_once './src/Calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function testSumar()
    {

        $calculadora = new Calculadora();
        $this->assertEquals($calculadora->sumar(1, 2), 3);
    }

    public function testRestar()
    {

        $calculadora = new Calculadora();
        $this->assertEquals($calculadora->restar(1, 2), -1);
    }

    public function testMultiplicar()
    {

        $calculadora = new Calculadora();
        $this->assertEquals($calculadora->multiplicar(1, 2), 2);
    }
}