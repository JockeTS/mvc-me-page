<?php

namespace App\Controller;

use App\Entity\Book;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    #[Route("/library", name: "library_start")]
    public function start(): Response
    {
        return $this->render('library/start.html.twig');
    }

    // Create a new book
    #[Route('/library/create', name: 'book_create')]
    public function createBook(
        ManagerRegistry $doctrine
    ): Response {
        $entityManager = $doctrine->getManager();

        $book = new Book();

        /*
        $book->setTitle("The Lord of the Rings");
        $book->setIsbn("9780261103207");
        $book->setImage("https://en.wikipedia.org/wiki/The_Lord_of_the_Rings#/media/File:First_Single_Volume_Edition_of_The_Lord_of_the_Rings.gif");
        
        $book->setTitle("Nineteen Eighty-Four");
        $book->setIsbn("9780451524935");
        $book->setImage("https://en.wikipedia.org/wiki/Nineteen_Eighty-Four#/media/File:1984first.jpg");
        
        $book->setTitle("Harry Potter and the Philosopher's Stone");
        $book->setIsbn("9780747532699");
        $book->setImage("https://en.wikipedia.org/wiki/Harry_Potter_and_the_Philosopher%27s_Stone#/media/File:Harry_Potter_and_the_Philosopher's_Stone_Book_Cover.jpg");
        */

        // tell Doctrine you want to (eventually) save the Product
        $entityManager->persist($book);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$book->getId());
    }
}
