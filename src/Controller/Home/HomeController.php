<?php

namespace App\Controller\Home;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @
     * @Route("/", name="home_home")
     * @return Response
     */
    public function home()
    {
        return $this->render('home/home.html.twig');
    }
}