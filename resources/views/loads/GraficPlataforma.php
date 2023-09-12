<!-- Código para DAC -->
<!-- <div id="sparkline-DAC"></div> -->
<script>
$(function() {
    const DAC = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['DAC'])): ?>
                <?= $row['DAC'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para DAC
    var sparklineDAC = new Sparkline($('#sparkline-DAC')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineDAC.draw(DAC);
});
</script>

<!-- Código para CUT_LICENCIA_HSS -->
<!-- <div id="sparkline-CUT_LICENCIA_HSS"></div> -->
<script>
$(function() {

    const CUT_LICENCIA_HSS = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['CUT_LICENCIA_HSS'])): ?>
                <?= $row['CUT_LICENCIA_HSS'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_LICENCIA_HSS
    var sparklineCUT_LICENCIA_HSS = new Sparkline($('#sparkline-CUT_LICENCIA_HSS')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_LICENCIA_HSS.draw(CUT_LICENCIA_HSS);
});
</script>

<!-- Código para VALIDLINES -->
<!-- <div id="sparkline-VALIDLINES"></div> -->
<script>
$(function() {

    const VALIDLINES = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['VALIDLINES'])): ?>
                <?= $row['VALIDLINES'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para VALIDLINES
    var sparklineVALIDLINES = new Sparkline($('#sparkline-VALIDLINES')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineVALIDLINES.draw(VALIDLINES);
});
</script>

<!-- Código para SUT_TELEFONIA_IBNLINES -->
<!-- <div id="sparkline-SUT_TELEFONIA_IBNLINES"></div> -->
<script>
$(function() {

    const SUT_TELEFONIA_IBNLINES = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['SUT_TELEFONIA_IBNLINES'])): ?>
                <?= $row['SUT_TELEFONIA_IBNLINES'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_TELEFONIA_IBNLINES
    var sparklineSUT_TELEFONIA_IBNLINES = new Sparkline($('#sparkline-SUT_TELEFONIA_IBNLINES')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_TELEFONIA_IBNLINES.draw(SUT_TELEFONIA_IBNLINES);
});
</script>

<!-- Código para SUT_PSVA -->
<!-- <div id="sparkline-SUT_PSVA"></div> -->
<script>
$(function() {

    const SUT_PSVA = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['SUT_PSVA'])): ?>
                <?= $row['SUT_PSVA'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_PSVA
    var sparklineSUT_PSVA = new Sparkline($('#sparkline-SUT_PSVA')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_PSVA.draw(SUT_PSVA);
});
</script>

<!-- Código para CUT_TIVO -->
<!-- <div id="sparkline-CUT_TIVO"></div> -->
<script>
$(function() {

    const CUT_TIVO = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['CUT_TIVO'])): ?>
                <?= $row['CUT_TIVO'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_TIVO
    var sparklineCUT_TIVO = new Sparkline($('#sparkline-CUT_TIVO')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_TIVO.draw(CUT_TIVO);
});
</script>

<!-- Código para Cgm_Ea_Seu -->
<!-- <div id="sparkline-Cgm_Ea_Seu"></div> -->
<script>
$(function() {

    const Cgm_Ea_Seu = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['CGM_EA_SEU'])): ?>
                <?= $row['CGM_EA_SEU'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para Cgm_Ea_Seu
    var sparklineCgm_Ea_Seu = new Sparkline($('#sparkline-Cgm_Ea_Seu')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCgm_Ea_Seu.draw(Cgm_Ea_Seu);
});
</script>

<!-- Código para cut_Siebel_FTTH_Inventario -->
<!-- <div id="sparkline-cut_Siebel_FTTH_Inventario"></div> -->
<script>
$(function() {

    const cut_Siebel_FTTH_Inventario = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['CUT_SIEBEL_FTTH_INVENTARIO'])): ?>
                <?= $row['CUT_SIEBEL_FTTH_INVENTARIO'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para cut_Siebel_FTTH_Inventario
    var sparklineCut_Siebel_FTTH_Inventario = new Sparkline($('#sparkline-CUT_SIEBEL_FTTH_INVENTARIO')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCut_Siebel_FTTH_Inventario.draw(cut_Siebel_FTTH_Inventario);
});
</script>

