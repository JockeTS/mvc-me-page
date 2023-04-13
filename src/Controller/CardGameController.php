<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
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
        $cards = [];

        for ($i = 0; $i < count(Card::SUITS); $i++) {
            for ($j = 0; $j < count(Card::VALUES); $j++) {
                $card = new CardGraphic($i, $j);
                $cards[] = $card->getAsString();
            }
        }

        // shuffle($cards);

        $data = [
            "cards" => $cards
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "deck_shuffle")]
    public function deckShuffle(): Response
    {
        return $this->render('card/deck_shuffle.html.twig');
    }
}