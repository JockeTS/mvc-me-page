<?php

namespace App\Game;

class Player
{
    public string $name;
    // public array $scores;
    public array $cards;

    public function __construct(string $name)
    {
        $this->name = $name;
        // $this->scores = [0];
        $this->cards = [];
    }

    // Get player object as string
    public function getAsString(): array
    {
        // $scoresString = [];

        $cardsString = [];

        foreach ($this->cards as $card) {
            $cardsString[] = $card->getAsString();
        }

        $playerStr = [
            "name" => $this->name,
            "scores" => join("/", $this->getScores()),
            "cards" => $cardsString,
            "style" => "inactive"
        ];

        return $playerStr;
    }

    public function getScores(): array
    {
        $scores = [0];
        $numAces = 0;

        foreach ($this->cards as $card) {
            $scores[0] += $card->value + 1;

            if ($card->value == 0) {
                $numAces += 1;
            }
        }

        for ($i = 0; $i < $numAces; $i++) {
            $scores[] = $scores[$i] + 13;
        }

        return $scores;
    }

    public function getBestScore(): int
    {
        $scores = $this->getScores();

        $validScores = [];

        foreach ($scores as $score) {
            if ($score <= 21) {
                $validScores[] = $score;
            }
        }

        rsort($validScores);

        if ($validScores) {
            return $validScores[0];
        }

        return 0;
    }

    public function getLowestScore(): int
    {
        $scores = $this->getScores();

        $validScores = [];

        foreach ($scores as $score) {
            if ($score <= 21) {
                $validScores[] = $score;
            }
        }

        sort($validScores);

        if ($validScores) {
            return $validScores[0];
        }

        return 0;
    }
}
