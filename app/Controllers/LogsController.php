<?php

namespace App\Controllers;

use Config\Connection\SFTPManager;
use Config\Connection\SFTPVlr;

class LogsController
{
    private $sftpManager;

    public function __construct()
    {
        require_once(__DIR__ . '/../../Config/SFTPVlr.php');
        $this->sftpVlr = new SFTPVlr();

        require_once(__DIR__ . '/../../Config/SFTPManager.php');
        $this->sftpManager = new SFTPManager();

        global $raiz;
        $this->raiz = $raiz;
    }

// ... lo ideal separar vistas con descargas e infos

public function InfoLogs(){
    
}

public function DownloadLogs(){

}

public function DownloadArchLogs(){
    
}

//
public function ViewsLogs()
{
    $viewPath = __DIR__ . '/../../resources/views/logs/logs.php';

    if (file_exists($viewPath)) {

        if ($this->sftpVlr->connect() && $this->sftpVlr->login()) {
            $fechaActual = date('Ymd');
            $searchPattern = "OK_HSS9860_2_{$fechaActual}";
        
            // Obtener la lista de archivos en el directorio deseado
            $remoteDir = "/ftphome/home/VLR/";
            $allFiles = $this->sftpVlr->getFilesInDirectory($remoteDir);
        
            $matchingFiles = [];
        
            // Buscar los archivos que contienen el fragmento de búsqueda
            foreach ($allFiles as $file) {
                if (strpos($file, $searchPattern) !== false) {
                    $matchingFiles[] = $file;
                }
            }
        
            if (!empty($matchingFiles)) {
                // Ordenar los archivos por fecha de modificación en orden descendente (el más reciente primero)
                usort($matchingFiles, function($a, $b) use ($remoteDir) {
                    $fileA = $remoteDir . $a;
                    $fileB = $remoteDir . $b;
                    $timeA = $this->sftpVlr->getFileInfoByPath($fileA)['mtime'];
                    $timeB = $this->sftpVlr->getFileInfoByPath($fileB)['mtime'];
                    return $timeB - $timeA;
                });
        
                // Obtener la ruta del archivo más reciente (el primer archivo de la lista)
                $rutaArchivoMasReciente = $remoteDir . $matchingFiles[0];
        
                // Obtener el nombre del archivo más reciente sin la ruta completa
                $nombreArchivoMasReciente = basename($rutaArchivoMasReciente);
        
                // Obtener información del archivo más reciente utilizando el método getFileInfoByPath
                $fileInfo = $this->sftpVlr->getFileInfoByPath($rutaArchivoMasReciente);
                if ($fileInfo !== false) {
                    $fileSize = $fileInfo['size'];
                    $fileModificationTime = date('Y-m-d H:i:s', $fileInfo['mtime']);
        
                    $filesToPublicVlr = [
                        'path' => $nombreArchivoMasReciente,
                        'size' => $fileSize,
                        'modification_time' => $fileModificationTime
                    ];

                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $rutaArchivoMasReciente . '</p>';
                }
            } else {
                echo "No se encontraron archivos para la fecha actual con el fragmento de búsqueda: {$searchPattern}";
            }
        }
        
        

        if ($this->sftpManager->connect() && $this->sftpManager->login()) {
            $filesToDownload = [
                "/Cuadratura/Tablas/HSS/OUT/Carga_HSS.log",

                "/Cuadratura/Plataforma/IbnLines/carga_ibnlines.log",
                "/Cuadratura/Plataforma/ValidLines/carga_Validline.log",
                "/Cuadratura/Plataforma/PSVA/Carga_PSVA.log",

                "/Cuadratura/Plataforma/data/carga_inet.log",
                "/Cuadratura/Plataforma/data/ProcesoAdrenalin.log",
                "/Cuadratura/Plataforma/data/Estadisticas_Adrenalin.log",
                "/Cuadratura/Plataforma/data/Carga_Adrenalin2.log",
                "/Cuadratura/Plataforma/data/Secuencia_Adrenalin.log",
                
                "/Cuadratura/Tablas/carga_incognito/FTTH/carga_Inventario.log",
                "/Cuadratura/Tablas/carga_incognito/FTTH/carga_AMS.log",
                "/Cuadratura/Tablas/carga_incognito/FTTH/carga_BBMS.log",

                "/Cuadratura/Plataforma/TIVO/ARCHIVOS/Carga_Tivo.log",

                "/Cuadratura/FTTH_ONT_GW/Carga_FTTH_ONT_GW.log"
                // Agrega aquí más rutas de archivos que deseas consultar...
            ];

            $filesToInfo = $filesToDownload;

            foreach ($filesToDownload as $fileIndex => $filePath) {
                $fileContents = $this->sftpManager->getFileContentsByPath($filePath);

                if ($fileContents !== false) {
                    // Ruta donde se guardará el archivo descargado
                    $downloadPath = __DIR__ . '/../../resources/assets/logs/' . basename($filePath);

                    // Verificamos si el archivo ya existe
                    if (file_exists($downloadPath)) {
                        unlink($downloadPath);
                    } else {
                        // Si el archivo no existe, lo creamos
                        if (!file_exists(dirname($downloadPath))) {
                            mkdir(dirname($downloadPath), 0755, true);
                        }
                    }

                    // Guardamos el contenido del archivo en la nueva ubicación
                    file_put_contents($downloadPath, $fileContents);

                    // Actualizamos el array para tener la ruta descargada
                    $filesToDownload[$fileIndex] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $downloadPath);
                } else {
                    echo '<p>Error: No se pudo obtener el archivo desde el servidor SFTP: ' . $filePath . '</p>';
                }
            }

            foreach ($filesToInfo as $fileIndex => $filePath) {
                $fileInfo = $this->sftpManager->getFileInfoByPath($filePath);

                if ($fileInfo !== false) {
                    $fileSize = $fileInfo['size'];
                    $fileModificationTime = date('Y-m-d H:i:s', $fileInfo['mtime']);

                    $filesToInfo[$fileIndex] = [
                        'path' => basename($filePath),
                        'size' => $fileSize,
                        'modification_time' => $fileModificationTime
                    ];
                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                }
            }

            include_once $viewPath;
        } else {
            echo '<p>Error: No se pudo conectar al servidor SFTP.</p>';
        }
    } else {
        echo "Error: la vista no existe";
    }
}

