<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/somme/{A<\d>}/{B<\d>}', name: 'app_somme')]
    public function somme($A,$B): Response
    {
        $somme = $A+$B;
        return $this->render('calcul/somme.html.twig', [
            'somme' => $somme,'A'=>$A,'B'=>$B
        ]);
    }

    #[Route('/sous/{A<\d>}/{B<\d>}', name: 'app_sous')]
    public function sous($A,$B): Response
    {
        $sous = $A-$B;
        return $this->render('calcul/sous.html.twig', [
            'sous' => $sous,'A'=>$A,'B'=>$B
        ]);
    }

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('calcul/home.html.twig');
    }

}
