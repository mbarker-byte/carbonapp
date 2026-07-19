<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function homePage()
    {
        return new Response('<strong> Carbon Footprint Tracking</strong>: Compare your emissions against your peers!');
    }
}
