<?php

/**
 * Calculadora.php
 * PHP version 7.2
 *
 * @category Calculator
 *
 * @package Calculator
 *
 * @author Javier García García <vernedevelop@gmail.com>
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 *
 * @link http://www.vernedevelop.com
 **/

/**
 * Calculator Class Doc Comment
 *
 * @category Calculator
 *
 * @package Calculator
 *
 * @author Javier García García <vernedevelop@gmail.com>
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 *
 * @link http://www.vernedevelop.com
 **/

namespace Src;

class Calculadora
{
    private $num1;
    private $num2;
    /**
     * Sumar function Doc Comment
     *
     * @param $num1 primer sumando
     * @param $num2 segundo sumando
     *
     * @return $num1+$num2
     **/
    public function sumar($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        return $num1 + $num2;
    }

    /**
     * Restar function Doc Comment
     *
     * @param $num1 primer sumando
     * @param $num2 segundo sumando
     *
     * @return $num1-$num2
     **/
    public function restar($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        return $num1 - $num2;
    }

    /**
     * Multiplicar function Doc Comment
     *
     * @param $num1 primer operando
     * @param $num2 segundo operando
     *
     * @return $num1-$num2
     **/
    public function multiplicar($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        return $num1 * $num2;
    }
    
    /**
    * Dividir function Doc Comment
    *
    * @param $num1 primer dividendo
    * @param $num2 segundo divisor
    *
    * @return $num1-$num2
    **/
    public function dividir($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;

        if ($num2 == 0) {
            return "Error: ¡División por 0!";
        }
        return $num1 / $num2;
    }
}
