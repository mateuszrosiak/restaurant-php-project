<?php

declare(strict_types=1);

namespace MyApp\Controllers;

use MyApp\View\View;

class Controller
{
    public View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function run()
    {

        $this->view->render();
    }
}
