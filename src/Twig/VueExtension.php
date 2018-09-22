<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use App\Service\RenderJS;

class VueExtension extends AbstractExtension
{
    private $renderJS;

    public function __construct(RenderJS $renderJS)
    {
        $this->renderJS = $renderJS;
    }

    public function getFunctions()
    {
        return array(
            new TwigFunction('vueMessage', array($this, 'vueMessageFunction')),
            new TwigFunction('vueCounter', array($this, 'vueCounterFunction')),
        );
    }

    public function vueMessageFunction()
    {
        return $this->renderJS->renderJS("message");
    }

    public function vueCounterFunction()
    {
        return $this->renderJS->renderJS("counter");
    }
}