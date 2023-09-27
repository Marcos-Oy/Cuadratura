<script>
function agregarPreloader() {
    // Crea el preloader
    const preloader = document.createElement("div");
    preloader.className = "preloader flex-column justify-content-center align-items-center";
    preloader.style.backgroundColor = "#191F26"; // Cambia el color de fondo a azul

    // Crea la imagen y establece la ruta
    const imagen = document.createElement("img");
    imagen.src = "<?php echo $this->raiz; ?>/resources/assets/img/login.gif";
    imagen.alt = "login";
    imagen.style.height = "auto"; // Establece la altura al 50% del contenedor
    imagen.style.width = "auto"; // Ajusta automáticamente el ancho

    // Agrega la imagen al preloader
    preloader.appendChild(imagen);

    // Agrega el preloader al contenedor
    const preloaderContainer = document.getElementById("preloaderContainer");
    preloaderContainer.appendChild(preloader);
}

const elementos = [
    "Login"
];

elementos.forEach((elemento) => {
    const elementoDOM = document.getElementById(elemento);
    if (elementoDOM) {
        elementoDOM.addEventListener("click", agregarPreloader);
    }
});

</script>
