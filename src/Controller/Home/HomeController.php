<?php

namespace App\Controller\Home;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Service\RenderJS;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function home()
    {
        $renderJS = new RenderJS;
        $ssr = $renderJS->renderJS();
        return $this->render('home/home.html.twig', ['ssr' => $ssr]);
    }
}