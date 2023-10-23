<?php

namespace App\Controllers;

use Config\Connection\SFTPManager;
use App\Controllers\LogsController;

class HomeController {

    private $raiz;
    
    public function __construct() {

        require_once(__DIR__ . '/../../Config/SFTPManager.php');
        $this->sftpManager = new SFTPManager();

        require_once(__DIR__ . '/../../App/Controllers/LogsController.php');
        $this->LogsController = new LogsController();

        global $raiz;
        $this->raiz = $raiz;
    }

    public function home() {
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Home/home.php';



            // Verifica si el archivo de vista existe
            if (file_exists($viewPath)) {
                // Incluye la vista
                include_once $viewPath;
                // phpinfo();
            } else {
                // Si la vista no existe, muestra un mensaje de error
                echo "Error: la vista no existe";
            }
    }

    public function index() {
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Home/dashboard.php';

        if ($this->sftpManager->connect() && $this->sftpManager->login()) {

            //Obtenemos la info de los logs remotamente
            $InfoLogs = $this->LogsController->InfoLogs('MANAGER');
            $infoArchLogs = $this->LogsController->InfoArchLogs();
            $InfoModelDatos = $this->LogsController->InfoModelDatos();
            $InfoProceduresAMPM = $this->LogsController->InfoProceduresAMPM();

            $FileInfo = array_merge($InfoLogs,
            $infoArchLogs,
            $InfoModelDatos,
            $InfoProceduresAMPM);

            //Descargamos los logs

            $this->LogsController->DownloadLogs($this->LogsController->LogsDirectories());
            $this->LogsController->DownloadLogs($this->LogsController->ArchLogsDirectories());
            $this->LogsController->DownloadLogs($this->LogsController->ModelDatosDirectories());
            $this->LogsController->DownloadLogs($this->LogsController->ProceduresAMPMDirectories());
            

            // Verifica si el archivo de vista existe
            if (file_exists($viewPath)) {
                // Incluye la vista
                include_once $viewPath;
                // phpinfo();
            } else {
                // Si la vista no existe, muestra un mensaje de error
                echo "Error: la vista no existe";
            }
            $this->sftpManager->close();
        }
    }
}

