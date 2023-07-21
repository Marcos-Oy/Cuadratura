<?php

namespace App\Controllers;

use Config\Connection\SFTPManager;

class LogsController
{
    private $sftpManager;

    public function __construct()
    {
        require_once(__DIR__ . '/../../Config/SFTPManager.php');
        $this->sftpManager = new SFTPManager();
        global $raiz;
        $this->raiz = $raiz;
    }

// ...

public function ViewsLogs()
{
    $viewPath = __DIR__ . '/../../resources/views/logs/logs.php';

    if (file_exists($viewPath)) {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {
            $filesToDownload = [
                "/Cuadratura/Plataforma/PSVA/Carga_PSVA.log",
                "/Cuadratura/Tablas/HSS/OUT/Carga_HSS.log",
                "/Cuadratura/Plataforma/ValidLines/carga_Validline.log",
                "/Cuadratura/Plataforma/IbnLines/carga_ibnlines.log",
                "/Cuadratura/Plataforma/data/carga_inet.log",
                "/Cuadratura/Plataforma/data/Carga_Adrenalin2.log",
                "/Cuadratura/Tablas/carga_incognito/FTTH/carga_Inventario.log",
                "/Cuadratura/Tablas/carga_incognito/FTTH/carga_AMS.log",
                "/Cuadratura/Tablas/carga_incognito/FTTH/carga_BBMS.log",
                "/Cuadratura/Plataforma/TIVO/ARCHIVOS/Carga_Tivo.log"
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

public function ViewsArchLogs()
{
    $viewPath = __DIR__ . '/../../resources/views/logs/ArchLog.php';

    if (file_exists($viewPath)) {
        if ($this->sftpManager->connect() && $this->sftpManager->login()) {
            $filesToDownload = [
                "/Cuadratura/Tablas/Arch_Log/Respaldo_Correcciones_UIM.log",
                "/Cuadratura/Tablas/Arch_Log/Respaldo_Validaciones_Automatizadas.log",
                "/Cuadratura/Tablas/Arch_Log/Respaldo_Correcciones_Siebel.log",
                "/Cuadratura/Tablas/Arch_Log/limpia_tablas_desc_uim.log",
                "/Cuadratura/Tablas/Arch_Log/Proceso_Siebel.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_businessinteraction.log",
                "/Cuadratura/Tablas/Arch_Log/Proceso_UIM.log",
                "/Cuadratura/Tablas/Arch_Log/Procesos_2140_2151.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_order.log",
                "/Cuadratura/Tablas/Arch_Log/ejecuta_tango_procinet.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tablas_cut.log",
                "/Cuadratura/Tablas/Arch_Log/proceso_ftth.log",
                "/Cuadratura/Tablas/Arch_Log/proceso_cup_validamaterialinet.log",
                "/Cuadratura/Tablas/Arch_Log/proceso_cup_cicloini.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_clientes.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_productop.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_productop_baja.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_xvtr_siebel_info_series_t.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_siebel_equipos_mta.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_gis_direccion.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_migradb.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_config_paquete.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_infodbox_uim_1.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_addr_per.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_tnconsumer.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_telephonenumber.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_tnassignment.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_ret_lineared.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_ret_cablemodem.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_pat_prcontxprod.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_velocidadesnetuim.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_order_item.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_activtemp.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_ss_derivadas.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_stbseries.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_redt_vivienda.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_concgtar_new.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_pat_prproducto.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_cfs.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_redt_calles.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_pat_localidad.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset_xa.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_cut_uim_rfs.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_asset_x.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_indices_sut_servicio.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_conservi.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_place_char.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_servicio.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_material.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_tarifaUIM.log",
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
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_s_order_type.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_giap_traductor.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_giap_voiceplan_movil.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_sut_grupotar.log",
                "/Cuadratura/Tablas/Arch_Log/refresco_tabla_fdt_clasemater.log"
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

            $namesOnly = array();
            foreach ($filesToDownload as $filePath) {
                $fileName = basename($filePath);
                $namesOnly[] = $fileName;
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

