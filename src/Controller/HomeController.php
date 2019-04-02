<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function home()
    {
        return new Response('<h1>Bonjour</h1>');
    }
}