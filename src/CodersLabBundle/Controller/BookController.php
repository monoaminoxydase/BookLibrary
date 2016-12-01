<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CodersLabBundle\Entity\Book;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller
{


    public function getForm(Book $book){
        $form = $this->createFormBuilder( $book )
            ->add('title', 'text')
            ->add('description', 'text')
            ->add('rating', 'number')
            ->add('author', 'entity', array(
                'class' => 'CodersLabBundle:Author'
            ))
            ->add('Zapisz', 'submit')
            ->getForm();

        return $form;
    }

    /**
     * @Route("/newBook")
     * @Method("GET")
     * @Template("CodersLabBundle::zadanieA2.html.twig")
     */
    public function newFormAction(){
        $form = $this->getForm(new Book);

        return [
            'form' => $form->createView()
        ];
    }

    /**
     * @Route("/newBook")
     * @Method("POST")
     * @Template("CodersLabBundle::zadanieA2.html.twig")
     */
    public function newBookAction(Request $req){
        $form = $this->getForm(new Book());

        $form->handleRequest( $req );

        if ( $form->isSubmitted() ){
            $book = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($book);

            $em->flush();
        }

        return $this->redirectToRoute("showBook", array(
            'id' => $book->getId()
        ));
    }

    /**
     * @Route("/showBook/{id}", name="showBook")
     * @Template("CodersLabBundle::zadanieC3.html.twig")
     */
    public function showBookAction($id) {
        $repozytorium = $this->getDoctrine()->getRepository('CodersLabBundle:Book');

        $book = $repozytorium->find($id);

        return [
            'book' => $book
        ];
    }

    /**
     * @Route("/showAllBooks")
     * @Template("CodersLabBundle::zadanieC4.html.twig")
     */
    public function showAllBooksAction() {
        $repozytorium = $this->getDoctrine()->getRepository('CodersLabBundle:Book');

        $books = $repozytorium->findAll();

        return [
            'books' => $books
        ];
    }

    /**
     * @Route("/deleteBook/{id}")
     */
    public function deleteBookAction($id) {
        $repozytorium = $this->getDoctrine()->getRepository('CodersLabBundle:Book');

        $book = $repozytorium->find($id);

        $em = $this->getDoctrine()->getManager();

        $em->remove( $book );

        $em->flush();

        return new Response('<html><head></head><body>Usunięto książkę.</body></html>');
    }

    /**
     * @Route("/assign/{bookId}/{authorId}")
     */
    public function assignToAuthorAction($bookId, $authorId)
    {
        $repoBook = $this->getDoctrine()->getRepository('CodersLabBundle:Book');
        $repoAuth = $this->getDoctrine()->getRepository('CodersLabBundle:Author');

        $book = $repoBook->find($bookId);
        $author = $repoAuth->find($authorId);

        if ($book && $author) {
            $book->setAuthor($author);
        }

        $em = $this->getDoctrine()->getManager();

        $em->flush();

        return new Response('Dodano książkę do autora');
    }


    /**
     * @Route("/booksGreaterRating/{rating}")
     * @Template("CodersLabBundle::zadanieC4.html.twig")
     */
    public function booksGreaterRatingAction($rating){
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('CodersLabBundle:Book')->findByGreaterRating($rating);

        return [
            'books' => $books
        ];
    }

    /**
     * @Route("/booksGreaterID/{id}")
     * @Template("CodersLabBundle::zadanieC4.html.twig")
     */
    public function booksGreaterIDAction($id){
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('CodersLabBundle:Book')->findByGreaterID($id);

        return [
            'books' => $books
        ];
    }

    /**
     * @Route("/booksTitleStart/{titlestart}")
     * @Template("CodersLabBundle::zadanieC4.html.twig")
     */
    public function booksTitleStartAction($titlestart){
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('CodersLabBundle:Book')->findByTitleStart($titlestart);

        return [
            'books' => $books
        ];
    }

}