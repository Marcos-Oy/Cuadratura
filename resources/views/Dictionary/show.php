<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diccionario de errores</title>

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
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2>Book
                                        <a href="<?php echo $this->raiz; ?>/dictionary/create"
                                            class="justify-content-md-end">
                                            <button type="button" class="btn btn-success">
                                                Nuevo
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="card-body">
                                        <style>
                                        .table-small-font td,
                                        .table-small-font th {
                                            font-size: 12px;
                                            /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                        }
                                        </style>
                                        <table id="UsersTable"
                                        class="table table-striped table-bordered table-condensed table-hover table-small-font">
                                            <thead>
                                                <tr>
                                                    <th>clave</th>
                                                    <th>date_created</th>
                                                    <th>date_updated</th>
                                                    <th>descripcion</th>
                                                    <th>prioridad</th>
                                                    <th>estado</th>
                                                    <th>comentario</th>
                                                    <th>adjunto</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($rows): ?>
                                                <?php foreach($rows as $row): ?>
                                                <tr>
                                                    <td><?= $row['CLAVE'] ?></td>
                                                    <td><?= $row['DATE_CREATED'] ?></td>
                                                    <td><?= $row['DATE_UPDATED'] ?></td>
                                                    <td><?= $row['DESCRIPCION'] ?></td>
                                                    <td class="<?= getPrioridadClass($row['PRIORIDAD']) ?>">
                                                        <?= $row['PRIORIDAD'] ?></td>
                                                    <td class="<?= getEstadoClass($row['ESTADO']) ?>">
                                                        <?= $row['ESTADO'] ?></td>
                                                    <td><?= $row['COMENTARIO'] ?></td>
                                                    <td>
                                                        <?php if($row['ADJUNTO'] !== "#"){ ?>
                                                        <a href="<?= $row['ADJUNTO'] ?>" target="_blank"
                                                            class="justify-content-md-end">
                                                            <button type="button" class="btn btn-info btn-xs">
                                                                <i class="fas fa-download" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                        <?php } else {?>
                                                        Sin Documento
                                                        <?php } ?>
                                                    </td>

                                                    <td>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <form method='POST'
                                                                    action='<?php echo $this->raiz; ?>/dictionary/edit'>
                                                                    <button class="btn btn-warning btn-xs" type='submit'
                                                                        name='CLAVE' value=<?=$row['CLAVE'];?>>
                                                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                                                    </button>
                                                                </form>
                                                            </div>

                                                            &nbsp;&nbsp;
                                                            <div class="form-group">
                                                                <form method='POST'
                                                                    action='<?php echo $this->raiz; ?>/drop/dictionary'>

                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-danger btn-xs"
                                                                        data-toggle="modal"
                                                                        data-target="#modal-sm-trash-<?=$row['CLAVE']?>">
                                                                        <i class="fas fa-trash" aria-hidden="true"></i>
                                                                    </button>

                                                                    <div class="modal fade"
                                                                        id="modal-sm-trash-<?=$row['CLAVE'];?>">
                                                                        <div class="modal-dialog modal-sm">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Eliminar
                                                                                    </h4>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>¿Desea eliminar permanentemente
                                                                                        <?= $row['CLAVE']?>?
                                                                                    </p>
                                                                                </div>
                                                                                <div
                                                                                    class="modal-footer justify-content-between">
                                                                                    <button type="button"
                                                                                        class="btn btn-default"
                                                                                        data-dismiss="modal">Cancelar</button>
                                                                                    <button class="btn btn-danger"
                                                                                        type='submit' name='CLAVE'
                                                                                        value=<?=$row['CLAVE']?>>
                                                                                        Aceptar
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.modal-content -->
                                                                        </div>
                                                                        <!-- /.modal-dialog -->
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php else: ?>
                                                <tr>
                                                    <td colspan="3" class="text-center">No hay registros actualmente
                                                    </td>
                                                </tr>
                                                <?php endif; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>clave</th>
                                                    <th>date_created</th>
                                                    <th>date_updated</th>
                                                    <th>descripcion</th>
                                                    <th>prioridad</th>
                                                    <th>estado</th>
                                                    <th>comentario</th>
                                                    <th>adjunto</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
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

    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo $this->raiz; ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo $this->raiz; ?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- DataTables  & Plugins -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- JS de tables -->
    <script src="<?php echo $this->raiz; ?>/resources/assets/js/tables.js"></script>

    <style>
    .estado-pendiente {
        background-color: red;
        color: white;
        /* Opcional: Cambia el color del texto para que sea legible en el fondo rojo */
    }

    .estado-progreso {
        background-color: yellow;
    }

    .estado-resuelto {
        background-color: green;
        color: white;
        /* Opcional: Cambia el color del texto para que sea legible en el fondo verde */
    }

    .prioridad-alta {
        background-color: red;
        color: white;
        /* Opcional: Cambia el color del texto para que sea legible en el fondo rojo */
    }

    .prioridad-media {
        background-color: yellow;
    }

    .prioridad-baja {
        background-color: green;
        color: white;
        /* Opcional: Cambia el color del texto para que sea legible en el fondo verde */
    }
    </style>

    <?php
    function getEstadoClass($estado) {
        switch (strtolower($estado)) {
            case 'pendiente':
                return 'estado-pendiente';
            case 'progreso':
                return 'estado-progreso';
            case 'resuelto':
                return 'estado-resuelto';
            default:
                return '';
        }
    }

    function getPrioridadClass($prioridad) {
        switch (strtolower($prioridad)) {
            case 'alta':
                return 'prioridad-alta';
            case 'media':
                return 'prioridad-media';
            case 'baja':
                return 'prioridad-baja';
            default:
                return '';
        }
    }

    ?>


</body>

</html>