/**
* @author Marcos Oyarzo
* El ajuste de tiempo de inactividad deben ser igual para tres entidades
* 
* TOKEN_EXPIRATION = public function updateAuthToken($userId, $token)
* inactivity.js = var inactivityTimeout
* Tokens.php = $inactivityTimeout
* 
* recordar que en php se configura en segundos mientras que en javascript
* se configura en milisegundos
*/

// Variable para almacenar el tiempo de inactividad permitido en milisegundos (1 hora en este caso)
var inactivityTimeout = 3600000;


// Variable para almacenar el ID del temporizador
var inactivityTimer;

// Función para mostrar el mensaje de alerta
function showAlert() {
  alert('¡Su sesión a expirado!');
  location.reload();
}

// Función para reiniciar el temporizador
function resetTimer() {
  clearTimeout(inactivityTimer);
  inactivityTimer = setTimeout(showAlert, inactivityTimeout);
}

// Evento para detectar la interacción del usuario
window.addEventListener('mousemove', resetTimer);
window.addEventListener('keydown', resetTimer);
window.addEventListener('scroll', resetTimer);

// Iniciar el temporizador al cargar la página
resetTimer();
