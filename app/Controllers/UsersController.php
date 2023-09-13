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
            $this->usersModel->setId($_POST['ID']);
            $result = $this->usersDAO->getUserById($this->usersModel->getId());
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function setup() {
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/users/SetUp.php';

        // Llama al método getUser() en la instancia de UsersModel
        $result = $_SESSION['USER'];

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
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
        $this->usersModel->setId($_POST['ID']);
        $this->usersModel->setUsername($_POST['USERNAME']);
        $this->usersModel->setEmail($_POST['EMAIL']);
        $this->usersModel->setPassword('Mesa2020');
        $this->usersModel->setState($_POST['USER_STATE']);
    
        $id = $this->usersDAO->insertUser($this->usersModel->getId(),$this->usersModel->getUsername(),$this->usersModel->getEmail()
        ,$this->usersModel->getPassword(), $this->usersModel->getState());
        // var_dump ($id);
        return ($id!=false) ? header("Location:$this->raiz/users/show") : header("Location:$this->raiz/users/create");
    }

    public function editUser()
    {   
        $this->usersModel->setId($_POST['ID']);
        $this->usersModel->setUsername($_POST['USERNAME']);
        $this->usersModel->setEmail($_POST['EMAIL']);
        $this->usersModel->setState($_POST['USER_STATE']);

        $id = $this->usersDAO->updateUser($this->usersModel->getId(),$this->usersModel->getUsername(),
        $this->usersModel->getEmail(),$this->usersModel->getState());

        return ($id!=false) ? header("Location:$this->raiz/users/show") : header("Location:$this->raiz/users/edit");
    }

    public function setupUser()
    {   
        if (isset($_POST['btn1'])) {
            $this->usersModel->setId($_POST['ID']);
            $this->usersModel->setUsername($_POST['USERNAME']);
            $this->usersModel->setEmail($_POST['EMAIL']);
            $this->usersModel->setState('0');

            $id = $this->usersDAO->updateUser($this->usersModel->getId(),$this->usersModel->getUsername(),
            $this->usersModel->getEmail(),$this->usersModel->getState());

            return ($id!=false) ? header("Location:$this->raiz/logouts") : header("Location:$this->raiz/users/setup");
        }

        if (isset($_POST['btn2'])) {

            // Pasamos los datos de sesión que vienen en array a la variable user y hacemos usos de sus valores
            $user = $_SESSION['USER'];
            $this->usersModel->setId($user['ID']);

            $this->usersModel->setPassword($_POST['ACTUAL']);
            $actual = $this->usersModel->getPassword();

            if($actual === $user['PASSWORD']){

                $this->usersModel->setPassword($_POST['NUEVA']);
                $nueva = $this->usersModel->getPassword();
                
                $this->usersModel->setPassword($_POST['CONFIRMAR']);
                $confirmar = $this->usersModel->getPassword();

                if($nueva === $confirmar){

                    $id = $this->usersDAO->updatePassword($this->usersModel->getId(),$this->usersModel->getPassword());
                    return ($id!=false) ? header("Location:$this->raiz/Home/dashboard") : header("Location:$this->raiz/users/setup");

                }else{
                    echo 'las nuevas contraseñas no concuerdan';
                }
            }else{
                echo 'Esa no es tu contraseña actual';
            }
        }
    }

    public function resetPassword()
    {   
        $this->usersModel->setId($_POST['ID']);
        $this->usersModel->setPassword('Mesa2020');
        $id = $this->usersDAO->passwordReset($this->usersModel->getId(),$this->usersModel->getPassword());

        return ($id!=false) ? header("Location:$this->raiz/users/show") : header("Location:$this->raiz/users/edit");
    }

    public function editState()
    {   
        $this->usersModel->setId($_POST['ID']);
        $this->usersModel->setState($_POST['USER_STATE']);

        $id = $this->usersDAO->updateState($this->usersModel->getId(),$this->usersModel->getState());

        return ($id!=false) ? header("Location:$this->raiz/users/show") : header("Location:$this->raiz/users/show");
    }

    public function dropUser()
    {   
        $this->usersModel->setId($_POST['ID']);

        $id = $this->usersDAO->deleteUser($this->usersModel->getId());

        return ($id!=false) ? header("Location:$this->raiz/users/show") : header("Location:$this->raiz/users/show");
    }
}

