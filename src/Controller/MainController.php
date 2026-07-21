<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


// this doesn't direct away from the symfony homepage
//should have general stats and social information
//other pages behind burger bar
//should this be behind login or before?
class MainController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('<strong> Carbon Footprint Tracking</strong>: Compare your emissions against your peers!');
    }
}
