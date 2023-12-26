<?php

namespace App\Controllers;
use Config\Connection\Database;
use Database\ModelDAO\ConsultadorDAO;

class ConsultadorController {
    private $raiz;   
    private $ConsultadorDAO;
    
    public function __construct() {
        require_once (__DIR__ . '/../../Config/database.php');
        require_once (__DIR__ . '/../../database/ModelDAO/ConsultadorDAO.php');
        $dbConnection = new Database();
        $this->ConsultadorDAO = new ConsultadorDAO($dbConnection->getConnection());
        global $raiz;
        $this->raiz = $raiz;
    }

    /*************************LLAMADA A LAS VISTAS**********************/
    
    public function view_CSiebel() {

        $rows = $this->ConsultadorDAO->getAllCorreccionesSiebel();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Correcciones/CSiebel.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function view_CUIM() {

        $rows = $this->ConsultadorDAO->getAllCorreccionesUIM();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Correcciones/CUIM.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function view_MonitorizacionProcesos() {

        $ResultInet = $this->ConsultadorDAO->getAllResultInet(); 
        $ResultDetaInet = $this->ConsultadorDAO->getAllResultDetaInet();
        $ResultdBox = $this->ConsultadorDAO->getAllResultdBox();
        $LOGPROC = $this->ConsultadorDAO->getAllLOGPROC();
        $LOGPROCINET = $this->ConsultadorDAO->getAllLOGPROCINET();
        $LOGPROCFONO = $this->ConsultadorDAO->getAllLOGPROCFONO();
        $LOGPROCFONOcorn = $this->ConsultadorDAO->getAllLOGPROCFONOcorn();
        $RESPALDO = $this->ConsultadorDAO->getAllRespaldo();    
    
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Procesos/Monitorizacion.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }
    
}

