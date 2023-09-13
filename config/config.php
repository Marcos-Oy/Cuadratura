<?php
// En un archivo llamado "config.php"
require_once "DatabaseConnection.php";

$database = new Database();
$conn = $database->getConnection();

?>