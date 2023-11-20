<?php

namespace core;

use Closure;

class Twig
{
    private $twig;
    private $functions = [];

    public function loadTwig()
    {
        $this->twig = new \Twig\Environment($this->loadViews(), [
            "debug" => true,
            //"cache" => "/cache",
            "auto-reload" => true
        ]);

        return $this->twig;
    }

    private function loadViews()
    {
        return new \Twig\Loader\FilesystemLoader('../app/views');
    }

    public function loadExtensions()
    {
        return $this->twig->addExtension(new \Twig\Extension\StringLoaderExtension());
    }

    private function functionsToView($name, Closure $callbak)
    {
        return new \Twig\TwigFunction($name, $callbak);
    }

    public function loadFunctions()
    {
        require "../app/functions/twig.php";

        foreach ($this->functions as $key => $value) {
            $this->twig->addFunction($this->functions[$key]);
        }
    }
}
