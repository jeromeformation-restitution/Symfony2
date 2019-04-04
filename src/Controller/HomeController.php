<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function home()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/home")
     * @param Session $session
     * @return Response
     */
    public function ajout(Session $session): Response
    {
        $ancienne=$session->get("compteur", 0);
        $session->set("compteur", $ancienne+1);
        return $this->render('home.html.twig');
    }
}
