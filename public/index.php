<?php

include_once '../app/Core/Router.php';
use Core\Router\Router;
use Controllers\Dashboard\DashboardController;

$router = new Router();

$router->get('/Cuadratura/', ['DashboardController', 'dash']);
$router->dispatch();

