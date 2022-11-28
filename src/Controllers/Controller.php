<?php

declare(strict_types=1);

namespace MyApp\Controllers;

use MyApp\Model\Database;
use MyApp\View\View;

class Controller extends AbstractController
{

    public function showProductsAction()
    {
        $this->view->render('products', [
                'products' => $this->database->getProducts(),
            ]
        );
    }


}
