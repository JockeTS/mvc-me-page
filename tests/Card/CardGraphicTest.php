<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardGraphic.
 */
class CardGraphicTest extends TestCase
{
    /**
     * Construct object with arguments and verify correct string repr. is returned.
     */
    public function testCreateObjectWithArguments()
    {
        $card = new CardGraphic(0, 0);
        // Check that obj is instance of base class too
        $this->assertInstanceOf("\App\Card\Card", $card);
        $this->assertInstanceOf("\App\Card\CardGraphic", $card);

        $res = $card->getAsString();
        $exp = "A♠,blk";
        $this->assertEquals($exp, $res);
    }
}
