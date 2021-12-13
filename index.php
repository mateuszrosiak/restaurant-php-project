<?php

declare(strict_types=1);

use MyApp\Controllers\Controller;

require_once("./vendor/autoload.php");

$request = [
    'get' => $_GET,
    'post' => $_POST
];

$controller = new Controller($request);
$controller->run();
