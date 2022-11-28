<?php

declare(strict_types=1);

namespace MyApp\View;

class View
{
    public array $params;

    public function render(string $page = '', array $params = []): void
    {
        $this->params = $params;
        require_once("templates/layout.php");
        require_once("./templates/pages/$page.php");
    }
}
