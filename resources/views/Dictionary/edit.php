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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                        <div class="col-sm-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2>
                                        Editar
                                        <a href="<?php echo $this->raiz; ?>/dictionary/show"
                                            class="justify-content-md-end">
                                            <button type="button" class="btn btn-secondary">
                                                Volver
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="<?php echo $this->raiz; ?>/edit/dictionary">
                                        <?php if (!empty($result)): ?>
                                        <input type="hidden" name="CLAVE" value="<?php echo $result['CLAVE'];?>">
                                        <div class="row">
                                            <!-- COLUMNA 1 -->
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Cambiar Prioridad</label>
                                                    <select id="PRIORIDAD" name="PRIORIDAD" class="form-control">
                                                        <!-- Los values están inversos porque el setUSER_STATE de UsersModel los invierte -->
                                                        <option value="Alta"
                                                            <?php if ($result['PRIORIDAD'] == "Alta") echo 'selected'; ?>>
                                                            Alta</option>
                                                        <option value="Media"
                                                            <?php if ($result['PRIORIDAD'] == "Media") echo 'selected'; ?>>
                                                            Media</option>
                                                        <option value="Baja"
                                                            <?php if ($result['PRIORIDAD'] == "Baja") echo 'selected'; ?>>
                                                            Baja</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Cambiar Estado</label>
                                                    <select id="ESTADO" name="ESTADO" class="form-control">
                                                        <!-- Los values están inversos porque el setUSER_STATE de UsersModel los invierte -->
                                                        <option value="Resuelto"
                                                            <?php if ($result['ESTADO'] == "Resuelto") echo 'selected'; ?>>
                                                            Resuelto</option>
                                                        <option value="Progreso"
                                                            <?php if ($result['ESTADO'] == "Progreso") echo 'selected'; ?>>
                                                            Progreso</option>
                                                        <option value="Pendiente"
                                                            <?php if ($result['ESTADO'] == "Pendiente") echo 'selected'; ?>>
                                                            Pendiente</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Link de archivo adjunto</label>
                                                    <input id="ADJUNTO" type="text" name="ADJUNTO" class="form-control"
                                                        value="<?php echo $result['ADJUNTO'];?>"
                                                        placeholder="Ingrese link de adjunto...">
                                                </div>

                                            </div>

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control" rows="5" cols="40" id="DESCRIPCION"
                                                        type="text" name="DESCRIPCION" class="form-control"
                                                        placeholder="Ingrese la descripción del problema..."><?php echo $result['DESCRIPCION'];?></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Comentario</label>
                                                    <textarea class="form-control" rows="5" cols="40" id="COMENTARIO"
                                                        type="text" name="COMENTARIO" class="form-control"
                                                        placeholder="Ingrese la Comentario del problema..."><?php echo $result['COMENTARIO'];?></textarea>
                                                </div>

                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <?php else: ?>
                                        <p>No se encontraron datos.</p>
                                        <?php endif; ?>
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