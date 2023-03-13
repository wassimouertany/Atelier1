<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Test1Controller extends AbstractController
{
    #[Route('/test1/{age}', name: 'app_test1')]
    public function index($age)
    {
        dd("votre age est $age");

        #return $this->render('test1/index.html.twig);
    }
}
