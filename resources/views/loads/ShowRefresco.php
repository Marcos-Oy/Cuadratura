<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cargas y Refresco</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="TODO" class="btn btn-success" type='submit'
                                                                name='TODO'>
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
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="BUSINESSIINTERACTION" class="btn btn-info"
                                                                type='submit' name='BUSINESSIINTERACTION'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>BUSINESSIINTERACTION</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['BUSINESSIINTERACTION'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-BUSINESSIINTERACTION"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CLIENTES" class="btn btn-info" type='submit'
                                                                name='CLIENTES'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CLIENTES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CLIENTES'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CLIENTES"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_SIEBEL_CANALES" class="btn btn-info"
                                                                type='submit' name='CUT_SIEBEL_CANALES'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_SIEBEL_CANALES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_CANALES'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_SIEBEL_CANALES"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_SIEBEL_DBOX" class="btn btn-info"
                                                                type='submit' name='CUT_SIEBEL_DBOX'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_SIEBEL_DBOX</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_DBOX'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_SIEBEL_DBOX"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_SIEBEL_EQUIPOS" class="btn btn-info"
                                                                type='submit' name='CUT_SIEBEL_EQUIPOS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_SIEBEL_EQUIPOS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_EQUIPOS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_SIEBEL_EQUIPOS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_SIEBEL_EQUIPOS_MTA" class="btn btn-info"
                                                                type='submit' name='CUT_SIEBEL_EQUIPOS_MTA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_SIEBEL_EQUIPOS_MTA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_EQUIPOS_MTA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_SIEBEL_EQUIPOS_MTA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_SIEBEL_PRODUCTOP" class="btn btn-info"
                                                                type='submit' name='CUT_SIEBEL_PRODUCTOP'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_SIEBEL_PRODUCTOP</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_PRODUCTOP'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_SIEBEL_PRODUCTOP"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_SIEBEL_PRODUCTOP_BAJA" class="btn btn-info"
                                                                type='submit' name='CUT_SIEBEL_PRODUCTOP_BAJA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_SIEBEL_PRODUCTOP_BAJA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_SIEBEL_PRODUCTOP_BAJA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_SIEBEL_PRODUCTOP_BAJA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_UIM_CFS" class="btn btn-info" type='submit'
                                                                name='CUT_UIM_CFS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_UIM_CFS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_CFS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_UIM_CFS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_UIM_RFS" class="btn btn-info" type='submit'
                                                                name='CUT_UIM_RFS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_UIM_RFS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_RFS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_UIM_RFS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_UIM_RFS_IN_PROGRESS" class="btn btn-info"
                                                                type='submit' name='CUT_UIM_RFS_IN_PROGRESS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_UIM_RFS_IN_PROGRESS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_RFS_IN_PROGRESS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_UIM_RFS_IN_PROGRESS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_UIM_SERVICIOS" class="btn btn-info"
                                                                type='submit' name='CUT_UIM_SERVICIOS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_UIM_SERVICIOS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_SERVICIOS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_UIM_SERVICIOS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="CUT_UIM_SERVICIOS_BAJA" class="btn btn-info"
                                                                type='submit' name='CUT_UIM_SERVICIOS_BAJA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>CUT_UIM_SERVICIOS_BAJA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['CUT_UIM_SERVICIOS_BAJA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-CUT_UIM_SERVICIOS_BAJA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="FDT_ACTIVTEMP" class="btn btn-info"
                                                                type='submit' name='FDT_ACTIVTEMP'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>FDT_ACTIVTEMP</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_ACTIVTEMP'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-FDT_ACTIVTEMP"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="FDT_AREAFUN" class="btn btn-info" type='submit'
                                                                name='FDT_AREAFUN'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>FDT_AREAFUN</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_AREAFUN'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-FDT_AREAFUN"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="FDT_CLASEMATER" class="btn btn-info"
                                                                type='submit' name='FDT_CLASEMATER'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>FDT_CLASEMATER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_CLASEMATER'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-FDT_CLASEMATER"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="FDT_CONFIG_PAQUETE" class="btn btn-info"
                                                                type='submit' name='FDT_CONFIG_PAQUETE'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>FDT_CONFIG_PAQUETE</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_CONFIG_PAQUETE'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-FDT_CONFIG_PAQUETE"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="FDT_MATERIAL" class="btn btn-info" type='submit'
                                                                name='FDT_MATERIAL'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>FDT_MATERIAL</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_MATERIAL'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-FDT_MATERIAL"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="FDT_STBSERIES" class="btn btn-info"
                                                                type='submit' name='FDT_STBSERIES'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>FDT_STBSERIES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_STBSERIES'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-FDT_STBSERIES"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="FDT_TIPOORD" class="btn btn-info" type='submit'
                                                                name='FDT_TIPOORD'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>FDT_TIPOORD</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['FDT_TIPOORD'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-FDT_TIPOORD"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="GIAP_TRADUCTOR" class="btn btn-info"
                                                                type='submit' name='GIAP_TRADUCTOR'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>GIAP_TRADUCTOR</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['GIAP_TRADUCTOR'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-GIAP_TRADUCTOR"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="GIAP_VOICEPLAN_MOVIL" class="btn btn-info"
                                                                type='submit' name='GIAP_VOICEPLAN_MOVIL'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>GIAP_VOICEPLAN_MOVIL</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['GIAP_VOICEPLAN_MOVIL'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-GIAP_VOICEPLAN_MOVIL"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="GIT_DIRECCION" class="btn btn-info"
                                                                type='submit' name='GIT_DIRECCION'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>GIT_DIRECCION</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['GIT_DIRECCION'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-GIT_DIRECCION"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="GIT_VIVIENDA" class="btn btn-info" type='submit'
                                                                name='GIT_VIVIENDA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>GIT_VIVIENDA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['GIT_VIVIENDA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-GIT_VIVIENDA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="MIGRADB" class="btn btn-info" type='submit'
                                                                name='MIGRADB'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>MIGRADB</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['MIGRADB'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-MIGRADB"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="OSM_ORDENESACTIVAS" class="btn btn-info"
                                                                type='submit' name='OSM_ORDENESACTIVAS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>OSM_ORDENESACTIVAS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['OSM_ORDENESACTIVAS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-OSM_ORDENESACTIVAS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="PAT_LOCALIDAD" class="btn btn-info"
                                                                type='submit' name='PAT_LOCALIDAD'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>PAT_LOCALIDAD</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['PAT_LOCALIDAD'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-PAT_LOCALIDAD"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="PAT_PRCONTXPROD" class="btn btn-info"
                                                                type='submit' name='PAT_PRCONTXPROD'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>PAT_PRCONTXPROD</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['PAT_PRCONTXPROD'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-PAT_PRCONTXPROD"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="PAT_PRPRODUCTO" class="btn btn-info"
                                                                type='submit' name='PAT_PRPRODUCTO'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>PAT_PRPRODUCTO</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['PAT_PRPRODUCTO'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-PAT_PRPRODUCTO"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="PLACE_CHAR" class="btn btn-info" type='submit'
                                                                name='PLACE_CHAR'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>PLACE_CHAR</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['PLACE_CHAR'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-PLACE_CHAR"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="REDT_CALLES" class="btn btn-info" type='submit'
                                                                name='REDT_CALLES'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>REDT_CALLES</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['REDT_CALLES'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-REDT_CALLES"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="REDT_LINEA" class="btn btn-info" type='submit'
                                                                name='REDT_LINEA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>REDT_LINEA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['REDT_LINEA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-REDT_LINEA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="REDT_VIVIENDA" class="btn btn-info"
                                                                type='submit' name='REDT_VIVIENDA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>REDT_VIVIENDA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['REDT_VIVIENDA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-REDT_VIVIENDA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="RET_CABLEMODEM" class="btn btn-info"
                                                                type='submit' name='RET_CABLEMODEM'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>RET_CABLEMODEM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['RET_CABLEMODEM'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-RET_CABLEMODEM"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="RET_LINEARED" class="btn btn-info" type='submit'
                                                                name='RET_LINEARED'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>RET_LINEARED</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['RET_LINEARED'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-RET_LINEARED"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_ADDR_PER" class="btn btn-info" type='submit'
                                                                name='S_ADDR_PER'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_ADDR_PER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ADDR_PER'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_ADDR_PER"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_ASSET" class="btn btn-info" type='submit'
                                                                name='S_ASSET'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_ASSET</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ASSET'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_ASSET"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_ASSET_OM" class="btn btn-info" type='submit'
                                                                name='S_ASSET_OM'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_ASSET_OM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ASSET_OM'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_ASSET_OM"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_ASSET_X" class="btn btn-info" type='submit'
                                                                name='S_ASSET_X'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_ASSET_X</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ASSET_X'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_ASSET_X"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_ASSET_XA" class="btn btn-info" type='submit'
                                                                name='S_ASSET_XA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_ASSET_XA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ASSET_XA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_ASSET_XA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_INV_PROF" class="btn btn-info" type='submit'
                                                                name='S_INV_PROF'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_INV_PROF</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_INV_PROF'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_INV_PROF"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_ORDER" class="btn btn-info" type='submit'
                                                                name='S_ORDER'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_ORDER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ORDER'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_ORDER"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_ORDER_ITEM" class="btn btn-info" type='submit'
                                                                name='S_ORDER_ITEM'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_ORDER_ITEM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ORDER_ITEM'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_ORDER_ITEM"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_ORDER_TYPE" class="btn btn-info" type='submit'
                                                                name='S_ORDER_TYPE'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_ORDER_TYPE</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ORDER_TYPE'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_ORDER_TYPE"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_ORG_EXT" class="btn btn-info" type='submit'
                                                                name='S_ORG_EXT'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_ORG_EXT</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_ORG_EXT'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_ORG_EXT"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_PROD_INT" class="btn btn-info" type='submit'
                                                                name='S_PROD_INT'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_PROD_INT</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_PROD_INT'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_PROD_INT"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="S_USER" class="btn btn-info" type='submit'
                                                                name='S_USER'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>S_USER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['S_USER'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-S_USER"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SIEBEL_ACT" class="btn btn-info" type='submit'
                                                                name='SIEBEL_ACT'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SIEBEL_ACT</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SIEBEL_ACT'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SIEBEL_ACT"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SS_DERIVADAS" class="btn btn-info" type='submit'
                                                                name='SS_DERIVADAS'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SS_DERIVADAS</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SS_DERIVADAS'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SS_DERIVADAS"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SUT_CONCGTAR_NEW" class="btn btn-info"
                                                                type='submit' name='SUT_CONCGTAR_NEW'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_CONCGTAR_NEW</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_CONCGTAR_NEW'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_CONCGTAR_NEW"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SUT_CONSERVI" class="btn btn-info" type='submit'
                                                                name='SUT_CONSERVI'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_CONSERVI</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_CONSERVI'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_CONSERVI"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SUT_GRUPOTAR" class="btn btn-info" type='submit'
                                                                name='SUT_GRUPOTAR'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_GRUPOTAR</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_GRUPOTAR'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_GRUPOTAR"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SUT_GRUPOTARIFA" class="btn btn-info"
                                                                type='submit' name='SUT_GRUPOTARIFA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_GRUPOTARIFA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_GRUPOTARIFA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_GRUPOTARIFA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SUT_INFODBOX_UIM_1" class="btn btn-info"
                                                                type='submit' name='SUT_INFODBOX_UIM_1'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_INFODBOX_UIM_1</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_INFODBOX_UIM_1'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_INFODBOX_UIM_1"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SUT_SERVICIO" class="btn btn-info" type='submit'
                                                                name='SUT_SERVICIO'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_SERVICIO</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_SERVICIO'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_SERVICIO"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SUT_TARIFAUIM" class="btn btn-info"
                                                                type='submit' name='SUT_TARIFAUIM'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_TARIFAUIM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_TARIFAUIM'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_TARIFAUIM"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="SUT_VELOCIDADESNETUIM" class="btn btn-info"
                                                                type='submit' name='SUT_VELOCIDADESNETUIM'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>SUT_VELOCIDADESNETUIM</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['SUT_VELOCIDADESNETUIM'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-SUT_VELOCIDADESNETUIM"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="TELEPHONENUMBER" class="btn btn-info"
                                                                type='submit' name='TELEPHONENUMBER'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>TELEPHONENUMBER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['TELEPHONENUMBER'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-TELEPHONENUMBER"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="TMP_EQUIPOS_MTA" class="btn btn-info"
                                                                type='submit' name='TMP_EQUIPOS_MTA'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>TMP_EQUIPOS_MTA</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['TMP_EQUIPOS_MTA'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-TMP_EQUIPOS_MTA"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="TNASSIGNMENT" class="btn btn-info" type='submit'
                                                                name='TNASSIGNMENT'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>TNASSIGNMENT</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['TNASSIGNMENT'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-TNASSIGNMENT"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="TNCONSUMER" class="btn btn-info" type='submit'
                                                                name='TNCONSUMER'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>TNCONSUMER</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['TNCONSUMER'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-TNCONSUMER"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <form method='POST'
                                                            action='<?php echo $this->raiz; ?>/update/refresco'>
                                                            <button id="XVTR_SIEBEL_INFO_SERIES_T" class="btn btn-info"
                                                                type='submit' name='XVTR_SIEBEL_INFO_SERIES_T'>
                                                                <i class="fas fa-refresh" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>XVTR_SIEBEL_INFO_SERIES_T</td>
                                                    <?php foreach($rows as $row): ?>
                                                    <td><?= $row['XVTR_SIEBEL_INFO_SERIES_T'] ?></td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <div id="sparkline-XVTR_SIEBEL_INFO_SERIES_T"></div>
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

    <?php include_once 'GraficRefresco.php'?>

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