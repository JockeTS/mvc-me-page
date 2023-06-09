<?php

namespace App\Controller;

use App\Repository\BookRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

// Extend AbstractController to use Twig templates
class ApiController extends AbstractController
{
    #[Route("/api", name: "api_start")]
    public function apiStart(): Response
    {
        return $this->render('api/start.html.twig');
    }

    #[Route("/api/quote", name: "quote")]
    public function quote(): JsonResponse
    {
        $quotes = [
            "The way to get started is to quit talking and begin doing. -Walt Disney",
            "If life were predictable it would cease to be life, and be without flavor. -Eleanor Roosevelt",
            "It is during our darkest moments that we must focus to see the light. -Aristotle"
        ];

        $response = new JsonResponse([
            'quote' => $quotes[random_int(0, 2)],
            'date' => date('Y-m-d'),
            'timestamp' => time()
        ]);

        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck", name: "api_deck", methods: ['GET'])]
    public function apiDeck(SessionInterface $session): JsonResponse
    {
        $deck = $session->get("deck");

        $deck->sortCards();

        $cardStringsArr = $deck->getCardStrings();

        $response = new JsonResponse([
            'deck' => $cardStringsArr
        ]);

        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/shuffle", name: "api_deck_shuffle", methods: ['POST'])]
    public function apiDeckShuffle(SessionInterface $session): JsonResponse
    {
        $deck = $session->get("deck");

        $deck->shuffleCards();

        $cardStringsArr = $deck->getCardStrings();

        $response = new JsonResponse([
            'deck' => $cardStringsArr
        ]);

        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/draw", name: "api_deck_draw_one", methods: ['POST'])]
    public function apiDeckDrawOne(SessionInterface $session): JsonResponse
    {
        $deck = $session->get("deck");

        $response = new JsonResponse([
            "drawnCards" => $deck->drawCards(1),
            "cardsLeft" => $deck->getCardsLeft()
        ]);

        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/draw/number", name: "api_deck_draw_many", methods: ['POST'])]
    public function apiDeckDrawMany(
        Request $request,
        SessionInterface $session
    ): JsonResponse {
        $numCards = $request->request->get('draw-many');

        $deck = $session->get("deck");

        $response = new JsonResponse([
            "drawnCards" => $deck->drawCards($numCards),
            "cardsLeft" => $deck->getCardsLeft()
        ]);

        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    // Get state of current game stored in session
    #[Route("/api/game", name: "api_game", methods: ['GET'])]
    public function apiGame(SessionInterface $session): JsonResponse
    {
        $game = $session->get("game");

        $response = new JsonResponse([
            "gameOver" => $game->gameOver,
            "players" => $game->getPlayerStrings(),
            "winner" => explode(" ", $game->getWinningPlayer())[0]
        ]);

        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    // Show all books in library
    #[Route("/api/library/books", name: "api_books", methods: ['GET'])]
    public function apiBooks(BookRepository $bookRepository): JsonResponse
    {
        $books = $bookRepository->findAll();

        $response = $this->json($books);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    // Show book with {isbn}
    #[Route("/api/library/book/{isbn}", name: "api_book", methods: ['GET'])]
    public function apiBook(
        BookRepository $bookRepository,
        string $isbn
    ): JsonResponse {
        $book = $bookRepository->findOneByIsbn($isbn);

        $response = $this->json($book);

        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }
}
