<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/formulaire")
     * @return Response
     */
    public function afficheForm():Response
    {
        return $this->render('form.html.twig');
    }

    /**
     * @Route("/traitement")
     * @return Response
     */
    public function traitementForm(Request $request):Response
    {

        var_dump($request->request);
        return $this->render('traitement.html.twig');
    }
}
