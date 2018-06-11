<?php
$router = new AltoRouter;

$router->map('GET', '/', '', 'home');

$match = $router->match();

if ($match) {
    require_once __DIR__ . '/../controller/BaseController.php';
    require_once __DIR__ . '/../controller/IndexController.php';
    $index = new \App\Controllers\IndexController();
    $index->show();
} else {
    header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
    echo "Page not found";
}