<?php

use App\Controllers\HomeController;
$raiz = '/Cuadratura';

// Rutas GET
$router->get($raiz.'/', [HomeController::class, 'index']);
$router->get($raiz.'/dashboard', [HomeController::class, 'dashboard']);
$router->get($raiz.'/users', [HomeController::class, 'listUsers']);

// Rutas POST
$router->post($raiz.'/users', [HomeController::class, 'createUser']);

// Rutas PUT
$router->put($raiz.'/users/{id}', [HomeController::class, 'updateUser']);

// Rutas DELETE
$router->delete($raiz.'/users/{id}', [HomeController::class, 'deleteUser']);

