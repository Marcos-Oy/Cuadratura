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
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo $this->raiz; ?>/public/plugins/toastr/toastr.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $this->raiz; ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="<?php echo $this->raiz; ?>/public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $this->raiz; ?>/public/dist/js/adminlte.min.js"></script>

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
                            <?php if($_SERVER['REQUEST_URI'] === $this->raiz . "/ArchLogs"){ ?>
                            <h1 class="m-0">Registros Refrescos ArchLogs</h1>
                            <?php } if($_SERVER['REQUEST_URI'] === $this->raiz . "/ModelDatos"){ ?>
                            <h1 class="m-0">Registros de Modelo de Datos 2.0</h1>
                            <?php } if($_SERVER['REQUEST_URI'] === $this->raiz . "/ViewsProceduresAMPM"){ ?>
                            <h1 class="m-0">Registros de cargas</h1>
                            <?php } ?>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- /.content-header -->

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?php foreach ($infoArchLogs as $clave => $fileName) {
                            $cleanedPath = preg_replace('/[^a-zA-Z0-9]+/', '', $fileName['path']);
                            $sectionId = 'section_' . $cleanedPath;?>
                        <div class="col-12 col-sm-6">
                            <section id="<?php echo $sectionId ?>">
                                <div class="card card-dark card-tabs">
                                    <div class="card-header p-0 pt-1">
                                        <h3 class="card-title">
                                            <?php echo '| '. $fileName['modification_time']; 
                                        if (date('Y-m-d') === date('Y-m-d', strtotime($fileName['modification_time']))) {
                                            echo " ✔";
                                        } else {
                                            echo " ⚠";
                                        }
                                        echo "<br>".' | '. $fileName['path']; ?>
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool custom-btn-tool"
                                                data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade show active" id="HSS" role="tabpanel"
                                                aria-labelledby="HSS-tab">
                                                <iframe class="col-lg-12" height="425"
                                                    src="<?php echo $this->raiz; ?>/resources/assets/logs/<?php echo $fileName['path']; ?>"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div><!-- /.col -->
                        <?php } ?>
                        <?php include_once $Toasts;?>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <?php include ('resources/views/layout/ControlSidebar.php'); ?>
        <?php include ('resources/views/layout/footer.php'); ?>

    </div>


</body>

</html>