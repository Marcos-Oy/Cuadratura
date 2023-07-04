<?php
namespace App\Core;

class Router {
    private $routes = [];
    private $beforeMiddleware = null;

    public function get($route, $handler) {
        $this->routes['GET'][$route] = $handler;
    }

    public function post($route, $handler) {
        $this->routes['POST'][$route] = $handler;
    }

    public function put($route, $handler) {
        $this->routes['PUT'][$route] = $handler;
    }

    public function delete($route, $handler) {
        $this->routes['DELETE'][$route] = $handler;
    }

    public function findRoute($route, $method) {
        if (isset($this->routes[$method][$route])) {
            return $this->routes[$method][$route];
        }
        return null;
    }

    public function handleRequest($currentRoute, $method) {
        // Encontrar y llamar al controlador correspondiente según la ruta y el método de solicitud
        $routeHandler = $this->findRoute($currentRoute, $method);
        if ($routeHandler !== null) {
            $controller = new $routeHandler[0]();
            $action = $routeHandler[1];
            $controller->$action();
        } else {
            // Si no se encuentra ninguna ruta válida, mostrar una página de error o redirigir a una página predeterminada.
            // echo "404 Not Found";
            include __DIR__ . '/../../resources/views/sessions/Error404.php';
        }
    }
}

?>