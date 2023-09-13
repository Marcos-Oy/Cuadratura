<?php

namespace App\Controllers;
use Config\Connection\Database;
use Database\ModelDAO\LoadsDAO;
use Database\Model\LoadsModel;

class LoadsController {
    private $raiz;   
    private $LoadsDAO;
    private $LoadsModel;
    
    public function __construct() {
        require_once (__DIR__ . '/../../Config/database.php');
        require_once (__DIR__ . '/../../database/ModelDAO/LoadsDAO.php');
        // require_once (__DIR__ . '/../../database/Model/LoadsModel.php');
        $dbConnection = new Database();
        $this->LoadsDAO = new LoadsDAO($dbConnection->getConnection());
        // $this->LoadsModel = new LoadsModel();
        global $raiz;
        $this->raiz = $raiz;
    }

    /*************************LLAMADA A LAS VISTAS**********************/
    
    public function ShowRefresco() {

        $rows = $this->LoadsDAO->getAllRefresco();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/loads/ShowRefresco.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function ShowPlataforma() {
        
        $rows = $this->LoadsDAO->getAllPlataforma();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/loads/ShowPlataforma.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function InsertPlataform() {
        
        $this->LoadsDAO->InsertPlataforma(); 
        header("Location:$this->raiz/loads/Plataforma");
    }

    public function InsertRefresco() {
        
        $this->LoadsDAO->InsertRefresco(); 
        header("Location:$this->raiz/loads/Refresco");
    }

    public function UpdatePlataform() {
        $atributos = [
            'DAC',
            'CUT_LICENCIA_HSS',
            'VALIDLINES',
            'SUT_TELEFONIA_IBNLINES',
            'SUT_PSVA',
            'CUT_TIVO',
            // 'Cgm_Ea_Seu',
            'cut_Siebel_FTTH_Inventario',
            'CUT_SIEBEL_FTTH_AMS',
            'CUT_SIEBEL_FTTH_BBMS',
            // 'SUT_INTERNET',
            'CUT_FTTHGW',
            'SUT_ADRENALIN_XML2',
            'SUT_ADRENALIN_AUX'
        ];
        
        if (isset($_POST['TODO'])) {
            foreach ($atributos as $atributo) {
                $this->LoadsDAO->UpdatePlataforma($atributo);
            }
            $this->LoadsDAO->UpdatePlataforma('Cgm_Ea_Seu');
            $this->LoadsDAO->UpdatePlataforma('SUT_INTERNET');
        }

        if (isset($_POST['DAC'])) {
            $this->LoadsDAO->UpdatePlataforma('DAC');
        }
        
        if (isset($_POST['CUT_LICENCIA_HSS'])) {
            $this->LoadsDAO->UpdatePlataforma('CUT_LICENCIA_HSS');
        }
        
        if (isset($_POST['VALIDLINES'])) {
            $this->LoadsDAO->UpdatePlataforma('VALIDLINES');
        }
        
        if (isset($_POST['SUT_TELEFONIA_IBNLINES'])) {
            $this->LoadsDAO->UpdatePlataforma('SUT_TELEFONIA_IBNLINES');
        }
        
        if (isset($_POST['SUT_PSVA'])) {
            $this->LoadsDAO->UpdatePlataforma('SUT_PSVA');
        }
        
        if (isset($_POST['CUT_TIVO'])) {
            $this->LoadsDAO->UpdatePlataforma('CUT_TIVO');
        }
        
        if (isset($_POST['Cgm_Ea_Seu'])) {
            $this->LoadsDAO->UpdatePlataforma('Cgm_Ea_Seu');
        }
        
        if (isset($_POST['cut_Siebel_FTTH_Inventario'])) {
            $this->LoadsDAO->UpdatePlataforma('cut_Siebel_FTTH_Inventario');
        }
        
        if (isset($_POST['CUT_SIEBEL_FTTH_AMS'])) {
            $this->LoadsDAO->UpdatePlataforma('CUT_SIEBEL_FTTH_AMS');
        }
        
        if (isset($_POST['CUT_SIEBEL_FTTH_BBMS'])) {
            $this->LoadsDAO->UpdatePlataforma('CUT_SIEBEL_FTTH_BBMS');
        }
        
        if (isset($_POST['SUT_INTERNET'])) {
            $this->LoadsDAO->UpdatePlataforma('SUT_INTERNET');
        }
        
        if (isset($_POST['CUT_FTTHGW'])) {
            $this->LoadsDAO->UpdatePlataforma('CUT_FTTHGW');
        }
        
        if (isset($_POST['SUT_ADRENALIN_XML2'])) {
            $this->LoadsDAO->UpdatePlataforma('SUT_ADRENALIN_XML2');
        }
        
        if (isset($_POST['SUT_ADRENALIN_AUX'])) {
            $this->LoadsDAO->UpdatePlataforma('SUT_ADRENALIN_AUX');
        }

        header("Location:$this->raiz/loads/Plataforma");
    }

    public function UpdateRefresco() {
        $atributos = [
            'BUSINESSIINTERACTION',
            'CLIENTES',
            'CUT_SIEBEL_CANALES',
            'CUT_SIEBEL_DBOX',
            'CUT_SIEBEL_EQUIPOS',
            'CUT_SIEBEL_EQUIPOS_MTA',
            'CUT_SIEBEL_PRODUCTOP',
            'CUT_SIEBEL_PRODUCTOP_BAJA',
            'CUT_UIM_CFS',
            'CUT_UIM_RFS',
            'CUT_UIM_RFS_IN_PROGRESS',
            'CUT_UIM_SERVICIOS',
            'CUT_UIM_SERVICIOS_BAJA',
            'FDT_ACTIVTEMP',
            'FDT_AREAFUN',
            'FDT_CLASEMATER',
            'FDT_CONFIG_PAQUETE',
            'FDT_MATERIAL',
            'FDT_STBSERIES',
            'FDT_TIPOORD',
            'GIAP_TRADUCTOR',
            'GIAP_VOICEPLAN_MOVIL',
            'GIT_DIRECCION',
            'GIT_VIVIENDA',
            'MIGRADB',
            'OSM_ORDENESACTIVAS',
            'PAT_LOCALIDAD',
            'PAT_PRCONTXPROD',
            'PAT_PRPRODUCTO',
            'PLACE_CHAR',
            'REDT_CALLES',
            'REDT_LINEA',
            'REDT_VIVIENDA',
            'RET_CABLEMODEM',
            'RET_LINEARED',
            'S_ADDR_PER',
            'S_ASSET',
            'S_ASSET_OM',
            'S_ASSET_X',
            'S_ASSET_XA',
            'S_INV_PROF',
            'S_ORDER',
            'S_ORDER_ITEM',
            'S_ORDER_TYPE',
            'S_ORG_EXT',
            'S_PROD_INT',
            'S_USER',
            'SIEBEL_ACT',
            'SS_DERIVADAS',
            'SUT_CONCGTAR_NEW',
            'SUT_CONSERVI',
            'SUT_GRUPOTAR',
            'SUT_GRUPOTARIFA',
            'SUT_INFODBOX_UIM_1',
            'SUT_SERVICIO',
            'SUT_TARIFAUIM',
            'SUT_VELOCIDADESNETUIM',
            'TELEPHONENUMBER',
            'TMP_EQUIPOS_MTA',
            'TNASSIGNMENT',
            'TNCONSUMER',
            'XVTR_SIEBEL_INFO_SERIES_T'
        ];
        
        if (isset($_POST['TODO'])) {
            foreach ($atributos as $atributo) {
                $this->LoadsDAO->UpdateRefresco($atributo);
            }
        }

        if (isset($_POST['BUSINESSIINTERACTION'])) {
            $this->LoadsDAO->UpdateRefresco('BUSINESSIINTERACTION');
        }
        
        if (isset($_POST['CLIENTES'])) {
            $this->LoadsDAO->UpdateRefresco('CLIENTES');
        }
        
        if (isset($_POST['CUT_SIEBEL_CANALES'])) {
            $this->LoadsDAO->UpdateRefresco('CUT_SIEBEL_CANALES');
        }
        
        if (isset($_POST['CUT_SIEBEL_DBOX'])) {
            $this->LoadsDAO->UpdateRefresco('CUT_SIEBEL_DBOX');
        }
        
        if (isset($_POST['CUT_SIEBEL_EQUIPOS'])) {
            $this->LoadsDAO->UpdateRefresco('CUT_SIEBEL_EQUIPOS');
        }
        
        if (isset($_POST['CUT_SIEBEL_EQUIPOS_MTA'])) {
            $this->LoadsDAO->UpdateRefresco('CUT_SIEBEL_EQUIPOS_MTA');
        }
        
        if (isset($_POST['CUT_SIEBEL_PRODUCTOP'])) {
            $this->LoadsDAO->UpdateRefresco('CUT_SIEBEL_PRODUCTOP');
        }
        
        if (isset($_POST['CUT_SIEBEL_PRODUCTOP_BAJA'])) {
            $this->LoadsDAO->UpdateRefresco('CUT_SIEBEL_PRODUCTOP_BAJA');
        }
        
        if (isset($_POST['FDT_ACTIVTEMP'])) {
            $this->LoadsDAO->UpdateRefresco('FDT_ACTIVTEMP');
        }
        
        if (isset($_POST['FDT_AREAFUN'])) {
            $this->LoadsDAO->UpdateRefresco('FDT_AREAFUN');
        }
        
        if (isset($_POST['FDT_CLASEMATER'])) {
            $this->LoadsDAO->UpdateRefresco('FDT_CLASEMATER');
        }
        
        if (isset($_POST['FDT_CONFIG_PAQUETE'])) {
            $this->LoadsDAO->UpdateRefresco('FDT_CONFIG_PAQUETE');
        }
        
        if (isset($_POST['FDT_MATERIAL'])) {
            $this->LoadsDAO->UpdateRefresco('FDT_MATERIAL');
        }
        
        if (isset($_POST['FDT_STBSERIES'])) {
            $this->LoadsDAO->UpdateRefresco('FDT_STBSERIES');
        }
        
        if (isset($_POST['FDT_TIPOORD'])) {
            $this->LoadsDAO->UpdateRefresco('FDT_TIPOORD');
        }
        
        if (isset($_POST['GIAP_TRADUCTOR'])) {
            $this->LoadsDAO->UpdateRefresco('GIAP_TRADUCTOR');
        }
        
        if (isset($_POST['GIAP_VOICEPLAN_MOVIL'])) {
            $this->LoadsDAO->UpdateRefresco('GIAP_VOICEPLAN_MOVIL');
        }
        
        if (isset($_POST['GIT_DIRECCION'])) {
            $this->LoadsDAO->UpdateRefresco('GIT_DIRECCION');
        }
        
        if (isset($_POST['GIT_VIVIENDA'])) {
            $this->LoadsDAO->UpdateRefresco('GIT_VIVIENDA');
        }
        
        if (isset($_POST['MIGRADB'])) {
            $this->LoadsDAO->UpdateRefresco('MIGRADB');
        }
        
        if (isset($_POST['OSM_ORDENESACTIVAS'])) {
            $this->LoadsDAO->UpdateRefresco('OSM_ORDENESACTIVAS');
        }
        
        if (isset($_POST['PAT_LOCALIDAD'])) {
            $this->LoadsDAO->UpdateRefresco('PAT_LOCALIDAD');
        }
        
        if (isset($_POST['PAT_PRCONTXPROD'])) {
            $this->LoadsDAO->UpdateRefresco('PAT_PRCONTXPROD');
        }
        
        if (isset($_POST['PAT_PRPRODUCTO'])) {
            $this->LoadsDAO->UpdateRefresco('PAT_PRPRODUCTO');
        }
        
        if (isset($_POST['PLACE_CHAR'])) {
            $this->LoadsDAO->UpdateRefresco('PLACE_CHAR');
        }
        
        if (isset($_POST['REDT_CALLES'])) {
            $this->LoadsDAO->UpdateRefresco('REDT_CALLES');
        }
        
        if (isset($_POST['REDT_LINEA'])) {
            $this->LoadsDAO->UpdateRefresco('REDT_LINEA');
        }
        
        if (isset($_POST['REDT_VIVIENDA'])) {
            $this->LoadsDAO->UpdateRefresco('REDT_VIVIENDA');
        }
        
        if (isset($_POST['RET_CABLEMODEM'])) {
            $this->LoadsDAO->UpdateRefresco('RET_CABLEMODEM');
        }
        
        if (isset($_POST['RET_LINEARED'])) {
            $this->LoadsDAO->UpdateRefresco('RET_LINEARED');
        }
        
        if (isset($_POST['S_ADDR_PER'])) {
            $this->LoadsDAO->UpdateRefresco('S_ADDR_PER');
        }
        
        if (isset($_POST['S_ASSET'])) {
            $this->LoadsDAO->UpdateRefresco('S_ASSET');
        }
        
        if (isset($_POST['S_ASSET_OM'])) {
            $this->LoadsDAO->UpdateRefresco('S_ASSET_OM');
        }
        
        if (isset($_POST['S_ASSET_X'])) {
            $this->LoadsDAO->UpdateRefresco('S_ASSET_X');
        }
        
        if (isset($_POST['S_ASSET_XA'])) {
            $this->LoadsDAO->UpdateRefresco('S_ASSET_XA');
        }
        
        if (isset($_POST['S_INV_PROF'])) {
            $this->LoadsDAO->UpdateRefresco('S_INV_PROF');
        }
        
        if (isset($_POST['S_ORDER'])) {
            $this->LoadsDAO->UpdateRefresco('S_ORDER');
        }
        
        if (isset($_POST['S_ORDER_ITEM'])) {
            $this->LoadsDAO->UpdateRefresco('S_ORDER_ITEM');
        }
        
        if (isset($_POST['S_ORDER_TYPE'])) {
            $this->LoadsDAO->UpdateRefresco('S_ORDER_TYPE');
        }
        
        if (isset($_POST['S_ORG_EXT'])) {
            $this->LoadsDAO->UpdateRefresco('S_ORG_EXT');
        }
        
        if (isset($_POST['S_PROD_INT'])) {
            $this->LoadsDAO->UpdateRefresco('S_PROD_INT');
        }
        
        if (isset($_POST['S_USER'])) {
            $this->LoadsDAO->UpdateRefresco('S_USER');
        }
        
        if (isset($_POST['SIEBEL_ACT'])) {
            $this->LoadsDAO->UpdateRefresco('SIEBEL_ACT');
        }
        
        if (isset($_POST['SS_DERIVADAS'])) {
            $this->LoadsDAO->UpdateRefresco('SS_DERIVADAS');
        }
        
        if (isset($_POST['SUT_CONCGTAR_NEW'])) {
            $this->LoadsDAO->UpdateRefresco('SUT_CONCGTAR_NEW');
        }
        
        if (isset($_POST['SUT_CONSERVI'])) {
            $this->LoadsDAO->UpdateRefresco('SUT_CONSERVI');
        }
        
        if (isset($_POST['SUT_GRUPOTAR'])) {
            $this->LoadsDAO->UpdateRefresco('SUT_GRUPOTAR');
        }
        
        if (isset($_POST['SUT_GRUPOTARIFA'])) {
            $this->LoadsDAO->UpdateRefresco('SUT_GRUPOTARIFA');
        }
        
        if (isset($_POST['SUT_INFODBOX_UIM_1'])) {
            $this->LoadsDAO->UpdateRefresco('SUT_INFODBOX_UIM_1');
        }
        
        if (isset($_POST['SUT_SERVICIO'])) {
            $this->LoadsDAO->UpdateRefresco('SUT_SERVICIO');
        }
        
        if (isset($_POST['SUT_TARIFAUIM'])) {
            $this->LoadsDAO->UpdateRefresco('SUT_TARIFAUIM');
        }
        
        if (isset($_POST['SUT_VELOCIDADESNETUIM'])) {
            $this->LoadsDAO->UpdateRefresco('SUT_VELOCIDADESNETUIM');
        }
        
        if (isset($_POST['TELEPHONENUMBER'])) {
            $this->LoadsDAO->UpdateRefresco('TELEPHONENUMBER');
        }
        
        if (isset($_POST['TMP_EQUIPOS_MTA'])) {
            $this->LoadsDAO->UpdateRefresco('TMP_EQUIPOS_MTA');
        }
        
        if (isset($_POST['TNASSIGNMENT'])) {
            $this->LoadsDAO->UpdateRefresco('TNASSIGNMENT');
        }
        
        if (isset($_POST['TNCONSUMER'])) {
            $this->LoadsDAO->UpdateRefresco('TNCONSUMER');
        }
        
        if (isset($_POST['XVTR_SIEBEL_INFO_SERIES_T'])) {
            $this->LoadsDAO->UpdateRefresco('XVTR_SIEBEL_INFO_SERIES_T');
        }
        
        header("Location:$this->raiz/loads/Refresco");
    }
}

