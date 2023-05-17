<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardTest extends TestCase
{
    /**
     * Construct object with arguments and verify correct string repr. is returned.
     */
    public function testCreateObjectWithArguments()
    {
        $card = new Card(0, 0);
        $this->assertInstanceOf("\App\Card\Card", $card);

        $res = $card->getAsString();
        $exp = "Ace of Spades";
        $this->assertEquals($exp, $res);
    }
}