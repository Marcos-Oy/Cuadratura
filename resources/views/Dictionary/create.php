<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $this->raiz; ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $this->raiz; ?>/public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include ('resources/views/layout/navbar.php'); ?>
        <?php include ('resources/views/layout/MainSidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2>
                                        Crear
                                        <a href="<?php echo $this->raiz; ?>/dictionary/show" class="justify-content-md-end">
                                            <button type="button" class="btn btn-secondary">
                                                Volver
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="<?php echo $this->raiz; ?>/create/dictionary">
                                        <div class="row">

                                            <!-- COLUMNA 1 -->

                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>CLAVE</label>
                                                    <input id="CLAVE" type="text" name="CLAVE" class="form-control" placeholder="Ingrese clave de error aquí..."
                                                    oninput="this.value = this.value.replace(/\s+/g, '');">
                                                </div>

                                                <div class="form-group">
                                                    <label>Seleccionar Prioridad</label>
                                                    <select id="PRIORIDAD" name="PRIORIDAD" class="form-control">
                                                        <!-- Los values están inversos porque el setState de UsersModel los invierte -->
                                                        <option selected value="Alta">Alta</option>
                                                        <option value="Media">Media</option>
                                                        <option value="Baja">Baja</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Seleccionar Estado</label>
                                                    <select id="ESTADO" name="ESTADO" class="form-control">
                                                        <!-- Los values están inversos porque el setState de UsersModel los invierte -->
                                                        <option selected value="Resuelto">Resuelto</option>
                                                        <option value="Progreso">Progreso</option>
                                                        <option value="Pendiente">Pendiente</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Link del adjunto</label>
                                                    <input id="ADJUNTO" type="text" name="ADJUNTO" class="form-control" placeholder="Ingrese link del adujunto...">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control" rows="5" cols="40" id="DESCRIPCION" type="text" name="DESCRIPCION" class="form-control"
                                                        placeholder="Ingrese la descripción del problema..."></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Comentario o Notas</label>
                                                    <textarea class="form-control" rows="5" cols="40" id="COMENTARIO" type="text" name="COMENTARIO" class="form-control"
                                                        placeholder="Ingrese notas adicionales o la solución..."></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <input type="submit" name="guardar" class="btn btn-success btn-lg"
                                                value="Guardar">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

        <?php include ('resources/views/layout/ControlSidebar.php'); ?>
        <?php include ('resources/views/layout/footer.php'); ?>

    </div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $this->raiz; ?>/public/dist/js/adminlte.min.js"></script>
</body>

</html>