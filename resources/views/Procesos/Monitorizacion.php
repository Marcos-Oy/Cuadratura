<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monitoreo Procesos</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Monitorización de los procesos
                                <a href="<?php echo $this->raiz; ?>/Monitorizacion/Procesos" class="justify-content-md-end">
                                    <button id="RefrescarMonitoreo" type="button" class="btn btn-info btn-sm">
                                        <i class="fas fa-refresh" aria-hidden="false">
                                        Refrescar</i>
                                    </button>
                                </a>
                            </h1>
                        </div><!-- /.col -->
                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">¿Se te han cerrado las sesiones putty? <a id="outPutty"
                                        name="Comportamientos" href="#">Haz clic aquí</a></li>
                            </ol>
                        </div> -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <!-- Colocar aquí otros bloques de contenido si es necesario -->
                        <div class="col-12 col-sm-4">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h4 class="card-title">ResultdBox</h4>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="ResultInetTable"
                                        class="table table-striped table-bordered table-condensed table-hover table-small-font">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Count</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($ResultdBox): ?>
                                            <?php foreach($ResultdBox as $row): ?>
                                            <tr>
                                                <td><?php echo $row['FECHA'] ?></td>
                                                <td><?php echo $row['Q'] ?></td>
                                            </tr>

                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No hay registros actualmente
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                        <!-- Colocar aquí otros bloques de contenido si es necesario -->
                        <div class="col-12 col-sm-4">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h4 class="card-title">ResultInet</h4>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="ResultInetTable"
                                        class="table table-striped table-bordered table-condensed table-hover table-small-font">
                                        <thead>
                                            <tr>
                                                <th>Count</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $ResultInet['Q'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                        <!-- Colocar aquí otros bloques de contenido si es necesario -->
                        <div class="col-12 col-sm-4">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h4 class="card-title">ResultDetaInet</h4>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="ResultInetTable"
                                        class="table table-striped table-bordered table-condensed table-hover table-small-font">
                                        <thead>
                                            <tr>
                                                <th>Count</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $ResultDetaInet['Q'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->

                    <div class="row">

                        <!-- Colocar aquí otros bloques de contenido si es necesario -->
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h4 class="card-title">LOGPROC</h4>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table id="TableOne"
                                        class="table table-striped table-bordered table-condensed table-hover table-small-font">
                                        <thead>
                                            <tr>
                                                <th>NOMB_PROCESO</th>
                                                <th>FECH_INI</th>
                                                <th>FECH_FIN</th>
                                                <th>OBSERVACION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($LOGPROC): ?>
                                            <?php foreach($LOGPROC as $row): ?>
                                            <tr>
                                                <td><?php echo $row['NOMB_PROCESO'] ?></td>
                                                <td><?php echo $row['FECH_INI'] ?></td>
                                                <td><?php echo $row['FECH_FIN'] ?></td>
                                                <td><?php echo $row['OBSERVACION'] ?></td>
                                            </tr>

                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No hay registros actualmente
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                        <!-- Colocar aquí otros bloques de contenido si es necesario -->
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h4 class="card-title">LOGPROCINET</h4>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table id="TableTwo"
                                        class="table table-striped table-bordered table-condensed table-hover table-small-font">
                                        <thead>
                                            <tr>
                                                <th>NOMB_PROCESO</th>
                                                <th>FECH_INI</th>
                                                <th>FECH_FIN</th>
                                                <th>OBSERVACION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($LOGPROCINET): ?>
                                            <?php foreach($LOGPROCINET as $row): ?>
                                            <tr>
                                                <td><?php echo $row['NOMB_PROCESO'] ?></td>
                                                <td><?php echo $row['FECH_INI'] ?></td>
                                                <td><?php echo $row['FECH_FIN'] ?></td>
                                                <td><?php echo $row['OBSERVACION'] ?></td>
                                            </tr>

                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No hay registros actualmente
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                        <!-- Colocar aquí otros bloques de contenido si es necesario -->
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h4 class="card-title">LOGPROCFONO</h4>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table id="TableTree"
                                        class="table table-striped table-bordered table-condensed table-hover table-small-font">
                                        <thead>
                                            <tr>
                                                <th>NOMB_PROCESO</th>
                                                <th>FECH_INI</th>
                                                <th>FECH_FIN</th>
                                                <th>OBSERVACION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($LOGPROCFONO): ?>
                                            <?php foreach($LOGPROCFONO as $row): ?>
                                            <tr>
                                                <td><?php echo $row['NOMB_PROCESO'] ?></td>
                                                <td><?php echo $row['FECH_INI'] ?></td>
                                                <td><?php echo $row['FECH_FIN'] ?></td>
                                                <td><?php echo $row['OBSERVACION'] ?></td>
                                            </tr>

                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No hay registros actualmente
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                        <!-- Colocar aquí otros bloques de contenido si es necesario -->
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h4 class="card-title">LOGPROCFONOCORN</h4>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table id="TableFour"
                                        class="table table-striped table-bordered table-condensed table-hover table-small-font">
                                        <thead>
                                            <tr>
                                                <th>NOMB_PROCESO</th>
                                                <th>FECH_INI</th>
                                                <th>FECH_FIN</th>
                                                <th>OBSERVACION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($LOGPROCFONOcorn): ?>
                                            <?php foreach($LOGPROCFONOcorn as $row): ?>
                                            <tr>
                                                <td><?php echo $row['NOMB_PROCESO'] ?></td>
                                                <td><?php echo $row['FECH_INI'] ?></td>
                                                <td><?php echo $row['FECH_FIN'] ?></td>
                                                <td><?php echo $row['OBSERVACION'] ?></td>
                                            </tr>

                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No hay registros actualmente
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                    </div>
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
    <script src="<?php echo $this->raiz; ?>/resources/assets/js/tables1.js"></script>
    <script src="<?php echo $this->raiz; ?>/resources/assets/js/tables2.js"></script>
    <script src="<?php echo $this->raiz; ?>/resources/assets/js/tables3.js"></script>
    <script src="<?php echo $this->raiz; ?>/resources/assets/js/tables4.js"></script>



</body>

</html>