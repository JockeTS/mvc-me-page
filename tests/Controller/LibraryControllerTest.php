<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class LibraryController.
 */
class LibraryControllerTest extends WebTestCase
{
    /*
    public function testCreateObject()
    {
        $game = new Game();
        $this->assertInstanceOf("\App\Game\Game", $game);

        $this->assertEquals(2, count($game->players));
    }
    */

    public function testReadAllBook()
    {
        $client = static::createClient();
        $client->request('GET', '/library/read');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Översikt');
    }

    public function testReadBookById()
    {
        $client = static::createClient();
        $client->request('GET', '/library/read/1');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h3', 'ISBN');
    }

    public function testCreateBook()
    {
        $client = static::createClient();
        $client->request('GET', '/library/create');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Lägg till ny bok');
    }

    public function testUpdateBook()
    {
        $client = static::createClient();
        $client->request('GET', '/library/update/1');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Uppdatera bok');
    }
}