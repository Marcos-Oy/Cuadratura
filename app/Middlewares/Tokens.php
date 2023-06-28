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
        if ($user && !$this->tokenHasExpired($user['token_expiration'])) {
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
