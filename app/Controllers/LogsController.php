<?php

namespace App\Controllers;

use Config\Connection\SFTPManager;
use Config\Connection\SFTPVlr;
use Config\Connection\SFTPDac;
use Config\Connection\SFTPIncognito;
use Config\Connection\SFTPMapuche;
use Config\Connection\FTPAdrenalin2;

class LogsController
{
    private $sftpManager;

    public function __construct()
    {
        require_once(__DIR__ . '/../../Config/SFTPManager.php');
        $this->sftpManager = new SFTPManager();

        require_once(__DIR__ . '/../../Config/SFTPVlr.php');
        $this->sftpVlr = new SFTPVlr();

        require_once(__DIR__ . '/../../Config/SFTPDac.php');
        $this->sftpDac = new SFTPDac();

        require_once(__DIR__ . '/../../Config/SFTPIncognito.php');
        $this->sftpIncognito = new SFTPIncognito();

        require_once(__DIR__ . '/../../Config/SFTPMapuche.php');
        $this->sftpMapuche = new SFTPMapuche();

        require_once(__DIR__ . '/../../Config/FTPAdrenalin2.php');
        $this->ftpAdrenalin2 = new FTPAdrenalin2();

        global $raiz;
        $this->raiz = $raiz;
    }

    ///////////////////////////////////// LLAMADA A LAS VISTAS /////////////////////////////////////

    public function ViewsLogs()
    {
        $user = $_SESSION['USER'];
        $viewPath = __DIR__ . '/../../resources/views/logs/logs.php';

        if (file_exists($viewPath)) {

            $filesToInfo = $this->InfoLogs('MANAGER');
            $filesToPublicTIVO = $this->InfoLogs('TIVO');
            $filesToPublicDAC = $this->InfoDACLogs('DAC');

            $filesToPublicHSS = $this->InfoVLRLogs('HSS');

            if($user['USERNAME'] === 'MARCOS' || $user['USERNAME'] === 'MARIAS' 
            || $user['USERNAME'] === 'FRANCISCO' || $user['USERNAME'] === 'KARIM')
            {
                $filesToPublicAdrenalin2 = $this->InfoAdrenalin2Logs('ADRENALIN2');
            }

            $filesToPublicINVENTARIO = $this->InfoINCOGNITOLogs('INVENTARIO');
            $filesToPublicAMS = $this->InfoINCOGNITOLogs('AMS');
            $filesToPublicBBMS = $this->InfoINCOGNITOLogs('BBMS');
            $filesToPublicINET = $this->InfoINCOGNITOLogs('INET');
            $filesToPublicONT = $this->InfoINCOGNITOLogs('ONT');

            $filesToPublicPSVA = $this->InfoMAPUCHELogs('PSVA');
            $filesToPublicIbnLines = $this->InfoMAPUCHELogs('IbnLines');
            $filesToPublicValidLines = $this->InfoMAPUCHELogs('ValidLines');

            $filesToDownload = $this->DownloadLogs($this->LogsDirectories());

            include_once $viewPath;

        } else {
            echo "Error: la vista no existe";
        }
    }

    public function ViewsArchLogs()
    {
        $Toasts = __DIR__ . '/../../resources/views/logs/Toasts.php';
        $viewPath = __DIR__ . '/../../resources/views/logs/ArchLog.php';

        if (file_exists($viewPath)) {

            //Obtenemos la info de los logs remotamente
            $infoArchLogs = $this->InfoArchLogs();
            $RinfoArchLogs = array_reverse($infoArchLogs);

            //Descargamos los logs
            $this->DownloadLogs($this->ArchLogsDirectories());

            // Incluimos la vista y pasamos la lista de URLs de archivos descargados al <iframe>
            include_once $viewPath;
        } else {
            echo "Error: la vista no existe";
        }
    }

