<?php

declare(strict_types=1);

use MyApp\Controllers\Controller;
use MyApp\Request\Request;

require_once("./vendor/autoload.php");

$request = new Request($_GET, $_POST);

$controller = new Controller($request);
$controller->run();
