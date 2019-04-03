<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    /**
     * @Route("/session", name="app_session")
     * @param SessionInterface $session
     */
    public function ajoutSession(SessionInterface $session):Response
    {
        $session->set('compteur', 200);
        return $this->redirectToRoute('app_compteur');
    }

    /**
     * @Route("/compteur" , name="app_compteur")
     * @param SessionInterface $session
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function panier(SessionInterface $session):Response
    {
        $compteur=$session->get('compteur');
        return $this->render('compteur.html.twig', ['compteur'=>$compteur]);
    }
}
