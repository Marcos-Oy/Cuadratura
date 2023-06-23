<?php

use App\Controllers\HomeController;
use App\Controllers\UsersController;
global $raiz;

// Rutas GET
$router->get($raiz.'/', [UsersController::class, 'login']);
$router->get($raiz.'/Home/dashboard', [HomeController::class, 'index']);
$router->get($raiz.'/users/show', [UsersController::class, 'index']);
$router->get($raiz.'/users/create', [UsersController::class, 'create']);
$router->get($raiz.'/users/edit', [UsersController::class, 'edit']);
$router->get($raiz.'/users/SetUp', [UsersController::class, 'SetUp']);

// Rutas POST
$router->post($raiz.'/create/user', [UsersController::class, 'createUser']);


// Rutas PUT
$router->put($raiz.'/users/{id}', [HomeController::class, 'updateUser']);


// Rutas DELETE
$router->delete($raiz.'/users/{id}', [HomeController::class, 'deleteUser']);

