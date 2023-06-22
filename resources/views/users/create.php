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
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2>
                                        Crear usuario
                                        <a href="?control=Users&action=show" class="justify-content-md-end">
                                            <button type="button" class="btn btn-secondary">
                                                Volver
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="?control=Users&action=create_users">
                                        <div class="row">

                                            <!-- COLUMNA 1 -->

                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input id="nombre" type="text" name="nombre" class="form-control"
                                                        placeholder="Ingrese nombre aquí...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input id="paterno" name="paterno" type="text" class="form-control"
                                                        placeholder="Ingrese apellido paterno aquí...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input id="materno" name="materno" type="text" class="form-control"
                                                        placeholder="Ingrese apellido materno aquí...">
                                                </div>

                                            </div>

                                            <!-- COLUMNA 2 -->

                                            <div class="col-sm-3">

                                                <div class="form-group">
                                                    <label>RUT</label>
                                                    <input id="rut" name="rut" type="text" class="form-control"
                                                        placeholder="Ingrese rut aquí...">
                                                </div>

                                                <div class="form-group">
                                                    <label>Teléfono</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                                        </div>
                                                        <input id="tel" name="tel" type="number" class="form-control"
                                                            placeholder="Ingrese número aquí...">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input id="email" name="email" type="email" class="form-control"
                                                            placeholder="Ingrese email aquí...">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- COLUMNA 3 -->

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Nombre de usuario</label>
                                                    <input id="username" type="text" name="username"
                                                        class="form-control"
                                                        placeholder="Ingrese nombre de usuario aquí...">
                                                </div>

                                                <div class="form-group">
                                                    <label>Seleccionar Rol</label>
                                                    <select id="role" name="role" class="form-control">

                                                        <option selected>Seleccionar rol de usuario</option>
                                                        <option value="admin">admin</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <input type="submit" name="guardar" class="btn btn-success btn-lg"
                                                value="Guardar">
                                        </div>
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