<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController
{
    #[Route('/', name: 'index')]
    public function index1(): Response
    {
        return new Response('Hello World');
    }
    #[Route('/hello/{name}', name: 'hello')]
    public function index(string $name): Response
    {
        return new Response("Hello $name");
    }
}
