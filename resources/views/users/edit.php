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
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
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
                                        <a href="?control=Users&action=show" class="justify-content-md-end">
                                            <button type="button" class="btn btn-secondary">
                                                Volver
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="?control=Users&action=modify_users">
                                        <?php foreach($result as $row): ?>

                                        <div class="row">
                                            <!-- COLUMNA 1 -->
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Rut</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['rut'];?>" name="rut">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['name'];?>" name="nombre">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['lastname_p'];?>" name="paterno">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['lastname_m'];?>" name="materno">
                                                </div>

                                            </div>

                                            <!-- COLUMNA 2 -->

                                            <div class="col-sm-4">

                                                <div class="form-group">
                                                    <label>Teléfono</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                                        </div>
                                                        <input type="number" class="form-control"
                                                            value="<?php echo $row['phone'];?>" name="tel">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input type="email" class="form-control"
                                                            value="<?php echo $row['mail'];?>" name="email">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- COLUMNA 3 -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Seleccionar Rol</label>
                                                    <select class="form-control" name="role">
                                                        <option value="Admin">Admin</option>
                                                    </select>
                                                </div>

                                                <input type="hidden" value="<?php echo $row['username'];?>"
                                                    name="username2">

                                                <div class="form-group">
                                                    <label>Nombre de usuario</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['username'];?>" name="username">
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        <button type="submit" class="btn btn-success">Guardar</button>
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
                                    <form method="POST" action="?control=Users&action=password_reset">
                                        <input type="hidden" value="<?php echo $row['username'];?>" name="username">
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
    <script src="public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/dist/js/adminlte.min.js"></script>
</body>

</html>