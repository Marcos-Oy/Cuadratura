<script>
$(function() {
    const BUSINESSIINTERACTION = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['BUSINESSIINTERACTION'] !== null && $row['BUSINESSIINTERACTION'] !== ''): ?>
        <?= $row['BUSINESSIINTERACTION'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para BUSINESSIINTERACTION
    var sparklineBUSINESSIINTERACTION = new Sparkline($('#sparkline-BUSINESSIINTERACTION')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineBUSINESSIINTERACTION.draw(BUSINESSIINTERACTION);

    // Validar si el último valor es igual a cero y cambiar colores
    if (BUSINESSIINTERACTION.length > 0 && BUSINESSIINTERACTION[BUSINESSIINTERACTION.length - 1] <= <?= $range[0]['BUSINESSIINTERACTION']; ?>) {
        sparklineBUSINESSIINTERACTION.options.lineColor = '#f56954';
        sparklineBUSINESSIINTERACTION.options.endColor = '#f56954';
        sparklineBUSINESSIINTERACTION.draw(BUSINESSIINTERACTION);
    }
});
</script>

<script>
$(function() {

    const CLIENTES = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CLIENTES'] !== null && $row['CLIENTES'] !== ''): ?>
        <?= $row['CLIENTES'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CLIENTES
    var sparklineCLIENTES = new Sparkline($('#sparkline-CLIENTES')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCLIENTES.draw(CLIENTES);

    if (CLIENTES.length > 0 && CLIENTES[CLIENTES.length - 1] <= <?= $range[0]['CLIENTES']; ?>) {
        sparklineCLIENTES.options.lineColor = '#f56954';
        sparklineCLIENTES.options.endColor = '#f56954';
        sparklineCLIENTES.draw(CLIENTES);
    }
});
</script>

<script>
$(function() {

    const CUT_SIEBEL_CANALES = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_SIEBEL_CANALES'] !== null && $row['CUT_SIEBEL_CANALES'] !== ''): ?>
        <?= $row['CUT_SIEBEL_CANALES'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_CANALES
    var sparklineCUT_SIEBEL_CANALES = new Sparkline($('#sparkline-CUT_SIEBEL_CANALES')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_CANALES.draw(CUT_SIEBEL_CANALES);

    if (CUT_SIEBEL_CANALES.length > 0 && CUT_SIEBEL_CANALES[CUT_SIEBEL_CANALES.length - 1] <= <?= $range[0]['CUT_SIEBEL_CANALES']; ?>) {
        sparklineCUT_SIEBEL_CANALES.options.lineColor = '#f56954';
        sparklineCUT_SIEBEL_CANALES.options.endColor = '#f56954';
        sparklineCUT_SIEBEL_CANALES.draw(CUT_SIEBEL_CANALES);
    }
});
</script>

<script>
$(function() {

    const CUT_SIEBEL_DBOX = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_SIEBEL_DBOX'] !== null && $row['CUT_SIEBEL_DBOX'] !== ''): ?>
        <?= $row['CUT_SIEBEL_DBOX'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_DBOX
    var sparklineCUT_SIEBEL_DBOX = new Sparkline($('#sparkline-CUT_SIEBEL_DBOX')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_DBOX.draw(CUT_SIEBEL_DBOX);

    if (CUT_SIEBEL_DBOX.length > 0 && CUT_SIEBEL_DBOX[CUT_SIEBEL_DBOX.length - 1] <= <?= $range[0]['CUT_SIEBEL_DBOX']; ?>) {
        sparklineCUT_SIEBEL_DBOX.options.lineColor = '#f56954';
        sparklineCUT_SIEBEL_DBOX.options.endColor = '#f56954';
        sparklineCUT_SIEBEL_DBOX.draw(CUT_SIEBEL_DBOX);
    }
});
</script>

<script>
$(function() {

    const CUT_SIEBEL_EQUIPOS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_SIEBEL_EQUIPOS'] !== null && $row['CUT_SIEBEL_EQUIPOS'] !== ''): ?>
        <?= $row['CUT_SIEBEL_EQUIPOS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_EQUIPOS
    var sparklineCUT_SIEBEL_EQUIPOS = new Sparkline($('#sparkline-CUT_SIEBEL_EQUIPOS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_EQUIPOS.draw(CUT_SIEBEL_EQUIPOS);

    if (CUT_SIEBEL_EQUIPOS.length > 0 && CUT_SIEBEL_EQUIPOS[CUT_SIEBEL_EQUIPOS.length - 1] <= <?= $range[0]['CUT_SIEBEL_EQUIPOS']; ?>) {
        sparklineCUT_SIEBEL_EQUIPOS.options.lineColor = '#f56954';
        sparklineCUT_SIEBEL_EQUIPOS.options.endColor = '#f56954';
        sparklineCUT_SIEBEL_EQUIPOS.draw(CUT_SIEBEL_EQUIPOS);
    }
});
</script>

<script>
$(function() {

    const CUT_SIEBEL_EQUIPOS_MTA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_SIEBEL_EQUIPOS_MTA'] !== null && $row['CUT_SIEBEL_EQUIPOS_MTA'] !== ''): ?>
        <?= $row['CUT_SIEBEL_EQUIPOS_MTA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_EQUIPOS_MTA
    var sparklineCUT_SIEBEL_EQUIPOS_MTA = new Sparkline($('#sparkline-CUT_SIEBEL_EQUIPOS_MTA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_EQUIPOS_MTA.draw(CUT_SIEBEL_EQUIPOS_MTA);

    if (CUT_SIEBEL_EQUIPOS_MTA.length > 0 && CUT_SIEBEL_EQUIPOS_MTA[CUT_SIEBEL_EQUIPOS_MTA.length - 1] <= <?= $range[0]['CUT_SIEBEL_EQUIPOS_MTA']; ?>) {
        sparklineCUT_SIEBEL_EQUIPOS_MTA.options.lineColor = '#f56954';
        sparklineCUT_SIEBEL_EQUIPOS_MTA.options.endColor = '#f56954';
        sparklineCUT_SIEBEL_EQUIPOS_MTA.draw(CUT_SIEBEL_EQUIPOS_MTA);
    }
});
</script>

<script>
$(function() {
    const CUT_SIEBEL_PRODUCTOP = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_SIEBEL_PRODUCTOP'] !== null && $row['CUT_SIEBEL_PRODUCTOP'] !== ''): ?>
        <?= $row['CUT_SIEBEL_PRODUCTOP'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_PRODUCTOP
    var sparklineCUT_SIEBEL_PRODUCTOP = new Sparkline($('#sparkline-CUT_SIEBEL_PRODUCTOP')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_PRODUCTOP.draw(CUT_SIEBEL_PRODUCTOP);

    if (CUT_SIEBEL_PRODUCTOP.length > 0 && CUT_SIEBEL_PRODUCTOP[CUT_SIEBEL_PRODUCTOP.length - 1] <= <?= $range[0]['CUT_SIEBEL_PRODUCTOP']; ?>) {
        sparklineCUT_SIEBEL_PRODUCTOP.options.lineColor = '#f56954';
        sparklineCUT_SIEBEL_PRODUCTOP.options.endColor = '#f56954';
        sparklineCUT_SIEBEL_PRODUCTOP.draw(CUT_SIEBEL_PRODUCTOP);
    }
});
</script>

<script>
$(function() {
    const CUT_SIEBEL_PRODUCTOP_BAJA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_SIEBEL_PRODUCTOP_BAJA'] !== null && $row['CUT_SIEBEL_PRODUCTOP_BAJA'] !== ''): ?>
        <?= $row['CUT_SIEBEL_PRODUCTOP_BAJA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_PRODUCTOP_BAJA
    var sparklineCUT_SIEBEL_PRODUCTOP_BAJA = new Sparkline($('#sparkline-CUT_SIEBEL_PRODUCTOP_BAJA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_PRODUCTOP_BAJA.draw(CUT_SIEBEL_PRODUCTOP_BAJA);

    if (CUT_SIEBEL_PRODUCTOP_BAJA.length > 0 && CUT_SIEBEL_PRODUCTOP_BAJA[CUT_SIEBEL_PRODUCTOP_BAJA.length -1] <= <?= $range[0]['CUT_SIEBEL_PRODUCTOP_BAJA']; ?>) {
        sparklineCUT_SIEBEL_PRODUCTOP_BAJA.options.lineColor = '#f56954';
        sparklineCUT_SIEBEL_PRODUCTOP_BAJA.options.endColor = '#f56954';
        sparklineCUT_SIEBEL_PRODUCTOP_BAJA.draw(CUT_SIEBEL_PRODUCTOP_BAJA);
    }
});
</script>

<script>
$(function() {
    const CUT_UIM_CFS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_UIM_CFS'] !== null && $row['CUT_UIM_CFS'] !== ''): ?>
        <?= $row['CUT_UIM_CFS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_UIM_CFS
    var sparklineCUT_UIM_CFS = new Sparkline($('#sparkline-CUT_UIM_CFS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_CFS.draw(CUT_UIM_CFS);

    if (CUT_UIM_CFS.length > 0 && CUT_UIM_CFS[CUT_UIM_CFS.length - 1] <= <?= $range[0]['CUT_UIM_CFS']; ?>) {
        sparklineCUT_UIM_CFS.options.lineColor = '#f56954';
        sparklineCUT_UIM_CFS.options.endColor = '#f56954';
        sparklineCUT_UIM_CFS.draw(CUT_UIM_CFS);
    }
});
</script>

<script>
$(function() {
    const CUT_UIM_RFS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_UIM_RFS'] !== null && $row['CUT_UIM_RFS'] !== ''): ?>
        <?= $row['CUT_UIM_RFS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_UIM_RFS
    var sparklineCUT_UIM_RFS = new Sparkline($('#sparkline-CUT_UIM_RFS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_RFS.draw(CUT_UIM_RFS);

    if (CUT_UIM_RFS.length > 0 && CUT_UIM_RFS[CUT_UIM_RFS.length - 1] <= <?= $range[0]['CUT_UIM_RFS']; ?>) {
        sparklineCUT_UIM_RFS.options.lineColor = '#f56954';
        sparklineCUT_UIM_RFS.options.endColor = '#f56954';
        sparklineCUT_UIM_RFS.draw(CUT_UIM_RFS);
    }
});
</script>

<script>
$(function() {
    const CUT_UIM_RFS_IN_PROGRESS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_UIM_RFS_IN_PROGRESS'] !== null && $row['CUT_UIM_RFS_IN_PROGRESS'] !== ''): ?>
        <?= $row['CUT_UIM_RFS_IN_PROGRESS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_UIM_RFS_IN_PROGRESS
    var sparklineCUT_UIM_RFS_IN_PROGRESS = new Sparkline($('#sparkline-CUT_UIM_RFS_IN_PROGRESS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_RFS_IN_PROGRESS.draw(CUT_UIM_RFS_IN_PROGRESS);

    if (CUT_UIM_RFS_IN_PROGRESS.length > 0 && CUT_UIM_RFS_IN_PROGRESS[CUT_UIM_RFS_IN_PROGRESS.length - 1] <= <?= $range[0]['CUT_UIM_RFS_IN_PROGRESS']; ?>) {
        sparklineCUT_UIM_RFS_IN_PROGRESS.options.lineColor = '#f56954';
        sparklineCUT_UIM_RFS_IN_PROGRESS.options.endColor = '#f56954';
        sparklineCUT_UIM_RFS_IN_PROGRESS.draw(CUT_UIM_RFS_IN_PROGRESS);
    }
});
</script>

<script>
$(function() {

    const CUT_UIM_SERVICIOS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_UIM_SERVICIOS'] !== null && $row['CUT_UIM_SERVICIOS'] !== ''): ?>
        <?= $row['CUT_UIM_SERVICIOS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_UIM_SERVICIOS
    var sparklineCUT_UIM_SERVICIOS = new Sparkline($('#sparkline-CUT_UIM_SERVICIOS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_SERVICIOS.draw(CUT_UIM_SERVICIOS);

    if (CUT_UIM_SERVICIOS.length > 0 && CUT_UIM_SERVICIOS[CUT_UIM_SERVICIOS.length - 1] <= <?= $range[0]['CUT_UIM_SERVICIOS']; ?>) {
        sparklineCUT_UIM_SERVICIOS.options.lineColor = '#f56954';
        sparklineCUT_UIM_SERVICIOS.options.endColor = '#f56954';
        sparklineCUT_UIM_SERVICIOS.draw(CUT_UIM_SERVICIOS);
    }
});
</script>

<script>
$(function() {

    const CUT_UIM_SERVICIOS_BAJA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_UIM_SERVICIOS_BAJA'] !== null && $row['CUT_UIM_SERVICIOS_BAJA'] !== ''): ?>
        <?= $row['CUT_UIM_SERVICIOS_BAJA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_UIM_SERVICIOS_BAJA
    var sparklineCUT_UIM_SERVICIOS_BAJA = new Sparkline($('#sparkline-CUT_UIM_SERVICIOS_BAJA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_SERVICIOS_BAJA.draw(CUT_UIM_SERVICIOS_BAJA);

    if (CUT_UIM_SERVICIOS_BAJA.length > 0 && CUT_UIM_SERVICIOS_BAJA[CUT_UIM_SERVICIOS_BAJA.length - 1] <= <?= $range[0]['CUT_UIM_SERVICIOS_BAJA']; ?>) {
        sparklineCUT_UIM_SERVICIOS_BAJA.options.lineColor = '#f56954';
        sparklineCUT_UIM_SERVICIOS_BAJA.options.endColor = '#f56954';
        sparklineCUT_UIM_SERVICIOS_BAJA.draw(CUT_UIM_SERVICIOS_BAJA);
    }
});
</script>

<script>
$(function() {

    const FDT_ACTIVTEMP = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['FDT_ACTIVTEMP'] !== null && $row['FDT_ACTIVTEMP'] !== ''): ?>
        <?= $row['FDT_ACTIVTEMP'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_ACTIVTEMP
    var sparklineFDT_ACTIVTEMP = new Sparkline($('#sparkline-FDT_ACTIVTEMP')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_ACTIVTEMP.draw(FDT_ACTIVTEMP);

    if (FDT_ACTIVTEMP.length > 0 && FDT_ACTIVTEMP[FDT_ACTIVTEMP.length - 1] <= <?= $range[0]['FDT_ACTIVTEMP']; ?>) {
        sparklineFDT_ACTIVTEMP.options.lineColor = '#f56954';
        sparklineFDT_ACTIVTEMP.options.endColor = '#f56954';
        sparklineFDT_ACTIVTEMP.draw(FDT_ACTIVTEMP);
    }
});
</script>

<script>
$(function() {

    const FDT_AREAFUN = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['FDT_AREAFUN'] !== null && $row['FDT_AREAFUN'] !== ''): ?>
        <?= $row['FDT_AREAFUN'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_AREAFUN
    var sparklineFDT_AREAFUN = new Sparkline($('#sparkline-FDT_AREAFUN')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_AREAFUN.draw(FDT_AREAFUN);

    if (FDT_AREAFUN.length > 0 && FDT_AREAFUN[FDT_AREAFUN.length - 1] <= <?= $range[0]['FDT_AREAFUN']; ?>) {
        sparklineFDT_AREAFUN.options.lineColor = '#f56954';
        sparklineFDT_AREAFUN.options.endColor = '#f56954';
        sparklineFDT_AREAFUN.draw(FDT_AREAFUN);
    }
});
</script>

<script>
$(function() {

    const FDT_CLASEMATER = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['FDT_CLASEMATER'] !== null && $row['FDT_CLASEMATER'] !== ''): ?>
        <?= $row['FDT_CLASEMATER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_CLASEMATER
    var sparklineFDT_CLASEMATER = new Sparkline($('#sparkline-FDT_CLASEMATER')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_CLASEMATER.draw(FDT_CLASEMATER);

    if (FDT_CLASEMATER.length > 0 && FDT_CLASEMATER[FDT_CLASEMATER.length - 1] <= <?= $range[0]['FDT_CLASEMATER']; ?>) {
        sparklineFDT_CLASEMATER.options.lineColor = '#f56954';
        sparklineFDT_CLASEMATER.options.endColor = '#f56954';
        sparklineFDT_CLASEMATER.draw(FDT_CLASEMATER);
    }
});
</script>

<script>
$(function() {

    const FDT_CONFIG_PAQUETE = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['FDT_CONFIG_PAQUETE'] !== null && $row['FDT_CONFIG_PAQUETE'] !== ''): ?>
        <?= $row['FDT_CONFIG_PAQUETE'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_CONFIG_PAQUETE
    var sparklineFDT_CONFIG_PAQUETE = new Sparkline($('#sparkline-FDT_CONFIG_PAQUETE')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_CONFIG_PAQUETE.draw(FDT_CONFIG_PAQUETE);

    if (FDT_CONFIG_PAQUETE.length > 0 && FDT_CONFIG_PAQUETE[FDT_CONFIG_PAQUETE.length - 1] <= <?= $range[0]['FDT_CONFIG_PAQUETE']; ?>) {
        sparklineFDT_CONFIG_PAQUETE.options.lineColor = '#f56954';
        sparklineFDT_CONFIG_PAQUETE.options.endColor = '#f56954';
        sparklineFDT_CONFIG_PAQUETE.draw(FDT_CONFIG_PAQUETE);
    }
});
</script>

<script>
$(function() {

    const FDT_MATERIAL = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['FDT_MATERIAL'] !== null && $row['FDT_MATERIAL'] !== ''): ?>
        <?= $row['FDT_MATERIAL'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_MATERIAL
    var sparklineFDT_MATERIAL = new Sparkline($('#sparkline-FDT_MATERIAL')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_MATERIAL.draw(FDT_MATERIAL);

    if (FDT_MATERIAL.length > 0 && FDT_MATERIAL[FDT_MATERIAL.length - 1] <= <?= $range[0]['FDT_MATERIAL']; ?>) {
        sparklineFDT_MATERIAL.options.lineColor = '#f56954';
        sparklineFDT_MATERIAL.options.endColor = '#f56954';
        sparklineFDT_MATERIAL.draw(FDT_MATERIAL);
    }
});
</script>

<script>
$(function() {

    const FDT_STBSERIES = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['FDT_STBSERIES'] !== null && $row['FDT_STBSERIES'] !== ''): ?>
        <?= $row['FDT_STBSERIES'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_STBSERIES
    var sparklineFDT_STBSERIES = new Sparkline($('#sparkline-FDT_STBSERIES')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_STBSERIES.draw(FDT_STBSERIES);

    if (FDT_STBSERIES.length > 0 && FDT_STBSERIES[FDT_STBSERIES.length - 1] <= <?= $range[0]['FDT_STBSERIES']; ?>) {
        sparklineFDT_STBSERIES.options.lineColor = '#f56954';
        sparklineFDT_STBSERIES.options.endColor = '#f56954';
        sparklineFDT_STBSERIES.draw(FDT_STBSERIES);
    }
});
</script>

<script>
$(function() {

    const FDT_TIPOORD = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['FDT_TIPOORD'] !== null && $row['FDT_TIPOORD'] !== ''): ?>
        <?= $row['FDT_TIPOORD'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_TIPOORD
    var sparklineFDT_TIPOORD = new Sparkline($('#sparkline-FDT_TIPOORD')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_TIPOORD.draw(FDT_TIPOORD);

    if (FDT_TIPOORD.length > 0 && FDT_TIPOORD[FDT_TIPOORD.length - 1] <= <?= $range[0]['FDT_TIPOORD']; ?>) {
        sparklineFDT_TIPOORD.options.lineColor = '#f56954';
        sparklineFDT_TIPOORD.options.endColor = '#f56954';
        sparklineFDT_TIPOORD.draw(FDT_TIPOORD);
    }
});
</script>

<script>
$(function() {

    const GIAP_TRADUCTOR = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['GIAP_TRADUCTOR'] !== null && $row['GIAP_TRADUCTOR'] !== ''): ?>
        <?= $row['GIAP_TRADUCTOR'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para GIAP_TRADUCTOR
    var sparklineGIAP_TRADUCTOR = new Sparkline($('#sparkline-GIAP_TRADUCTOR')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineGIAP_TRADUCTOR.draw(GIAP_TRADUCTOR);

    if (GIAP_TRADUCTOR.length > 0 && GIAP_TRADUCTOR[GIAP_TRADUCTOR.length - 1] <= <?= $range[0]['GIAP_TRADUCTOR']; ?>) {
        sparklineGIAP_TRADUCTOR.options.lineColor = '#f56954';
        sparklineGIAP_TRADUCTOR.options.endColor = '#f56954';
        sparklineGIAP_TRADUCTOR.draw(GIAP_TRADUCTOR);
    }
});
</script>

<script>
$(function() {

    const GIAP_VOICEPLAN_MOVIL = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['GIAP_VOICEPLAN_MOVIL'] !== null && $row['GIAP_VOICEPLAN_MOVIL'] !== ''): ?>
        <?= $row['GIAP_VOICEPLAN_MOVIL'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para GIAP_VOICEPLAN_MOVIL
    var sparklineGIAP_VOICEPLAN_MOVIL = new Sparkline($('#sparkline-GIAP_VOICEPLAN_MOVIL')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineGIAP_VOICEPLAN_MOVIL.draw(GIAP_VOICEPLAN_MOVIL);

    if (GIAP_VOICEPLAN_MOVIL.length > 0 && GIAP_VOICEPLAN_MOVIL[GIAP_VOICEPLAN_MOVIL.length - 1] <= <?= $range[0]['GIAP_VOICEPLAN_MOVIL']; ?>) {
        sparklineGIAP_VOICEPLAN_MOVIL.options.lineColor = '#f56954';
        sparklineGIAP_VOICEPLAN_MOVIL.options.endColor = '#f56954';
        sparklineGIAP_VOICEPLAN_MOVIL.draw(GIAP_VOICEPLAN_MOVIL);
    }
});
</script>

<script>
$(function() {

    const GIT_DIRECCION = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['GIT_DIRECCION'] !== null && $row['GIT_DIRECCION'] !== ''): ?>
        <?= $row['GIT_DIRECCION'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para GIT_DIRECCION
    var sparklineGIT_DIRECCION = new Sparkline($('#sparkline-GIT_DIRECCION')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineGIT_DIRECCION.draw(GIT_DIRECCION);

    if (GIT_DIRECCION.length > 0 && GIT_DIRECCION[GIT_DIRECCION.length - 1] <= <?= $range[0]['GIT_DIRECCION']; ?>) {
        sparklineGIT_DIRECCION.options.lineColor = '#f56954';
        sparklineGIT_DIRECCION.options.endColor = '#f56954';
        sparklineGIT_DIRECCION.draw(GIT_DIRECCION);
    }
});
</script>

<script>
$(function() {

    const GIT_VIVIENDA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['GIT_VIVIENDA'] !== null && $row['GIT_VIVIENDA'] !== ''): ?>
        <?= $row['GIT_VIVIENDA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para GIT_VIVIENDA
    var sparklineGIT_VIVIENDA = new Sparkline($('#sparkline-GIT_VIVIENDA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineGIT_VIVIENDA.draw(GIT_VIVIENDA);

    if (GIT_VIVIENDA.length > 0 && GIT_VIVIENDA[GIT_VIVIENDA.length - 1] <= <?= $range[0]['GIT_VIVIENDA']; ?>) {
        sparklineGIT_VIVIENDA.options.lineColor = '#f56954';
        sparklineGIT_VIVIENDA.options.endColor = '#f56954';
        sparklineGIT_VIVIENDA.draw(GIT_VIVIENDA);
    }
});
</script>

<script>
$(function() {

    const MIGRADB = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['MIGRADB'] !== null && $row['MIGRADB'] !== ''): ?>
        <?= $row['MIGRADB'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para MIGRADB
    var sparklineMIGRADB = new Sparkline($('#sparkline-MIGRADB')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineMIGRADB.draw(MIGRADB);

    if (MIGRADB.length > 0 && MIGRADB[MIGRADB.length - 1] <= <?= $range[0]['MIGRADB']; ?>) {
        sparklineMIGRADB.options.lineColor = '#f56954';
        sparklineMIGRADB.options.endColor = '#f56954';
        sparklineMIGRADB.draw(MIGRADB);
    }
});
</script>

<script>
$(function() {

    const OSM_ORDENESACTIVAS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['OSM_ORDENESACTIVAS'] !== null && $row['OSM_ORDENESACTIVAS'] !== ''): ?>
        <?= $row['OSM_ORDENESACTIVAS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para OSM_ORDENESACTIVAS
    var sparklineOSM_ORDENESACTIVAS = new Sparkline($('#sparkline-OSM_ORDENESACTIVAS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineOSM_ORDENESACTIVAS.draw(OSM_ORDENESACTIVAS);

    if (OSM_ORDENESACTIVAS.length > 0 && OSM_ORDENESACTIVAS[OSM_ORDENESACTIVAS.length - 1] <= <?= $range[0]['OSM_ORDENESACTIVAS']; ?>) {
        sparklineOSM_ORDENESACTIVAS.options.lineColor = '#f56954';
        sparklineOSM_ORDENESACTIVAS.options.endColor = '#f56954';
        sparklineOSM_ORDENESACTIVAS.draw(OSM_ORDENESACTIVAS);
    }
});
</script>

<script>
$(function() {

    const PAT_LOCALIDAD = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['PAT_LOCALIDAD'] !== null && $row['PAT_LOCALIDAD'] !== ''): ?>
        <?= $row['PAT_LOCALIDAD'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para PAT_LOCALIDAD
    var sparklinePAT_LOCALIDAD = new Sparkline($('#sparkline-PAT_LOCALIDAD')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklinePAT_LOCALIDAD.draw(PAT_LOCALIDAD);

    if (PAT_LOCALIDAD.length > 0 && PAT_LOCALIDAD[PAT_LOCALIDAD.length - 1] <= <?= $range[0]['PAT_LOCALIDAD']; ?>) {
        sparklinePAT_LOCALIDAD.options.lineColor = '#f56954';
        sparklinePAT_LOCALIDAD.options.endColor = '#f56954';
        sparklinePAT_LOCALIDAD.draw(PAT_LOCALIDAD);
    }
});
</script>

<script>
$(function() {

    const PAT_PRCONTXPROD = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['PAT_PRCONTXPROD'] !== null && $row['PAT_PRCONTXPROD'] !== ''): ?>
        <?= $row['PAT_PRCONTXPROD'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para PAT_PRCONTXPROD
    var sparklinePAT_PRCONTXPROD = new Sparkline($('#sparkline-PAT_PRCONTXPROD')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklinePAT_PRCONTXPROD.draw(PAT_PRCONTXPROD);

    if (PAT_PRCONTXPROD.length > 0 && PAT_PRCONTXPROD[PAT_PRCONTXPROD.length - 1] <= <?= $range[0]['PAT_PRCONTXPROD']; ?>) {
        sparklinePAT_PRCONTXPROD.options.lineColor = '#f56954';
        sparklinePAT_PRCONTXPROD.options.endColor = '#f56954';
        sparklinePAT_PRCONTXPROD.draw(PAT_PRCONTXPROD);
    }
});
</script>

<script>
$(function() {

    const PAT_PRPRODUCTO = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['PAT_PRPRODUCTO'] !== null && $row['PAT_PRPRODUCTO'] !== ''): ?>
        <?= $row['PAT_PRPRODUCTO'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para PAT_PRPRODUCTO
    var sparklinePAT_PRPRODUCTO = new Sparkline($('#sparkline-PAT_PRPRODUCTO')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklinePAT_PRPRODUCTO.draw(PAT_PRPRODUCTO);

    if (PAT_PRPRODUCTO.length > 0 && PAT_PRPRODUCTO[PAT_PRPRODUCTO.length - 1] <= <?= $range[0]['PAT_PRPRODUCTO']; ?>) {
        sparklinePAT_PRPRODUCTO.options.lineColor = '#f56954';
        sparklinePAT_PRPRODUCTO.options.endColor = '#f56954';
        sparklinePAT_PRPRODUCTO.draw(PAT_PRPRODUCTO);
    }
});
</script>

<script>
$(function() {

    const PLACE_CHAR = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['PLACE_CHAR'] !== null && $row['PLACE_CHAR'] !== ''): ?>
        <?= $row['PLACE_CHAR'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para PLACE_CHAR
    var sparklinePLACE_CHAR = new Sparkline($('#sparkline-PLACE_CHAR')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklinePLACE_CHAR.draw(PLACE_CHAR);

    if (PLACE_CHAR.length > 0 && PLACE_CHAR[PLACE_CHAR.length - 1] <= <?= $range[0]['PLACE_CHAR']; ?>) {
        sparklinePLACE_CHAR.options.lineColor = '#f56954';
        sparklinePLACE_CHAR.options.endColor = '#f56954';
        sparklinePLACE_CHAR.draw(PLACE_CHAR);
    }
});
</script>

<script>
$(function() {

    const REDT_CALLES = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['REDT_CALLES'] !== null && $row['REDT_CALLES'] !== ''): ?>
        <?= $row['REDT_CALLES'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para REDT_CALLES
    var sparklineREDT_CALLES = new Sparkline($('#sparkline-REDT_CALLES')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineREDT_CALLES.draw(REDT_CALLES);

    if (REDT_CALLES.length > 0 && REDT_CALLES[REDT_CALLES.length - 1] <= <?= $range[0]['REDT_CALLES']; ?>) {
        sparklineREDT_CALLES.options.lineColor = '#f56954';
        sparklineREDT_CALLES.options.endColor = '#f56954';
        sparklineREDT_CALLES.draw(REDT_CALLES);
    }
});
</script>

<script>
$(function() {

    const REDT_LINEA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['REDT_LINEA'] !== null && $row['REDT_LINEA'] !== ''): ?>
        <?= $row['REDT_LINEA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para REDT_LINEA
    var sparklineREDT_LINEA = new Sparkline($('#sparkline-REDT_LINEA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineREDT_LINEA.draw(REDT_LINEA);

    if (REDT_LINEA.length > 0 && REDT_LINEA[REDT_LINEA.length - 1] <= <?= $range[0]['REDT_LINEA']; ?>) {
        sparklineREDT_LINEA.options.lineColor = '#f56954';
        sparklineREDT_LINEA.options.endColor = '#f56954';
        sparklineREDT_LINEA.draw(REDT_LINEA);
    }
});
</script>

<script>
$(function() {

    const REDT_VIVIENDA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['REDT_VIVIENDA'] !== null && $row['REDT_VIVIENDA'] !== ''): ?>
        <?= $row['REDT_VIVIENDA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para REDT_VIVIENDA
    var sparklineREDT_VIVIENDA = new Sparkline($('#sparkline-REDT_VIVIENDA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineREDT_VIVIENDA.draw(REDT_VIVIENDA);

    if (REDT_VIVIENDA.length > 0 && REDT_VIVIENDA[REDT_VIVIENDA.length - 1] <= <?= $range[0]['REDT_VIVIENDA']; ?>) {
        sparklineREDT_VIVIENDA.options.lineColor = '#f56954';
        sparklineREDT_VIVIENDA.options.endColor = '#f56954';
        sparklineREDT_VIVIENDA.draw(REDT_VIVIENDA);
    }
});
</script>

<script>
$(function() {

    const RET_CABLEMODEM = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['RET_CABLEMODEM'] !== null && $row['RET_CABLEMODEM'] !== ''): ?>
        <?= $row['RET_CABLEMODEM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para RET_CABLEMODEM
    var sparklineRET_CABLEMODEM = new Sparkline($('#sparkline-RET_CABLEMODEM')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineRET_CABLEMODEM.draw(RET_CABLEMODEM);

    if (RET_CABLEMODEM.length > 0 && RET_CABLEMODEM[RET_CABLEMODEM.length - 1] <= <?= $range[0]['RET_CABLEMODEM']; ?>) {
        sparklineRET_CABLEMODEM.options.lineColor = '#f56954';
        sparklineRET_CABLEMODEM.options.endColor = '#f56954';
        sparklineRET_CABLEMODEM.draw(RET_CABLEMODEM);
    }
});
</script>

<script>
$(function() {

    const RET_LINEARED = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['RET_LINEARED'] !== null && $row['RET_LINEARED'] !== ''): ?>
        <?= $row['RET_LINEARED'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para RET_LINEARED
    var sparklineRET_LINEARED = new Sparkline($('#sparkline-RET_LINEARED')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineRET_LINEARED.draw(RET_LINEARED);

    if (RET_LINEARED.length > 0 && RET_LINEARED[RET_LINEARED.length - 1] <= <?= $range[0]['RET_LINEARED']; ?>) {
        sparklineRET_LINEARED.options.lineColor = '#f56954';
        sparklineRET_LINEARED.options.endColor = '#f56954';
        sparklineRET_LINEARED.draw(RET_LINEARED);
    }
});
</script>

<script>
$(function() {

    const S_ADDR_PER = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_ADDR_PER'] !== null && $row['S_ADDR_PER'] !== ''): ?>
        <?= $row['S_ADDR_PER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ADDR_PER
    var sparklineS_ADDR_PER = new Sparkline($('#sparkline-S_ADDR_PER')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ADDR_PER.draw(S_ADDR_PER);

    if (S_ADDR_PER.length > 0 && S_ADDR_PER[S_ADDR_PER.length - 1] <= <?= $range[0]['S_ADDR_PER']; ?>) {
        sparklineS_ADDR_PER.options.lineColor = '#f56954';
        sparklineS_ADDR_PER.options.endColor = '#f56954';
        sparklineS_ADDR_PER.draw(S_ADDR_PER);
    }
});
</script>

<script>
$(function() {

    const S_ASSET = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_ASSET'] !== null && $row['S_ASSET'] !== ''): ?>
        <?= $row['S_ASSET'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ASSET
    var sparklineS_ASSET = new Sparkline($('#sparkline-S_ASSET')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ASSET.draw(S_ASSET);

    if (S_ASSET.length > 0 && S_ASSET[S_ASSET.length - 1] <= <?= $range[0]['S_ASSET']; ?>) {
        sparklineS_ASSET.options.lineColor = '#f56954';
        sparklineS_ASSET.options.endColor = '#f56954';
        sparklineS_ASSET.draw(S_ASSET);
    }
});
</script>

<script>
$(function() {

    const S_ASSET_OM = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_ASSET_OM'] !== null && $row['S_ASSET_OM'] !== ''): ?>
        <?= $row['S_ASSET_OM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ASSET_OM
    var sparklineS_ASSET_OM = new Sparkline($('#sparkline-S_ASSET_OM')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ASSET_OM.draw(S_ASSET_OM);

    if (S_ASSET_OM.length > 0 && S_ASSET_OM[S_ASSET_OM.length - 1] <= <?= $range[0]['S_ASSET_OM']; ?>) {
        sparklineS_ASSET_OM.options.lineColor = '#f56954';
        sparklineS_ASSET_OM.options.endColor = '#f56954';
        sparklineS_ASSET_OM.draw(S_ASSET_OM);
    }
});
</script>

<script>
$(function() {

    const S_ASSET_X = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_ASSET_X'] !== null && $row['S_ASSET_X'] !== ''): ?>
        <?= $row['S_ASSET_X'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ASSET_X
    var sparklineS_ASSET_X = new Sparkline($('#sparkline-S_ASSET_X')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ASSET_X.draw(S_ASSET_X);

    if (S_ASSET_X.length > 0 && S_ASSET_X[S_ASSET_X.length - 1] <= <?= $range[0]['S_ASSET_X']; ?>) {
        sparklineS_ASSET_X.options.lineColor = '#f56954';
        sparklineS_ASSET_X.options.endColor = '#f56954';
        sparklineS_ASSET_X.draw(S_ASSET_X);
    }
});
</script>

<script>
$(function() {

    const S_ASSET_XA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_ASSET_XA'] !== null && $row['S_ASSET_XA'] !== ''): ?>
        <?= $row['S_ASSET_XA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ASSET_XA
    var sparklineS_ASSET_XA = new Sparkline($('#sparkline-S_ASSET_XA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ASSET_XA.draw(S_ASSET_XA);

    if (S_ASSET_XA.length > 0 && S_ASSET_XA[S_ASSET_XA.length - 1] <= <?= $range[0]['S_ASSET_XA']; ?>) {
        sparklineS_ASSET_XA.options.lineColor = '#f56954';
        sparklineS_ASSET_XA.options.endColor = '#f56954';
        sparklineS_ASSET_XA.draw(S_ASSET_XA);
    }
});
</script>

<script>
$(function() {

    const S_INV_PROF = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_INV_PROF'] !== null && $row['S_INV_PROF'] !== ''): ?>
        <?= $row['S_INV_PROF'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_INV_PROF
    var sparklineS_INV_PROF = new Sparkline($('#sparkline-S_INV_PROF')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_INV_PROF.draw(S_INV_PROF);

    if (S_INV_PROF.length > 0 && S_INV_PROF[S_INV_PROF.length - 1] <= <?= $range[0]['S_INV_PROF']; ?>) {
        sparklineS_INV_PROF.options.lineColor = '#f56954';
        sparklineS_INV_PROF.options.endColor = '#f56954';
        sparklineS_INV_PROF.draw(S_INV_PROF);
    }
});
</script>

<script>
$(function() {

    const S_ORDER = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_ORDER'] !== null && $row['S_ORDER'] !== ''): ?>
        <?= $row['S_ORDER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ORDER
    var sparklineS_ORDER = new Sparkline($('#sparkline-S_ORDER')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ORDER.draw(S_ORDER);

    if (S_ORDER.length > 0 && S_ORDER[S_ORDER.length - 1] <= <?= $range[0]['S_ORDER']; ?>) {
        sparklineS_ORDER.options.lineColor = '#f56954';
        sparklineS_ORDER.options.endColor = '#f56954';
        sparklineS_ORDER.draw(S_ORDER);
    }
});
</script>

<script>
$(function() {
    const S_ORDER_ITEM = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_ORDER_ITEM'] !== null && $row['S_ORDER_ITEM'] !== ''): ?>
        <?= $row['S_ORDER_ITEM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ORDER_ITEM
    var sparklineS_ORDER_ITEM = new Sparkline($('#sparkline-S_ORDER_ITEM')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ORDER_ITEM.draw(S_ORDER_ITEM);

    if (S_ORDER_ITEM.length > 0 && S_ORDER_ITEM[S_ORDER_ITEM.length - 1] <= <?= $range[0]['S_ORDER_ITEM']; ?>) {
        sparklineS_ORDER_ITEM.options.lineColor = '#f56954';
        sparklineS_ORDER_ITEM.options.endColor = '#f56954';
        sparklineS_ORDER_ITEM.draw(S_ORDER_ITEM);
    }
});
</script>

<script>
$(function() {

    const S_ORDER_TYPE = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_ORDER_TYPE'] !== null && $row['S_ORDER_TYPE'] !== ''): ?>
        <?= $row['S_ORDER_TYPE'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ORDER_TYPE
    var sparklineS_ORDER_TYPE = new Sparkline($('#sparkline-S_ORDER_TYPE')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ORDER_TYPE.draw(S_ORDER_TYPE);

    if (S_ORDER_TYPE.length > 0 && S_ORDER_TYPE[S_ORDER_TYPE.length - 1] <= <?= $range[0]['S_ORDER_TYPE']; ?>) {
        sparklineS_ORDER_TYPE.options.lineColor = '#f56954';
        sparklineS_ORDER_TYPE.options.endColor = '#f56954';
        sparklineS_ORDER_TYPE.draw(S_ORDER_TYPE);
    }
});
</script>

<script>
$(function() {

    const S_ORG_EXT = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_ORG_EXT'] !== null && $row['S_ORG_EXT'] !== ''): ?>
        <?= $row['S_ORG_EXT'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ORG_EXT
    var sparklineS_ORG_EXT = new Sparkline($('#sparkline-S_ORG_EXT')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ORG_EXT.draw(S_ORG_EXT);

    if (S_ORG_EXT.length > 0 && S_ORG_EXT[S_ORG_EXT.length - 1] <= <?= $range[0]['S_ORG_EXT']; ?>) {
        sparklineS_ORG_EXT.options.lineColor = '#f56954';
        sparklineS_ORG_EXT.options.endColor = '#f56954';
        sparklineS_ORG_EXT.draw(S_ORG_EXT);
    }
});
</script>

<script>
$(function() {
    const S_PROD_INT = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_PROD_INT'] !== null && $row['S_PROD_INT'] !== ''): ?>
        <?= $row['S_PROD_INT'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_PROD_INT
    var sparklineS_PROD_INT = new Sparkline($('#sparkline-S_PROD_INT')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_PROD_INT.draw(S_PROD_INT);

    if (S_PROD_INT.length > 0 && S_PROD_INT[S_PROD_INT.length - 1] <= <?= $range[0]['S_PROD_INT']; ?>) {
        sparklineS_PROD_INT.options.lineColor = '#f56954';
        sparklineS_PROD_INT.options.endColor = '#f56954';
        sparklineS_PROD_INT.draw(S_PROD_INT);
    }
});
</script>

<script>
$(function() {

    const S_USER = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['S_USER'] !== null && $row['S_USER'] !== ''): ?>
        <?= $row['S_USER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_USER
    var sparklineS_USER = new Sparkline($('#sparkline-S_USER')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_USER.draw(S_USER);

    if (S_USER.length > 0 && S_USER[S_USER.length - 1] <= <?= $range[0]['S_USER']; ?>) {
        sparklineS_USER.options.lineColor = '#f56954';
        sparklineS_USER.options.endColor = '#f56954';
        sparklineS_USER.draw(S_USER);
    }
});
</script>

<script>
$(function() {

    const SIEBEL_ACT = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SIEBEL_ACT'] !== null && $row['SIEBEL_ACT'] !== ''): ?>
        <?= $row['SIEBEL_ACT'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SIEBEL_ACT
    var sparklineSIEBEL_ACT = new Sparkline($('#sparkline-SIEBEL_ACT')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSIEBEL_ACT.draw(SIEBEL_ACT);

    if (SIEBEL_ACT.length > 0 && SIEBEL_ACT[SIEBEL_ACT.length - 1] <= <?= $range[0]['SIEBEL_ACT']; ?>) {
        sparklineSIEBEL_ACT.options.lineColor = '#f56954';
        sparklineSIEBEL_ACT.options.endColor = '#f56954';
        sparklineSIEBEL_ACT.draw(SIEBEL_ACT);
    }
});
</script>

<script>
$(function() {
    const SS_DERIVADAS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SS_DERIVADAS'] !== null && $row['SS_DERIVADAS'] !== ''): ?>
        <?= $row['SS_DERIVADAS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SS_DERIVADAS
    var sparklineSS_DERIVADAS = new Sparkline($('#sparkline-SS_DERIVADAS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSS_DERIVADAS.draw(SS_DERIVADAS);

    if (SS_DERIVADAS.length > 0 && SS_DERIVADAS[SS_DERIVADAS.length - 1] <= <?= $range[0]['SS_DERIVADAS']; ?>) {
        sparklineSS_DERIVADAS.options.lineColor = '#f56954';
        sparklineSS_DERIVADAS.options.endColor = '#f56954';
        sparklineSS_DERIVADAS.draw(SS_DERIVADAS);
    }
});
</script>

<script>
$(function() {
    const SUT_CONCGTAR_NEW = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_CONCGTAR_NEW'] !== null && $row['SUT_CONCGTAR_NEW'] !== ''): ?>
        <?= $row['SUT_CONCGTAR_NEW'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_CONCGTAR_NEW
    var sparklineSUT_CONCGTAR_NEW = new Sparkline($('#sparkline-SUT_CONCGTAR_NEW')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_CONCGTAR_NEW.draw(SUT_CONCGTAR_NEW);

    if (SUT_CONCGTAR_NEW.length > 0 && SUT_CONCGTAR_NEW[SUT_CONCGTAR_NEW.length - 1] <= <?= $range[0]['SUT_CONCGTAR_NEW']; ?>) {
        sparklineSUT_CONCGTAR_NEW.options.lineColor = '#f56954';
        sparklineSUT_CONCGTAR_NEW.options.endColor = '#f56954';
        sparklineSUT_CONCGTAR_NEW.draw(SUT_CONCGTAR_NEW);
    }
});
</script>

<script>
$(function() {
    const SUT_CONSERVI = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_CONSERVI'] !== null && $row['SUT_CONSERVI'] !== ''): ?>
        <?= $row['SUT_CONSERVI'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_CONSERVI
    var sparklineSUT_CONSERVI = new Sparkline($('#sparkline-SUT_CONSERVI')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_CONSERVI.draw(SUT_CONSERVI);

    if (SUT_CONSERVI.length > 0 && SUT_CONSERVI[SUT_CONSERVI.length - 1] <= <?= $range[0]['SUT_CONSERVI']; ?>) {
        sparklineSUT_CONSERVI.options.lineColor = '#f56954';
        sparklineSUT_CONSERVI.options.endColor = '#f56954';
        sparklineSUT_CONSERVI.draw(SUT_CONSERVI);
    }
});
</script>

<script>
$(function() {
    const SUT_GRUPOTAR = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_GRUPOTAR'] !== null && $row['SUT_GRUPOTAR'] !== ''): ?>
        <?= $row['SUT_GRUPOTAR'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_GRUPOTAR
    var sparklineSUT_GRUPOTAR = new Sparkline($('#sparkline-SUT_GRUPOTAR')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_GRUPOTAR.draw(SUT_GRUPOTAR);

    if (SUT_GRUPOTAR.length > 0 && SUT_GRUPOTAR[SUT_GRUPOTAR.length - 1] <= <?= $range[0]['SUT_GRUPOTAR']; ?>) {
        sparklineSUT_GRUPOTAR.options.lineColor = '#f56954';
        sparklineSUT_GRUPOTAR.options.endColor = '#f56954';
        sparklineSUT_GRUPOTAR.draw(SUT_GRUPOTAR);
    }
});
</script>

<script>
$(function() {
    const SUT_GRUPOTARIFA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_GRUPOTARIFA'] !== null && $row['SUT_GRUPOTARIFA'] !== ''): ?>
        <?= $row['SUT_GRUPOTARIFA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_GRUPOTARIFA
    var sparklineSUT_GRUPOTARIFA = new Sparkline($('#sparkline-SUT_GRUPOTARIFA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_GRUPOTARIFA.draw(SUT_GRUPOTARIFA);

    if (SUT_GRUPOTARIFA.length > 0 && SUT_GRUPOTARIFA[SUT_GRUPOTARIFA.length - 1] <= <?= $range[0]['SUT_GRUPOTARIFA']; ?>) {
        sparklineSUT_GRUPOTARIFA.options.lineColor = '#f56954';
        sparklineSUT_GRUPOTARIFA.options.endColor = '#f56954';
        sparklineSUT_GRUPOTARIFA.draw(SUT_GRUPOTARIFA);
    }
});
</script>

<script>
$(function() {
    const SUT_INFODBOX_UIM_1 = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_INFODBOX_UIM_1'] !== null && $row['SUT_INFODBOX_UIM_1'] !== ''): ?>
        <?= $row['SUT_INFODBOX_UIM_1'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_INFODBOX_UIM_1
    var sparklineSUT_INFODBOX_UIM_1 = new Sparkline($('#sparkline-SUT_INFODBOX_UIM_1')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_INFODBOX_UIM_1.draw(SUT_INFODBOX_UIM_1);

    if (SUT_INFODBOX_UIM_1.length > 0 && SUT_INFODBOX_UIM_1[SUT_INFODBOX_UIM_1.length - 1] <= <?= $range[0]['SUT_INFODBOX_UIM_1']; ?>) {
        sparklineSUT_INFODBOX_UIM_1.options.lineColor = '#f56954';
        sparklineSUT_INFODBOX_UIM_1.options.endColor = '#f56954';
        sparklineSUT_INFODBOX_UIM_1.draw(SUT_INFODBOX_UIM_1);
    }
});
</script>

<script>
$(function() {
    const SUT_SERVICIO = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_SERVICIO'] !== null && $row['SUT_SERVICIO'] !== ''): ?>
        <?= $row['SUT_SERVICIO'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];
    // Inicializar el gráfico Sparkline para SUT_SERVICIO
    var sparklineSUT_SERVICIO = new Sparkline($('#sparkline-SUT_SERVICIO')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_SERVICIO.draw(SUT_SERVICIO);

    if (SUT_SERVICIO.length > 0 && SUT_SERVICIO[SUT_SERVICIO.length - 1] <= <?= $range[0]['SUT_SERVICIO']; ?>) {
        sparklineSUT_SERVICIO.options.lineColor = '#f56954';
        sparklineSUT_SERVICIO.options.endColor = '#f56954';
        sparklineSUT_SERVICIO.draw(SUT_SERVICIO);
    }
});
</script>

<script>
$(function() {
    const SUT_TARIFAUIM = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_TARIFAUIM'] !== null && $row['SUT_TARIFAUIM'] !== ''): ?>
        <?= $row['SUT_TARIFAUIM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_TARIFAUIM
    var sparklineSUT_TARIFAUIM = new Sparkline($('#sparkline-SUT_TARIFAUIM')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_TARIFAUIM.draw(SUT_TARIFAUIM);

    if (SUT_TARIFAUIM.length > 0 && SUT_TARIFAUIM[SUT_TARIFAUIM.length - 1] <= <?= $range[0]['SUT_TARIFAUIM']; ?>) {
        sparklineSUT_TARIFAUIM.options.lineColor = '#f56954';
        sparklineSUT_TARIFAUIM.options.endColor = '#f56954';
        sparklineSUT_TARIFAUIM.draw(SUT_TARIFAUIM);
    }
});
</script>

<script>
$(function() {
    const SUT_VELOCIDADESNETUIM = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_VELOCIDADESNETUIM'] !== null && $row['SUT_VELOCIDADESNETUIM'] !== ''): ?>
        <?= $row['SUT_VELOCIDADESNETUIM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_VELOCIDADESNETUIM
    var sparklineSUT_VELOCIDADESNETUIM = new Sparkline($('#sparkline-SUT_VELOCIDADESNETUIM')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_VELOCIDADESNETUIM.draw(SUT_VELOCIDADESNETUIM);

    if (SUT_VELOCIDADESNETUIM.length > 0 && SUT_VELOCIDADESNETUIM[SUT_VELOCIDADESNETUIM.length - 1] <= <?= $range[0]['SUT_VELOCIDADESNETUIM']; ?>) {
        sparklineSUT_VELOCIDADESNETUIM.options.lineColor = '#f56954';
        sparklineSUT_VELOCIDADESNETUIM.options.endColor = '#f56954';
        sparklineSUT_VELOCIDADESNETUIM.draw(SUT_VELOCIDADESNETUIM);
    }
});
</script>

<script>
$(function() {
    const TELEPHONENUMBER = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['TELEPHONENUMBER'] !== null && $row['TELEPHONENUMBER'] !== ''): ?>
        <?= $row['TELEPHONENUMBER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];
    // Inicializar el gráfico Sparkline para TELEPHONENUMBER
    var sparklineTELEPHONENUMBER = new Sparkline($('#sparkline-TELEPHONENUMBER')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineTELEPHONENUMBER.draw(TELEPHONENUMBER);

    if (TELEPHONENUMBER.length > 0 && TELEPHONENUMBER[TELEPHONENUMBER.length - 1] <= <?= $range[0]['TELEPHONENUMBER']; ?>) {
        sparklineTELEPHONENUMBER.options.lineColor = '#f56954';
        sparklineTELEPHONENUMBER.options.endColor = '#f56954';
        sparklineTELEPHONENUMBER.draw(TELEPHONENUMBER);
    }
});
</script>

<script>
$(function() {
    const TMP_EQUIPOS_MTA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['TMP_EQUIPOS_MTA'] !== null && $row['TMP_EQUIPOS_MTA'] !== ''): ?>
        <?= $row['TMP_EQUIPOS_MTA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para TMP_EQUIPOS_MTA
    var sparklineTMP_EQUIPOS_MTA = new Sparkline($('#sparkline-TMP_EQUIPOS_MTA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineTMP_EQUIPOS_MTA.draw(TMP_EQUIPOS_MTA);

    if (TMP_EQUIPOS_MTA.length > 0 && TMP_EQUIPOS_MTA[TMP_EQUIPOS_MTA.length - 1] <= <?= $range[0]['TMP_EQUIPOS_MTA']; ?>) {
        sparklineTMP_EQUIPOS_MTA.options.lineColor = '#f56954';
        sparklineTMP_EQUIPOS_MTA.options.endColor = '#f56954';
        sparklineTMP_EQUIPOS_MTA.draw(TMP_EQUIPOS_MTA);
    }
});
</script>

<script>
$(function() {
    const TNASSIGNMENT = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['TNASSIGNMENT'] !== null && $row['TNASSIGNMENT'] !== ''): ?>
        <?= $row['TNASSIGNMENT'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para TNASSIGNMENT
    var sparklineTNASSIGNMENT = new Sparkline($('#sparkline-TNASSIGNMENT')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineTNASSIGNMENT.draw(TNASSIGNMENT);

    if (TNASSIGNMENT.length > 0 && TNASSIGNMENT[TNASSIGNMENT.length - 1] <= <?= $range[0]['TNASSIGNMENT']; ?>) {
        sparklineTNASSIGNMENT.options.lineColor = '#f56954';
        sparklineTNASSIGNMENT.options.endColor = '#f56954';
        sparklineTNASSIGNMENT.draw(TNASSIGNMENT);
    }
});
</script>

<script>
$(function() {
    const TNCONSUMER = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['TNCONSUMER'] !== null && $row['TNCONSUMER'] !== ''): ?>
        <?= $row['TNCONSUMER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para TNCONSUMER
    var sparklineTNCONSUMER = new Sparkline($('#sparkline-TNCONSUMER')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineTNCONSUMER.draw(TNCONSUMER);

    if (TNCONSUMER.length > 0 && TNCONSUMER[TNCONSUMER.length - 1] <= <?= $range[0]['TNCONSUMER']; ?>) {
        sparklineTNCONSUMER.options.lineColor = '#f56954';
        sparklineTNCONSUMER.options.endColor = '#f56954';
        sparklineTNCONSUMER.draw(TNCONSUMER);
    }
});
</script>

<script>
$(function() {
    const XVTR_SIEBEL_INFO_SERIES_T = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['XVTR_SIEBEL_INFO_SERIES_T'] !== null && $row['XVTR_SIEBEL_INFO_SERIES_T'] !== ''): ?>
        <?= $row['XVTR_SIEBEL_INFO_SERIES_T'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para XVTR_SIEBEL_INFO_SERIES_T
    var sparklineXVTR_SIEBEL_INFO_SERIES_T = new Sparkline($('#sparkline-XVTR_SIEBEL_INFO_SERIES_T')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineXVTR_SIEBEL_INFO_SERIES_T.draw(XVTR_SIEBEL_INFO_SERIES_T);

    if (XVTR_SIEBEL_INFO_SERIES_T.length > 0 && XVTR_SIEBEL_INFO_SERIES_T[XVTR_SIEBEL_INFO_SERIES_T.length -1] <= <?= $range[0]['XVTR_SIEBEL_INFO_SERIES_T']; ?>) {
        sparklineXVTR_SIEBEL_INFO_SERIES_T.options.lineColor = '#f56954';
        sparklineXVTR_SIEBEL_INFO_SERIES_T.options.endColor = '#f56954';
        sparklineXVTR_SIEBEL_INFO_SERIES_T.draw(XVTR_SIEBEL_INFO_SERIES_T);
    }
});
</script>