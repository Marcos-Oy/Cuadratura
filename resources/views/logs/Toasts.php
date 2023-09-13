<?php 

foreach ($RinfoArchLogs1 as $Rclave1 => $RfileName1) {
    $RcleanedPath1 = preg_replace('/[^a-zA-Z0-9]+/', '', $RfileName1['path']);
    $RsectionId1 = 'section_' . $RcleanedPath1;
    // Construye la ruta completa al archivo .log (usando barras inclinadas en Windows)
    $archivo = $_SERVER['DOCUMENT_ROOT'] .$this->raiz.'/resources/assets/logs/'.$RfileName1['path'];
    // Lee el contenido del archivo
    $contenido = file_get_contents($archivo);

    // Busca que no exista la palabra reservada "error", Verifica si el archivo está con escrituras y si el log pertenece al día de hoy
    if (!strpos($contenido, 'ERROR') !== false && !filesize($archivo) == 0 && date('Y-m-d') === date('Y-m-d', strtotime($RfileName1['modification_time']))) {
        // Muestra un mensaje de alerta en el navegador
        echo '<script>
            $(document).Toasts("create", {
                class: "bg-success",
                title: "Ejecución exitosa ✔",
                body: "El siguiente archivo se ha ejecutado correctamente: <br><a href=\'#' . $RsectionId1 . '\'>' . $RfileName1['path'] . '</a><br>' . $RfileName1['modification_time'] . '"
            });
            </script>';
    }

    // Busca la palabra reservada "error" y si está con fecha de hoy
    if (strpos($contenido, 'ERROR') !== false && date('Y-m-d') === date('Y-m-d', strtotime($RfileName1['modification_time']))) {
        // Muestra un mensaje de alerta en el navegador
        echo '<script>
            $(document).Toasts("create", {
                class: "bg-danger",
                title: "Error inesperado ❌",
                body: "Se encontró un inconveniente en el archivo: <br><a href=\'#' . $RsectionId1 . '\'>' . $RfileName1['path'] . '</a><br>' . $RfileName1['modification_time'] . '"
            });
            </script>';
    }

    // Verifica si el archivo está sin escrituras y si está con fecha de hoy
    if (filesize($archivo) == 0 && date('Y-m-d') === date('Y-m-d', strtotime($RfileName1['modification_time']))) {
        echo '<script>
            $(document).Toasts("create", {
                class: "bg-info",
                title: "Proceso de carga 🔄",
                body: "El siguiente archivo se encuentra en ejecución: <br><a href=\'#' . $RsectionId1 . '\'>' . $RfileName1['path'] . '</a><br>' . $RfileName1['modification_time'] . '"
            });
            </script>';
    }

    // Verifica si el log no pertenece al día de hoy
    if (date('Y-m-d') != date('Y-m-d', strtotime($RfileName1['modification_time']))) {
        
        // Muestra un mensaje de alerta en el navegador
        echo '<script>
        $(document).Toasts("create", {
            class: "bg-warning",
            title: "Ejecución pendiente ⚠",
            body: "Se el siguiente archivo aún no se ha ejecutado: <br><a href=\'#' . $RsectionId1 . '\'>' . $RfileName1['path'] . '</a><br>' . $RfileName1['modification_time'] . '"
        });
        </script>';
    }
} 

foreach ($RinfoArchLogs as $Rclave => $RfileName) {
    $RcleanedPath = preg_replace('/[^a-zA-Z0-9]+/', '', $RfileName['path']);
    $RsectionId = 'section_' . $RcleanedPath;
    // Construye la ruta completa al archivo .log (usando barras inclinadas en Windows)
    $archivo = $_SERVER['DOCUMENT_ROOT'] .$this->raiz.'/resources/assets/logs/'.$RfileName['path'];
    // Lee el contenido del archivo
    $contenido = file_get_contents($archivo);

    // Busca que no exista la palabra reservada "error", Verifica si el archivo está con escrituras y si el log pertenece al día de hoy
    if (!strpos($contenido, 'ERROR') !== false && !filesize($archivo) == 0 && date('Y-m-d') === date('Y-m-d', strtotime($RfileName['modification_time']))) {
        // Muestra un mensaje de alerta en el navegador
        echo '<script>
            $(document).Toasts("create", {
                class: "bg-success",
                title: "Ejecución exitosa ✔",
                body: "El siguiente archivo se ha ejecutado correctamente: <br><a href=\'#' . $RsectionId . '\'>' . $RfileName['path'] . '</a><br>' . $RfileName['modification_time'] . '"
            });
            </script>';
    }

    // Busca la palabra reservada "error" y si está con fecha de hoy
    if (strpos($contenido, 'ERROR') !== false && date('Y-m-d') === date('Y-m-d', strtotime($RfileName['modification_time']))) {
        // Muestra un mensaje de alerta en el navegador
        echo '<script>
            $(document).Toasts("create", {
                class: "bg-danger",
                title: "Error inesperado ❌",
                body: "Se encontró un inconveniente en el archivo: <br><a href=\'#' . $RsectionId . '\'>' . $RfileName['path'] . '</a><br>' . $RfileName['modification_time'] . '"
            });
            </script>';
    }

    // Verifica si el archivo está sin escrituras y si está con fecha de hoy
    if (filesize($archivo) == 0 && date('Y-m-d') === date('Y-m-d', strtotime($RfileName['modification_time']))) {
        echo '<script>
            $(document).Toasts("create", {
                class: "bg-info",
                title: "Proceso de Ejecución 🔄",
                body: "El siguiente archivo se encuentra en ejecución: <br><a href=\'#' . $RsectionId . '\'>' . $RfileName['path'] . '</a><br>' . $RfileName['modification_time'] . '"
            });
            </script>';
    }

    // Verifica si el log no pertenece al día de hoy
    if (date('Y-m-d') != date('Y-m-d', strtotime($RfileName['modification_time']))) {
        
        // Muestra un mensaje de alerta en el navegador
        echo '<script>
        $(document).Toasts("create", {
            class: "bg-warning",
            title: "Ejecución pendiente ⚠",
            body: "Se el siguiente archivo aún no se ha ejecutado:  <br><a href=\'#' . $RsectionId . '\'>' . $RfileName['path'] . '</a><br>' . $RfileName['modification_time'] . '"
        });
        </script>';
    }
}

?>