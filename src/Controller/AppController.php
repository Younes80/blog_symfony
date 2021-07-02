<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="posts.list")
     */
    public function index(PostRepository $repo): Response
    {
        $post_list = $repo->findAll();
        return $this->render('app/index.html.twig', [
            "post_list" => $post_list
        ]);
    }

    /**
     * @Route("/post/{id}", name="posts.show")
     */
    public function show(Post $post) 
    {
        
        return $this->render('app/show.html.twig', [
            "post" => $post
        ]);
    }
}
