<?php

namespace App\Middleware;

use Config\Connection\Database;
use Database\ModelDAO\UsersDAO;

class Tokens
{
    private $beforeMiddleware;
    private $usersDAO;
    private $raiz;

    public function __construct()
    {
        require_once(__DIR__ . '/../../Config/database.php');
        require_once(__DIR__ . '/../../database/ModelDAO/UsersDAO.php');
        
        $dbConnection = new Database();
        $this->usersDAO = new UsersDAO($dbConnection->getConnection());
        
        global $raiz;
        $this->raiz = $raiz;
    }

    public function before($callback)
    {
        $this->beforeMiddleware = $callback;
    }

    public function runBeforeMiddleware($method, $route)
    {
        if ($this->beforeMiddleware !== null) {
            $callback = $this->beforeMiddleware;
            $callback($method, $route);
        }
    }

    public function handle()
    {
        session_start();
        
        /**
         * @author Marcos Oyarzo        
         * Esta condición dice que si la sesión ya cuenta con un token y la ruta es distinta a la del login
         * Comenzará a medir el tiempo de inactividad en el sitio para cerrar sesión una vez que se haya cumplido la condición
         * El fin de esta condición es que no mida el tiempo de inactividad en el mismo login, es para evitar
         * el inicio de sesión falso, ósea que inicies sesión pero te vuelva a cargar el login.
         */

        if (isset($_SESSION['TOKEN']) && $_SERVER['REQUEST_URI'] != $this->raiz . "/") {
    
            // Tiempo de inactividad permitido en segundos (15 minutos en este caso)
            $inactivityTimeout = 900;
        
            // Verificar si existe una marca de tiempo de última actividad en la sesión
            if (isset($_SESSION['last_activity'])) {
                // Calcular la diferencia de tiempo entre la última actividad y el tiempo actual
                $lastActivityTimestamp = $_SESSION['last_activity'];
                $currentTimestamp = time();
                $timeDifference = $currentTimestamp - $lastActivityTimestamp;
        
                // Verificar si ha pasado el tiempo de inactividad permitido
                if ($timeDifference >= $inactivityTimeout) {

                    // Instancia del middleware de Tokens
                    $tokensMiddleware = new Tokens();
                    // Obtén el token de la sesión
                    $valid = $tokensMiddleware->validateToken($_SESSION['TOKEN']);
        
                    // Valida el token
                    if ($valid) {
                        // El token es válido, puedes continuar con la lógica del controlador
                        // Obtén la ruta completa de la vista
                        // El token ha expirado debido a la inactividad, realizar las acciones necesarias (por ejemplo, cerrar sesión, redireccionar, etc.)
                        session_unset();
                        session_destroy();
                        // Evitar que el navegador almacene en caché la página
                        header('Cache-Control: no-cache, must-revalidate');
                        // Redirigir al usuario al formulario de inicio de sesión u otra página apropiada
                        header('Location:'. $this->raiz . '/');  
                    } else {
                        // El token es inválido, puedes redirigir al usuario o mostrar un mensaje de error
                        // ...
                        header("Location: " . $this->raiz . "/");
                    }
                }
            }
            // Actualizar la marca de tiempo de última actividad en la sesión
            $_SESSION['last_activity'] = time();
        }
    
        if (isset($_SESSION['TOKEN']) && $_SERVER['REQUEST_URI'] === $this->raiz . "/") {
            header('Location:' . $this->raiz . '/Home/dashboard');
        }
    
        if (!isset($_SESSION['TOKEN']) && $_SERVER['REQUEST_URI'] != $this->raiz . "/") {
            header('Location:' . $this->raiz . '/');
        }
    }
    

    public function validateToken($token)
    {
        // Obtén el usuario basado en el token
        $user = $this->usersDAO->getUserByToken($token);

        // Verifica si se encontró un usuario y si el token no ha expirado
        if ($user && !$this->tokenHasExpired($user['TOKEN_EXPIRATION'])) {
            // El token es válido
            return true;
        }
        // El token es inválido
        return false;
    }

    private function tokenHasExpired($expirationDate)
    {
        // Supongamos que $expirationDate es una cadena en formato de fecha y hora (ejemplo: '2023-06-22 12:00:00')
        $currentDate = date('Y-m-d H:i:s');
        if ($currentDate > $expirationDate) {
            // El token ha expirado
            return true;
        }
        // El token no ha expirado
        return false;
    }
}



?>
