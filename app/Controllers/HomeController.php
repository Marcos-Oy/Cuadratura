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
            // $filePath = "/Cuadratura/Tablas/Arch_Log/refresco_tabla_redt_vivienda.log";
            $filePaths = $this->LogsController->ArchLogsDirectories(0);
            
            $fileContents = $this->sftpManager->getFileContentsByPaths($filePaths);
            


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

