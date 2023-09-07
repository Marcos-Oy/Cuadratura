<?php
date_default_timezone_set('America/Santiago');

// Define la raíz del proyecto según el nombre del proyecto
$raiz = '/Cuadratura';

// Se deben agregar los directorios de los controladores para que las rutas funcionen
require_once __DIR__ . '/app/Controllers/AuthController.php';
require_once __DIR__ . '/app/Controllers/HomeController.php';
require_once __DIR__ . '/app/Controllers/LogsController.php';
require_once __DIR__ . '/app/Controllers/UsersController.php';

// Incluir el archivo de middleware
require_once __DIR__ . '/app/Middlewares/Tokens.php';
// Instancia del middleware
$middleware = new app\Middleware\Tokens();
$middleware->handle();

// Incluir el archivo del enrutador (Router)
require_once __DIR__ . '/app/Core/Router.php';

// Configuración inicial del enrutador (Router)
$router = new app\Core\Router();

// Incluir el archivo de rutas (web.php)
require_once __DIR__ . '/routes/web.php';

// Obtener la ruta actual y el método de solicitud
$currentRoute = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Manejar la solicitud
$router->handleRequest($currentRoute, $method);

?>
