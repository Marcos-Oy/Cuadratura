<?php

namespace App\Controllers;
use Config\Connection\Database;
use Database\ModelDAO\LoadsDAO;
use Database\Model\LoadsModel;

class LoadsController {
    private $raiz;   
    private $LoadsDAO;
    private $LoadsModel;
    
    public function __construct() {
        require_once (__DIR__ . '/../../Config/database.php');
        require_once (__DIR__ . '/../../database/ModelDAO/LoadsDAO.php');
        // require_once (__DIR__ . '/../../database/Model/LoadsModel.php');
        $dbConnection = new Database();
        $this->LoadsDAO = new LoadsDAO($dbConnection->getConnection());
        // $this->LoadsModel = new LoadsModel();
        global $raiz;
        $this->raiz = $raiz;
    }

    /*************************LLAMADA A LAS VISTAS**********************/
    
    public function ShowRefresco() {

        $rows = $this->LoadsDAO->getAllRefresco();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/loads/ShowRefresco.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function ShowPlataforma() {
        
        $rows = $this->LoadsDAO->getAllPlataforma();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/loads/ShowPlataforma.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function InsertPlataform() {
        
        $this->LoadsDAO->InsertPlataforma(); 
        header("Location:$this->raiz/loads/Plataforma");
    }

    public function InsertRefresco() {
        
        $this->LoadsDAO->InsertRefresco(); 
        header("Location:$this->raiz/loads/Refresco");
    }

    
}

