<!-- Main Footer -->
<footer class="main-footer">
    <strong>Data-Quality &copy;</strong> All rights reserved.
</footer>

<div id="preloaderContainer"></div>

<script>
function agregarPreloader() {
    // Crea el preloader
    const preloader = document.createElement("div");
    preloader.className = "preloader flex-column justify-content-center align-items-center";

    // Crea la imagen y establece la ruta
    const imagen = document.createElement("img");
    imagen.src = "<?php echo $this->raiz; ?>/resources/assets/img/loading.gif";
    imagen.alt = "progress";
    imagen.height = 150;
    imagen.width = 250;

    // Agrega la imagen al preloader
    preloader.appendChild(imagen);

    // Agrega el preloader al contenedor
    const preloaderContainer = document.getElementById("preloaderContainer");
    preloaderContainer.appendChild(preloader);
}

const CargaPlataforma = document.getElementById("CargaPlataforma");
if (CargaPlataforma) {
    CargaPlataforma.addEventListener("click", agregarPreloader);
}

const CargaRefresco = document.getElementById("CargaRefresco");
if (CargaRefresco) {
    CargaRefresco.addEventListener("click", agregarPreloader);
}

const Logs = document.getElementById("Logs");
if (Logs) {
    Logs.addEventListener("click", agregarPreloader);
}

const ArchLogs = document.getElementById("ArchLogs");
if (ArchLogs) {
    ArchLogs.addEventListener("click", agregarPreloader);
}

const ModelDatos = document.getElementById("ModelDatos");
if (ModelDatos) {
    ModelDatos.addEventListener("click", agregarPreloader);
}

const ViewsProceduresAMPM = document.getElementById("ViewsProceduresAMPM");
if (ViewsProceduresAMPM) {
    ViewsProceduresAMPM.addEventListener("click", agregarPreloader);
}
</script>