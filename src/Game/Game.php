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
    public bool $gameOver;

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
        $this->gameOver = false;
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

        $scores = $activePlayer->getScore();

        $bust = true;

        foreach ($scores as $score) {
            if ($score < 21) {
                $bust = false;
                break;
            }
        }

        if ($bust) {
            $this->setActivePlayer();
        }
    }

    public function setActivePlayer(): void
    {
        if ($this->activePlayerIndex < count($this->players) - 1) {
            $this->activePlayerIndex += 1;
        } else {
            // Get winning player and end game
            $this->gameOver = true;
        }
    }

    // public function getWinningPlayer
}