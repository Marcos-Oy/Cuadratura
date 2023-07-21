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
                                <li class="breadcrumb-item"><a href="<?php echo $this->raiz; ?>/logs">Logs</a></li>
                                <li class="breadcrumb-item"><a href="#">Modelo de datos 2.0</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- /.content-header -->

            <!-- mitad 1 -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                        <?php 
                        $totalFiles = count($namesOnly);
                        $halfCount = ceil($totalFiles / 2); // Round up to ensure the first half has enough elements

                        for ($i = 0; $i < $halfCount; $i++) {
                            $fileName = $namesOnly[$i];
                        ?>
                            <div class="card card-dark card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <h3 class="card-title"><?php echo $fileName; ?></h3>
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
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/<?php echo $fileName; ?>">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        } // end of first half foreach loop
                        ?>
                        </div><!-- /.col -->

                        <div class="col-12 col-sm-6">
                            <?php 
                for ($i = $halfCount; $i < $totalFiles; $i++) {
                    $fileName = $namesOnly[$i];
            ?>
                            <div class="card card-dark card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <h3 class="card-title"><?php echo $fileName; ?></h3>
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
                                                src="<?php echo $this->raiz; ?>/resources/assets/logs/<?php echo $fileName; ?>">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                } // end of second half foreach loop
            ?>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- /.content -->



        </div><!-- /.content-wrapper -->

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