<?php 
namespace Lite\Core;

use Lite\Core\Factory\TwigFactory;

class AbstractController
{
    protected $renderer;
    public function __construct()
    {
        $this->renderer = new TwigFactory;
    }

    public function render(string $template, array $data = [])
    {
        return $this->renderer->renderer()->render($template, $data);
    }
}