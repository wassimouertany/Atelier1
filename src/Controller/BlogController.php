<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/list', name: 'blog_list')]
    public function list(): Response
    {
        return new Response("<h1>Hello Mr Wassim</h1>");
    }

    #[Route('/blog/show/{id}/{name}', name: 'blog_list',defaults: ['id'=>1])]
    public function show($id,$name): Response
    {
        //$name="Introduction au symfony";
        return $this->render('blog/show.html.twig',['a'=>$id,'b'=>$name]);
    }

    #[Route('/blog/test', name: 'blog_test')]
    public function test(): Response
    {
        #$url = $this->generateUrl('blog_list',['id'=>100,'name'=>'Pc']);
        #dd($url);
        #return $this->redirect($url);
        return $this->redirectToRoute('blog_list',['id'=>100,'name'=>'Pc']);
    }

}
