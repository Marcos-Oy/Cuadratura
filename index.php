<?php

require_once __DIR__ . '/app/Controllers/HomeController.php';
require_once __DIR__ . '/app/Core/Router.php';


// Configuración inicial del enrutador (router)
$router = new Router();

// Incluye las rutas definidas en web.php
require_once __DIR__ . '/routes/web.php';

// Obtiene la ruta actual
$currentRoute = $_SERVER['REQUEST_URI'];

// Determina el método de solicitud (GET, POST, PUT, DELETE)
$method = $_SERVER['REQUEST_METHOD'];

// Encuentra y llama al controlador correspondiente según la ruta y el método de solicitud
$routeHandler = $router->findRoute($currentRoute, $method);
if ($routeHandler !== null) {
    $controller = new $routeHandler[0]();
    $action = $routeHandler[1];
    $controller->$action();
} else {
    // Si no se encuentra ninguna ruta válida, muestra una página de error o redirige a una página predeterminada.
    echo "404 Not Found";
}
