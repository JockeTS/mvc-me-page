<?php

namespace App\Game;

class BankPlayer extends Player
{
    public function __construct(string $name)
    {
        $this->name = $name;
        // $this->scores = [0];
        $this->cards = [];
    }
}
