<?php

use App\Controllers\HomeController;
use App\Controllers\UsersController;
global $raiz;

// Rutas GET
$router->get($raiz.'/', [HomeController::class, 'index']);
$router->get($raiz.'/Home/home.php', [HomeController::class, 'index']);
$router->get($raiz.'/users/show.php', [UsersController::class, 'index']);

// // Rutas POST
// $router->post($raiz.'/users', [HomeController::class, 'createUser']);

// // Rutas PUT
// $router->put($raiz.'/users/{id}', [HomeController::class, 'updateUser']);

// // Rutas DELETE
// $router->delete($raiz.'/users/{id}', [HomeController::class, 'deleteUser']);

