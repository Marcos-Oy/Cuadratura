<script>
$(function() {
    const DAC = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['DAC'] !== null && $row['DAC'] !== ''): ?>
        <?= $row['DAC'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para DAC
    var sparklineDAC = new Sparkline($('#sparkline-DAC')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineDAC.draw(DAC);

    if (DAC.length > 0 && DAC[DAC.length - 1] <= <?= $range[0]['DAC']; ?>) {
        sparklineDAC.options.lineColor = '#f56954';
        sparklineDAC.options.endColor = '#f56954';
        sparklineDAC.draw(DAC);
    }
});
</script>

<script>
$(function() {
    const CUT_LICENCIA_HSS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_LICENCIA_HSS'] !== null && $row['CUT_LICENCIA_HSS'] !== ''): ?>
        <?= $row['CUT_LICENCIA_HSS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_LICENCIA_HSS
    var sparklineCUT_LICENCIA_HSS = new Sparkline($('#sparkline-CUT_LICENCIA_HSS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_LICENCIA_HSS.draw(CUT_LICENCIA_HSS);

    if (CUT_LICENCIA_HSS.length > 0 && CUT_LICENCIA_HSS[CUT_LICENCIA_HSS.length - 1] <= <?= $range[0]['CUT_LICENCIA_HSS']; ?>) {
        sparklineCUT_LICENCIA_HSS.options.lineColor = '#f56954';
        sparklineCUT_LICENCIA_HSS.options.endColor = '#f56954';
        sparklineCUT_LICENCIA_HSS.draw(CUT_LICENCIA_HSS);
    }
});
</script>

<script>
$(function() {
    const VALIDLINES = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['VALIDLINES'] !== null && $row['VALIDLINES'] !== ''): ?>
        <?= $row['VALIDLINES'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para VALIDLINES
    var sparklineVALIDLINES = new Sparkline($('#sparkline-VALIDLINES')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineVALIDLINES.draw(VALIDLINES);

    if (VALIDLINES.length > 0 && VALIDLINES[VALIDLINES.length - 1] <= <?= $range[0]['VALIDLINES']; ?>) {
        sparklineVALIDLINES.options.lineColor = '#f56954';
        sparklineVALIDLINES.options.endColor = '#f56954';
        sparklineVALIDLINES.draw(VALIDLINES);
    }
});
</script>

<script>
$(function() {
    const SUT_TELEFONIA_IBNLINES = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_TELEFONIA_IBNLINES'] !== null && $row['SUT_TELEFONIA_IBNLINES'] !== ''): ?>
        <?= $row['SUT_TELEFONIA_IBNLINES'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_TELEFONIA_IBNLINES
    var sparklineSUT_TELEFONIA_IBNLINES = new Sparkline($('#sparkline-SUT_TELEFONIA_IBNLINES')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_TELEFONIA_IBNLINES.draw(SUT_TELEFONIA_IBNLINES);

    if (SUT_TELEFONIA_IBNLINES.length > 0 && SUT_TELEFONIA_IBNLINES[SUT_TELEFONIA_IBNLINES.length - 1] <= <?= $range[0]['SUT_TELEFONIA_IBNLINES']; ?>) {
        sparklineSUT_TELEFONIA_IBNLINES.options.lineColor = '#f56954';
        sparklineSUT_TELEFONIA_IBNLINES.options.endColor = '#f56954';
        sparklineSUT_TELEFONIA_IBNLINES.draw(SUT_TELEFONIA_IBNLINES);
    }
});
</script>

<script>
$(function() {
    const SUT_PSVA = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_PSVA'] !== null && $row['SUT_PSVA'] !== ''): ?>
        <?= $row['SUT_PSVA'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_PSVA
    var sparklineSUT_PSVA = new Sparkline($('#sparkline-SUT_PSVA')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_PSVA.draw(SUT_PSVA);

    if (SUT_PSVA.length > 0 && SUT_PSVA[SUT_PSVA.length - 1] <= <?= $range[0]['SUT_PSVA']; ?>) {
        sparklineSUT_PSVA.options.lineColor = '#f56954';
        sparklineSUT_PSVA.options.endColor = '#f56954';
        sparklineSUT_PSVA.draw(SUT_PSVA);
    }
});
</script>

<script>
$(function() {
    const CUT_TIVO = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_TIVO'] !== null && $row['CUT_TIVO'] !== ''): ?>
        <?= $row['CUT_TIVO'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_TIVO
    var sparklineCUT_TIVO = new Sparkline($('#sparkline-CUT_TIVO')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_TIVO.draw(CUT_TIVO);

    if (CUT_TIVO.length > 0 && CUT_TIVO[CUT_TIVO.length - 1] <= <?= $range[0]['CUT_TIVO']; ?>) {
        sparklineCUT_TIVO.options.lineColor = '#f56954';
        sparklineCUT_TIVO.options.endColor = '#f56954';
        sparklineCUT_TIVO.draw(CUT_TIVO);
    }
});
</script>

<script>
$(function() {

    const Cgm_Ea_Seu = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CGM_EA_SEU'] !== null && $row['CGM_EA_SEU'] !== ''): ?>
        <?= $row['CGM_EA_SEU'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para Cgm_Ea_Seu
    var sparklineCgm_Ea_Seu = new Sparkline($('#sparkline-Cgm_Ea_Seu')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCgm_Ea_Seu.draw(Cgm_Ea_Seu);

    if (Cgm_Ea_Seu.length > 0 && Cgm_Ea_Seu[Cgm_Ea_Seu.length - 1] <= <?= $range[0]['CGM_EA_SEU']; ?>) {
        sparklineCgm_Ea_Seu.options.lineColor = '#f56954';
        sparklineCgm_Ea_Seu.options.endColor = '#f56954';
        sparklineCgm_Ea_Seu.draw(Cgm_Ea_Seu);
    }
});
</script>

<script>
$(function() {
    const cut_Siebel_FTTH_Inventario = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_SIEBEL_FTTH_INVENTARIO'] !== null && $row['CUT_SIEBEL_FTTH_INVENTARIO'] !== ''): ?>
        <?= $row['CUT_SIEBEL_FTTH_INVENTARIO'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para cut_Siebel_FTTH_Inventario
    var sparklineCut_Siebel_FTTH_Inventario = new Sparkline($('#sparkline-CUT_SIEBEL_FTTH_INVENTARIO')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCut_Siebel_FTTH_Inventario.draw(cut_Siebel_FTTH_Inventario);

    if (cut_Siebel_FTTH_Inventario.length > 0 && cut_Siebel_FTTH_Inventario[cut_Siebel_FTTH_Inventario.length - 1] <= <?= $range[0]['CUT_SIEBEL_FTTH_INVENTARIO']; ?>) {
        sparklineCut_Siebel_FTTH_Inventario.options.lineColor = '#f56954';
        sparklineCut_Siebel_FTTH_Inventario.options.endColor = '#f56954';
        sparklineCut_Siebel_FTTH_Inventario.draw(cut_Siebel_FTTH_Inventario);
    }
});
</script>

<script>
$(function() {
    const CUT_SIEBEL_FTTH_AMS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_SIEBEL_FTTH_AMS'] !== null && $row['CUT_SIEBEL_FTTH_AMS'] !== ''): ?>
        <?= $row['CUT_SIEBEL_FTTH_AMS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_FTTH_AMS
    var sparklineCUT_SIEBEL_FTTH_AMS = new Sparkline($('#sparkline-CUT_SIEBEL_FTTH_AMS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_FTTH_AMS.draw(CUT_SIEBEL_FTTH_AMS);

    if (CUT_SIEBEL_FTTH_AMS.length > 0 && CUT_SIEBEL_FTTH_AMS[CUT_SIEBEL_FTTH_AMS.length - 1] <= <?= $range[0]['CUT_SIEBEL_FTTH_AMS']; ?>) {
        sparklineCUT_SIEBEL_FTTH_AMS.options.lineColor = '#f56954';
        sparklineCUT_SIEBEL_FTTH_AMS.options.endColor = '#f56954';
        sparklineCUT_SIEBEL_FTTH_AMS.draw(CUT_SIEBEL_FTTH_AMS);
    }
});
</script>

<script>
$(function() {
    const CUT_SIEBEL_FTTH_BBMS = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_SIEBEL_FTTH_BBMS'] !== null && $row['CUT_SIEBEL_FTTH_BBMS'] !== ''): ?>
        <?= $row['CUT_SIEBEL_FTTH_BBMS'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_FTTH_BBMS
    var sparklineCUT_SIEBEL_FTTH_BBMS = new Sparkline($('#sparkline-CUT_SIEBEL_FTTH_BBMS')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_FTTH_BBMS.draw(CUT_SIEBEL_FTTH_BBMS);

    if (CUT_SIEBEL_FTTH_BBMS.length > 0 && CUT_SIEBEL_FTTH_BBMS[CUT_SIEBEL_FTTH_BBMS.length - 1] <= <?= $range[0]['CUT_SIEBEL_FTTH_BBMS']; ?>) {
        sparklineCUT_SIEBEL_FTTH_BBMS.options.lineColor = '#f56954';
        sparklineCUT_SIEBEL_FTTH_BBMS.options.endColor = '#f56954';
        sparklineCUT_SIEBEL_FTTH_BBMS.draw(CUT_SIEBEL_FTTH_BBMS);
    }
});
</script>

<script>
$(function() {
    const SUT_INTERNET = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_INTERNET'] !== null && $row['SUT_INTERNET'] !== ''): ?>
        <?= $row['SUT_INTERNET'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_INTERNET
    var sparklineSUT_INTERNET = new Sparkline($('#sparkline-SUT_INTERNET')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_INTERNET.draw(SUT_INTERNET);

    if (SUT_INTERNET.length > 0 && SUT_INTERNET[SUT_INTERNET.length - 1] <= <?= $range[0]['SUT_INTERNET']; ?>) {
        sparklineSUT_INTERNET.options.lineColor = '#f56954';
        sparklineSUT_INTERNET.options.endColor = '#f56954';
        sparklineSUT_INTERNET.draw(SUT_INTERNET);
    }
});
</script>

<script>
$(function() {
    const CUT_FTTHGW = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['CUT_FTTHGW'] !== null && $row['CUT_FTTHGW'] !== ''): ?>
        <?= $row['CUT_FTTHGW'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_FTTHGW
    var sparklineCUT_FTTHGW = new Sparkline($('#sparkline-CUT_FTTHGW')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_FTTHGW.draw(CUT_FTTHGW);

    if (CUT_FTTHGW.length > 0 && CUT_FTTHGW[CUT_FTTHGW.length - 1] <= <?= $range[0]['CUT_FTTHGW']; ?>) {
        sparklineCUT_FTTHGW.options.lineColor = '#f56954';
        sparklineCUT_FTTHGW.options.endColor = '#f56954';
        sparklineCUT_FTTHGW.draw(CUT_FTTHGW);
    }
});
</script>

<script>
$(function() {
    const SUT_ADRENALIN_XML2 = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_ADRENALIN_XML2'] !== null && $row['SUT_ADRENALIN_XML2'] !== ''): ?>
        <?= $row['SUT_ADRENALIN_XML2'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_ADRENALIN_XML2
    var sparklineSUT_ADRENALIN_XML2 = new Sparkline($('#sparkline-SUT_ADRENALIN_XML2')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_ADRENALIN_XML2.draw(SUT_ADRENALIN_XML2);

    if (SUT_ADRENALIN_XML2.length > 0 && SUT_ADRENALIN_XML2[SUT_ADRENALIN_XML2.length - 1] <= <?= $range[0]['SUT_ADRENALIN_XML2']; ?>) {
        sparklineSUT_ADRENALIN_XML2.options.lineColor = '#f56954';
        sparklineSUT_ADRENALIN_XML2.options.endColor = '#f56954';
        sparklineSUT_ADRENALIN_XML2.draw(SUT_ADRENALIN_XML2);
    }
});
</script>

<script>
$(function() {
    const SUT_ADRENALIN_AUX = [
        <?php foreach($rows as $row): ?>
        <?php if ($row['SUT_ADRENALIN_AUX'] !== null && $row['SUT_ADRENALIN_AUX'] !== ''): ?>
        <?= $row['SUT_ADRENALIN_AUX'] ?>,
        <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_ADRENALIN_AUX
    var sparklineSUT_ADRENALIN_AUX = new Sparkline($('#sparkline-SUT_ADRENALIN_AUX')[0], {
        width: 200,
        height: 20,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_ADRENALIN_AUX.draw(SUT_ADRENALIN_AUX);

    if (SUT_ADRENALIN_AUX.length > 0 && SUT_ADRENALIN_AUX[SUT_ADRENALIN_AUX.length - 1] <= <?= $range[0]['SUT_ADRENALIN_AUX']; ?>) {
        sparklineSUT_ADRENALIN_AUX.options.lineColor = '#f56954';
        sparklineSUT_ADRENALIN_AUX.options.endColor = '#f56954';
        sparklineSUT_ADRENALIN_AUX.draw(SUT_ADRENALIN_AUX);
    }
});
</script>





