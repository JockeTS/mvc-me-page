<?php

namespace App\Game;

use App\Card\DeckOfCards;
use App\Card\Card;
use App\Game\Player;

class Game
{
    public DeckOfCards $deck;
    public array $players;
    public int $activePlayerIndex;

    public function __construct(int $numPlayers)
    {
        // Create deck used for game
        $this->deck = new DeckOfCards();
        $this->deck->shuffleCards();

        for ($i = 0; $i < $numPlayers; $i++) {
            $this->players[] = new Player("Player " . $i);
        }
        
        // Create bank player last

        $this->activePlayerIndex = 0;
    }

    // Get string representation of all players
    public function getPlayerStrings(): array
    {
        $playerStrings = [];

        $i = 0;

        foreach ($this->players as $player) {
            $playerStrings[] = $player->getAsString();

            if ($i == $this->activePlayerIndex) {
                $playerStrings[$i]["style"] = "active";
            }

            $i += 1;
        }

        return $playerStrings;
    }

    // Add a card to the active player
    public function addCard(): void
    {
        $activePlayer = $this->players[$this->activePlayerIndex];

        $card = $this->deck->drawCard();

        $activePlayer->cards[] = $card;

        // Add score
        // $activePlayer->scores[0] += $card->value;
    }

    public function setActivePlayer(): void
    {
        $this->activePlayerIndex += 1;
    }
}