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
            new TwigFunction('vueTest', array($this, 'vueTestFilter')),
        );
    }

    public function vueTestFilter()
    {
        return $this->renderJS->renderJS();
    }
}