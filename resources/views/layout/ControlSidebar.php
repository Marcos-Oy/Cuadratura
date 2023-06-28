<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3 d-flex flex-column">
        <u>
            <h5>Información de usuario</h5>
        </u>

        <h6>Usuario:</h6>
        <p>CUADRA</p>

        <h6>Tipo de usuario:</h6>
        <p>Administrador</p>

        <a href="<?php echo $this->raiz; ?>/users/setup" class="justify-content-md-end">
            <button type="button" class="btn btn-warning">
                ⚙ Configurar
            </button>
        </a>
        
        &nbsp;&nbsp;

        <form action="<?php echo $this->raiz; ?>/logout" method="POST">
            <button type="submit" class="btn btn-danger">
                🚪 Salir
            </button>
        </form>
    </div>
</aside>
<!-- /.control-sidebar -->
