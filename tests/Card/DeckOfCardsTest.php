<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DeckOfCards.
 */
class DeckOfCardsTest extends TestCase
{
    public function testCreateObject()
    {
        $deck = new DeckOfCards();
        $this->assertInstanceOf("\App\Card\DeckOfCards", $deck);

        // Check that there's 52 cards in deck
        $res = $deck->getCardsLeft();
        $exp = 52;
        $this->assertEquals($exp, $res);
    }

    public function testDrawCards() {
        $deck = new DeckOfCards();

        $drawnCards = $deck->drawCards(3);

        $this->assertEquals(3, count($drawnCards));
        $this->assertEquals("A♠,blk", $drawnCards[0]);
        $this->assertEquals(49, $deck->getCardsLeft());
    }

    public function testDrawCardsOverLimit() {
        $deck = new DeckOfCards();

        $drawnCards = $deck->drawCards(53);

        $this->assertEquals(52, count($drawnCards));
        $this->assertEquals("A♠,blk", $drawnCards[0]);
        $this->assertEquals(0, $deck->getCardsLeft());
    }

    public function testDrawCard() {
        $deck = new DeckOfCards();

        $drawnCard = $deck->drawCard();

        $this->assertInstanceOf("\App\Card\Card", $drawnCard);
        $this->assertEquals(51, $deck->getCardsLeft());
    }

    public function testGetCardStrings() {
        $deck = new DeckOfCards();

        $cardStrings = $deck->getCardStrings();

        $this->assertEquals(52, count($cardStrings));
        $this->assertEquals("A♠,blk", $cardStrings[0]);
    }

    /**
     * Compare if 2 card string arrays are equal after one is shuffled.
     * Not a perfect test case - theoretically possible that a shuffled
     * array ends up in the same order as before sorting occurred.
     */
    public function testShuffleAndSortCards() {
        $sortedDeck = new DeckOfCards();

        $shuffledDeck = new DeckOfCards();
        $shuffledDeck->shuffleCards();

        $this->assertNotEquals($sortedDeck->getCardStrings(), $shuffledDeck->getCardStrings());

        // Test sorting the shuffled deck
        $shuffledDeck->sortCards();

        $this->assertEquals($sortedDeck->getCardStrings(), $shuffledDeck->getCardStrings());
    }
}