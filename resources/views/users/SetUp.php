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
    <link rel="stylesheet" href="<?php echo $this->raiz; ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $this->raiz; ?>/public/dist/css/adminlte.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?php echo $this->raiz; ?>/setup/user">
                                        <div class="row">
                                            <?php if (!empty($result)): ?>
                                            <input type="hidden" name="ID" value="<?php echo $result['ID'];?>">
                                            <!-- COLUMNA 1 -->
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Nombre de usuario</label>
                                                    <input name="USERNAME" id="USERNAME" type="text"
                                                        class="form-control" value="<?php echo $result['USERNAME'];?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>E-Mail</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input name="EMAIL" id="EMAIL" type="email" class="form-control"
                                                            value="<?php echo $result['EMAIL'];?>">
                                                    </div>
                                                </div>

                                                <button name="btn1" id="btn1" type="submit"
                                                    class="btn btn-warning">Guardar</button>
                                            </div>
                                            <?php endif; ?>
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
                                    <form method="POST" action="<?php echo $this->raiz; ?>/setup/user">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Contraseña Actual</label>
                                                    <input name="ACTUAL" id="ACTUAL" type="password"
                                                        class="form-control" placeholder="Ingrese contraseña...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nueva contraseña</label>
                                                    <input name="NUEVA" id="NUEVA" type="password" class="form-control"
                                                        placeholder="Ingrese contraseña...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirmar Contraseña</label>
                                                    <input name="CONFIRMAR" id="CONFIRMAR" type="password"
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
     <script src="<?php echo $this->raiz; ?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $this->raiz; ?>/public/dist/js/adminlte.min.js"></script>
</body>

</html>
