<?php 

$CountErrores = 0;
$CountOk = 0;
$CountPendiente = 0;
$CountBlanco = 0;

$SuccessArray = [];
$ErrorArray = [];
$BlancArray = [];
$PenArray = [];

foreach ($FileInfo as $Rclave => $RfileName) {
    $RcleanedPath = preg_replace('/[^a-zA-Z0-9]+/', '', $RfileName['path']);
    $RsectionId = 'section_' . $RcleanedPath;
    // Construye la ruta completa al archivo .log (usando barras inclinadas en Windows)
    $archivo = $_SERVER['DOCUMENT_ROOT'] .$this->raiz.'/resources/assets/logs/'.$RfileName['path'];
    // Lee el contenido del archivo
    $contenido = file_get_contents($archivo);

    // $containsError = (
    //     strpos($contenido, 'ERROR') !== false ||
    //     strpos($contenido, 'error') !== false ||
    //     strpos($contenido, 'ORA-01722') !== false ||
    //     strpos($contenido, 'ORA-12899') !== false ||
    //     strpos($contenido, 'ORA-00001') !== false
    // );

    $containsError = (
        preg_match('/ORA-\d+/i', $contenido)
    );
    
    

    // Busca que no exista la palabra reservada "error", Verifica si el archivo está con escrituras y si el log pertenece al día de hoy
    if (!$containsError && !filesize($archivo) == 0 && date('Y-m-d') === date('Y-m-d', strtotime($RfileName['modification_time']))) {
        // Muestra un mensaje de alerta en el navegador
        $CountOk = $CountOk + 1;
        $SuccessArray[] = $RfileName;
    }

    // Busca la palabra reservada "error" y si está con fecha de hoy
    if ($containsError && !filesize($archivo) == 0 && date('Y-m-d') === date('Y-m-d', strtotime($RfileName['modification_time']))) {
        // Muestra un mensaje de alerta en el navegador
        $CountErrores = $CountErrores + 1;
        $ErrorArray[] = $RfileName;
    }

    // Verifica si el archivo está sin escrituras y si está con fecha de hoy
    if (filesize($archivo) == 0 && date('Y-m-d') === date('Y-m-d', strtotime($RfileName['modification_time']))) {
        $CountBlanco = $CountBlanco + 1;
        $BlancArray[] = $RfileName;
    }

    // Verifica si el log no pertenece al día de hoy
    if (date('Y-m-d') != date('Y-m-d', strtotime($RfileName['modification_time']))) {
        $CountPendiente = $CountPendiente + 1;
        $PenArray[] = $RfileName;
    }
}

?>