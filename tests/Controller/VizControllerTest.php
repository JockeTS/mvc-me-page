<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class VizController.
 */
class VizControllerTest extends WebTestCase
{
    public function testLandingPage()
    {
        $client = static::createClient();
        $client->request('GET', '/proj');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('main h3', '2000 - 2016');
    }

    public function testDefinitionsPage()
    {
        $client = static::createClient();
        $client->request('GET', '/proj/definitions');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('main h3', 'Definitioner för mätvärden');
    }

    public function testAboutPage()
    {
        $client = static::createClient();
        $client->request('GET', '/proj/about');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('main h3', 'Om World Metrics');
    }

    public function testGetColor()
    {
        $vizController = new VizController();

        $color = $vizController->getColor("test");

        $this->assertEquals("#098f6b", $color);
    }

    /*
    public function testCreateChart()
    {
        $vizController = new VizController();

        $chart = $vizController->createChart("positive");
        
        // $this->assertEquals("#098f6b", $color);
    }
    */
}
