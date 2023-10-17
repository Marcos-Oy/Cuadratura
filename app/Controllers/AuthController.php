<?php

namespace App\Controllers;

use App\Middleware\Tokens;
use Config\Connection\Database;
use Database\ModelDAO\UsersDAO;
use Database\Model\UsersModel;

class AuthController
{
    private $raiz;
    private $usersDAO;
    private $usersModel;

    public function __construct()
    {
        require_once(__DIR__ . '/../../Config/database.php');
        require_once(__DIR__ . '/../../database/ModelDAO/UsersDAO.php');
        require_once(__DIR__ . '/../../database/Model/UsersModel.php');
        $dbConnection = new Database();
        $this->usersDAO = new UsersDAO($dbConnection->getConnection());
        $this->usersModel = new UsersModel();
        global $raiz;
        $this->raiz = $raiz;
    }

    public function show()
    {
        // Obtén la ruta completa de la vista
        $ToastStatus = 'In';
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

    public function login()
    {
        
        // Obtén los datos enviados por el formulario de login
        $this->usersModel->setUsername($_POST['USERNAME']);
        $this->usersModel->setPassword($_POST['PASSWORD']);

        if(!empty($_POST['USERNAME']) || !empty($_POST['PASSWORD'])){

            // Valida las credenciales del usuario
            $user = $this->usersDAO->getUserByUsername($this->usersModel->getUsername(), $this->usersModel->getPassword());
            $pass = isset($user['PASSWORD']) ? $user['PASSWORD'] : null;
            
            if($this->usersModel->getPassword() === $pass){
                if ($user['USER_STATE'] == 1) {
                    // Genera un token de autenticación
                    $_SESSION['TOKEN'] = bin2hex(random_bytes(16));
                    // Guarda el token en la base de datos
                    $this->usersDAO->updateAuthToken($user['ID'], $_SESSION['TOKEN']);
    
                    // Obtén la ruta completa de la vista
                    $_SESSION['USER'] = $user;
                    header("Location: " . $this->raiz . "/Home");
    
                } else{
                    // Condición de que tiene una sesión activa
                    
                    $ToastStatus = 'INACTIVE';
                    include_once (__DIR__ . '/../../resources/views/login/login.php');
                }
            }else{
                $ToastStatus = 'PASS';
                include_once (__DIR__ . '/../../resources/views/login/login.php');
            }
        }else{
            header('Location:' . $this->raiz . '/');
        }
    }


    public function logout()
    {
        $user = $_SESSION['USER'];
        
        // Invalida el token de autenticación en la base de datos
        $this->usersDAO->updateAuthToken($user['ID'], '');

        // Destruye todas las variables de sesión
        session_unset();

        // Destruye la sesión
        session_destroy();
    
        // Redirige al usuario a la página de inicio de sesión
        header("Location: $this->raiz/");
    }
}
