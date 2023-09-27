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

    public function index() {
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Home/dashboard.php';

        if ($this->sftpManager->connect() && $this->sftpManager->login()) {

            //Obtenemos la info de los logs remotamente
            $InfoLogsM = $this->LogsController->InfoLogs('MANAGER');

            $infoArchLogs0 = $this->LogsController->InfoArchLogs(0);
            $infoArchLogs1 = $this->LogsController->InfoArchLogs(1);

            $InfoModelDatos0 = $this->LogsController->InfoModelDatos(0);
            $InfoModelDatos1 = $this->LogsController->InfoModelDatos(1);

            $InfoProceduresAMPM0 = $this->LogsController->InfoProceduresAMPM(0);
            $InfoProceduresAMPM1 = $this->LogsController->InfoProceduresAMPM(1);

            $FileInfo = array_merge($InfoLogsM,
            $infoArchLogs0, $infoArchLogs1,
            $InfoModelDatos0, $InfoModelDatos1,
            $InfoProceduresAMPM0, $InfoProceduresAMPM1);

            //Descargamos los logs

            $this->LogsController->DownloadLogs($this->LogsController->LogsDirectories());

            $this->LogsController->DownloadLogs($this->LogsController->ArchLogsDirectories(0));
            $this->LogsController->DownloadLogs($this->LogsController->ArchLogsDirectories(1));

            $this->LogsController->DownloadLogs($this->LogsController->ModelDatosDirectories(0));
            $this->LogsController->DownloadLogs($this->LogsController->ModelDatosDirectories(1));

            $this->LogsController->DownloadLogs($this->LogsController->ProceduresAMPMDirectories(0));
            $this->LogsController->DownloadLogs($this->LogsController->ProceduresAMPMDirectories(1));
            

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

