<!-- Main Footer -->
<footer class="main-footer">
    <strong>Data-Quality &copy;</strong> All rights reserved.
</footer>

<div id="preloaderContainer"></div>

<script>
function agregarPreloader() {
    // Crea el preloader
    const preloader = document.createElement("div");
    preloader.className = "preloader flex-column justify-content-center align-items-center";

    // Crea la imagen y establece la ruta
    const imagen = document.createElement("img");
    imagen.src = "<?php echo $this->raiz; ?>/resources/assets/img/loading.gif";
    imagen.alt = "progress";
    imagen.height = 150;
    imagen.width = 250;

    // Agrega la imagen al preloader
    preloader.appendChild(imagen);

    // Agrega el preloader al contenedor
    const preloaderContainer = document.getElementById("preloaderContainer");
    preloaderContainer.appendChild(preloader);
}

const elementos = [
    "Dash",
    "CargaPlataforma",
    "CargaRefresco",
    "Logs",
    "ArchLogs",
    "ModelDatos",
    "ViewsProceduresAMPM",
    "TODO",
    "DAC",
    "CUT_LICENCIA_HSS",
    "VALIDLINES",
    "SUT_TELEFONIA_IBNLINES",
    "SUT_PSVA",
    "CUT_TIVO",
    "Cgm_Ea_Seu",
    "cut_Siebel_FTTH_Inventario",
    "CUT_SIEBEL_FTTH_AMS",
    "CUT_SIEBEL_FTTH_BBMS",
    "SUT_INTERNET",
    "CUT_FTTHGW",
    "SUT_ADRENALIN_XML2",
    "SUT_ADRENALIN_AUX",
    "BUSINESSIINTERACTION",
    "CLIENTES",
    "CUT_SIEBEL_CANALES",
    "CUT_SIEBEL_DBOX",
    "CUT_SIEBEL_EQUIPOS",
    "CUT_SIEBEL_EQUIPOS_MTA",
    "CUT_SIEBEL_PRODUCTOP",
    "CUT_SIEBEL_PRODUCTOP_BAJA",
    "CUT_UIM_CFS",
    "CUT_UIM_RFS",
    "CUT_UIM_RFS_IN_PROGRESS",
    "CUT_UIM_SERVICIOS",
    "CUT_UIM_SERVICIOS_BAJA",
    "FDT_ACTIVTEMP",
    "FDT_AREAFUN",
    "FDT_CLASEMATER",
    "FDT_CONFIG_PAQUETE",
    "FDT_MATERIAL",
    "FDT_STBSERIES",
    "FDT_TIPOORD",
    "GIAP_TRADUCTOR",
    "GIAP_VOICEPLAN_MOVIL",
    "GIT_DIRECCION",
    "GIT_VIVIENDA",
    "MIGRADB",
    "OSM_ORDENESACTIVAS",
    "PAT_LOCALIDAD",
    "PAT_PRCONTXPROD",
    "PAT_PRPRODUCTO",
    "PLACE_CHAR",
    "REDT_CALLES",
    "REDT_LINEA",
    "REDT_VIVIENDA",
    "RET_CABLEMODEM",
    "RET_LINEARED",
    "S_ADDR_PER",
    "S_ASSET",
    "S_ASSET_OM",
    "S_ASSET_X",
    "S_ASSET_XA",
    "S_INV_PROF",
    "S_ORDER",
    "S_ORDER_ITEM",
    "S_ORDER_TYPE",
    "S_ORG_EXT",
    "S_PROD_INT",
    "S_USER",
    "SIEBEL_ACT",
    "SS_DERIVADAS",
    "SUT_CONCGTAR_NEW",
    "SUT_CONSERVI",
    "SUT_GRUPOTAR",
    "SUT_GRUPOTARIFA",
    "SUT_INFODBOX_UIM_1",
    "SUT_SERVICIO",
    "SUT_TARIFAUIM",
    "SUT_VELOCIDADESNETUIM",
    "TELEPHONENUMBER",
    "TMP_EQUIPOS_MTA",
    "TNASSIGNMENT",
    "TNCONSUMER",
    "XVTR_SIEBEL_INFO_SERIES_T"
];

elementos.forEach((elemento) => {
    const elementoDOM = document.getElementById(elemento);
    if (elementoDOM) {
        elementoDOM.addEventListener("click", agregarPreloader);
    }
});

</script>