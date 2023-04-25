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

    public function __construct()
    {
        // Create deck used for game
        $this->deck = new DeckOfCards();
        $this->deck->shuffleCards();

        /*
        for ($i = 0; $i < $numPlayers; $i++) {
            $this->players[] = new Player("Player " . $i);
        }
        */

        $this->players[] = new Player("Player");
        $this->players[] = new Player("Bank");

        $this->activePlayerIndex = 0;
        $this->gameOver = false;
    }

    // Get string representation of all players
    public function getPlayerStrings(): array
    {
        $playerStrings = [];

        foreach ($this->players as $key=>$player) {
            $playerStrings[] = $player->getAsString();

            if ($key == $this->activePlayerIndex && !$this->gameOver) {
                $playerStrings[$key]["style"] = "active";
            }
        }

        return $playerStrings;
    }

    // Add a card to the active player
    public function addCard(): void
    {
        $activePlayer = $this->players[$this->activePlayerIndex];

        $card = $this->deck->drawCard();

        $activePlayer->cards[] = $card;

        $scores = $activePlayer->getScores();

        $bust = true;

        foreach ($scores as $score) {
            if ($score < 21) {
                $bust = false;
                break;
            }
        }

        if ($bust || $activePlayer->getBestScore() == 21) {
            $this->setActivePlayer();
        }
    }

    public function setActivePlayer(): void
    {
        if ($this->activePlayerIndex < count($this->players) - 1) {
            $this->activePlayerIndex += 1;

            if ($this->activePlayerIndex == count($this->players) - 1) {
                $this->playBank();
            }

            return;
        }

        $this->gameOver = true;
    }

    public function playBank(): void
    {
        $bank = $this->players[$this->activePlayerIndex];

        $this->addCard();

        while ($bank->getLowestScore() != 0 && $bank->getLowestScore() <= 17) {
            $this->addCard();
        }

        $this->gameOver = true;
    }

    public function getWinningPlayer(): string
    {
        $humanScore = $this->players[0]->getBestScore();
        $bankScore = $this->players[1]->getBestScore();

        if (!$this->gameOver) {
            return "TBD";
        }

        if ($humanScore > 21 || $humanScore == $bankScore) {
            return "Bank wins!";
        }

        if ($bankScore > 21 || $humanScore > $bankScore) {
            return "Player wins!";
        }

        return "Bank wins!";
    }
}
