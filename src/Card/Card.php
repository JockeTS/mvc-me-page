<?php

namespace App\Card;

class Card
{
    public int $suit;
    public int $value;

    public const SUITS = ["Spades", "Hearts", "Clubs", "Diamonds"];

    public const VALUES = [
        "Ace", "Two", "Three", "Four", "Five",
        "Six", "Seven", "Eight", "Nine", "Ten",
        "Jack", "Queen", "King"
    ];

    public function __construct(int $suit, int $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    public function getAsString(): string
    {
        return Card::VALUES[$this->value] . " of " . Card::SUITS[$this->suit];
    }
}
