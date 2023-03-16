<?php

namespace App\Service;

class ArithmeticService
{
    public function calculadora($operation, $operatorA, $operatorB)
    {
        if ( is_numeric($operatorA) && is_numeric($operatorB)){
            switch ($operation) {
                case 'suma':
                    $result = $operatorA + $operatorB;
                    break;
                case 'resta':
                    $result = $operatorA - $operatorB;
                    break;
                case 'multiplicar':
                    $result = $operatorA * $operatorB;
                    break;
                case 'dividir':
                    $result = $operatorA / $operatorB;
                    break;
                case 'raiz':
                    $result =sqrt($operatorA);
                    break;
                case 'porcentaje':
                    $result = ($operatorA * $operatorB / 100);
                    break;
                default:
                    $result = null;
                    break;
            }

            return $result;
        }else{
            return "Introduce solo valores numericos.";
        }
    }
}
