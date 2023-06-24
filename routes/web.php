<?php

use App\Controllers\HomeController;
use App\Controllers\UsersController;
global $raiz;

// Rutas GET
$router->get($raiz.'/', [UsersController::class, 'login']);
$router->get($raiz.'/users/show', [UsersController::class, 'index']);
$router->get($raiz.'/users/create', [UsersController::class, 'create']);
$router->get($raiz.'/users/setup', [UsersController::class, 'setup']);

$router->get($raiz.'/Home/dashboard', [HomeController::class, 'index']);

// Rutas POST
$router->post($raiz.'/create/user', [UsersController::class, 'createUser']);
$router->post($raiz.'/users/edit', [UsersController::class, 'edit']);
$router->post($raiz.'/edit/user', [UsersController::class, 'editUser']);
$router->post($raiz.'/reset/password', [UsersController::class, 'resetPassword']);
$router->post($raiz.'/edit/user', [UsersController::class, 'editUser']);
$router->post($raiz.'/edit/state', [UsersController::class, 'editState']);
$router->post($raiz.'/drop/user', [UsersController::class, 'dropUser']);








// // Rutas PUT
// $router->put($raiz.'/ruta/{id}', [XController::class, 'metodo']);
// // Rutas DELETE
// $router->delete($raiz.'/ruta/{id}', [XController::class, 'metodo']);

