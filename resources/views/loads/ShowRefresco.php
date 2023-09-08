<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cargas y Refresco</title>

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
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2>Cargas y Refresco
                                        <a href="<?php echo $this->raiz; ?>/insert/refresco"
                                            class="justify-content-md-end">
                                            <?php if($user['USERNAME'] === "MARCOS"){ ?>
                                            <button id="CargaRefresco" type="button" class="btn btn-success">
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
                                                    <th>TABLA ⬇ FECHA ➡</th>
                                                    <?php foreach($rows as $row): ?>
                                                    <th><?= $row['FECHA'] ?></th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>BUSINESSIINTERACTION</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['BUSINESSIINTERACTION'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CLIENTES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CLIENTES'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_SIEBEL_CANALES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_CANALES'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_SIEBEL_DBOX</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_DBOX'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_SIEBEL_EQUIPOS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_EQUIPOS'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_SIEBEL_EQUIPOS_MTA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_EQUIPOS_MTA'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_SIEBEL_PRODUCTOP</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_PRODUCTOP'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_SIEBEL_PRODUCTOP_BAJA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_PRODUCTOP_BAJA'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_UIM_CFS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_CFS'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_UIM_RFS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_RFS'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_UIM_RFS_IN_PROGRESS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_RFS_IN_PROGRESS'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_UIM_SERVICIOS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_SERVICIOS'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>CUT_UIM_SERVICIOS_BAJA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_SERVICIOS_BAJA'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>FDT_ACTIVTEMP</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_ACTIVTEMP'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>FDT_AREAFUN</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_AREAFUN'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>FDT_CLASEMATER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_CLASEMATER'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>FDT_CONFIG_PAQUETE</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_CONFIG_PAQUETE'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>FDT_MATERIAL</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_MATERIAL'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>FDT_STBSERIES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_STBSERIES'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>FDT_TIPOORD</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_TIPOORD'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>GIAP_TRADUCTOR</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['GIAP_TRADUCTOR'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>GIAP_VOICEPLAN_MOVIL</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['GIAP_VOICEPLAN_MOVIL'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>GIT_DIRECCION</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['GIT_DIRECCION'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>GIT_VIVIENDA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['GIT_VIVIENDA'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>MIGRADB</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['MIGRADB'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>OSM_ORDENESACTIVAS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['OSM_ORDENESACTIVAS'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>PAT_LOCALIDAD</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['PAT_LOCALIDAD'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>PAT_PRCONTXPROD</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['PAT_PRCONTXPROD'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>PAT_PRPRODUCTO</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['PAT_PRPRODUCTO'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>PLACE_CHAR</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['PLACE_CHAR'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>REDT_CALLES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['REDT_CALLES'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>REDT_LINEA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['REDT_LINEA'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>REDT_VIVIENDA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['REDT_VIVIENDA'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>RET_CABLEMODEM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['RET_CABLEMODEM'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>RET_LINEARED</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['RET_LINEARED'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_ADDR_PER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ADDR_PER'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_ASSET</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ASSET'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_ASSET_OM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ASSET_OM'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_ASSET_X</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ASSET_X'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_ASSET_XA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ASSET_XA'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_INV_PROF</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_INV_PROF'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_ORDER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ORDER'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_ORDER_ITEM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ORDER_ITEM'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_ORDER_TYPE</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ORDER_TYPE'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_ORG_EXT</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ORG_EXT'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_PROD_INT</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_PROD_INT'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>S_USER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_USER'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SIEBEL_ACT</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SIEBEL_ACT'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SS_DERIVADAS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SS_DERIVADAS'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SUT_CONCGTAR_NEW</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_CONCGTAR_NEW'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SUT_CONSERVI</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_CONSERVI'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SUT_GRUPOTAR</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_GRUPOTAR'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SUT_GRUPOTARIFA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_GRUPOTARIFA'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SUT_INFODBOX_UIM_1</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_INFODBOX_UIM_1'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SUT_SERVICIO</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_SERVICIO'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SUT_TARIFAUIM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_TARIFAUIM'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>SUT_VELOCIDADESNETUIM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_VELOCIDADESNETUIM'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>TELEPHONENUMBER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['TELEPHONENUMBER'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>TMP_EQUIPOS_MTA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['TMP_EQUIPOS_MTA'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>TNASSIGNMENT</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['TNASSIGNMENT'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>TNCONSUMER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['TNCONSUMER'] ?></td>
                                                    <?php endforeach; ?>
                                                </tr>

                                                <tr>
                                                    <td>XVTR_SIEBEL_INFO_SERIES_T</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['XVTR_SIEBEL_INFO_SERIES_T'] ?></td>
                                                    <?php endforeach; ?>
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

    <script>
    $(function() {
        $("#RefrescoTable")
            .DataTable({
                responsive: true,
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