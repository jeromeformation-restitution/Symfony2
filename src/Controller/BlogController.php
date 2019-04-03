<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
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

    /**
     * @Route("fruits")
     * @return JsonResponse
     */
    public function jason(): JsonResponse
    {
        $fruits = ["banane", "kiwi", "poire"];


        return $this->json($fruits);
    }

    /**
     * @Route("afficherunfichier")
     * @return BinaryFileResponse
     */
    public function pdffile(): BinaryFileResponse
    {

        return $this->file("file.pdf", null, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @Route("/redirige")
     * @return RedirectResponse
     */
    public function rediriger():RedirectResponse
    {
        //return $this->redirectToRoute('app_blog_blog',['id'=>300]);
        return $this->redirect('https://www.ecosia.org/?c=fr');
    }
}
