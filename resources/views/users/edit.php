<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>

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

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2>
                                        Editar usuario
                                        <a href="<?php echo $this->raiz; ?>/users/show" class="justify-content-md-end">
                                            <button type="button" class="btn btn-secondary">
                                                Volver
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="<?php echo $this->raiz; ?>/edit/user">
                                        <?php if (!empty($result)): ?>
                                        <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                                        <div class="row">
                                            <!-- COLUMNA 1 -->
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input id="name" type="text" name="name" class="form-control"
                                                        value="<?php echo $result['name'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Contraseña</label>
                                                    <input id="password" name="password" type="password"
                                                        class="form-control" value="<?php echo $result['password'];?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input id="email" name="email" type="email" class="form-control"
                                                            value="<?php echo $result['email'];?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Seleccionar Estado</label>
                                                    <select id="state" name="state" class="form-control">
                                                        <option value="1"
                                                            <?php if ($result['state'] == 1) echo 'selected'; ?>>
                                                            Activado</option>
                                                        <option value="0"
                                                            <?php if ($result['state'] == 0) echo 'selected'; ?>>
                                                            Desactivado</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <?php else: ?>
                                        <p>No se encontraron datos.</p>
                                        <?php endif; ?>
                                    </form>


                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2>Contraseña</h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="<?php echo $this->raiz; ?>/reset/password">
                                        <input type="hidden" value="<?php echo $result['id']; ?>" name="id">
                                        <button type="submit" class="btn btn-warning col-sm-12">⚠ Restablecer ⚠</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </section>
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