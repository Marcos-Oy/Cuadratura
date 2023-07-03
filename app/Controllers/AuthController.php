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

        // Valida las credenciales del usuario
        $user = $this->usersDAO->getUserByUsername($this->usersModel->getUsername(), $this->usersModel->getPassword());
        // Genera un token de autenticación
        $token = bin2hex(random_bytes(16));
        // Guarda el token en la base de datos
        $this->usersDAO->updateAuthToken($user['ID'], $token);
        // Asignar el valor de TOKEN a la sesión
        $_SESSION['TOKEN'] = $token;

        /**
         * @author Marcos Oyarzo
         * si quiero que me aparezcan los mensajes debo programar una nueva vista con botón volver
         * o realizar algún tipo de modal, cosa que ese botón me envíe a un método o función donde
         * se aplicará:
         * 
            // Destruye todas las variables de sesión
            session_unset();
            // Destruye la sesión
            session_destroy();
         *
         */

        if ($user['USER_STATE'] == 1) {
            // Obtén la ruta completa de la vista
            $_SESSION['USER'] = $user;
            header("Location: " . $this->raiz . "/Home/dashboard");

        } elseif($user['USER_STATE'] == 0) {
            // Error de autenticación
            echo json_encode(['error' => 'Usuario inactivo']);
            // Destruye todas las variables de sesión
            session_unset();
            // Destruye la sesión
            session_destroy();

        }else{
            // Error de autenticación
            echo json_encode(['error' => 'Usuario o contraseña incorrecta']);
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