    public function ViewsModelDatos()
    {
        $Toasts = __DIR__ . '/../../resources/views/logs/Toasts.php';
        $viewPath = __DIR__ . '/../../resources/views/logs/ArchLog.php';

        if (file_exists($viewPath)) {

            //Obtenemos la info de los logs remotamente
            $infoArchLogs = $this->InfoModelDatos();
            $RinfoArchLogs = array_reverse($infoArchLogs);

            //Descargamos los logs
            $this->DownloadLogs($this->ModelDatosDirectories());

            // Incluimos la vista y pasamos la lista de URLs de archivos descargados al <iframe>
            include_once $viewPath;
        } else {
            echo "Error: la vista no existe";
        }
    }

    public function ViewsProceduresAMPM()
    {
        $Toasts = __DIR__ . '/../../resources/views/logs/Toasts.php';
        $viewPath = __DIR__ . '/../../resources/views/logs/ArchLog.php';

        if (file_exists($viewPath)) {

            //Obtenemos la info de los logs remotamente
            $infoArchLogs = $this->InfoProceduresAMPM();
            $RinfoArchLogs = array_reverse($infoArchLogs);

            $this->DownloadLogs($this->ProceduresAMPMDirectories());           
            // Incluimos la vista y pasamos la lista de URLs de archivos descargados al <iframe>
            include_once $viewPath;
        } else {
            echo "Error: la vista no existe";
        }
    }

    public function ViewsComportamientos()
    {
        $user = $_SESSION['USER'];
        $viewPath = __DIR__ . '/../../resources/views/logs/Comportamientos.php';

        if (file_exists($viewPath)) {

            $FilesToInfo = $this->InfoComportamientos('MANAGER'); // Para obtener tamaño - Hora - Fecha
            $this->DownloadLogs($this->ComportamientosDirectories()); // Descargamos los archivos para visuaizarlos

            include_once $viewPath;

        } else {
            echo "Error: la vista no existe";
        }
    }

    ///////////////////////////////////// BANCO DE DIRECTORIOS /////////////////////////////////////

    public function LogsDirectories()
    {
        $Dir = [
            "/Cuadratura/Tablas/HSS/OUT/Carga_HSS.log", // 0

            "/Cuadratura/Plataforma/IbnLines/carga_ibnlines.log", // 1
            "/Cuadratura/Plataforma/ValidLines/carga_Validline.log", // 2
            "/Cuadratura/Plataforma/PSVA/Carga_PSVA.log", // 3

            "/Cuadratura/Plataforma/data/carga_inet.log", // 4
            "/Cuadratura/Plataforma/data/ProcesoAdrenalin.log", // 5
            "/Cuadratura/Plataforma/data/Estadisticas_Adrenalin.log", // 6
            "/Cuadratura/Plataforma/data/Carga_Adrenalin2.log", // 7
            "/Cuadratura/Plataforma/data/Secuencia_Adrenalin.log", // 8
            
            "/Cuadratura/Tablas/carga_incognito/FTTH/carga_Inventario.log", // 9
            "/Cuadratura/Tablas/carga_incognito/FTTH/carga_AMS.log", // 10
            "/Cuadratura/Tablas/carga_incognito/FTTH/carga_BBMS.log", // 11

            "/Cuadratura/Plataforma/TIVO/ARCHIVOS/Carga_Tivo.log", // 12

            "/Cuadratura/FTTH_ONT_GW/Carga_FTTH_ONT_GW.log", // 13

            "/Cuadratura/Plataforma/TIVO/ARCHIVOS/Separa_Rut_Tivo.log", // 14
            "/Cuadratura/Plataforma/TIVO/ARCHIVOS/Inserta_Reg_Tivo.log", // 15

            "/Cuadratura/Plataforma/DAC/sqlldr.log", // 16
            "/Cuadratura/Plataforma/DAC/Borrado_Encabezados.log" // 17

            // Agrega aquí más rutas de archivos que deseas consultar...
        ];
        return $Dir;
    }

