<?php

declare(strict_types=1);

use MyApp\Controllers\Controller;

require_once("./vendor/autoload.php");
$dbConfig = require_once("config/config.php");

$request = [
    'get' => $_GET,
    'post' => $_POST
];

$controller = new Controller($request, $dbConfig);
$controller->run();
