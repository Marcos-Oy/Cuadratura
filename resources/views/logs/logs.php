<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>load records</title>

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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Registros de cargas</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo $this->raiz; ?>/ArchLogs">Arch Logs</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo $this->raiz; ?>/ModelDatos">Modelo de
                                        datos 2</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12 col-sm-6">
                            <div class="card card-dark card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool custom-btn-tool"
                                            data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="HSS-tab" data-toggle="pill" href="#HSS"
                                                role="tab" aria-controls="HSS" aria-selected="true">HSS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ValidLines-tab" data-toggle="pill"
                                                href="#ValidLines" role="tab" aria-controls="ValidLines"
                                                aria-selected="false">ValidLines</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="IbnLines-tab" data-toggle="pill" href="#IbnLines"
                                                role="tab" aria-controls="IbnLines" aria-selected="false">IbnLines</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="PSVA-tab" data-toggle="pill" href="#PSVA" role="tab"
                                                aria-controls="PSVA" aria-selected="false">PSVA</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="TIVO-tab" data-toggle="pill" href="#TIVO" role="tab"
                                                aria-controls="TIVO" aria-selected="false">TIVO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="FTTH-ONT-GW-tab" data-toggle="pill"
                                                href="#FTTH-ONT-GW" role="tab" aria-controls="FTTH-ONT-GW"
                                                aria-selected="false">FtthONTGW</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="HSS" role="tabpanel"
                                            aria-labelledby="HSS-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Carga_HSS.log"></iframe>

                                        </div>
                                        <div class="tab-pane fade" id="ValidLines" role="tabpanel"
                                            aria-labelledby="ValidLines-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_Validline.log"></iframe>
                                        </div>
                                        <div class="tab-pane fade" id="IbnLines" role="tabpanel"
                                            aria-labelledby="IbnLines-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_ibnlines.log"></iframe>
                                        </div>
                                        <div class="tab-pane fade" id="PSVA" role="tabpanel" aria-labelledby="PSVA-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Carga_PSVA.log"></iframe>
                                        </div>
                                        <div class="tab-pane fade" id="TIVO" role="tabpanel" aria-labelledby="TIVO-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Carga_Tivo.log"></iframe>
                                        </div>
                                        <div class="tab-pane fade" id="FTTH-ONT-GW" role="tabpanel"
                                            aria-labelledby="FTTH-ONT-GW-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Carga_FTTH_ONT_GW.log"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="card card-dark card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool custom-btn-tool"
                                            data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Internet-tab" data-toggle="pill"
                                                href="#Internet" role="tab" aria-controls="Internet"
                                                aria-selected="true">Internet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Adrenalin-tab" data-toggle="pill" href="#Adrenalin"
                                                role="tab" aria-controls="Adrenalin" aria-selected="false">Adrenalin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Inventario-tab" data-toggle="pill"
                                                href="#Inventario" role="tab" aria-controls="Inventario"
                                                aria-selected="false">Inventario</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="AMS-tab" data-toggle="pill" href="#AMS" role="tab"
                                                aria-controls="AMS" aria-selected="false">AMS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="BBMS-tab" data-toggle="pill" href="#BBMS" role="tab"
                                                aria-controls="BBMS" aria-selected="false">BBMS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="Internet" role="tabpanel"
                                            aria-labelledby="Internet-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_inet.log"></iframe>
                                        </div>
                                        <div class="tab-pane fade" id="Adrenalin" role="tabpanel"
                                            aria-labelledby="Adrenalin-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Carga_Adrenalin2.log"></iframe>
                                        </div>
                                        <div class="tab-pane fade" id="Inventario" role="tabpanel"
                                            aria-labelledby="Inventario-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_Inventario.log"></iframe>
                                        </div>
                                        <div class="tab-pane fade" id="AMS" role="tabpanel" aria-labelledby="AMS-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_AMS.log"></iframe>
                                        </div>
                                        <div class="tab-pane fade" id="BBMS" role="tabpanel" aria-labelledby="BBMS-tab">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Modificación</th>
                                                        <th>Tamaño</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publicación</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Recepción</b></td>
                                                        <td>Nombre</td>
                                                        <td>Modificación</td>
                                                        <td>Tamaño✔⚠</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_BBMS.log"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
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

</body>

</html>