    public function ArchLogsDirectories()
    {

        $Dir = [
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_clasemater.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_grupotar.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_giap_voiceplan_movil.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_order_type.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_prod_int.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_giap_traductor.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_user.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_servicios_baja.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_servicios.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_inv_prof.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_canales.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset_om.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_dbox.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_org_ext.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_siebel_act.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_equipos.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_order_item.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_tarifaUIM.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_material.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_servicio.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_place_char.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_conservi.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_rfs.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_indices_sut_servicio.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset_x.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_cfs.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset_xa.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_pat_localidad.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_redt_calles.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_ss_derivadas.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_pat_prproducto.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_concgtar_new.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_redt_vivienda.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_stbseries.log"
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_activtemp.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_pat_prcontxprod.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_velocidadesnetuim.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_ret_cablemodem.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_addr_per.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_ret_lineared.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_tnassignment.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_telephonenumber.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_tnconsumer.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_infodbox_uim_1.log",
            // "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_config_paquete.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_migradb.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_gis_direccion.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_osm_ordenesactivas.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_equipos_mta.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_xvtr_siebel_info_series_t.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_productop.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_productop_baja.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_clientes.log",
            "/Cuadratura/Tablas/Arch_Log/proceso_cup_cicloini.log",
            "/Cuadratura/Tablas/Arch_Log/tabla_cut_valida_promoinac.log",
            // "/Cuadratura/Tablas/Arch_Log/proceso_cup_validamaterialinet.log",
            "/Cuadratura/Tablas/Arch_Log/limpia_tablas_desc_uim.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tablas_cut.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_businessinteraction.log",
            // "/Cuadratura/Tablas/Arch_Log/ejecuta_tango_procinet.log",
            "/Cuadratura/Tablas/Arch_Log/proceso_ftth.log",
            "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_order.log",
            "/Cuadratura/Tablas/Arch_Log/Procesos_2140_2151.log",
            "/Cuadratura/Tablas/Arch_Log/Proceso_UIM.log",
            "/Cuadratura/Tablas/Arch_Log/Proceso_Siebel.log",
            "/Cuadratura/Tablas/Arch_Log/Respaldo_Correcciones_UIM.log",
            "/Cuadratura/Tablas/Arch_Log/Respaldo_Correcciones_Siebel.log",
            "/Cuadratura/Tablas/Arch_Log/Respaldo_Validaciones_Automatizadas.log"

            // Agrega aquí más rutas de archivos que deseas descargar...
        ];
        return $Dir;
    }

