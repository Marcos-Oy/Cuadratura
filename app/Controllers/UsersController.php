<?php

namespace App\Controllers;
use Config\Connection\Database;
use Database\ModelDAO\UsersDAO;

class UsersController {

    private $usersDAO;
    
    public function __construct() {
        require_once (__DIR__ . '/../../Config/database.php');
        require_once (__DIR__ . '/../../database/ModelDAO/UsersDAO.php');
        $dbConnection = new Database();
        $this->usersDAO = new UsersDAO($dbConnection->getConnection());
    }

    /*************************LLAMADA A LAS VISTAS**********************/

    public function login()
    {
        // Definir el valor de $raiz
        global $raiz;

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/login/login.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }   
    }
    
    public function index() {
        // Definir el valor de $raiz
        global $raiz;

        $rows = $this->usersDAO->getAllUsers();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Users/show.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function create() {
        // Definir el valor de $raiz
        global $raiz;

        $rows = $this->usersDAO->getAllUsers();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Users/create.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }
}

