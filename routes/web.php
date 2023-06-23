<?php

use App\Controllers\HomeController;
use App\Controllers\UsersController;
global $raiz;

// Rutas GET
$router->get($raiz.'/', [UsersController::class, 'login']);
$router->get($raiz.'/Home/dashboard.php', [HomeController::class, 'index']);
$router->get($raiz.'/users/show.php', [UsersController::class, 'index']);


// Rutas POST
$router->post($raiz.'/users', [UsersController::class, 'createUser']);


// Rutas PUT
$router->put($raiz.'/users/{id}', [HomeController::class, 'updateUser']);


// Rutas DELETE
$router->delete($raiz.'/users/{id}', [HomeController::class, 'deleteUser']);

