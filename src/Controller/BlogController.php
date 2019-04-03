<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("blog/{id}", requirements={"id"="[0-9]+"})
     * @return Response
     * @param ($id)
     */

    public function blog(?int $id = null): Response
    {
        return $this->render("blog.html.twig");
    }
}
