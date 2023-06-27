<?php

require_once __DIR__ . '/app/Core/Router.php';
require_once __DIR__ . '/app/Controllers/HomeController.php';
require_once __DIR__ . '/app/Controllers/UsersController.php';
require_once __DIR__ . '/app/Controllers/AuthController.php';
require_once __DIR__ . '/database/ModelDAO/UsersDAO.php'; // Asegúrate de incluir el archivo del ModelDAO correspondiente

$raiz = '/Cuadratura';

// Configuración inicial del enrutador (router)
$router = new Router();

// Incluye las rutas definidas en web.php
require_once __DIR__ . '/routes/web.php';

// Obtiene la ruta actual
$currentRoute = $_SERVER['REQUEST_URI'];

// Determina el método de solicitud (GET, POST, PUT, DELETE)
$method = $_SERVER['REQUEST_METHOD'];

// Verificar el token en cada solicitud
$router->before(function ($method, $route) {
    // Obtén el token de autenticación enviado en la solicitud
    $token = $_SERVER['HTTP_AUTH_TOKEN'];

    // Verifica si el token es válido
    if (!validateToken($token)) {
        // Retorna una respuesta de error o redirecciona al usuario al formulario de login
        // Por ejemplo, puedes retornar un código de estado HTTP 401 (Unauthorized)
        http_response_code(401);
        echo "Token inválido";
        exit;
    }
});

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

// Función para validar el token
function validateToken($token) {
    // Implementa la lógica para validar el token (por ejemplo, verifica si existe en la base de datos y no ha expirado)
    // Retorna true si el token es válido, de lo contrario, retorna false

    // Aquí puedes agregar tu lógica personalizada para validar el token
    // Por ejemplo, puedes realizar una consulta a la base de datos para verificar si el token existe y no ha expirado

    // Supongamos que tienes una instancia de UsersDAO para acceder a la base de datos
    $pdoConnection = getConnection(); // Obtén tu conexión PDO aquí
    $usersDAO = new UsersDAO($pdoConnection);

    // Obtén el usuario basado en el token
    $user = $usersDAO->getUserByToken($token);

    // Verifica si se encontró un usuario y si el token no ha expirado
    if ($user && !$tokenHasExpired($user['token_expiration'])) {
        // El token es válido
        return true;
    }

    // El token es inválido
    return false;
}

// Función para verificar si el token ha expirado
function tokenHasExpired($expirationDate) {
    // Implementa la lógica para verificar si el token ha expirado
    // Puedes comparar la fecha actual con la fecha de expiración del token

    // Supongamos que $expirationDate es una cadena en formato de fecha y hora (ejemplo: '2023-06-22 12:00:00')
    $currentDate = date('Y-m-d H:i:s');
    if ($currentDate > $expirationDate) {
        // El token ha expirado
        return true;
    }

    // El token no ha expirado
    return false;
}

// Función para obtener la conexión PDO (debes ajustarla según tu configuración)
function getConnection() {
    $host = 'localhost';
    $dbname = 'nombre_de_la_base_de_datos';
    $username = 'nombre_de_usuario';
    $password = 'contraseña';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        // Manejo del error de conexión
        echo "Error de conexión a la base de datos: " . $e->getMessage();
        exit;
    }
}
