<?php 


foreach ($fileContents as $filePath => $content) {
    $htmlContent = nl2br(htmlspecialchars($content));

    // Crear un iframe para mostrar el contenido del archivo junto con el nombre del archivo

    if (strpos($htmlContent, 'ERROR') !== false) {
        // Realiza acciones en caso de que se encuentre "error" en el contenido
        // Por ejemplo, puedes imprimir un mensaje o realizar otras acciones aquí
        echo "<h2>{$filePath}</h2>";
        echo "<iframe srcdoc='{$htmlContent}' width='100%' height='500'></iframe>";
    }
}


?>