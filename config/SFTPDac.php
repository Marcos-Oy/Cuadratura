<?php
namespace Config\Connection;

class SFTPDac
{
    protected $sftp_server;
    protected $sftp_username;
    protected $sftp_password;
    protected $conn_id;

    public function __construct()
    {
        $this->sftp_server = "172.17.89.134";
        $this->sftp_username = "cuadraturaftp_ti";
        $this->sftp_password = "soporte.123";
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

    public function getFileContentsByPath($filePath)
    {
        $sftp = ssh2_sftp($this->conn_id);
        if (!$sftp) {
            die("No se pudo obtener el objeto SFTP");
        }

        $stream = fopen("ssh2.sftp://{$sftp}{$filePath}", 'rb');
        if (!$stream) {
            die("No se pudo abrir el archivo en el servidor SFTP");
        }

        $contents = stream_get_contents($stream);
        fclose($stream);

        return $contents;
    }

    public function close()
    {
        ssh2_disconnect($this->conn_id);
    }
}
