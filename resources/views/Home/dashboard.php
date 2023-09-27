<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

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

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1>404 Error Page</h1> -->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">404 Error Page</li> -->
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <h2 class="headline text-primary text-center"> ¡Bienvenidos!</h2>
            <br>
            <h1 class="headline text-success text-center">
                <div id="hora"></div>
            </h1>
            <?php if($user['USERNAME'] === "MARCOS"){ 
                include_once 'Resumen.php';
                ?>
            <section class="content">
                <div class="container-fluid">
                    <h5 class="mb-2 mt-4">Resumen</h5>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php echo $CountBlanco; ?></h3>
                                    <p>Logs en blanco</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="tab"
                                    data-target="#custom-tabs-two-Blanc">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php echo $CountOk; ?></h3>

                                    <p>Ejecución completa</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="tab"
                                    data-target="#custom-tabs-two-Ok">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?php echo $CountPendiente; ?></h3>

                                    <p>Ejecución pendiente</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-exclamation"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="tab"
                                    data-target="#custom-tabs-two-pen">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-danger" id="custom-tabs-two-tabContent">
                                <div class="inner">
                                    <h3><?php echo $CountErrores; ?></h3>

                                    <p>Errores</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-times"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="tab"
                                    data-target="#custom-tabs-two-errors">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>

                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div>

                <?php } ?>

                <style>
                .card-header {
                    display: none;
                }
                </style>

                <!-- <div class="row"> -->
                <div class="col-12 col-sm-12">
                    <!-- <div class="card card-primary card-tabs"> -->
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist" type="hidden">

                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-Blanc-tab" data-toggle="pill"
                                    href="#custom-tabs-two-Blanc" role="tab" aria-controls="custom-tabs-two-Blanc"
                                    aria-selected="true"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-Ok-tab" data-toggle="pill"
                                    href="#custom-tabs-two-Ok" role="tab" aria-controls="custom-tabs-two-Ok"
                                    aria-selected="false"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-pen-tab" data-toggle="pill"
                                    href="#custom-tabs-two-pen" role="tab" aria-controls="custom-tabs-two-pen"
                                    aria-selected="false"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-errors-tab" data-toggle="pill"
                                    href="#custom-tabs-two-errors" role="tab" aria-controls="custom-tabs-two-errors"
                                    aria-selected="false"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-two-tabContent">
                            <div class="tab-pane fade" id="custom-tabs-two-Blanc" role="tabpanel"
                                aria-labelledby="custom-tabs-two-Blanc-tab">
                                <?php include_once ('BlancResumen.php')?>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-two-Ok" role="tabpanel"
                                aria-labelledby="custom-tabs-two-Ok-tab">
                                <?php include_once ('OkResumen.php')?>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-two-pen" role="tabpanel"
                                aria-labelledby="custom-tabs-two-pen-tab">
                                <?php include_once ('PenResumen.php')?>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-two-errors" role="tabpanel"
                                aria-labelledby="custom-tabs-two-errors-tab">
                                <?php include_once ('ErrorsResumen.php')?>
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- /.card -->
                        <!-- </div> -->
                    </div>
                </div>
            </section>

        </div>


        <style>
        /* Estilo para hacer que el texto "¡Bienvenidos!" sea responsivo */
        .headline.text-primary {
            font-size: 4vw;
            /* Tamaño de fuente relativo al ancho de la pantalla */
        }
        </style>

        <?php //include ('VerticalMenu.php')?>
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


    <script>
    function actualizarHora() {
        var fecha = new Date();
        var hora = fecha.getHours();
        var minutos = fecha.getMinutes();
        var segundos = fecha.getSeconds();
        hora = hora < 10 ? "0" + hora : hora;
        minutos = minutos < 10 ? "0" + minutos : minutos;
        segundos = segundos < 10 ? "0" + segundos : segundos;
        var horaActual = hora + ":" + minutos + ":" + segundos;
        document.getElementById("hora").innerText = horaActual;
    }

    setInterval(actualizarHora, 1000); // Actualizar cada segundo (1000 ms)
    </script>

    <script>
    $(document).ready(function() {
        $('.small-box-footer[data-toggle="tab"]').on('click', function() {
            var target = $(this).data('target');

            // Oculta todos los encabezados de tarjetas
            $('.card-header').hide();

            // Muestra el encabezado de tarjeta correspondiente
            $(target + ' .card-header').show();

            // Activa la pestaña correspondiente
            $('.nav-link[href="' + target + '"]').tab('show');
        });
    });
    </script>



</body>

</html>