// Variable para almacenar el tiempo de inactividad permitido en milisegundos (14 minutos y 59 segundos en este caso)
var inactivityTimeout = 900000;

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
