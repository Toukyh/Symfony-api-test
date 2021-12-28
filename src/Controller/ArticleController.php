<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles/",name="article_index")
     */
    public function index(): Response
    {
        // $Article = new Article(); 
        // $Article->setTitle('Mon article ')
        //     ->setContent('Lorem ipsum in dolor ');
        // return $this->render('article/index.html.twig', [
        //     'controller_name' => 'ArticleController',
        // ]);
        return new Response('Hello world');
    }
}
