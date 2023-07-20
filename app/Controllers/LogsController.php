<?php

namespace App\Controllers;

use Config\Connection\SFTPManager;

class LogsController
{
    private $sftpManager;

    public function __construct()
    {
        require_once(__DIR__ . '/../../Config/SFTPManager.php');
        $this->sftpManager = new SFTPManager();
        global $raiz;
        $this->raiz = $raiz;
    }

// ...

public function ViewsLogs()
{
    $viewPath = __DIR__ . '/../../resources/views/logs/logs.php';

    if (file_exists($viewPath)) {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {
            $filesToDownload = [
                "/Cuadratura/Plataforma/PSVA/Carga_PSVA.log",
                "/Cuadratura/Tablas/HSS/OUT/Carga_HSS.log",
                // Agrega aquí más rutas de archivos que deseas descargar...
            ];

            foreach ($filesToDownload as $fileIndex => $filePath) {
                $fileContents = $this->sftpManager->getFileContentsByPath($filePath);

                if ($fileContents !== false) {
                    // Ruta donde se guardará el archivo descargado
                    $downloadPath = __DIR__ . '/../../resources/assets/logs/' . basename($filePath);

                    // Verificamos si el archivo ya existe
                    if (file_exists($downloadPath)) {
                        unlink($downloadPath);
                    } else {
                        // Si el archivo no existe, lo creamos
                        if (!file_exists(dirname($downloadPath))) {
                            mkdir(dirname($downloadPath), 0755, true);
                        }
                    }

                    // Guardamos el contenido del archivo en la nueva ubicación
                    file_put_contents($downloadPath, $fileContents);

                    // Actualizamos el array para tener la ruta descargada
                    $filesToDownload[$fileIndex] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $downloadPath);
                } else {
                    echo '<p>Error: No se pudo obtener el archivo desde el servidor SFTP: ' . $filePath . '</p>';
                }
            }

            // Incluimos la vista y pasamos la lista de URLs de archivos descargados al <iframe>
            include_once $viewPath;
        } else {
            echo '<p>Error: No se pudo conectar al servidor SFTP.</p>';
        }
    } else {
        echo "Error: la vista no existe";
    }
}



// ...

    
}

