<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Home/dashboard.php';

        // Definir el valor de $raiz
        global $raiz;

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

