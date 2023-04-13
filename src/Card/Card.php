<?php

namespace App\Card;

class Card
{
    protected $suit;
    protected $value;

    const SUITS = ["Spades", "Hearts", "Clubs", "Diamonds"];

    const VALUES = [
        "Ace", "Two", "Three", "Four", "Five",
        "Six", "Seven", "Eight", "Nine", "Ten",
        "Jack", "Queen", "King"
    ];

    public function __construct($suit, $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    public function getAsString(): string
    {
        return Card::VALUES[$this->value] . " of " . Card::SUITS[$this->suit];
    }
}