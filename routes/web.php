<?php

use App\Controllers\HomeController;
use App\Controllers\UsersController;
global $raiz;

// Rutas GET
$router->get($raiz.'/', [UsersController::class, 'login']);
$router->get($raiz.'/Home/dashboard', [HomeController::class, 'index']);
$router->get($raiz.'/users/show', [UsersController::class, 'index']);
$router->get($raiz.'/users/create', [UsersController::class, 'create']);

// Rutas POST
$router->post($raiz.'/create/user', [UsersController::class, 'createUser']);
$router->post($raiz.'/users/edit', [UsersController::class, 'edit']);
$router->post($raiz.'/edit/user', [UsersController::class, 'editUser']);
$router->post($raiz.'/reset/password', [UsersController::class, 'resetPassword']);
//activar usuario
//desactivar usuario
$router->post($raiz.'/users/SetUp', [UsersController::class, 'SetUp']);






// // Rutas PUT
// $router->put($raiz.'/ruta/{id}', [XController::class, 'metodo']);
// // Rutas DELETE
// $router->delete($raiz.'/ruta/{id}', [XController::class, 'metodo']);

