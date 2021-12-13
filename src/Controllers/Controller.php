<?php

declare(strict_types=1);

namespace MyApp\Controllers;

use MyApp\View\View;

class Controller
{
    private View $view;
    private array $request;

    public function __construct($request)
    {
        $this->request = $request;
        $this->view = new View();
    }

    public function run()
    {

        $this->view->render();
    }
}
