<?php
namespace Config\Connection;

class SFTPAdrenalin
{
    protected $sftp_server;
    protected $sftp_username;
    protected $sftp_password;
    protected $conn_id;

    public function __construct()
    {
        $this->sftp_server = "172.17.89.135";
        $this->sftp_username = "carga_dwh";
        $this->sftp_password = "carga_dwh2019";
    }

    public function connect()
    {
        $this->conn_id = ssh2_connect($this->sftp_server);
        if (!$this->conn_id) {
            die("No se pudo conectar al servidor SFTP");
        }
        return true;
    }

    public function login()
    {
        $loggedIn = ssh2_auth_password($this->conn_id, $this->sftp_username, $this->sftp_password);
        if (!$loggedIn) {
            die("No se pudo iniciar sesión en el servidor SFTP");
        }
        return true;
    }

    public function getFileInfoByPath($filePath)
    {
        $sftp = ssh2_sftp($this->conn_id);
        if (!$sftp) {
            die("No se pudo obtener el objeto SFTP");
        }

        $fileStat = ssh2_sftp_stat($sftp, $filePath);
        if ($fileStat === false) {
            die("No se pudo obtener la información del archivo en el servidor SFTP");
        }

        return $fileStat;
    }

    public function getFilesInDirectory($directory)
    {
        $sftp = ssh2_sftp($this->conn_id);
        if (!$sftp) {
            die("No se pudo obtener el objeto SFTP");
        }

        $files = [];
        $dirHandle = opendir("ssh2.sftp://{$sftp}{$directory}");

        while (($file = readdir($dirHandle)) !== false) {
            if ($file !== '.' && $file !== '..') {
                $files[] = $file;
            }
        }

        closedir($dirHandle);

        return $files;
    }

    public function close()
    {
        ssh2_disconnect($this->conn_id);
    }
}
