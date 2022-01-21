<?php

declare(strict_types=1);

namespace MyApp\Controllers;

use MyApp\Model\Database;
use MyApp\View\View;

class Controller
{
    private View $view;
    private Database $database;

    public function __construct(array $request, array $dbConfig)
    {
        $this->request = $request;

        $this->database = new Database($dbConfig);
    }

    public function run()
    {
        $this->view = new View();

        switch ($this->action()) {
            case "cart":
                $page = 'cart';
                break;
            default:
                $page = '';
                $products = $this->database->getProducts();

                $params = [
                    'products' => $products
                ];
        }

        $this->view->render($page, $params ?? []);
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
