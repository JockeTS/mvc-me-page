<?php

namespace App\Game;

use PHPUnit\Framework\TestCase;
use App\Card\DeckOfCards;

/**
 * Test cases for class Player.
 */
class PlayerTest extends TestCase
{
    // Create player object and test that name is what's expected
    public function testCreateObjectWithName()
    {
        // Player obj
        $player = new Player("Jocke");
        $this->assertInstanceOf("\App\Game\Player", $player);

        // Name of player obj
        $exp = "Jocke";
        $res = $player->name;

        $this->assertEquals($exp, $res);
    }

    /**
     * Test getting player as string repr (md array)
     * after giving them a card.
     * This should affect both score and cards held.
     */
    public function testGetAsString()
    {
        $deck = new DeckOfCards();
        $player = new Player("Jocke");

        $card = $deck->drawCard();
        $player->addCard($card);

        $exp = [
            "name" => "Jocke",
            "scores" => "1/14",
            "cards" => [$card->getAsString()],
            "style" => "inactive"
        ];

        $res = $player->getAsString();

        $this->assertEquals($exp, $res);
    }

    /**
     * Give player a card and make sure
     * correct array of scores is returned.
     */
    public function testGetScores()
    {
        $deck = new DeckOfCards();
        $player = new Player("Jocke");

        $card = $deck->drawCard();
        $player->addCard($card);

        $exp = [1, 14];
        $res = $player->getScores();

        $this->assertEquals($exp, $res);
    }

    /**
     * Give player a card (ace by default)
     * which should give scores of 1 and 14
     * Make sure method returns 14 (highest score)
     */
    public function testGetBestScore()
    {
        $deck = new DeckOfCards();
        $player = new Player("Jocke");

        // $this->assertTrue($player->getBestScore() === 0);

        $card = $deck->drawCard();
        $player->addCard($card);

        $exp = 14;

        $res = $player->getBestScore();

        $this->assertEquals($exp, $res);
    }

    /**
     * Give player a card (ace by default)
     * which should give scores of 1 and 14
     * Make sure method returns 1 (lowest score)
     */
    public function testGetLowestScore()
    {
        $deck = new DeckOfCards();
        $player = new Player("Jocke");

        $card = $deck->drawCard();
        $player->addCard($card);

        $exp = 1;

        $res = $player->getLowestScore();

        $this->assertEquals($exp, $res);
    }
}
