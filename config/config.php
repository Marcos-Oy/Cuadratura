<?php
// En un archivo llamado "config.php"
require_once "Database.php";

$database = new Database();
$conn = $database->getConnection();

?>