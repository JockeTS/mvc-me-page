<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardGameController extends AbstractController
{
    #[Route("/card", name: "card")]
    public function start(): Response
    {
        return $this->render('card/start.html.twig');
    }

    #[Route("/card/deck", name: "deck")]
    public function deck(): Response
    {
        return $this->render('card/deck.html.twig');
    }

    #[Route("/card/deck/shuffle", name: "deck_shuffle")]
    public function deckShuffle(): Response
    {
        return $this->render('card/deck_shuffle.html.twig');
    }
}