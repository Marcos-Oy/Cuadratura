<?php
/**
 * @author Marcos Oyarzo
 * Controla las acciones relacionadas con los TOKENS 
 */

session_start();

if (!isset($_SESSION['TOKEN']) && $_SERVER['REQUEST_URI'] != $raiz . "/") {
    header('Location:'. $raiz . '/');
}

if (isset($_SESSION['TOKEN']) && $_SERVER['REQUEST_URI'] === $raiz . "/") {
    header('Location:'. $raiz . '/Home/dashboard');
}

// Tiempo de inactividad permitido en segundos (1 minuto en este caso)
$inactivityTimeout = 30;

// Verificar si existe una marca de tiempo de última actividad en la sesión
if (isset($_SESSION['last_activity'])) {
    // Calcular la diferencia de tiempo entre la última actividad y el tiempo actual
    $lastActivityTimestamp = $_SESSION['last_activity'];
    $currentTimestamp = time();
    $timeDifference = $currentTimestamp - $lastActivityTimestamp;

    // Verificar si ha pasado el tiempo de inactividad permitido
    if ($timeDifference >= $inactivityTimeout) {
        // El token ha expirado debido a la inactividad, realizar las acciones necesarias (por ejemplo, cerrar sesión, redireccionar, etc.)
        session_unset();
        session_destroy();
        // Evitar que el navegador almacene en caché la página
        header('Cache-Control: no-cache, must-revalidate');
        // Redirigir al usuario al formulario de inicio de sesión u otra página apropiada
        header('Location:'. $raiz . '/');  
        exit();
    }
}

// Actualizar la marca de tiempo de última actividad en la sesión
$_SESSION['last_activity'] = time();

// Función para validar el token
function validateToken($token) {
    // Implementa la lógica para validar el token (por ejemplo, verifica si existe en la base de datos y no ha expirado)
    // Retorna true si el token es válido, de lo contrario, retorna false

    // Aquí puedes agregar tu lógica personalizada para validar el token
    // Por ejemplo, puedes realizar una consulta a la base de datos para verificar si el token existe y no ha expirado

    // Supongamos que tienes una instancia de UsersDAO para acceder a la base de datos
    $Connection = getConnection(); // Obtén tu conexión 
    $usersDAO = new UsersDAO($Connection);

    // Obtén el usuario basado en el token
    $user = $usersDAO->getUserByToken($token);

    // Verifica si se encontró un usuario y si el token no ha expirado
    if ($user && !$tokenHasExpired($user['token_expiration'])) {
        // El token es válido
        return true;
    }

    // El token es inválido
    return false;
}

// Función para verificar si el token ha expirado
function tokenHasExpired($expirationDate) {
    // Implementa la lógica para verificar si el token ha expirado
    // Puedes comparar la fecha actual con la fecha de expiración del token

    // Supongamos que $expirationDate es una cadena en formato de fecha y hora (ejemplo: '2023-06-22 12:00:00')
    $currentDate = date('Y-m-d H:i:s');
    if ($currentDate > $expirationDate) {
        // El token ha expirado
        return true;
    }

    // El token no ha expirado
    return false;
}
?>
