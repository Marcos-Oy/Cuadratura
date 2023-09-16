<?php
namespace Config\Connection;

class FTPAdrenalin2
{
    protected $ftp_server;
    protected $ftp_username;
    protected $ftp_password;
    protected $ftp_port; // Nuevo atributo para el puerto
    protected $conn_id;

    public function __construct()
    {
        $this->ftp_server = "192.168.56.17";
        $this->ftp_username = "customer01";
        $this->ftp_password = "vtrcustomer123";
        $this->ftp_port = 21; // Puerto FTP
    }

    public function connect()
    {
        $this->conn_id = ftp_connect($this->ftp_server, $this->ftp_port); // Especifica el puerto
        if (!$this->conn_id) {
            die("No se pudo conectar al servidor FTP");
        }

        // Cambiar a modo activo
        ftp_pasv($this->conn_id, false);

        return true;
    }

    public function login()
    {
        $loggedIn = ftp_login($this->conn_id, $this->ftp_username, $this->ftp_password);
        if (!$loggedIn) {
            die("No se pudo iniciar sesión en el servidor FTP");
        }
        return true;
    }

    public function getFileInfoByPath($filePath)
    {
        $sizeCommand = "SIZE $filePath"; // Comando FTP para obtener el tamaño del archivo
        $sizeResponse = ftp_raw($this->conn_id, $sizeCommand);
    
        $dateTimeCommand = "MDTM $filePath"; // Comando FTP para obtener la fecha de modificación
        $dateTimeResponse = ftp_raw($this->conn_id, $dateTimeCommand);
    
        if (empty($sizeResponse) || empty($dateTimeResponse)) {
            die("No se pudo obtener la información del archivo en el servidor FTP");
        }
    
        // Analiza la respuesta para extraer el tamaño del archivo
        $sizeParts = explode(" ", $sizeResponse[0]);
        $fileSize = (int)$sizeParts[1];
    
        // Analiza la respuesta para extraer la fecha de modificación
        $dateTimeParts = explode(" ", $dateTimeResponse[0]);
        
        if (count($dateTimeParts) < 2) {
            die("Formato de fecha incorrecto en la respuesta del servidor FTP");
        }
    
        $fileModificationTime = strtotime($dateTimeParts[1]);
    
        return [
            'path' => $filePath,
            'size' => $fileSize,
            'mtime' => date('Y-m-d H:i:s', $fileModificationTime),
        ];
    }
    
    

    public function getFilesInDirectory($directory)
    {
        $files = ftp_nlist($this->conn_id, $directory);
        if ($files === false) {
            die("No se pudo obtener la lista de archivos en el directorio del servidor FTP");
        }

        return $files;
    }

    public function close()
    {
        ftp_close($this->conn_id);
    }
}
