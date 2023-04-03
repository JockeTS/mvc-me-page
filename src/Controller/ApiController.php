<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Extend AbstractController to use Twig templates
class ApiController extends AbstractController
{
    #[Route("/api/quote", name: "quote")]
    public function quote(): JsonResponse
    {
        $quotes = [
            "The way to get started is to quit talking and begin doing. -Walt Disney",
            "If life were predictable it would cease to be life, and be without flavor. -Eleanor Roosevelt",
            "It is during our darkest moments that we must focus to see the light. -Aristotle"
        ];

        $response = new JsonResponse([
            'quote' => $quotes[random_int(0, 2)],
            'date' => date('Y-m-d'),
            'timestamp' => time()
        ]);

        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }
}