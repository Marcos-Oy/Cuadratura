<?php

namespace App\Controllers;

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

    public function login()
    {
        // Obtén los datos enviados por el formulario de login
        $username = $_POST['USERNAME'];
        $password = $_POST['PASSWORD'];
    
        // Encripta la contraseña ingresada
        $encryptedPassword = md5($password);
    
        // Valida las credenciales del usuario
        $user = $this->usersDAO->getUserByUsername($username, $encryptedPassword);
    
        if ($user) {
            // Genera un token de autenticación
            $token = bin2hex(random_bytes(16));
    
            // Guarda el token en la base de datos
            $this->usersDAO->updateAuthToken($user['ID'], $token);
    
            // Retorna el token como respuesta en formato JSON
            //echo json_encode(['token' => $token]);
            
            // Asignar el valor de TOKEN a la sesión
            $_SESSION['TOKEN'] = $token;

            // Obtén la ruta completa de la vista
            header("Location: " . $this->raiz . "/Home/dashboard");
        } else {
            // Error de autenticación
            echo json_encode(['error' => 'Credenciales incorrectas']);
            // Destruye todas las variables de sesión
            session_unset();
            // Destruye la sesión
            session_destroy();
        }
    }

    public function logout()
    {
        // Obtén el token de autenticación enviado en la solicitud
        $token = $_SERVER['HTTP_AUTH_TOKEN'];
    
        // Invalida el token de autenticación en la base de datos
        $this->usersDAO->updateAuthToken($token, '');

        // Destruye todas las variables de sesión
        session_unset();

        // Destruye la sesión
        session_destroy();
    
        // Redirige al usuario a la página de inicio de sesión
        header("Location: $this->raiz/");
    }
}