    public function ModelDatosDirectories()
    {
        $Dir = [
            "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_tmp_portaandes.log",
            "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_1.log",
            "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_2.log",
            "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_3.log",
            "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_4.log",
            "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_5.log",
            "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_6.log",
            "/Cuadratura/Tablas/Modelo_Datos_2/Arch_Log/refresco_modelo_datos_paso_7.log",
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

        return $Dir;
    }

    public function ProceduresAMPMDirectories()
    {
        $Dir = [
            "/Cuadratura/Procesos_AM_PM/Procesos_Cargas/LOGS/CUP_CARGAR_DBOX_61.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Cargas/LOGS/CUP_CARGAR_ADH_CSV_STATUS.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Cargas/LOGS/CUP_CARGAR_FTTH_GW.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Cargas/LOGS/CUP_CARGAMACCOMPARTIDAIPTV.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Cargas/LOGS/CUP_CARGAR_SIEBEL_GIS.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Cargas/LOGS/CUP_CARGAR_ASSET_HUERFANOS.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Correcciones/LOGS/CUP_CORRECCION_DBOX_61.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Correcciones/LOGS/CUP_CORRIGE_SIEBEL_GIS.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Correcciones/LOGS/CUP_CORREGIR_PREVENTIVO_2257.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Correcciones/LOGS/CUP_CORRIGEMACCOMPARTIDAIPTV.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Correcciones/LOGS/CUP_CORREGIR_SERIES_REPETIDAS.log",
            "/Cuadratura/Procesos_AM_PM/Procesos_Cargas/LOGS/CUP_FONOERRORSSCODE.log"
            // Agrega aquí más rutas de archivos que deseas descargar...
        ];

        return $Dir;
    }

    public function ComportamientosDirectories()
    {
        $Dir = [
            "/Cuadratura/Tablas/HSS/registro_HSS.txt", // 0
            "/Cuadratura/Tablas/carga_incognito/FTTH/registro_FTTH_CARGA.txt", // 1
            "/Cuadratura/Plataforma/IbnLines/registro_carga_ibnlines.txt", // 2
            "/Cuadratura/Plataforma/PSVA/registro_Carga_PSVA.txt", // 3
            "/Cuadratura/Plataforma/ValidLines/registro_carga_validlines.txt", // 4
            "/Cuadratura/FTTH_ONT_GW/registro_Carga_FTTH_ONT_GW.txt", // 5

            // Agrega aquí más rutas de archivos que deseas consultar...
        ];
        return $Dir;
    }

    ///////////////////////////////////// INFOS /////////////////////////////////////

    public function InfoLogs($iDir)
    {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {

            if($iDir == 'MANAGER'){
                $filesToInfo = $this->LogsDirectories();

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
                        // echo '<p>✅: Si se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                    } else {
                        echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                    }
                }
                return $filesToInfo;
            }

            if($iDir == 'TIVO'){
            
                $searchPattern = "data_tivo.csv";
                // Obtener la lista de archivos en el directorio deseado
                $remoteDir = "/Cuadratura/Plataforma/TIVO/ARCHIVOS/";

                $allFiles = $this->sftpManager->getFilesInDirectory($remoteDir);
            
                $matchingFiles = [];
            
                // Buscar los archivos que contienen el fragmento de búsqueda
                foreach ($allFiles as $file) {
                    if (strpos($file, $searchPattern) !== false) {
                        $matchingFiles[] = $file;
                    }
                }
            
                if (!empty($matchingFiles)) {
            
                    // Obtener la ruta del archivo más reciente (el primer archivo de la lista)
                    $rutaArchivoMasReciente = $remoteDir . $matchingFiles[0];
            
                    // Obtener el nombre del archivo más reciente sin la ruta completa
                    $nombreArchivoMasReciente = basename($rutaArchivoMasReciente);
            
                    // Obtener información del archivo más reciente utilizando el método getFileInfoByPath
                    $fileInfo = $this->sftpManager->getFileInfoByPath($rutaArchivoMasReciente);
                    if ($fileInfo !== false) {
                        $fileSize = $fileInfo['size'];
                        $fileModificationTime = date('Y-m-d H:i:s', $fileInfo['mtime']);
            
                        $filesToPublicTIVO = [
                            'path' => $nombreArchivoMasReciente,
                            'size' => $fileSize,
                            'modification_time' => $fileModificationTime
                        ];
        
                        return $filesToPublicTIVO;
                    } else {
                        echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $rutaArchivoMasReciente . '</p>';
                    }
                } else {
                    echo "No se encontraron archivos para la fecha actual con el fragmento de búsqueda: {$searchPattern}";
                }
            }
            
        } else {
            echo '<p>Error: No se pudo conectar al servidor SFTP.</p>';
        }
    }

    public function InfoComportamientos($iDir)
    {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {

            if($iDir == 'MANAGER'){
                $filesToInfo = $this->ComportamientosDirectories();

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
                        // echo '<p>✅: Si se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                    } else {
                        echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                    }
                }
                return $filesToInfo;
            }
            
        } else {
            echo '<p>Error: No se pudo conectar al servidor SFTP.</p>';
        }
    }

    public function InfoAdrenalin2Logs($iDir)
    {
        if ($this->ftpAdrenalin2->connect() && $this->ftpAdrenalin2->login()) {
            $fechaAyer = date('Ymd', strtotime('-1 day'));
            
            if($iDir == 'ADRENALIN2'){
                $searchPattern = "customer_relation_{$fechaAyer}";
                // Obtener la lista de archivos en el directorio deseado
                $remoteDir = "/";
            }

            $allFiles = $this->ftpAdrenalin2->getFilesInDirectory($remoteDir);
            $matchingFiles = [];
            // Buscar los archivos que contienen el fragmento de búsqueda
            foreach ($allFiles as $file) {
                if (strpos($file, $searchPattern) !== false) {
                    $matchingFiles[] = $file;
                }
            }
        
            if (!empty($matchingFiles)) {
                // Obtener la ruta del archivo más reciente (el primer archivo de la lista)
                $rutaArchivoMasReciente = $matchingFiles[0];
                // Obtener el nombre del archivo más reciente sin la ruta completa
                $nombreArchivoMasReciente = basename($rutaArchivoMasReciente);
                // Obtener información del archivo más reciente utilizando el método getFileInfoByPath
                $fileInfo = $this->ftpAdrenalin2->getFileInfoByPath($rutaArchivoMasReciente);
                if ($fileInfo !== false) {
                    $fileSize = $fileInfo['size'];
                    $fileModificationTime = strtotime($fileInfo['mtime']);
                    if ($fileModificationTime === false) {
                        echo '<p>Error: No se pudo analizar la fecha de modificación del archivo</p>';
                    } else {
                        $formattedModificationTime = date('Y-m-d H:i:s', $fileModificationTime);
                        $filesToPublicAdrenalin2 = [
                            'path' => $nombreArchivoMasReciente,
                            'size' => $fileSize,
                            'modification_time' => $formattedModificationTime
                        ];
                        return $filesToPublicAdrenalin2;
                    }
                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $rutaArchivoMasReciente . '</p>';
                }
            } else {
                echo '<p> No se encontraron archivos para la fecha actual con el fragmento de búsqueda: '. $searchPattern .'</p>';
            }
        }
    }

    public function InfoVLRLogs($iDir)
    {
        if ($this->sftpVlr->connect() && $this->sftpVlr->login()) {
            $fechaActual = date('Ymd');
            
            if($iDir == 'HSS'){
                $searchPattern = "OK_HSS9860_2_{$fechaActual}";
                // Obtener la lista de archivos en el directorio deseado
                $remoteDir = "/ftphome/home/VLR/";
            }

            $allFiles = $this->sftpVlr->getFilesInDirectory($remoteDir);
            $matchingFiles = [];
        
            // Buscar los archivos que contienen el fragmento de búsqueda
            foreach ($allFiles as $file) {
                if (strpos($file, $searchPattern) !== false) {
                    $matchingFiles[] = $file;
                }
            }
        
            if (!empty($matchingFiles)) {
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
                    return $filesToPublicVlr;
                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $rutaArchivoMasReciente . '</p>';
                }
            } else {
                echo '<p> No se encontraron archivos para la fecha actual con el fragmento de búsqueda: '. $searchPattern .'</p>';
            }
        }
    }

    public function InfoDACLogs($iDir)
    {
        if ($this->sftpDac->connect() && $this->sftpDac->login()) {
            $fechaActual = date('Ymd');
            
            if($iDir == 'DAC'){
                $searchPattern = "data.txt";
                // Obtener la lista de archivos en el directorio deseado
                $remoteDir = "/home/cuadraturas/";
            }

            $allFiles = $this->sftpDac->getFilesInDirectory($remoteDir);
            $matchingFiles = [];
        
            // Buscar los archivos que contienen el fragmento de búsqueda
            foreach ($allFiles as $file) {
                if (strpos($file, $searchPattern) !== false) {
                    $matchingFiles[] = $file;
                }
            }
        
            if (!empty($matchingFiles)) {
                // Obtener la ruta del archivo más reciente (el primer archivo de la lista)
                $rutaArchivoMasReciente = $remoteDir . $matchingFiles[0];
                // Obtener el nombre del archivo más reciente sin la ruta completa
                $nombreArchivoMasReciente = basename($rutaArchivoMasReciente);
                // Obtener información del archivo más reciente utilizando el método getFileInfoByPath
                $fileInfo = $this->sftpDac->getFileInfoByPath($rutaArchivoMasReciente);
                if ($fileInfo !== false) {
                    $fileSize = $fileInfo['size'];
                    $fileModificationTime = date('Y-m-d H:i:s', $fileInfo['mtime']);
                    $filesToPublicVlr = [
                        'path' => $nombreArchivoMasReciente,
                        'size' => $fileSize,
                        'modification_time' => $fileModificationTime
                    ];
                    return $filesToPublicVlr;
                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $rutaArchivoMasReciente . '</p>';
                }
            } else {
                echo '<p> No se encontraron archivos para la fecha actual con el fragmento de búsqueda: '. $searchPattern .'</p>';
            }
        }
    }

    public function InfoMAPUCHELogs($iDir)
    {

        if ($this->sftpMapuche->connect() && $this->sftpMapuche->login()) {

            if($iDir == 'PSVA'){
                $searchPattern = "DB_PSVA.csv.gz";
                // Obtener la lista de archivos en el directorio deseado
                $remoteDir = "/ftphome/home/trabajos/psva/";
            }
            if($iDir == 'IbnLines'){
                $searchPattern = "datos_ibnlines.csv.gz";
                // Obtener la lista de archivos en el directorio deseado
                $remoteDir = "/ftphome/home/trabajos/telefonia/";
            }
            if($iDir == 'ValidLines'){
                $searchPattern = "validLines.csv.gz";
                // Obtener la lista de archivos en el directorio deseado
                $remoteDir = "/ftphome/home/trabajos/telefonia/";
            }
            
            $allFiles = $this->sftpMapuche->getFilesInDirectory($remoteDir);
        
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
                    $timeA = $this->sftpMapuche->getFileInfoByPath($fileA)['mtime'];
                    $timeB = $this->sftpMapuche->getFileInfoByPath($fileB)['mtime'];
                    return $timeB - $timeA;
                });
        
                // Obtener la ruta del archivo más reciente (el primer archivo de la lista)
                $rutaArchivoMasReciente = $remoteDir . $matchingFiles[0];
        
                // Obtener el nombre del archivo más reciente sin la ruta completa
                $nombreArchivoMasReciente = basename($rutaArchivoMasReciente);
        
                // Obtener información del archivo más reciente utilizando el método getFileInfoByPath
                $fileInfo = $this->sftpMapuche->getFileInfoByPath($rutaArchivoMasReciente);
                if ($fileInfo !== false) {
                    $fileSize = $fileInfo['size'];
                    $fileModificationTime = date('Y-m-d H:i:s', $fileInfo['mtime']);
        
                    $filesToPublicMapuche = [
                        'path' => $nombreArchivoMasReciente,
                        'size' => $fileSize,
                        'modification_time' => $fileModificationTime
                    ];

                    return $filesToPublicMapuche;
                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $rutaArchivoMasReciente . '</p>';
                }
            } else {
                echo "No se encontraron archivos para la fecha actual con el fragmento de búsqueda: {$searchPattern}";
            }
        }
    }

    public function InfoINCOGNITOLogs($iDir)
    {

        if ($this->sftpIncognito->connect() && $this->sftpIncognito->login()) {
            $fechaActual = date('j-n-Y');
            // Obtener la lista de archivos en el directorio deseado
            $remoteDir = "/home/cuadraturas/FTTH/kpi/archivos/";

            if($iDir == 'INVENTARIO'){
                // Declarar el nombre del archivo
                $searchPattern = "FTTH_AMS_BBMS_INVETARIO_{$fechaActual}";
            }
            if($iDir == 'BBMS'){
                // Declarar el nombre del archivo
                $searchPattern = "FTTH_SOLO_BBMS_{$fechaActual}";
            }
            if($iDir == 'AMS'){
                // Declarar el nombre del archivo
                $searchPattern = "FTTH_SOLO_AMS_{$fechaActual}";
            }
            if($iDir == 'INET'){
                // Obtener la lista de archivos en el directorio deseado
                $remoteDir = "/home/cuadraturas/cuadra_incognito/";
                // Declarar el nombre del archivo
                $searchPattern = "cuadratura-{$fechaActual}";
            }
            if($iDir == 'ONT'){
                $fechaActual = date('dmY');
                // Obtener la lista de archivos en el directorio deseado
                $remoteDir = "/home/cuadraturas/";
                // Declarar el nombre del archivo
                $searchPattern = "FTTH_ONT_GW_{$fechaActual}";
            }

            $allFiles = $this->sftpIncognito->getFilesInDirectory($remoteDir);
        
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
                    $timeA = $this->sftpIncognito->getFileInfoByPath($fileA)['mtime'];
                    $timeB = $this->sftpIncognito->getFileInfoByPath($fileB)['mtime'];
                    return $timeB - $timeA;
                });
        
                // Obtener la ruta del archivo más reciente (el primer archivo de la lista)
                $rutaArchivoMasReciente = $remoteDir . $matchingFiles[0];
        
                // Obtener el nombre del archivo más reciente sin la ruta completa
                $nombreArchivoMasReciente = basename($rutaArchivoMasReciente);
        
                // Obtener información del archivo más reciente utilizando el método getFileInfoByPath
                $fileInfo = $this->sftpIncognito->getFileInfoByPath($rutaArchivoMasReciente);
                if ($fileInfo !== false) {
                    $fileSize = $fileInfo['size'];
                    $fileModificationTime = date('Y-m-d H:i:s', $fileInfo['mtime']);
        
                    $filesToPublicIncognito = [
                        'path' => $nombreArchivoMasReciente,
                        'size' => $fileSize,
                        'modification_time' => $fileModificationTime
                    ];

                    return $filesToPublicIncognito;
                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $rutaArchivoMasReciente . '</p>';
                }
            } else {
                // echo "No se encontraron archivos para la fecha actual con el fragmento de búsqueda: {$searchPattern}";
                
                if($iDir == 'INVENTARIO'){
                    // Declarar el nombre del archivo
                    $searchPattern = "FTTH_AMS_BBMS_INVETARIO_{$fechaActual}";
                    $filesToPublicIncognito = [
                        'path' => $searchPattern,
                        'size' => 0,
                        'modification_time' => "Publ. 09:45"
                    ];
                }
                if($iDir == 'BBMS'){
                    // Declarar el nombre del archivo
                    $searchPattern = "FTTH_SOLO_BBMS_{$fechaActual}";
                    $filesToPublicIncognito = [
                        'path' => $searchPattern,
                        'size' => 0,
                        'modification_time' => "Publ. 09:45"
                    ];
                }
                if($iDir == 'AMS'){
                    // Declarar el nombre del archivo
                    $searchPattern = "FTTH_SOLO_AMS_{$fechaActual}";
                    $filesToPublicIncognito = [
                        'path' => $searchPattern,
                        'size' => 0,
                        'modification_time' => "Publ. 09:45"
                    ];
                }
                if($iDir == 'INET'){
                    // Declarar el nombre del archivo
                    $searchPattern = "cuadratura-{$fechaActual}";
                    $filesToPublicIncognito = [
                        'path' => $searchPattern,
                        'size' => 0,
                        'modification_time' => "Publ. 10:01"
                    ];
                }
                if($iDir == 'ONT'){
                    $fechaActual = date('dmY');
                    // Declarar el nombre del archivo
                    $searchPattern = "FTTH_ONT_GW_{$fechaActual}";
                    $filesToPublicIncognito = [
                        'path' => $searchPattern,
                        'size' => 0,
                        'modification_time' => "Publ. 10:05"
                    ];
                }

                return $filesToPublicIncognito;
            }
        }
    }

    public function InfoArchLogs()
    {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {
            $filesToInfo = $this->ArchLogsDirectories();
    
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
                    // echo '<p>✅: Si se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                }
            }
            return $filesToInfo;   
        }
            
    }

    public function InfoModelDatos()
    {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {
            $filesToInfo = $this->ModelDatosDirectories();
    
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
                    // echo '<p>✅: Si se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                }
            }
            return $filesToInfo;   
        }
    }

    public function InfoProceduresAMPM()
    {

        if ($this->sftpManager->connect() && $this->sftpManager->login()) {
            $filesToInfo = $this->ProceduresAMPMDirectories();
    
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
                    // echo '<p>✅: Si se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                } else {
                    echo '<p>Error: No se pudo obtener la información del archivo desde el servidor SFTP: ' . $filePath . '</p>';
                }
            }
            return $filesToInfo;
        }
        

    }

    ///////////////////////////////////// DOWNLOADS /////////////////////////////////////

    public function DownloadLogs($filesToDownload)
    {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {

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
        } else {
            echo '<p>Error: No se pudo conectar al servidor SFTP.</p>';
        }
    }

}