//

public function ViewsArchLogs()
{
    $viewPath = __DIR__ . '/../../resources/views/logs/ArchLog.php';

    if (file_exists($viewPath)) {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {
            $filesToDownload = [
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_addr_per.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_tnconsumer.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_telephonenumber.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_tnassignment.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_ret_lineared.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_ret_cablemodem.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_pat_prcontxprod.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_velocidadesnetuim.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_productop.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_order_item.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_activtemp.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_productop_baja.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_ss_derivadas.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_stbseries.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_redt_vivienda.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_clientes.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_concgtar_new.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_pat_prproducto.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_redt_calles.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_pat_localidad.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_cfs.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset_xa.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_rfs.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset_x.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_indices_sut_servicio.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_conservi.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_place_char.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_servicio.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_material.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_tarifaUIM.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_order.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_equipos.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_siebel_act.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_org_ext.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_dbox.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset_om.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_canales.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_inv_prof.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_servicios.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_servicios_baja.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_user.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_osm_ordenesactivas.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_prod_int.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_giap_traductor.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_order_type.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_giap_voiceplan_movil.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_config_paquete.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_grupotar.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_clasemater.log"
                // Agrega aquí más rutas de archivos que deseas descargar...
            ];

            $filesToDownload1 = [
                "/Cuadratura/Tablas/Arch_Log/Respaldo_Correcciones_UIM.log",
                "/Cuadratura/Tablas/Arch_Log/Respaldo_Validaciones_Automatizadas.log",
                "/Cuadratura/Tablas/Arch_Log/Respaldo_Correcciones_Siebel.log",
                "/Cuadratura/Tablas/Arch_Log/limpia_tablas_desc_uim.log",
                "/Cuadratura/Tablas/Arch_Log/Proceso_Siebel.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_businessinteraction.log",
                "/Cuadratura/Tablas/Arch_Log/Proceso_UIM.log",
                "/Cuadratura/Tablas/Arch_Log/Procesos_2140_2151.log",
                "/Cuadratura/Tablas/Arch_Log/ejecuta_tango_procinet.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tablas_cut.log",
                "/Cuadratura/Tablas/Arch_Log/proceso_ftth.log",
                "/Cuadratura/Tablas/Arch_Log/proceso_cup_validamaterialinet.log",
                "/Cuadratura/Tablas/Arch_Log/proceso_cup_cicloini.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_xvtr_siebel_info_series_t.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_equipos_mta.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_gis_direccion.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_migradb.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_infodbox_uim_1.log"                
                // Agrega aquí más rutas de archivos que deseas descargar...
            ];

            foreach ($filesToDownload as $fileIndex => $filePath) {
                $fileContents = $this->sftpManager->getFileContentsByPath($filePath);

                if ($fileContents !== false) {
                    // Ruta donde se guardará el archivo descargado
                    $downloadPath = __DIR__ . '/../../resources/assets/logs/' . basename($filePath);

                    // Verificamos si el archivo ya existe
                    if (file_exists($downloadPath)) {
                        unlink($downloadPath);
                    } else {
                        // Si el archivo no existe, lo creamos
                        if (!file_exists(dirname($downloadPath))) {
                            mkdir(dirname($downloadPath), 0755, true);
                        }
                    }

                    // Guardamos el contenido del archivo en la nueva ubicación
                    file_put_contents($downloadPath, $fileContents);

                    // Actualizamos el array para tener la ruta descargada
                    $filesToDownload[$fileIndex] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $downloadPath);
                } else {
                    echo '<p>Error: No se pudo obtener el archivo desde el servidor SFTP: ' . $filePath . '</p>';
                }
            }

            foreach ($filesToDownload1 as $fileIndex1 => $filePath1) {
                $fileContents1 = $this->sftpManager->getFileContentsByPath($filePath1);

                if ($fileContents1 !== false) {
                    // Ruta donde se guardará el archivo descargado
                    $downloadPath1 = __DIR__ . '/../../resources/assets/logs/' . basename($filePath1);

                    // Verificamos si el archivo ya existe
                    if (file_exists($downloadPath1)) {
                        unlink($downloadPath1);
                    } else {
                        // Si el archivo no existe, lo creamos
                        if (!file_exists(dirname($downloadPath1))) {
                            mkdir(dirname($downloadPath1), 0755, true);
                        }
                    }

                    // Guardamos el contenido del archivo en la nueva ubicación
                    file_put_contents($downloadPath1, $fileContents1);

                    // Actualizamos el array para tener la ruta descargada
                    $filesToDownload1[$fileIndex1] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $downloadPath1);
                } else {
                    echo '<p>Error: No se pudo obtener el archivo desde el servidor SFTP: ' . $filePath1 . '</p>';
                }
            }

            $namesOnly = array();
            foreach ($filesToDownload as $filePath) {
                $fileName = basename($filePath);
                $namesOnly[] = $fileName;
            }

            $namesOnly1 = array();
            foreach ($filesToDownload1 as $filePath1) {
                $fileName1 = basename($filePath1);
                $namesOnly1[] = $fileName1;
            }
            // Incluimos la vista y pasamos la lista de URLs de archivos descargados al <iframe>
            include_once $viewPath;
        } else {
            echo '<p>Error: No se pudo conectar al servidor SFTP.</p>';
        }
    } else {
        echo "Error: la vista no existe";
    }
}

