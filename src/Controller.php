<?php

declare(strict_types=1);

require_once("View.php");

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
