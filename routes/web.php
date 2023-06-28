<?php

use App\Controllers\HomeController;
use App\Controllers\UsersController;
use App\Controllers\AuthController;
global $raiz;

// El usuario no ha iniciado sesión, redirigir a la ruta
if(!isset($_SESSION['TOKEN'])){
    // Rutas del login
    $router->get($raiz.'/', [AuthController::class, 'show']);
    $router->post($raiz.'/login', [AuthController::class, 'login']);
}

// El usuario ha iniciado sesión, redirigir a la ruta
if (isset($_SESSION['TOKEN'])) { 
    // Rutas del login
    $router->post($raiz.'/logout', [AuthController::class, 'logout']);
    
    //rotas dashboard
    $router->get($raiz.'/Home/dashboard', [HomeController::class, 'index']);

    // Rutas usuarios
    $router->get($raiz.'/users/show', [UsersController::class, 'index']);
    $router->get($raiz.'/users/create', [UsersController::class, 'create']);
    $router->get($raiz.'/users/setup', [UsersController::class, 'setup']);

    $router->post($raiz.'/create/user', [UsersController::class, 'createUser']);
    $router->post($raiz.'/users/edit', [UsersController::class, 'edit']);
    $router->post($raiz.'/edit/user', [UsersController::class, 'editUser']);
    $router->post($raiz.'/reset/password', [UsersController::class, 'resetPassword']);
    $router->post($raiz.'/edit/user', [UsersController::class, 'editUser']);
    $router->post($raiz.'/edit/state', [UsersController::class, 'editState']);
    $router->post($raiz.'/drop/user', [UsersController::class, 'dropUser']);
}






?>











