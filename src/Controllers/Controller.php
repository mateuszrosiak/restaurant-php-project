<?php

declare(strict_types=1);

namespace MyApp\Controllers;

use MyApp\Models\Database;
use MyApp\View\View;

class Controller
{
    private View $view;
    private Database $database;

    public function __construct(array $request, array $dbConfig)
    {
        $this->request = $request;
        $this->view = new View();
        $this->database = new Database($dbConfig);
    }

    public function run()
    {
        switch ($this->action()) {
            case "cart":
                $page = 'cart';
                break;
            default:
                $page = '';
        }

        $this->view->render($page);
    }

    private function action()
    {
        $getData = $this->getRequestGet();
        return $getData['action'] ?? '';
    }

    private function getRequestGet()
    {
        return $this->request['get'] ?? [''];
    }
}
