<?php

class Router {
    private $routes = [];

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
}
