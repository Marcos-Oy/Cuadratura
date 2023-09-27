<div class="card card-warning">
    <div class="card-header">
        <h2 class="card-title">
            <a id="toggle-menu-button-pen" role="button"><i class="fas fa-bars"></i> Menú</a>
        </h2>
    </div>
    <div class="card-body table-responsive">
        <div class="row">
            <div class="col-5 col-sm-3" id="vertical-menu-pen">
                <style>
                .vertical-menu-container {
                    max-height: 450px;
                    /* Establece la altura máxima deseada para mostrar el scroll */
                    overflow-y: auto;
                    /* Habilita la barra de desplazamiento vertical cuando sea necesario */
                }
                </style>
                <div class="vertical-menu-container">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                        aria-orientation="vertical">
                        <?php foreach ($PenArray as $Rclave => $RfileName) {
                            $RcleanedPath = preg_replace('/[^a-zA-Z0-9]+/', '', $RfileName['path']); ?>
                        <a class="nav-link active" style="font-size: 14px;" id="vert-tabs-<?= $RcleanedPath; ?>-tab"
                            data-toggle="pill" href="#vert-tabs-<?= $RcleanedPath; ?>" role="tab"
                            aria-controls="vert-tabs-<?= $RcleanedPath; ?>"
                            aria-selected="true"><?= $RfileName['path']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                    <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane fade show active">
                            Seleccione una opción para visualizar .log
                        </div>
                        <?php foreach ($PenArray as $Rclave => $RfileName) {
                        $RcleanedPath = preg_replace('/[^a-zA-Z0-9]+/', '', $RfileName['path']); ?>
                        <div class="tab-pane fade" id="vert-tabs-<?= $RcleanedPath; ?>" role="tabpanel"
                            aria-labelledby="vert-tabs-<?= $RcleanedPath; ?>-tab">
                            <p><?= $RfileName['path']; ?> | <?= $RfileName['modification_time']; ?></p>
                            <iframe id="log-iframe-pen-<?= $RcleanedPath; ?>" class="col-lg-12" height="425"
                                src="<?php echo $this->raiz; ?>/resources/assets/logs/<?= $RfileName['path']; ?>"></iframe>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
</div>

<script>
// Selecciona los elementos correspondientes con el prefijo "pen"
const toggleMenuButtonPen = document.getElementById('toggle-menu-button-pen');
const verticalMenuPen = document.getElementById('vertical-menu-pen');

<?php foreach ($PenArray as $Rclave => $RfileName) {
$RcleanedPath = preg_replace('/[^a-zA-Z0-9]+/', '', $RfileName['path']); ?>

const logIframePen<?= $RcleanedPath; ?> = document.getElementById('log-iframe-pen-<?= $RcleanedPath; ?>');

<?php } ?>

// Variable para rastrear el estado del menú
let menuVisiblePen = true;

// Agrega un controlador de eventos al botón
toggleMenuButtonPen.addEventListener('click', () => {
    // Cambia la visibilidad del menú y actualiza el estado
    if (menuVisiblePen) {
        verticalMenuPen.style.display = 'none'; // Oculta el menú
    } else {
        verticalMenuPen.style.display = 'block'; // Muestra el menú
    }
    menuVisiblePen = !menuVisiblePen; // Invierte el estado

    // Ajusta el ancho del iframe después de un breve retraso para que la animación del menú tenga tiempo de completarse
    setTimeout(() => {
        adjustIframeWidthPen();
    }, 300); // Ajusta el tiempo según la duración de la animación del menú (en milisegundos)
});

// Función para ajustar el ancho del iframe con el prefijo "pen"
function adjustIframeWidthPen() {
    const windowWidthPen = window.innerWidth;
    const verticalMenuWidthPen = verticalMenuPen.offsetWidth;
    const newIframeWidthPen = windowWidthPen - verticalMenuWidthPen;

    <?php foreach ($PenArray as $Rclave => $RfileName) {
    $RcleanedPath = preg_replace('/[^a-zA-Z0-9]+/', '', $RfileName['path']); ?>
    logIframePen<?= $RcleanedPath; ?>.style.width = newIframeWidthPen + 'px';
    <?php } ?>
}

// Ajusta el ancho del iframe cuando se carga la página
window.addEventListener('load', () => {
    adjustIframeWidthPen();
});

// Ajusta el ancho del iframe cuando se cambia el tamaño de la ventana
window.addEventListener('resize', () => {
    adjustIframeWidthPen();
});
</script>