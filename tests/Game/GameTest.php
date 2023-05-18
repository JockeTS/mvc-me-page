<?php

namespace App\Game;

use PHPUnit\Framework\TestCase;
use App\Card\Card;
use App\Game\Player;

/**
 * Test cases for class Game.
 */
class GameTest extends TestCase
{
    public function testCreateObject()
    {
        $game = new Game();
        $this->assertInstanceOf("\App\Game\Game", $game);

        $this->assertEquals(2, count($game->players));
    }

    /**
     * Give players a card each and make sure
     * string reprs. match.
     */
    public function testGetPlayerStrings()
    {
        $game = new Game();
        $game->deck->sortCards();

        $game->addCard();
        $game->activePlayerIndex = 1;
        $game->addCard();

        // var_dump($game->getPlayerStrings());

        $exp = [
            [
                "name" => "Player",
                "scores" => "1/14",
                "cards" => ["A♠,blk"],
                "style" => "inactive"
            ],
            [
                "name" => "Bank",
                "scores" => "2",
                "cards" => ["2♠,blk"],
                "style" => "active"
            ]
        ];

        $res = $game->getPlayerStrings();

        $this->assertEquals($exp, $res);
    }

    /**
     * Test that setting the active player
     * changes activePlayerIndex
     */
    public function testSetActivePlayer()
    {
        $game = new Game();

        // Make sure api starts at 0
        $this->assertEquals(0, $game->activePlayerIndex);

        // Api should now be one
        $game->setActivePlayer();
        $this->assertEquals(1, $game->activePlayerIndex);

        // Check that gameOver is true
        $game->setActivePlayer();
        $this->assertTrue($game->gameOver);
    }

    /**
     * Test various conditions for getWinningPlayer
     */
    public function testGetWinningPlayer()
    {
        $game = new Game();

        // Check before game is over
        $this->assertEquals("TBD", $game->getWinningPlayer());

        $game->gameOver = true;

        // Test bank winning when players have same cards
        $game->players[0]->addCard(new Card(0, 0));
        $game->players[1]->addCard(new Card(1, 0));

        $this->assertEquals("Bank wins!", $game->getWinningPlayer());

        // Test player winning if bank goes bust
        $game->players[1]->addCard(new Card(1, 12));
        $game->players[1]->addCard(new Card(1, 13));

        $this->assertEquals("Player wins!", $game->getWinningPlayer());
    }
}
