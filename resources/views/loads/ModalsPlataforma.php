<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-DAC">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de DAC</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="DAC" name="DAC" type="number" class="form-control" value="<?= $range[0]['DAC'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-DAC" name='btn-DAC' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-HSS">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de CUT_LICENCIA_HSS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="CUT_LICENCIA_HSS" name="CUT_LICENCIA_HSS" type="number" class="form-control"
                        value="<?= $range[0]['CUT_LICENCIA_HSS'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-CUT_LICENCIA_HSS" name='btn-CUT_LICENCIA_HSS' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-TIVO">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de CUT_TIVO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="CUT_TIVO" name="CUT_TIVO" type="number" class="form-control"
                        value="<?= $range[0]['CUT_TIVO'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-CUT_TIVO" name='btn-CUT_TIVO' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-SUT_ADRENALIN_XML2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de SUT_ADRENALIN_XML2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="SUT_ADRENALIN_XML2" name="SUT_ADRENALIN_XML2" type="number" class="form-control"
                        value="<?= $range[0]['SUT_ADRENALIN_XML2'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-SUT_ADRENALIN_XML2" name='btn-SUT_ADRENALIN_XML2' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-SUT_ADRENALIN_AUX">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de SUT_ADRENALIN_AUX</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="SUT_ADRENALIN_AUX" name="SUT_ADRENALIN_AUX" type="number" class="form-control"
                        value="<?= $range[0]['SUT_ADRENALIN_AUX'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-SUT_ADRENALIN_AUX" name='btn-SUT_ADRENALIN_AUX' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-VALIDLINES">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de VALIDLINES</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="VALIDLINES" name="VALIDLINES" type="number" class="form-control"
                        value="<?= $range[0]['VALIDLINES'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-VALIDLINES" name='btn-VALIDLINES' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-SUT_TELEFONIA_IBNLINES">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de SUT_TELEFONIA_IBNLINES</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="SUT_TELEFONIA_IBNLINES" name="SUT_TELEFONIA_IBNLINES" type="number" class="form-control"
                        value="<?= $range[0]['SUT_TELEFONIA_IBNLINES'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-SUT_TELEFONIA_IBNLINES" name='btn-SUT_TELEFONIA_IBNLINES' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-SUT_PSVA">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de SUT_PSVA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="SUT_PSVA" name="SUT_PSVA" type="number" class="form-control"
                        value="<?= $range[0]['SUT_PSVA'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-SUT_PSVA" name='btn-SUT_PSVA' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-Cgm_Ea_Seu">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de Cgm_Ea_Seu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="CGM_EA_SEU" name="CGM_EA_SEU" type="number" class="form-control"
                        value="<?= $range[0]['CGM_EA_SEU'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-CGM_EA_SEU" name='btn-CGM_EA_SEU' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-cut_Siebel_FTTH_Inventario">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de cut_Siebel_FTTH_Inventario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="CUT_SIEBEL_FTTH_INVENTARIO" name="CUT_SIEBEL_FTTH_INVENTARIO" type="number"
                        class="form-control" value="<?= $range[0]['CUT_SIEBEL_FTTH_INVENTARIO'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-DCUT_SIEBEL_FTTH_INVENTARIOAC" name='btn-CUT_SIEBEL_FTTH_INVENTARIO' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-CUT_SIEBEL_FTTH_AMS">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de CUT_SIEBEL_FTTH_AMS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="CUT_SIEBEL_FTTH_AMS" name="CUT_SIEBEL_FTTH_AMS" type="number" class="form-control"
                        value="<?= $range[0]['CUT_SIEBEL_FTTH_AMS'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-CUT_SIEBEL_FTTH_AMS" name='btn-CUT_SIEBEL_FTTH_AMS' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-CUT_SIEBEL_FTTH_BBMS">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de CUT_SIEBEL_FTTH_BBMS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="CUT_SIEBEL_FTTH_BBMS" name="CUT_SIEBEL_FTTH_BBMS" type="number" class="form-control"
                        value="<?= $range[0]['CUT_SIEBEL_FTTH_BBMS'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-CUT_SIEBEL_FTTH_BBMS" name='btn-CUT_SIEBEL_FTTH_BBMS' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-SUT_INTERNET">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de SUT_INTERNET</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="SUT_INTERNET" name="SUT_INTERNET" type="number" class="form-control"
                        value="<?= $range[0]['SUT_INTERNET'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-SUT_INTERNET" name='btn-SUT_INTERNET' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method='POST' action='<?php echo $this->raiz; ?>/update/RangePlataforma'>
    <div class="modal fade" id="modal-CUT_FTTHGW">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar valor de alerta grafical de CUT_FTTHGW</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El gráfico de alerta cambiará a color negativo cuando el valor sea menor o igual a:</p>
                    <input id="CUT_FTTHGW" name="CUT_FTTHGW" type="number" class="form-control"
                        value="<?= $range[0]['CUT_FTTHGW'];?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-CUT_FTTHGW" name='btn-CUT_FTTHGW' class="btn btn-info" type='submit'>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>