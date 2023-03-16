<?php

namespace App\Controller;

use App\Service\ArithmeticService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class ArithmeticController extends AbstractController
{
    private $arithmeticService;

    public function __construct(ArithmeticService $arithmeticService)
    {
        $this->arithmeticService = $arithmeticService;
    }

    /**
     * @Route("/{operation}/{operatorA}/{operatorB}", name="arithmetic")
     */
    public function calculadora($operation, $operatorA, $operatorB)
    {
        $result = $this->arithmeticService->calculadora($operation, $operatorA, $operatorB);

        return new JsonResponse(['result' => $result]);
    }
}