<!-- Código para CUT_SIEBEL_FTTH_AMS -->
<!-- <div id="sparkline-CUT_SIEBEL_FTTH_AMS"></div> -->
<script>
$(function() {

    const CUT_SIEBEL_FTTH_AMS = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['CUT_SIEBEL_FTTH_AMS'])): ?>
                <?= $row['CUT_SIEBEL_FTTH_AMS'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_FTTH_AMS
    var sparklineCUT_SIEBEL_FTTH_AMS = new Sparkline($('#sparkline-CUT_SIEBEL_FTTH_AMS')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_FTTH_AMS.draw(CUT_SIEBEL_FTTH_AMS);
});
</script>

<!-- Código para CUT_SIEBEL_FTTH_BBMS -->
<!-- <div id="sparkline-CUT_SIEBEL_FTTH_BBMS"></div> -->
<script>
$(function() {

    const CUT_SIEBEL_FTTH_BBMS = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['CUT_SIEBEL_FTTH_BBMS'])): ?>
                <?= $row['CUT_SIEBEL_FTTH_BBMS'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_SIEBEL_FTTH_BBMS
    var sparklineCUT_SIEBEL_FTTH_BBMS = new Sparkline($('#sparkline-CUT_SIEBEL_FTTH_BBMS')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_SIEBEL_FTTH_BBMS.draw(CUT_SIEBEL_FTTH_BBMS);
});
</script>

<!-- Código para SUT_INTERNET -->
<!-- <div id="sparkline-SUT_INTERNET"></div> -->
<script>
$(function() {

    const SUT_INTERNET = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['SUT_INTERNET'])): ?>
                <?= $row['SUT_INTERNET'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_INTERNET
    var sparklineSUT_INTERNET = new Sparkline($('#sparkline-SUT_INTERNET')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_INTERNET.draw(SUT_INTERNET);
});
</script>

<!-- Código para CUT_FTTHGW -->
<!-- <div id="sparkline-CUT_FTTHGW"></div> -->
<script>
$(function() {

    const CUT_FTTHGW = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['CUT_FTTHGW'])): ?>
                <?= $row['CUT_FTTHGW'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para CUT_FTTHGW
    var sparklineCUT_FTTHGW = new Sparkline($('#sparkline-CUT_FTTHGW')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineCUT_FTTHGW.draw(CUT_FTTHGW);
});
</script>

<!-- Código para SUT_ADRENALIN_XML2 -->
<!-- <div id="sparkline-SUT_ADRENALIN_XML2"></div> -->
<script>
$(function() {

    const SUT_ADRENALIN_XML2 = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['SUT_ADRENALIN_XML2'])): ?>
                <?= $row['SUT_ADRENALIN_XML2'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_ADRENALIN_XML2
    var sparklineSUT_ADRENALIN_XML2 = new Sparkline($('#sparkline-SUT_ADRENALIN_XML2')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_ADRENALIN_XML2.draw(SUT_ADRENALIN_XML2);
});
</script>

<!-- Código para SUT_ADRENALIN_AUX -->
<!-- <div id="sparkline-SUT_ADRENALIN_AUX"></div> -->
<script>
$(function() {

    const SUT_ADRENALIN_AUX = [
        <?php foreach($rows as $row): ?>
            <?php if (!empty($row['SUT_ADRENALIN_AUX'])): ?>
                <?= $row['SUT_ADRENALIN_AUX'] ?>,
            <?php endif; ?>
        <?php endforeach; ?>
    ];

    // Inicializar el gráfico Sparkline para SUT_ADRENALIN_AUX
    var sparklineSUT_ADRENALIN_AUX = new Sparkline($('#sparkline-SUT_ADRENALIN_AUX')[0], {
        width: 240,
        height: 35,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
    });
    sparklineSUT_ADRENALIN_AUX.draw(SUT_ADRENALIN_AUX);
});
</script>





