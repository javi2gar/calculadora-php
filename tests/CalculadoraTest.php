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
}