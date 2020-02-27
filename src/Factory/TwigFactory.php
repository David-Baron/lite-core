<?php 
namespace Lite\Core\Factory;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigFactory
{
    protected $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $this->twig = new \Twig\Environment($loader, [
            //'cache' => '/path/to/compilation_cache',
            'debug' => true
        ]);
        $this->twig->addExtension(new \Twig\Extension\DebugExtension);
    }

    public function renderer()
    {
        return $this->twig;
    }
}