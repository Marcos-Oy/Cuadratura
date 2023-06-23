<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Datos</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $raiz; ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $raiz; ?>/public/dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include ('resources/views/layout/navbar.php'); ?>
        <?php include ('resources/views/layout/MainSidebar.php'); ?>

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2 class="card-title">Mis Datos</h2>
                                    <div
                                        class="custom-control custom-switch d-grid gap-2 d-md-flex justify-content-md-end">
                                        <h2 class="card-title">Habilitar edición</h2>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" class="custom-control-input" id="Hedit"
                                            onclick="SwitchCheckBox()">
                                        <label class="custom-control-label" for="Hedit"></label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="?control=MisDatos&action=EditarMisDatos">
                                        <div class="row">
                                            <!-- COLUMNA 1 -->
                                            <input type="hidden" value="" name="username">

                                            <input type="hidden" value="" name="activo">

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input name="nombre" id="nombre" type="text" class="form-control"
                                                        value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido paterno</label>
                                                    <input name="paterno" id="paterno" type="text" class="form-control"
                                                        value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido materno</label>
                                                    <input name="materno" id="materno" type="text" class="form-control"
                                                        value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Teléfono</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                                        </div>
                                                        <input name="tel" id="tel" type="number" class="form-control"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>E-Mail</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input name="mail" id="mail" type="email" class="form-control"
                                                            value="">
                                                    </div>
                                                </div>

                                                <button name="btn1" id="btn1" type="submit"
                                                    class="btn btn-warning">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2 class="card-title">Cambiar contraseña</h2>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="?control=MisDatos&action=EditarPass">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Contraseña Actual</label>
                                                    <input name="actual" id="actual" type="password"
                                                        class="form-control" placeholder="Ingrese contraseña...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nueva contraseña</label>
                                                    <input name="nueva" id="nueva" type="password" class="form-control"
                                                        placeholder="Ingrese contraseña...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirmar Contraseña</label>
                                                    <input name="confirmar" id="confirmar" type="password"
                                                        class="form-control" placeholder="Ingrese contraseña...">
                                                </div>
                                                <button name="btn2" id="btn2" type="submit"
                                                    class="btn btn-warning">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include ('resources/views/layout/ControlSidebar.php'); ?>
    <?php include ('resources/views/layout/footer.php'); ?>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo $raiz; ?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $raiz; ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $raiz; ?>/public/dist/js/adminlte.min.js"></script>
    <script src="<?php echo $raiz; ?>/resources/assets/js/MisDatos.js"></script>
</body>