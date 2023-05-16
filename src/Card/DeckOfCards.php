<?php

namespace App\Card;

use App\Card\Card;

class DeckOfCards
{
    private array $deck = [];

    public function __construct()
    {
        // Populate the deck with cards
        foreach (array_keys(Card::SUITS) as $i) {
            foreach (array_keys(CARD::VALUES) as $j) {
                $card = new CardGraphic($i, $j);
                $this->addCard($card);
            }
        }

        /*
        for ($i = 0; $i < count(Card::SUITS); $i++) {
            for ($j = 0; $j < count(Card::VALUES); $j++) {
                $card = new CardGraphic($i, $j);
                $this->addCard($card);
            }
        }
        */
    }

    /**
     * Add a card
     * @param Card $card The card to add
     */
    private function addCard(Card $card): void
    {
        $this->deck[] = $card;
    }

    // Remove card

    // Draw card
    public function drawCards(int $number): array
    {
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

    public function drawCard(): Card
    {
        $card = array_shift($this->deck);

        return $card;
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
