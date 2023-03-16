<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class calculadoraController
{
    /**
     * @Route("/{operation}/{operatorA}/{operatorB}", name="app_calculator_calculate")
     */
    public function calculadora(string $operation, $operatorA, $operatorB): JsonResponse
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
                default:
                    return new JsonResponse(['error' => 'Invalid operation'], Response::HTTP_BAD_REQUEST);
            }
    
            return new JsonResponse(['result' => $result]);
        }else{
            return new JsonResponse(['result' => "Introduce solo valores numericos."]); 
        }
       
    }
}
