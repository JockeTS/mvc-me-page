<?php

namespace App\Card;

use App\Card\Card;

class DeckOfCards
{
    private $deck = [];

    function __construct() {
        // Populate the deck with cards
        for ($i = 0; $i < count(Card::SUITS); $i++) {
            for ($j = 0; $j < count(Card::VALUES); $j++) {
                $card = new CardGraphic($i, $j);
                $this->addCard($card);
            }
        }
    }

    // Add card
    private function addCard(Card $card): void
    {
        $this->deck[] = $card;
    }

    // Remove card

    // Draw card
    public function drawCards($number) {
        $drawnCards = [];

        for ($i = 0; $i < $number; $i++) {
            if (count($this->deck) == 0) {
                break;
            }

            $card = array_shift($this->deck);
            $drawnCards[] = $card->getAsString();
        }

        return $drawnCards;
    }

    public function getCardStrings(): array
    {
        $cardsArr = [];

        foreach ($this->deck as $card) {
            $cardsArr[] = $card->getAsString();
        }

        return $cardsArr;
    }

    // Shuffle deck
    public function shuffleCards(): void
    {
        shuffle($this->deck);
    }

    // Sort deck
    public function sortCards(): void
    {
        sort($this->deck);
    }

    public function getCardsLeft(): int
    {
        return count($this->deck);
    }
}