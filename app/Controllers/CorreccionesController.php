<?php

namespace App\Controllers;
use Config\Connection\Database;
use Database\ModelDAO\CorreccionesDAO;

class CorreccionesController {
    private $raiz;   
    private $CorreccionesDAO;
    
    public function __construct() {
        require_once (__DIR__ . '/../../Config/database.php');
        require_once (__DIR__ . '/../../database/ModelDAO/CorreccionesDAO.php');
        $dbConnection = new Database();
        $this->CorreccionesDAO = new CorreccionesDAO($dbConnection->getConnection());
        global $raiz;
        $this->raiz = $raiz;
    }

    /*************************LLAMADA A LAS VISTAS**********************/
    
    public function view_CSiebel() {

        $rows = $this->CorreccionesDAO->getAllCorreccionesSiebel();   

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

        $rows = $this->CorreccionesDAO->getAllCorreccionesUIM();   

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
    
}

