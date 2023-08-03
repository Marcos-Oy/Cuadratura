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
                                <li class="breadcrumb-item">
                                    <a href="<?php echo $this->raiz; ?>/ArchLogs">
                                        Arch Logs
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="<?php echo $this->raiz; ?>/ModelDatos">
                                        Modelo de datos 2
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="<?php echo $this->raiz; ?>/ViewsProceduresAMPM">
                                        Procesos AM - PM
                                    </a>
                                </li>
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
                                            <a class="nav-link" id="HSS-tab" data-toggle="pill" href="#HSS" role="tab"
                                                aria-controls="HSS" aria-selected="true">HSS</a>
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

                                        <div class="tab-pane fade show active">
                                            Seleccione una opción para visualizar .log
                                        </div>

                                        <div class="tab-pane fade" id="HSS" role="tabpanel" aria-labelledby="HSS-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicHSS['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicHSS['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToPublicHSS['size'] / 1024) >= 15) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicHSS['modification_time'];
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicHSS['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[0]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[0]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[0]['size'] / 1024) >= 24) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[0]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[0]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>


                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Carga_HSS.log"></iframe>

                                        </div>

                                        <div class="tab-pane fade" id="ValidLines" role="tabpanel"
                                            aria-labelledby="ValidLines-tab">
                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicValidLines['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicValidLines['size'] / 1024); ?>
                                                            KB
                                                            <?php if (ceil($filesToPublicValidLines['size'] / 1024) >= 13000) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicValidLines['modification_time'];
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicValidLines['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        }  ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[2]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[2]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[2]['size'] / 1024) >= 3) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[2]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[2]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_Validline.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="IbnLines" role="tabpanel"
                                            aria-labelledby="IbnLines-tab">
                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicIbnLines['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicIbnLines['size'] / 1024); ?>
                                                            KB
                                                            <?php if (ceil($filesToPublicIbnLines['size'] / 1024) >= 5000) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicIbnLines['modification_time'];
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicIbnLines['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[1]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[1]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[1]['size'] / 1024) >= 1) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[1]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[1]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_ibnlines.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="PSVA" role="tabpanel" aria-labelledby="PSVA-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicPSVA['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicPSVA['size'] / 1024); ?>
                                                            KB
                                                            <?php if (ceil($filesToPublicPSVA['size'] / 1024) >= 4000) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicPSVA['modification_time'];
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicPSVA['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[3]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[3]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[3]['size'] / 1024) >= 2) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[3]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[3]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Carga_PSVA.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="TIVO" role="tabpanel" aria-labelledby="TIVO-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicTIVO['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicTIVO['size'] / 1024); ?>
                                                            KB
                                                            <?php if (ceil($filesToPublicTIVO['size'] / 1024) >= 1400000) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicTIVO['modification_time'];
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicTIVO['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[12]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[12]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[12]['size'] / 1024) >= 3) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[12]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[12]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Carga_Tivo.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="FTTH-ONT-GW" role="tabpanel"
                                            aria-labelledby="FTTH-ONT-GW-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicONT['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicONT['size'] / 1024); ?>
                                                            KB
                                                            <?php if (ceil($filesToPublicONT['size'] / 1024) >= 2000) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicONT['modification_time'];
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicONT['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[13]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[13]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[13]['size'] / 1024) >= 3) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[13]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[13]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
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
                            <!-- </div>

                        <div class="col-12 col-sm-6"> -->
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
                                            <a class="nav-link" id="Adrenalin-tab" data-toggle="pill" href="#Adrenalin"
                                                role="tab" aria-controls="Adrenalin"
                                                aria-selected="false">Carga-Adrenalin</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="ProcesoAdrenalin-tab" data-toggle="pill"
                                                href="#ProcesoAdrenalin" role="tab" aria-controls="ProcesoAdrenalin"
                                                aria-selected="true">Proceso</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="EstadisticasAdrenalin-tab" data-toggle="pill"
                                                href="#EstadisticasAdrenalin" role="tab"
                                                aria-controls="EstadisticasAdrenalin"
                                                aria-selected="false">Estadisticas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="SecuenciaAdrenalin-tab" data-toggle="pill"
                                                href="#SecuenciaAdrenalin" role="tab" aria-controls="SecuenciaAdrenalin"
                                                aria-selected="false">Secuencia</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">

                                        <div class="tab-pane fade show active">
                                            Seleccione una opción para visualizar .log
                                        </div>

                                        <div class="tab-pane fade" id="Adrenalin" role="tabpanel"
                                            aria-labelledby="Adrenalin-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[7]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[7]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[7]['size'] / 1024) >= 2) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[7]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[7]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Carga_Adrenalin2.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="ProcesoAdrenalin" role="tabpanel"
                                            aria-labelledby="ProcesoAdrenalin-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[5]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[5]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[5]['size'] / 1024) >= 1) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[5]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[5]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/ProcesoAdrenalin.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="EstadisticasAdrenalin" role="tabpanel"
                                            aria-labelledby="EstadisticasAdrenalin-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[6]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[6]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[6]['size'] / 1024) >= 1) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[6]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[6]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Estadisticas_Adrenalin.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="SecuenciaAdrenalin" role="tabpanel"
                                            aria-labelledby="SecuenciaAdrenalin-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[8]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[8]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[8]['size'] / 1024) >= 1) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[8]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[8]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/Secuencia_Adrenalin.log"></iframe>
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
                                            <a class="nav-link" id="Internet-tab" data-toggle="pill" href="#Internet"
                                                role="tab" aria-controls="Internet" aria-selected="true">Internet</a>
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

                                        <div class="tab-pane fade show active">
                                            Seleccione una opción para visualizar .log
                                        </div>

                                        <div class="tab-pane fade" id="Internet" role="tabpanel"
                                            aria-labelledby="Internet-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicINET['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicINET['size'] / 1024); ?>
                                                            KB
                                                            <?php if (ceil($filesToPublicINET['size'] / 1024) >= 30000) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicINET['modification_time'];
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicINET['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[4]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[4]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[4]['size'] / 1024) >= 3) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[4]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[4]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_inet.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="Inventario" role="tabpanel"
                                            aria-labelledby="Inventario-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicINVENTARIO['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicINVENTARIO['size'] / 1024); ?>
                                                            KB
                                                            <?php if (ceil($filesToPublicINVENTARIO['size'] / 1024) >= 23) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicINVENTARIO['modification_time'];
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicINVENTARIO['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[9]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[9]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[9]['size'] / 1024) >= 3) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[9]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[9]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_Inventario.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="AMS" role="tabpanel" aria-labelledby="AMS-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicAMS['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicAMS['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToPublicAMS['size'] / 1024) >= 15) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicAMS['modification_time'];
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicAMS['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[10]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[10]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[10]['size'] / 1024) >= 3) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[10]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[10]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <iframe class="col-lg-12" height="425"
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/carga_AMS.log"></iframe>
                                        </div>

                                        <div class="tab-pane fade" id="BBMS" role="tabpanel" aria-labelledby="BBMS-tab">

                                            <style>
                                            .table-small-font td,
                                            .table-small-font th {
                                                font-size: 12px;
                                                /* Puedes ajustar el tamaño de fuente según tus preferencias */
                                            }
                                            </style>

                                            <!-- Tabla con tamaño de fuente reducido -->
                                            <table class="table table-bordered table-small-font">
                                                <thead>
                                                    <tr>
                                                        <th>ℹ</th>
                                                        <th>Nombre</th>
                                                        <th>Tamaño</th>
                                                        <th>Modificación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Publ</b></td>
                                                        <td><?php echo $filesToPublicBBMS['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToPublicBBMS['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToPublicBBMS['size'] / 1024) >= 28) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToPublicBBMS['modification_time']; 
                                                        if (date('Y-m-d') === date('Y-m-d', strtotime($filesToPublicBBMS['modification_time']))) {
                                                            echo " ✔";
                                                        } else {
                                                            echo " ⚠";
                                                        }
                                                        ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Re</b></td>
                                                        <td><?php echo $filesToInfo[11]['path']; ?></td>
                                                        <td>
                                                            <?php echo ceil($filesToInfo[11]['size'] / 1024); ?> KB
                                                            <?php if (ceil($filesToInfo[11]['size'] / 1024) >= 3) { echo " ✔"; } else { echo " ⚠"; } ?>
                                                        </td>
                                                        <td><?php echo $filesToInfo[11]['modification_time']; 
                                                                if (date('Y-m-d') === date('Y-m-d', strtotime($filesToInfo[11]['modification_time']))) {
                                                                    echo " ✔";
                                                                } else {
                                                                    echo " ⚠";
                                                                }?></td>
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