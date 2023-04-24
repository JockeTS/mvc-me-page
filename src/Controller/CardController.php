<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\DeckOfCards;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardController extends AbstractController
{
    // Landing page of card game, resets the deck
    #[Route("/card", name: "card")]
    public function start(SessionInterface $session): Response
    {
        $deck = new DeckOfCards();

        $session->set("deck", $deck);

        return $this->render('card/start.html.twig');
    }

    // Show cards sorted by suit and value
    #[Route("/card/deck", name: "deck")]
    public function deck(SessionInterface $session): Response
    {
        $deck = $session->get("deck");
        $deck->sortCards();

        $cardStringsArr = $deck->getCardStrings();

        $data = [
            "description" => "Deck showing all cards sorted by suit and value.",
            "cards" => $cardStringsArr
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    // Show cards randomly shuffled
    #[Route("/card/deck/shuffle", name: "deck_shuffle")]
    public function deckShuffle(SessionInterface $session): Response
    {
        $deck = $session->get("deck");

        $deck->shuffleCards();

        $cardStringsArr = $deck->getCardStrings();

        $data = [
            "description" => "Deck showing all cards after shuffling.",
            "cards" => $cardStringsArr
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    // Draw 1 card from deck
    #[Route("/card/deck/draw", name: "draw_one")]
    public function drawOne(SessionInterface $session): Response
    {
        $deck = $session->get("deck");

        $data = [
            "drawnCards" => $deck->drawCards(1),
            "cardsLeft" => $deck->getCardsLeft()
        ];

        return $this->render('card/deck_draw.html.twig', $data);
    }

    // Draw N cards from deck
    #[Route("/card/deck/draw/{num<\d+>}", name: "draw_many")]
    public function drawMany(
        int $num,
        SessionInterface $session
    ): Response {
        $deck = $session->get("deck");

        $data = [
            "drawnCards" => $deck->drawCards($num),
            "cardsLeft" => $deck->getCardsLeft()
        ];

        return $this->render('card/deck_draw.html.twig', $data);
    }
}
