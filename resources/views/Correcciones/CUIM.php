<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Correcciones UIM</title>

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
                                    <h2>Correcciones UIM</h2>
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
                                                    <th>Name</th>
                                                    <th>Estado</th>
                                                    <th>Count</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($rows): ?>
                                                <?php foreach($rows as $row): ?>
                                                <tr>
                                                    <td><?= $row['NAME'] ?></td>
                                                    <td><?= $row['ESTADO'] ?></td>
                                                    <td><?= $row['COUNT'] ?></td>
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
                                                    <th>Tabla</th>
                                                    <th>Estado</th>
                                                    <th>Count</th>
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

</body>

</html>