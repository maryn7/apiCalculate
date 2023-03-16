<?php

namespace App\Tests\Unit\Service;

use App\Service\ArithmeticService;
use PHPUnit\Framework\TestCase;

class ArithmeticServiceTest extends TestCase
{
    public function testCalculadora()
    {
        $arithmeticService = new ArithmeticService();

        // Caso de prueba para suma
        $result = $arithmeticService->calculadora('suma', 5, 10);
        $this->assertEquals(15, $result);

        // Caso de prueba para resta
        $result = $arithmeticService->calculadora('resta', 10, 5);
        $this->assertEquals(5, $result);

        // Caso de prueba para multiplicar
        $result = $arithmeticService->calculadora('multiplicar', 5, 10);
        $this->assertEquals(50, $result);

        // Caso de prueba para dividir
        $result = $arithmeticService->calculadora('dividir', 10, 5);
        $this->assertEquals(2, $result);

        // Caso de prueba para raiz cuadrada
        $result = $arithmeticService->calculadora('raiz', 16, null);
        $this->assertEquals(4, $result);

        // Caso de prueba para porcentaje
        $result = $arithmeticService->calculadora('porcentaje', 50, 20);
        $this->assertEquals(10, $result);

        // Caso de prueba para operadores no numéricos
        $result = $arithmeticService->calculadora('suma', 'a', 10);
        $this->assertEquals("Introduce solo valores numericos.", $result);
    }
}

?>