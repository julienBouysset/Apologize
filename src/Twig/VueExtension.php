<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use App\Service\RenderJS;

class VueExtension extends AbstractExtension
{
    private $renderJS;

    /**
     * VueExtension constructor.
     * @param RenderJS $renderJS
     */
    public function __construct(RenderJS $renderJS)
    {
        $this->renderJS = $renderJS;
    }

    /**
     * @return array|\Twig_Function[]
     */
    public function getFunctions()
    {
        return array(
            new TwigFunction('vueMessage', array($this, 'vueMessageFunction')),
            new TwigFunction('vueCounter', array($this, 'vueCounterFunction')),
            new TwigFunction('vueLogo',    array($this, 'vueLogoFunction')),
        );
    }

    /**
     * @return string
     */
    public function vueMessageFunction()
    {
        $componsentName = "message";
        return '<'. $componsentName . '>' . $this->renderJS->renderJS($componsentName) . '</'. $componsentName . '>';
    }

    /**
     * @return string
     */
    public function vueCounterFunction()
    {
        $componsentName = "counter";
        return '<'. $componsentName . '>' . $this->renderJS->renderJS($componsentName) . '</'. $componsentName . '>';
    }

    /**
     * @param string $subsitesName
     * @return string
     */
    public function vueLogoFunction(string $subsitesName = "home")
    {
        $componsentName = "logo";
        return '<'. $componsentName . ' message="' . $subsitesName . '">' . $this->renderJS->renderJS($componsentName, $subsitesName) . '</'. $componsentName . '>';
    }


}