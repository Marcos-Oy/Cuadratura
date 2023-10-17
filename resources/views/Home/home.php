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
            <br>
            <h1 class="headline text-success text-center">
                <a href="<?php echo $this->raiz; ?>/Home/dashboard" class="justify-content-md-end">
                    <button id="CreateResumen" name="CreateResumen" type="button" class="btn btn-primary">
                        Crear Resumen
                    </button>
                </a>
            </h1>

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

</body>

</html>