<?php

namespace App\Controllers;
use Config\Connection\Database;
use Database\ModelDAO\UsersDAO;
use Database\Model\UsersModel;

class UsersController {
    private $raiz;   
    private $usersDAO;
    private $usersModel;
    
    public function __construct() {
        require_once (__DIR__ . '/../../Config/database.php');
        require_once (__DIR__ . '/../../database/ModelDAO/UsersDAO.php');
        require_once (__DIR__ . '/../../database/Model/UsersModel.php');
        $dbConnection = new Database();
        $this->usersDAO = new UsersDAO($dbConnection->getConnection());
        $this->usersModel = new UsersModel();
        global $raiz;
        $this->raiz = $raiz;
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

        $rows = $this->usersDAO->getAllUsers();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/users/show.php';

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
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/users/create.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function edit() {
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/users/edit.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            $this->usersModel->setId($_POST['id']);
            $result = $this->usersDAO->getUserById($this->usersModel->getId());
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

        /*************************CRUD USUARIO**********************/

    public function createUser()
    {   
        $this->usersModel->setName($_POST['name']);
        $this->usersModel->setEmail($_POST['email']);
        $this->usersModel->setPassword($_POST['password']);
        $this->usersModel->setState($_POST['state']);
    
        $id = $this->usersDAO->insertUser($this->usersModel->getName(),$this->usersModel->getEmail(),
        $this->usersModel->getPassword(),$this->usersModel->getState());
    
        return ($id!=false) ? header("Location:$this->raiz/users/show") : header("Location:$this->raiz/users/create");
    }

    public function editUser()
    {   
        $this->usersModel->setId($_POST['id']);
        $this->usersModel->setName($_POST['name']);
        $this->usersModel->setEmail($_POST['email']);
        $this->usersModel->setPassword($_POST['password']);
        $this->usersModel->setState($_POST['state']);

        $id = $this->usersDAO->updateUser($this->usersModel->getId(),$this->usersModel->getName(),
        $this->usersModel->getEmail(),$this->usersModel->getPassword(),$this->usersModel->getState());

        return ($id!=false) ? header("Location:$this->raiz/users/show") : header("Location:$this->raiz/users/edit");
    }

    public function resetPassword()
    {   
        $this->usersModel->setId($_POST['id']);
        $id = $this->usersDAO->passwordReset($this->usersModel->getId());

        return ($id!=false) ? header("Location:$this->raiz/users/show") : header("Location:$this->raiz/users/edit");
    }
}

