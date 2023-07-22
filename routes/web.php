<?php
use App\Controllers\HomeController;
use App\Controllers\LogsController;
use App\Controllers\UsersController;
use App\Controllers\AuthController;

// El usuario no ha iniciado sesión, redirigir a la ruta
if(!isset($_SESSION['TOKEN'])){
    // Rutas del login GET
    $router->get($raiz.'/', [AuthController::class, 'show']);
    // Rutas del login POST
    $router->post($raiz.'/login', [AuthController::class, 'login']);
}

// El usuario ha iniciado sesión, redirigir a la ruta
if (isset($_SESSION['TOKEN'])) { 
    // Rutas del login POST
    $router->post($raiz.'/logout', [AuthController::class, 'logout']);
    
    //Rutas dashboard GET
    $router->get($raiz.'/Home/dashboard', [HomeController::class, 'index']);

    // Rutas LOGS GET
    $router->get($raiz.'/logs', [LogsController::class, 'ViewsLogs']);
    $router->get($raiz.'/ArchLogs', [LogsController::class, 'ViewsArchLogs']);
    $router->get($raiz.'/ModelDatos', [LogsController::class, 'ViewsModelDatos']);

    // Rutas usuarios GET
    $router->get($raiz.'/users/show', [UsersController::class, 'index']);
    $router->get($raiz.'/users/create', [UsersController::class, 'create']);
    $router->get($raiz.'/users/setup', [UsersController::class, 'setup']);
    // Rutas usuarios POST
    $router->post($raiz.'/create/user', [UsersController::class, 'createUser']);
    $router->post($raiz.'/users/edit', [UsersController::class, 'edit']);
    $router->post($raiz.'/edit/user', [UsersController::class, 'editUser']);
    $router->post($raiz.'/reset/password', [UsersController::class, 'resetPassword']);
    $router->post($raiz.'/edit/user', [UsersController::class, 'editUser']);
    $router->post($raiz.'/edit/state', [UsersController::class, 'editState']);
    $router->post($raiz.'/drop/user', [UsersController::class, 'dropUser']);
    $router->post($raiz.'/setup/user', [UsersController::class, 'setupUser']);
}

?>











