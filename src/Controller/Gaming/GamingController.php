<?php

namespace App\Controller\Gaming;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class HomeController
 *
 * @Route("/gaming")
 * @package App\Controller\Gaming
 */
class GamingController extends Controller
{
    /**
     * @Route("/", name="gaming_home")
     * @return Response
     */
    public function home()
    {
        //todo faire le .js
        return $this->render('gaming/home.html.twig');
    }
}