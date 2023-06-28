<?php
// Define la raíz del proyecto según el nombre del proyecto
$raiz = '/Cuadratura';

// Se deben agregar los directorios de los controladores para que las rutas funcionen
require_once __DIR__ . '/app/Controllers/HomeController.php';
require_once __DIR__ . '/app/Controllers/UsersController.php';
require_once __DIR__ . '/app/Controllers/AuthController.php';

// Incluir el archivo del enrutador (Router)
require_once __DIR__ . '/app/Core/Router.php';

// Incluir el archivo de middleware
require_once __DIR__ . '/app/Middlewares/middleware.php';

// Incluir el archivo de rutas (web.php)
require_once __DIR__ . '/routes/web.php';

// Obtener la ruta actual y el método de solicitud
$currentRoute = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Ejecutar el middleware antes de manejar la solicitud
$router->runBeforeMiddleware($method, $currentRoute);

// Manejar la solicitud
$router->handleRequest($currentRoute, $method);

?>
