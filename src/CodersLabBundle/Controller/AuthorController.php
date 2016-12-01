<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CodersLabBundle\Entity\Author;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AuthorController extends Controller
{


    public function getForm(Author $author){
        $form = $this->createFormBuilder( $author )
            ->add('name', 'text', [
                'label' => 'Imię: '
        ])
            ->add('surname', 'text', [
            'label' => 'Nazwisko: '
        ])
            ->add('description', 'text', [
                'label' => 'Opis: '
            ])

            ->getForm();

        return $form;
    }

    /**
     * @Route("/newAuthor")
     * @Method("GET")
     * @Template("CodersLabBundle::zadanieA2.html.twig")
     */
    public function newFormAction(){
        $form = $this->getForm(new Author);

        return [
            'form' => $form->createView()
        ];
    }


    /**
     * @Route("/newAuthor")
     * @Method("POST")
     * @Template("CodersLabBundle::zadanieA2.html.twig")
     */
    public function newAuthorAction(Request $req){
        $form = $this->getForm(new Author());

        $form->handleRequest( $req );

        if ( $form->isSubmitted() ){
            $author = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($author);

            $em->flush();
        }

        return $this->redirectToRoute("showAuthor", array(
            'id' => $author->getId()
        ));
    }

    /**
     * @Route("/showAuthor/{id}", name="showAuthor")
     * @Template("CodersLabBundle::zadanieD1.html.twig")
     */
    public function showAuthorAction($id) {
        $repozytorium = $this->getDoctrine()->getRepository('CodersLabBundle:Author');

        $author = $repozytorium->find($id);

        return [
            'author' => $author
        ];
    }

    /**
     * @Route("/showAllAuthors")
     * @Template("CodersLabBundle::zadanieD1b.html.twig")
     */
    public function showAllAuthorsAction() {
        $repozytorium = $this->getDoctrine()->getRepository('CodersLabBundle:Author');

        $authors = $repozytorium->findAll();

        return [
            'authors' => $authors
        ];
    }

}
