<?php

declare(strict_types=1);

namespace MyApp\Controllers;

use MyApp\Model\Database;
use MyApp\Request\Request;
use MyApp\View\View;

class AbstractController
{
    public View $view;
    public Request $request;
    protected Database $database;


    public function __construct(Request $request)
    {
        $this->view     = new View();
        $this->database = new Database(require_once("./config/config.php"));
        $this->request = $request;
    }

    public function run()
    {
        $action = $this->action() . 'Action';

        if ( ! method_exists($this, $action)) {
            $action = 'showProductsAction';
        }

        $this->$action();
    }

    private function action()
    {
        return  $this->request->getGet('action') ?? 'showProducts';
    }
}