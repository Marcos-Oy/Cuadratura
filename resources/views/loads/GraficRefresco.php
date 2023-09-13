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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineBUSINESSIINTERACTION.draw(BUSINESSIINTERACTION);

    // Validar si el último valor es igual a cero y cambiar colores
    if (BUSINESSIINTERACTION.length > 0 && BUSINESSIINTERACTION[BUSINESSIINTERACTION.length - 1] === 0) {
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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCLIENTES.draw(CLIENTES);

    if (CLIENTES.length > 0 && CLIENTES[CLIENTES.length - 1] === 0) {
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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_CANALES.draw(CUT_SIEBEL_CANALES);

    if (CUT_SIEBEL_CANALES.length > 0 && CUT_SIEBEL_CANALES[CUT_SIEBEL_CANALES.length - 1] === 0) {
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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_DBOX.draw(CUT_SIEBEL_DBOX);

    if (CUT_SIEBEL_DBOX.length > 0 && CUT_SIEBEL_DBOX[CUT_SIEBEL_DBOX.length - 1] === 0) {
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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_EQUIPOS.draw(CUT_SIEBEL_EQUIPOS);

    if (CUT_SIEBEL_EQUIPOS.length > 0 && CUT_SIEBEL_EQUIPOS[CUT_SIEBEL_EQUIPOS.length - 1] === 0) {
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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_EQUIPOS_MTA.draw(CUT_SIEBEL_EQUIPOS_MTA);

    if (CUT_SIEBEL_EQUIPOS_MTA.length > 0 && CUT_SIEBEL_EQUIPOS_MTA[CUT_SIEBEL_EQUIPOS_MTA.length - 1] === 0) {
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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_PRODUCTOP.draw(CUT_SIEBEL_PRODUCTOP);

    if (CUT_SIEBEL_PRODUCTOP.length > 0 && CUT_SIEBEL_PRODUCTOP[CUT_SIEBEL_PRODUCTOP.length - 1] === 0) {
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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_PRODUCTOP_BAJA.draw(CUT_SIEBEL_PRODUCTOP_BAJA);

    if (CUT_SIEBEL_PRODUCTOP_BAJA.length > 0 && CUT_SIEBEL_PRODUCTOP_BAJA[CUT_SIEBEL_PRODUCTOP_BAJA.length - 1] === 0) {
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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_CFS.draw(CUT_UIM_CFS);

    if (CUT_UIM_CFS.length > 0 && CUT_UIM_CFS[CUT_UIM_CFS.length - 1] === 0) {
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
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_RFS.draw(CUT_UIM_RFS);

    if (CUT_UIM_RFS.length > 0 && CUT_UIM_RFS[CUT_UIM_RFS.length - 1] === 0) {
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
        <?php if (!empty($row['CUT_UIM_RFS_IN_PROGRESS'])): ?>
        <?= $row['CUT_UIM_RFS_IN_PROGRESS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_UIM_RFS_IN_PROGRESS
    var sparklineCUT_UIM_RFS_IN_PROGRESS = new Sparkline($('#sparkline-CUT_UIM_RFS_IN_PROGRESS')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_RFS_IN_PROGRESS.draw(CUT_UIM_RFS_IN_PROGRESS);
});
</script>

<script>
$(function() {
    const CUT_UIM_SERVICIOS = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['CUT_UIM_SERVICIOS'])): ?>
        <?= $row['CUT_UIM_SERVICIOS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_UIM_SERVICIOS
    var sparklineCUT_UIM_SERVICIOS = new Sparkline($('#sparkline-CUT_UIM_SERVICIOS')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_SERVICIOS.draw(CUT_UIM_SERVICIOS);
});
</script>

<script>
$(function() {
    const CUT_UIM_SERVICIOS_BAJA = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['CUT_UIM_SERVICIOS_BAJA'])): ?>
        <?= $row['CUT_UIM_SERVICIOS_BAJA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_UIM_SERVICIOS_BAJA
    var sparklineCUT_UIM_SERVICIOS_BAJA = new Sparkline($('#sparkline-CUT_UIM_SERVICIOS_BAJA')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_UIM_SERVICIOS_BAJA.draw(CUT_UIM_SERVICIOS_BAJA);
});
</script>

<script>
$(function() {
    const FDT_ACTIVTEMP = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['FDT_ACTIVTEMP'])): ?>
        <?= $row['FDT_ACTIVTEMP'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_ACTIVTEMP
    var sparklineFDT_ACTIVTEMP = new Sparkline($('#sparkline-FDT_ACTIVTEMP')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_ACTIVTEMP.draw(FDT_ACTIVTEMP);
});
</script>

<script>
$(function() {
    const FDT_AREAFUN = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['FDT_AREAFUN'])): ?>
        <?= $row['FDT_AREAFUN'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_AREAFUN
    var sparklineFDT_AREAFUN = new Sparkline($('#sparkline-FDT_AREAFUN')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_AREAFUN.draw(FDT_AREAFUN);
});
</script>

<script>
$(function() {
    const FDT_CLASEMATER = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['FDT_CLASEMATER'])): ?>
        <?= $row['FDT_CLASEMATER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_CLASEMATER
    var sparklineFDT_CLASEMATER = new Sparkline($('#sparkline-FDT_CLASEMATER')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_CLASEMATER.draw(FDT_CLASEMATER);
});
</script>

<script>
$(function() {
    const FDT_CONFIG_PAQUETE = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['FDT_CONFIG_PAQUETE'])): ?>
        <?= $row['FDT_CONFIG_PAQUETE'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_CONFIG_PAQUETE
    var sparklineFDT_CONFIG_PAQUETE = new Sparkline($('#sparkline-FDT_CONFIG_PAQUETE')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_CONFIG_PAQUETE.draw(FDT_CONFIG_PAQUETE);
});
</script>

<script>
$(function() {
    const FDT_MATERIAL = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['FDT_MATERIAL'])): ?>
        <?= $row['FDT_MATERIAL'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_MATERIAL
    var sparklineFDT_MATERIAL = new Sparkline($('#sparkline-FDT_MATERIAL')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_MATERIAL.draw(FDT_MATERIAL);
});
</script>

<script>
$(function() {
    const FDT_STBSERIES = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['FDT_STBSERIES'])): ?>
        <?= $row['FDT_STBSERIES'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_STBSERIES
    var sparklineFDT_STBSERIES = new Sparkline($('#sparkline-FDT_STBSERIES')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_STBSERIES.draw(FDT_STBSERIES);
});
</script>

<script>
$(function() {
    const FDT_TIPOORD = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['FDT_TIPOORD'])): ?>
        <?= $row['FDT_TIPOORD'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para FDT_TIPOORD
    var sparklineFDT_TIPOORD = new Sparkline($('#sparkline-FDT_TIPOORD')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineFDT_TIPOORD.draw(FDT_TIPOORD);
});
</script>

<script>
$(function() {
    const GIAP_TRADUCTOR = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['GIAP_TRADUCTOR'])): ?>
        <?= $row['GIAP_TRADUCTOR'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para GIAP_TRADUCTOR
    var sparklineGIAP_TRADUCTOR = new Sparkline($('#sparkline-GIAP_TRADUCTOR')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineGIAP_TRADUCTOR.draw(GIAP_TRADUCTOR);
});
</script>

<script>
$(function() {
    const GIAP_VOICEPLAN_MOVIL = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['GIAP_VOICEPLAN_MOVIL'])): ?>
        <?= $row['GIAP_VOICEPLAN_MOVIL'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para GIAP_VOICEPLAN_MOVIL
    var sparklineGIAP_VOICEPLAN_MOVIL = new Sparkline($('#sparkline-GIAP_VOICEPLAN_MOVIL')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineGIAP_VOICEPLAN_MOVIL.draw(GIAP_VOICEPLAN_MOVIL);
});
</script>

<script>
$(function() {
    const GIT_DIRECCION = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['GIT_DIRECCION'])): ?>
        <?= $row['GIT_DIRECCION'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para GIT_DIRECCION
    var sparklineGIT_DIRECCION = new Sparkline($('#sparkline-GIT_DIRECCION')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineGIT_DIRECCION.draw(GIT_DIRECCION);
});
</script>

<script>
$(function() {
    const GIT_VIVIENDA = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['GIT_VIVIENDA'])): ?>
        <?= $row['GIT_VIVIENDA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para GIT_VIVIENDA
    var sparklineGIT_VIVIENDA = new Sparkline($('#sparkline-GIT_VIVIENDA')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineGIT_VIVIENDA.draw(GIT_VIVIENDA);
});
</script>

<script>
$(function() {
    const MIGRADB = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['MIGRADB'])): ?>
        <?= $row['MIGRADB'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para MIGRADB
    var sparklineMIGRADB = new Sparkline($('#sparkline-MIGRADB')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineMIGRADB.draw(MIGRADB);
});
</script>

<script>
$(function() {
    const OSM_ORDENESACTIVAS = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['OSM_ORDENESACTIVAS'])): ?>
        <?= $row['OSM_ORDENESACTIVAS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para OSM_ORDENESACTIVAS
    var sparklineOSM_ORDENESACTIVAS = new Sparkline($('#sparkline-OSM_ORDENESACTIVAS')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineOSM_ORDENESACTIVAS.draw(OSM_ORDENESACTIVAS);
});
</script>

<script>
$(function() {
    const PAT_LOCALIDAD = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['PAT_LOCALIDAD'])): ?>
        <?= $row['PAT_LOCALIDAD'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para PAT_LOCALIDAD
    var sparklinePAT_LOCALIDAD = new Sparkline($('#sparkline-PAT_LOCALIDAD')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklinePAT_LOCALIDAD.draw(PAT_LOCALIDAD);
});
</script>

<script>
$(function() {
    const PAT_PRCONTXPROD = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['PAT_PRCONTXPROD'])): ?>
        <?= $row['PAT_PRCONTXPROD'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para PAT_PRCONTXPROD
    var sparklinePAT_PRCONTXPROD = new Sparkline($('#sparkline-PAT_PRCONTXPROD')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklinePAT_PRCONTXPROD.draw(PAT_PRCONTXPROD);
});
</script>

<script>
$(function() {
    const PAT_PRPRODUCTO = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['PAT_PRPRODUCTO'])): ?>
        <?= $row['PAT_PRPRODUCTO'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para PAT_PRPRODUCTO
    var sparklinePAT_PRPRODUCTO = new Sparkline($('#sparkline-PAT_PRPRODUCTO')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklinePAT_PRPRODUCTO.draw(PAT_PRPRODUCTO);
});
</script>

<script>
$(function() {
    const PLACE_CHAR = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['PLACE_CHAR'])): ?>
        <?= $row['PLACE_CHAR'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para PLACE_CHAR
    var sparklinePLACE_CHAR = new Sparkline($('#sparkline-PLACE_CHAR')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklinePLACE_CHAR.draw(PLACE_CHAR);
});
</script>

<script>
$(function() {
    const REDT_CALLES = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['REDT_CALLES'])): ?>
        <?= $row['REDT_CALLES'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para REDT_CALLES
    var sparklineREDT_CALLES = new Sparkline($('#sparkline-REDT_CALLES')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineREDT_CALLES.draw(REDT_CALLES);
});
</script>

<script>
$(function() {
    const REDT_LINEA = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['REDT_LINEA'])): ?>
        <?= $row['REDT_LINEA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para REDT_LINEA
    var sparklineREDT_LINEA = new Sparkline($('#sparkline-REDT_LINEA')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineREDT_LINEA.draw(REDT_LINEA);
});
</script>

<script>
$(function() {
    const REDT_VIVIENDA = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['REDT_VIVIENDA'])): ?>
        <?= $row['REDT_VIVIENDA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para REDT_VIVIENDA
    var sparklineREDT_VIVIENDA = new Sparkline($('#sparkline-REDT_VIVIENDA')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineREDT_VIVIENDA.draw(REDT_VIVIENDA);
});
</script>

<script>
$(function() {
    const RET_CABLEMODEM = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['RET_CABLEMODEM'])): ?>
        <?= $row['RET_CABLEMODEM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para RET_CABLEMODEM
    var sparklineRET_CABLEMODEM = new Sparkline($('#sparkline-RET_CABLEMODEM')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineRET_CABLEMODEM.draw(RET_CABLEMODEM);
});
</script>

<script>
$(function() {
    const RET_LINEARED = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['RET_LINEARED'])): ?>
        <?= $row['RET_LINEARED'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para RET_LINEARED
    var sparklineRET_LINEARED = new Sparkline($('#sparkline-RET_LINEARED')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineRET_LINEARED.draw(RET_LINEARED);
});
</script>

<script>
$(function() {
    const S_ADDR_PER = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_ADDR_PER'])): ?>
        <?= $row['S_ADDR_PER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ADDR_PER
    var sparklineS_ADDR_PER = new Sparkline($('#sparkline-S_ADDR_PER')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ADDR_PER.draw(S_ADDR_PER);
});
</script>

<script>
$(function() {
    const S_ASSET = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_ASSET'])): ?>
        <?= $row['S_ASSET'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ASSET
    var sparklineS_ASSET = new Sparkline($('#sparkline-S_ASSET')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ASSET.draw(S_ASSET);
});
</script>

<script>
$(function() {
    const S_ASSET_OM = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_ASSET_OM'])): ?>
        <?= $row['S_ASSET_OM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ASSET_OM
    var sparklineS_ASSET_OM = new Sparkline($('#sparkline-S_ASSET_OM')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ASSET_OM.draw(S_ASSET_OM);
});
</script>

<script>
$(function() {
    const S_ASSET_X = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_ASSET_X'])): ?>
        <?= $row['S_ASSET_X'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ASSET_X
    var sparklineS_ASSET_X = new Sparkline($('#sparkline-S_ASSET_X')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ASSET_X.draw(S_ASSET_X);
});
</script>

<script>
$(function() {
    const S_ASSET_XA = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_ASSET_XA'])): ?>
        <?= $row['S_ASSET_XA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ASSET_XA
    var sparklineS_ASSET_XA = new Sparkline($('#sparkline-S_ASSET_XA')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ASSET_XA.draw(S_ASSET_XA);
});
</script>

<script>
$(function() {
    const S_INV_PROF = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_INV_PROF'])): ?>
        <?= $row['S_INV_PROF'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_INV_PROF
    var sparklineS_INV_PROF = new Sparkline($('#sparkline-S_INV_PROF')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_INV_PROF.draw(S_INV_PROF);
});
</script>

<script>
$(function() {
    const S_ORDER = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_ORDER'])): ?>
        <?= $row['S_ORDER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ORDER
    var sparklineS_ORDER = new Sparkline($('#sparkline-S_ORDER')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ORDER.draw(S_ORDER);
});
</script>

<script>
$(function() {
    const S_ORDER_ITEM = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_ORDER_ITEM'])): ?>
        <?= $row['S_ORDER_ITEM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ORDER_ITEM
    var sparklineS_ORDER_ITEM = new Sparkline($('#sparkline-S_ORDER_ITEM')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ORDER_ITEM.draw(S_ORDER_ITEM);
});
</script>

<script>
$(function() {
    const S_ORDER_TYPE = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_ORDER_TYPE'])): ?>
        <?= $row['S_ORDER_TYPE'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ORDER_TYPE
    var sparklineS_ORDER_TYPE = new Sparkline($('#sparkline-S_ORDER_TYPE')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ORDER_TYPE.draw(S_ORDER_TYPE);
});
</script>

<script>
$(function() {
    const S_ORG_EXT = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_ORG_EXT'])): ?>
        <?= $row['S_ORG_EXT'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_ORG_EXT
    var sparklineS_ORG_EXT = new Sparkline($('#sparkline-S_ORG_EXT')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_ORG_EXT.draw(S_ORG_EXT);
});
</script>

<script>
$(function() {
    const S_PROD_INT = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_PROD_INT'])): ?>
        <?= $row['S_PROD_INT'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_PROD_INT
    var sparklineS_PROD_INT = new Sparkline($('#sparkline-S_PROD_INT')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_PROD_INT.draw(S_PROD_INT);
});
</script>

<script>
$(function() {
    const S_USER = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['S_USER'])): ?>
        <?= $row['S_USER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para S_USER
    var sparklineS_USER = new Sparkline($('#sparkline-S_USER')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineS_USER.draw(S_USER);
});
</script>

<script>
$(function() {
    const SIEBEL_ACT = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SIEBEL_ACT'])): ?>
        <?= $row['SIEBEL_ACT'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SIEBEL_ACT
    var sparklineSIEBEL_ACT = new Sparkline($('#sparkline-SIEBEL_ACT')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSIEBEL_ACT.draw(SIEBEL_ACT);
});
</script>

<script>
$(function() {
    const SS_DERIVADAS = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SS_DERIVADAS'])): ?>
        <?= $row['SS_DERIVADAS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SS_DERIVADAS
    var sparklineSS_DERIVADAS = new Sparkline($('#sparkline-SS_DERIVADAS')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSS_DERIVADAS.draw(SS_DERIVADAS);
});
</script>

<script>
$(function() {
    const SUT_CONCGTAR_NEW = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SUT_CONCGTAR_NEW'])): ?>
        <?= $row['SUT_CONCGTAR_NEW'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_CONCGTAR_NEW
    var sparklineSUT_CONCGTAR_NEW = new Sparkline($('#sparkline-SUT_CONCGTAR_NEW')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_CONCGTAR_NEW.draw(SUT_CONCGTAR_NEW);
});
</script>

<script>
$(function() {
    const SUT_CONSERVI = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SUT_CONSERVI'])): ?>
        <?= $row['SUT_CONSERVI'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_CONSERVI
    var sparklineSUT_CONSERVI = new Sparkline($('#sparkline-SUT_CONSERVI')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_CONSERVI.draw(SUT_CONSERVI);
});
</script>

<script>
$(function() {
    const SUT_GRUPOTAR = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SUT_GRUPOTAR'])): ?>
        <?= $row['SUT_GRUPOTAR'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_GRUPOTAR
    var sparklineSUT_GRUPOTAR = new Sparkline($('#sparkline-SUT_GRUPOTAR')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_GRUPOTAR.draw(SUT_GRUPOTAR);
});
</script>

<script>
$(function() {
    const SUT_GRUPOTARIFA = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SUT_GRUPOTARIFA'])): ?>
        <?= $row['SUT_GRUPOTARIFA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_GRUPOTARIFA
    var sparklineSUT_GRUPOTARIFA = new Sparkline($('#sparkline-SUT_GRUPOTARIFA')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_GRUPOTARIFA.draw(SUT_GRUPOTARIFA);
});
</script>

<script>
$(function() {
    const SUT_INFODBOX_UIM_1 = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SUT_INFODBOX_UIM_1'])): ?>
        <?= $row['SUT_INFODBOX_UIM_1'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_INFODBOX_UIM_1
    var sparklineSUT_INFODBOX_UIM_1 = new Sparkline($('#sparkline-SUT_INFODBOX_UIM_1')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_INFODBOX_UIM_1.draw(SUT_INFODBOX_UIM_1);
});
</script>

<script>
$(function() {
    const SUT_SERVICIO = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SUT_SERVICIO'])): ?>
        <?= $row['SUT_SERVICIO'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_SERVICIO
    var sparklineSUT_SERVICIO = new Sparkline($('#sparkline-SUT_SERVICIO')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_SERVICIO.draw(SUT_SERVICIO);
});
</script>

<script>
$(function() {
    const SUT_TARIFAUIM = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SUT_TARIFAUIM'])): ?>
        <?= $row['SUT_TARIFAUIM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_TARIFAUIM
    var sparklineSUT_TARIFAUIM = new Sparkline($('#sparkline-SUT_TARIFAUIM')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_TARIFAUIM.draw(SUT_TARIFAUIM);
});
</script>

<script>
$(function() {
    const SUT_VELOCIDADESNETUIM = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['SUT_VELOCIDADESNETUIM'])): ?>
        <?= $row['SUT_VELOCIDADESNETUIM'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_VELOCIDADESNETUIM
    var sparklineSUT_VELOCIDADESNETUIM = new Sparkline($('#sparkline-SUT_VELOCIDADESNETUIM')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_VELOCIDADESNETUIM.draw(SUT_VELOCIDADESNETUIM);
});
</script>
<script>
$(function() {
    const TELEPHONENUMBER = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['TELEPHONENUMBER'])): ?>
        <?= $row['TELEPHONENUMBER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para TELEPHONENUMBER
    var sparklineTELEPHONENUMBER = new Sparkline($('#sparkline-TELEPHONENUMBER')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineTELEPHONENUMBER.draw(TELEPHONENUMBER);
});
</script>

<script>
$(function() {
    const TMP_EQUIPOS_MTA = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['TMP_EQUIPOS_MTA'])): ?>
        <?= $row['TMP_EQUIPOS_MTA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para TMP_EQUIPOS_MTA
    var sparklineTMP_EQUIPOS_MTA = new Sparkline($('#sparkline-TMP_EQUIPOS_MTA')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineTMP_EQUIPOS_MTA.draw(TMP_EQUIPOS_MTA);
});
</script>

<script>
$(function() {
    const TNASSIGNMENT = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['TNASSIGNMENT'])): ?>
        <?= $row['TNASSIGNMENT'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para TNASSIGNMENT
    var sparklineTNASSIGNMENT = new Sparkline($('#sparkline-TNASSIGNMENT')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineTNASSIGNMENT.draw(TNASSIGNMENT);
});
</script>

<script>
$(function() {
    const TNCONSUMER = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['TNCONSUMER'])): ?>
        <?= $row['TNCONSUMER'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para TNCONSUMER
    var sparklineTNCONSUMER = new Sparkline($('#sparkline-TNCONSUMER')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineTNCONSUMER.draw(TNCONSUMER);
});
</script>

<script>
$(function() {
    const XVTR_SIEBEL_INFO_SERIES_T = [
        <?php foreach($rows as $row): ?>
        <?php if (!empty($row['XVTR_SIEBEL_INFO_SERIES_T'])): ?>
        <?= $row['XVTR_SIEBEL_INFO_SERIES_T'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para XVTR_SIEBEL_INFO_SERIES_T
    var sparklineXVTR_SIEBEL_INFO_SERIES_T = new Sparkline($('#sparkline-XVTR_SIEBEL_INFO_SERIES_T')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineXVTR_SIEBEL_INFO_SERIES_T.draw(XVTR_SIEBEL_INFO_SERIES_T);
});
</script>