<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController  extends Controller
{
    /**
     * @Route("/")
     */
    public function number()
    {
        $ssr = $this->renderJs();
        return $this->render('app.html.twig', ['ssr' => $ssr]);
    }


    private function renderJs()
    {
        $renderer_source = file_get_contents(__DIR__ . '/../../node_modules/vue-server-renderer/basic.js');
        $app_source = file_get_contents(__DIR__ . '/../../public/build/entry-server.js');
        $v8 = new \V8Js();
        ob_start();
        $v8->executeString('var process = { env: { VUE_ENV: "server", NODE_ENV: "production" }}; this.global = { process: process };');
        $v8->executeString($renderer_source);
        $v8->executeString($app_source);
        return ob_get_clean();
    }
}