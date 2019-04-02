<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController
{
    /**
     * @Route("/about")
     * @return Response
     */
    public function about()
    {
        return new Response('<h1>Bonjour About</h1>');
    }
}