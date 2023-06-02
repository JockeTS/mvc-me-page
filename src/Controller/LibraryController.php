<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    #[Route("/library", name: "library_start")]
    public function start(): Response
    {
        return $this->redirectToRoute('book_read_all');
    }

    // Create a new book (get)
    #[Route('/library/create', name: 'book_create', methods: ['GET'])]
    public function createBook(): Response {
        return $this->render('library/book_create.html.twig');
    }

    // Create a new book (post)
    #[Route('/library/create', name: 'book_create_post', methods: ['POST'])]
    public function createBookPost(
        Request $request,
        ManagerRegistry $doctrine
    ): Response {
        $title = $request->request->get("title");
        $isbn = $request->request->get("isbn");
        $image = $request->request->get("image");

        $entityManager = $doctrine->getManager();

        $book = new Book();

        $book->setTitle($title);
        $book->setIsbn($isbn);

        if ($image) {
            $book->setImage($image);
        }

        // tell Doctrine you want to (eventually) save the Product
        $entityManager->persist($book);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return $this->redirectToRoute('book_read_all');
    }

    // Read (show) all books
    #[Route('/library/read', name: 'book_read_all')]
    public function readAllBook(
        BookRepository $bookRepository
    ): Response {
        $books = $bookRepository
            ->findAll();

        $data = [
            "books" => $books
        ];

        return $this->render('library/overview.html.twig', $data);
    }

    // Read (show) book with {id}
    #[Route('/library/read/{id}', name: 'book_by_id')]
    public function readBookById(
        BookRepository $bookRepository,
        string $id
    ): Response {
        $book = $bookRepository
            ->find($id);

        $data = [
            "book" => $book
        ];

        return $this->render('library/book_detail.html.twig', $data);
    }

    // Update book with {id} (get)
    #[Route('/library/update/{id}', name: 'book_update', methods: ['GET'])]
    public function updateBook(
        BookRepository $bookRepository,
        string $id
    ): Response {
        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id ' . $id
            );
        }

        $data = [
            "book" => $book
        ];

        return $this->render('library/book_update.html.twig', $data);
    }

    // Update book (post)
    #[Route('/library/update', name: 'book_update_post', methods: ['POST'])]
    public function updateBookPost(
        Request $request,
        BookRepository $bookRepository
    ): Response {
        $id = $request->request->get("bookId");
        $title = $request->request->get("title");
        $isbn = $request->request->get("isbn");
        $image = $request->request->get("image");

        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id ' . $id
            );
        }

        $book->setTitle($title);
        $book->setIsbn($isbn);
        $book->setImage($image);

        $bookRepository->save($book, true);

        return $this->redirectToRoute('book_by_id', ['id' => $id]);
    }

    // Delete book (post)
    #[Route('/library/delete', name: 'book_delete_post', methods: ['POST'])]
    public function deleteBookPost(
        Request $request,
        BookRepository $bookRepository
    ): Response {
        $id = $request->request->get("bookId");

        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id ' . $id
            );
        }

        $bookRepository->remove($book, true);

        return $this->redirectToRoute('book_read_all');
    }
}
