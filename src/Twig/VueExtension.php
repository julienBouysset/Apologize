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
        $componsentName = "message";
        return '<'. $componsentName . '>' . $this->renderJS->renderJS($componsentName) . '</'. $componsentName . '>';
    }

    public function vueCounterFunction()
    {
        $componsentName = "counter";
        return '<'. $componsentName . '>' . $this->renderJS->renderJS($componsentName) . '</'. $componsentName . '>';
    }
}