//

public function ViewsModelDatos()
{
    $viewPath = __DIR__ . '/../../resources/views/logs/ArchLog.php';

    if (file_exists($viewPath)) {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {
            $filesToDownload = [
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_tmp_portaandes.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_1.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_2.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_3.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_4.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_5.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_6.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_7.log"                
                // Agrega aquí más rutas de archivos que deseas descargar...
            ];

            $filesToDownload1 = [
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/Corrige_ATTRIB_46.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/Corrige_ATTRIB_42.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/Corrige_X_OCS_ATTRIB_59.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/Corrige_CPE_TECHNOLOGY.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/Corrige_ATTRIB_45.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/Corrige_X_OCS_ATTRIB_57.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/Corrige_CPE_TYPE.log",
                "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/Corrige_ATTRIB_44.log"                               
                // Agrega aquí más rutas de archivos que deseas descargar...
            ];

            foreach ($filesToDownload as $fileIndex => $filePath) {
                $fileContents = $this->sftpManager->getFileContentsByPath($filePath);

                if ($fileContents !== false) {
                    // Ruta donde se guardará el archivo descargado
                    $downloadPath = __DIR__ . '/../../resources/assets/logs/' . basename($filePath);

                    // Verificamos si el archivo ya existe
                    if (file_exists($downloadPath)) {
                        unlink($downloadPath);
                    } else {
                        // Si el archivo no existe, lo creamos
                        if (!file_exists(dirname($downloadPath))) {
                            mkdir(dirname($downloadPath), 0755, true);
                        }
                    }

                    // Guardamos el contenido del archivo en la nueva ubicación
                    file_put_contents($downloadPath, $fileContents);

                    // Actualizamos el array para tener la ruta descargada
                    $filesToDownload[$fileIndex] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $downloadPath);
                } else {
                    echo '<p>Error: No se pudo obtener el archivo desde el servidor SFTP: ' . $filePath . '</p>';
                }
            }

            foreach ($filesToDownload1 as $fileIndex1 => $filePath1) {
                $fileContents1 = $this->sftpManager->getFileContentsByPath($filePath1);

                if ($fileContents1 !== false) {
                    // Ruta donde se guardará el archivo descargado
                    $downloadPath1 = __DIR__ . '/../../resources/assets/logs/' . basename($filePath1);

                    // Verificamos si el archivo ya existe
                    if (file_exists($downloadPath1)) {
                        unlink($downloadPath1);
                    } else {
                        // Si el archivo no existe, lo creamos
                        if (!file_exists(dirname($downloadPath1))) {
                            mkdir(dirname($downloadPath1), 0755, true);
                        }
                    }

                    // Guardamos el contenido del archivo en la nueva ubicación
                    file_put_contents($downloadPath1, $fileContents1);

                    // Actualizamos el array para tener la ruta descargada
                    $filesToDownload1[$fileIndex1] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $downloadPath1);
                } else {
                    echo '<p>Error: No se pudo obtener el archivo desde el servidor SFTP: ' . $filePath1 . '</p>';
                }
            }

            $namesOnly = array();
            foreach ($filesToDownload as $filePath) {
                $fileName = basename($filePath);
                $namesOnly[] = $fileName;
            }

            $namesOnly1 = array();
            foreach ($filesToDownload1 as $filePath1) {
                $fileName1 = basename($filePath1);
                $namesOnly1[] = $fileName1;
            }
            // Incluimos la vista y pasamos la lista de URLs de archivos descargados al <iframe>
            include_once $viewPath;
        } else {
            echo '<p>Error: No se pudo conectar al servidor SFTP.</p>';
        }
    } else {
        echo "Error: la vista no existe";
    }
}

// ...

}

