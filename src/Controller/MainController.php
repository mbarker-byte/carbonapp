<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/', name: 'main')]
    public function homePage()
    {
        return new Response()
    }
}
