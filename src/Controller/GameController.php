<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\DeckOfCards;
use App\Game\Game;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GameController extends AbstractController
{
    // Landing page of game
    #[Route("/game", name: "game_start")]
    public function gameStart(SessionInterface $session): Response
    {
        return $this->render('game/start.html.twig');
    }

    // Init game
    #[Route("/game/init", name: "game_init")]
    public function gameInit(SessionInterface $session): Response
    {
        // Init a new game
        $game = new Game(2);
        $session->set("game", $game);
        return $this->redirectToRoute('game_main');
    }

    // Main page
    #[Route("/game/main", name: "game_main")]
    public function gameMain(SessionInterface $session): Response
    {
        $game = $session->get("game");

        $playerStrings = $game->getPlayerStrings();

        $data = [
            "players" => $playerStrings,
            "message" => ""
        ];

        if ($game->gameOver) {
            $winner = "Player X";
            $data["message"] = $game->getWinningPlayer();
        }

        return $this->render('game/main.html.twig', $data);
    }

    // Add a card to active player
    #[Route("/game/add", name: "game_add_card")]
    public function gameAddCard(SessionInterface $session): Response
    {
        $game = $session->get("game");

        $game->addCard();

        $session->set("game", $game);

        return $this->redirectToRoute('game_main');
    }

    #[Route("/game/stop", name: "game_stop")]
    public function gameStop(SessionInterface $session): Response
    {
        $game = $session->get("game");

        $game->setActivePlayer();

        $session->set("game", $game);

        return $this->redirectToRoute('game_main');
    }

    // Documentation page
    #[Route("/game/doc", name: "game_doc")]
    public function gameDoc(SessionInterface $session): Response
    {
        return $this->render('game/doc.html.twig');
    }
}