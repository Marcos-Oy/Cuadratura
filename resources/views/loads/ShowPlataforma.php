<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cargas Plataformas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $this->raiz; ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $this->raiz; ?>/public/dist/css/adminlte.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                                    <h2>Cargas Plataformas
                                        <a href="<?php echo $this->raiz; ?>/insert/plataform"
                                            class="justify-content-md-end">
                                            <?php if($user['USERNAME'] === "MARCOS"){ ?>
                                            <button id="CargaPlataforma" type="button" class="btn btn-success">
                                                Proceder
                                            </button>
                                            <?php } ?>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="card-body table-responsive">
                                        
                                        <table id="RefrescoTable"
                                            class="table table-striped table-bordered table-condensed table-hover">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="TODO" class="btn btn-success btn-xs"
                                                                type='submit' name='TODO'>
                                                                <i class="fas fa-refresh" aria-hidden="true"> </i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <th>TABLA ⬇ FECHA ➡</th>
                                                    <?php foreach($rows as $row): ?>
                                                    <th><?= $row['FECHA'] ?></th>
                                                    <?php endforeach; ?>
                                                    <th>Grafic.</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="DAC" class="btn btn-info btn-xs" type='submit'
                                                                name='DAC'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>DAC</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td data-sut-dac="<?= $row['DAC'] ?>"><?= $row['DAC'] ?></td>
                                                    <!-- <td><?= $row['DAC'] ?></td> -->
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-DAC"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="CUT_LICENCIA_HSS" class="btn btn-info btn-xs"
                                                                type='submit' name='CUT_LICENCIA_HSS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_LICENCIA_HSS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_LICENCIA_HSS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_LICENCIA_HSS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="VALIDLINES" class="btn btn-info btn-xs" type='submit'
                                                                name='VALIDLINES'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>VALIDLINES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['VALIDLINES'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-VALIDLINES"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="SUT_TELEFONIA_IBNLINES" class="btn btn-info btn-xs"
                                                                type='submit' name='SUT_TELEFONIA_IBNLINES'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_TELEFONIA_IBNLINES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_TELEFONIA_IBNLINES'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_TELEFONIA_IBNLINES"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="SUT_PSVA" class="btn btn-info btn-xs" type='submit'
                                                                name='SUT_PSVA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_PSVA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_PSVA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_PSVA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="CUT_TIVO" class="btn btn-info btn-xs" type='submit'
                                                                name='CUT_TIVO'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_TIVO</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_TIVO'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_TIVO"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="Cgm_Ea_Seu" class="btn btn-info btn-xs" type='submit'
                                                                name='Cgm_Ea_Seu'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>Cgm_Ea_Seu (Modelo de datos)</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CGM_EA_SEU'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-Cgm_Ea_Seu"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="cut_Siebel_FTTH_Inventario" class="btn btn-info btn-xs"
                                                                type='submit' name='cut_Siebel_FTTH_Inventario'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>cut_Siebel_FTTH_Inventario</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_FTTH_INVENTARIO'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_SIEBEL_FTTH_INVENTARIO"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="CUT_SIEBEL_FTTH_AMS" class="btn btn-info btn-xs"
                                                                type='submit' name='CUT_SIEBEL_FTTH_AMS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_SIEBEL_FTTH_AMS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_FTTH_AMS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_SIEBEL_FTTH_AMS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="CUT_SIEBEL_FTTH_BBMS" class="btn btn-info btn-xs"
                                                                type='submit' name='CUT_SIEBEL_FTTH_BBMS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_SIEBEL_FTTH_BBMS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_FTTH_BBMS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_SIEBEL_FTTH_BBMS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="SUT_INTERNET" class="btn btn-info btn-xs" type='submit'
                                                                name='SUT_INTERNET'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_INTERNET</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_INTERNET'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_INTERNET"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="CUT_FTTHGW" class="btn btn-info btn-xs" type='submit'
                                                                name='CUT_FTTHGW'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_FTTHGW</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_FTTHGW'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_FTTHGW"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="SUT_ADRENALIN_XML2" class="btn btn-info btn-xs"
                                                                type='submit' name='SUT_ADRENALIN_XML2'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_ADRENALIN_XML2</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_ADRENALIN_XML2'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_ADRENALIN_XML2"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/plataform'>
                                                            <button id="SUT_ADRENALIN_AUX" class="btn btn-info btn-xs"
                                                                type='submit' name='SUT_ADRENALIN_AUX'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_ADRENALIN_AUX</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_ADRENALIN_AUX'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_ADRENALIN_AUX"></div>
                                                    </td>
                                                </tr>


                                            </tbody>

                                        </table>
                                    </div>
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
    <script src="<?php echo $this->raiz; ?>/public/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $this->raiz; ?>/public/dist/js/adminlte.min.js"></script>

    <!-- jQuery Knob -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/sparklines/sparkline.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo $this->raiz; ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo $this->raiz; ?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- DataTables  & Plugins -->
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo $this->raiz; ?>/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- JS de tables -->
    <!-- <script src="<?php //echo $this->raiz; ?>/resources/assets/js/tables.js"></script> -->

    <?php include_once 'GraficPlataforma.php'?>

    <script>
    $(function() {
        $("#RefrescoTable")
            .DataTable({
                responsive: false,
                searching: true,
                lengthChange: true,
                autoWidth: true,
                ordering: false,
                info: true,
                paging: true,
                buttons: [
                    "csv",
                    "excel",
                    {
                        extend: "print",
                        text: "imprimir",
                    },
                    {
                        extend: "colvis",
                        text: "Columnas",
                    }
                ]
            })
            .buttons()
            .container()
            .appendTo("#RefrescoTable_wrapper .col-md-6:eq(0)");
    });
    </script>


</body>

</html>