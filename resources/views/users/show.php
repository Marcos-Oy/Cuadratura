<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include ('resources/views/layout/navbar.php'); ?>
        <?php include ('resources/views/layout/MainSidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2>Usuarios
                                        <a href="#" class="justify-content-md-end">
                                            <button type="button" class="btn btn-success">
                                                Nuevo
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="UsersTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>E-Mail</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($rows): ?>
                                            <?php foreach($rows as $row): ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <form method='POST' action='#'>
                                                                <button class="btn btn-warning" type='submit'
                                                                    name='name' value=<?=$row['name'];?>>
                                                                    <i class="fas fa-pen" aria-hidden="true"></i>
                                                                </button>
                                                            </form>
                                                        </div>

                                                        &nbsp;&nbsp;
                                                        <div class="form-group">
                                                            <form method='POST' action='#'>
                                                                <button class="btn btn-danger" type='submit' name='name'
                                                                    value=<?= $row['name'];?>>
                                                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                                                </button>
                                                            </form>
                                                        </div>

                                                        <?php if($row['state'] == 1): ?>
                                                        &nbsp;&nbsp;
                                                        <div class="form-group">
                                                            <form method='POST' action='#'>

                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#modal-sm-des-<?=$row['name']?>">
                                                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                                                </button>

                                                                <input type="hidden" class="form-control"
                                                                    value="<?php echo $row['state'];?>" name="state">

                                                                <div class="modal fade"
                                                                    id="modal-sm-des-<?=$row['name'];?>">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Desactivar
                                                                                    usuario
                                                                                </h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>¿Desea desactivar el usuario de
                                                                                    <?= $row['name']?>?
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer justify-content-between">
                                                                                <button type="button"
                                                                                    class="btn btn-default"
                                                                                    data-dismiss="modal">Cancelar</button>
                                                                                <button class="btn btn-danger"
                                                                                    type='submit' name='name'
                                                                                    value=<?=$row['name']?>>
                                                                                    Aceptar
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if($row['state'] == 0): ?>
                                                        &nbsp;&nbsp;
                                                        <div class="form-group">
                                                            <form method='POST' action='#'>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-toggle="modal"
                                                                    data-target="#modal-sm-act-<?=$row['name'];?>">
                                                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                                                </button>

                                                                <input type="hidden" class="form-control"
                                                                    value="<?php echo $row['state'];?>" name="state">

                                                                <div class="modal fade"
                                                                    id="modal-sm-act-<?=$row['name']?>">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Activar usuario
                                                                                </h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>¿Desea activar el usuario de
                                                                                    <?= $row['name']?>?
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer justify-content-between">
                                                                                <button type="button"
                                                                                    class="btn btn-default"
                                                                                    data-dismiss="modal">Cancelar</button>
                                                                                <button class="btn btn-success"
                                                                                    type='submit' name='name'
                                                                                    value=<?=$row['name']?>>
                                                                                    Aceptar
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No hay registros actualmente</td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>E-Mail</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include ('resources/views/layout/ControlSidebar.php'); ?>
        <?php include ('resources/views/layout/footer.php'); ?>

    </div>
    <!-- REQUIRED SCRIPTS -->
    
    <!-- jQuery -->
    <script src="../public/plugins/jquery/jquery.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- DataTables  & Plugins -->
    <script src="../public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../public/plugins/jszip/jszip.min.js"></script>
    <script src="../public/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../public/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- JS de tables -->
    <script src="../resources/assets/js/tables.js"></script>

    <!-- Bootstrap 4 -->
    <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/dist/js/adminlte.min.js"></script>


</body>

</html>