<?php

namespace App\Card;

class CardGraphic extends Card
{
    private array $suitRepr = ["♠,blk", "♥,red", "♣,blk", "♦,red"];

    private array $valueRepr = [
        "A", "2", "3", "4", "5",
        "6", "7", "8", "9", "10",
        "J", "Q", "K"
    ];

    public function __construct(int $suit, int $value)
    {
        parent::__construct($suit, $value);
    }

    public function getAsString(): string
    {
        return $this->valueRepr[$this->value] . $this->suitRepr[$this->suit];
    }
}
