CREATE OR REPLACE PROCEDURE CUADRA.CUP_UPDATES_FDS AS
BEGIN

-- #################### Validaciones Ongoing de Carlos #################### --

--Validacion --> 2166
update TMP_UIMSINCRM_DBOX
    set FLG_PDTE_SIEBEL = 'SI'
    where Externalobjectid||COD_SERIE in (SELECT UNIQUE a.Externalobjectid||A.COD_SERIE
    FROM TMP_UIMSINCRM_DBOX A, XVTR_SIEBEL_INFO_SERIES_T B
    WHERE A.COD_SERIE = B.COD_SERIE AND B.TECNOLOGIA<> 'IPTV'
    AND NVL(TRIM(FLG_PDTE_SIEBEL),'X') !='X'
    AND NVL(TRIM(FLG_UIM_BLANCOPROD),'X') ='X'
    AND NVL(TRIM(FLG_BI_PDTE),'X')='X'
    AND NVL(TRIM(FLG_SIEBEL),'X') ='X'
    AND A.LASTMODIFIEDDATE< TRUNC(SYSDATE)-10);
Commit;

-- S-P->2336 
update Cut_Ftth_Gw a
    set a.Valida_Plt = 'OK en plat'
    Where a.Fecha = Trunc(Sysdate) And a.Pp_Plt = 'ONT en PLT' 
    And a.Pp_Ext = 'PP Con extensor' And a.Valida_Plt = 'No OK';
Commit;

-- U-P->2173
update tmp_crtestadt a
    set a.control = 'OK'
    WHERE a.fec_created > trunc(sysdate) AND a.control = 'UIM-CON-LINE';
Commit;

-- S-E->2133
update tmp_crtestadt a
    set a.control = 'OK'
    WHERE a.fec_created > trunc(sysdate) AND a.control = 'SE-2133';
Commit;

-- S-U->2107
Update cut_siebel_resultdbox
    set cpe_errornodo = 0
    WHERE cpe_errornodo = 1;
Commit;

-- S-U->2108
Update cut_siebel_resultdbox
    set cpe_errorsubnodo = 0
    WHERE cpe_errorsubnodo = 1;
Commit;

-- S-U->2110
update Cut_Siebel_ResultInet
    set CPE_ErrorNodo = 0
    where CPE_ErrorNodo = 1;
Commit;

-- S-U->2111
Update Cut_Siebel_ResultInet
    set CPE_ErrorSubNodo = 0
    where CPE_ErrorSubNodo = 1;
Commit;

-- S-U->2122
update TMP_CRTESTADT a
    set a.control = 'OK'
    WHERE a.fec_created > trunc(sysdate) AND a.control = 'UIM-SIN-LINE';
Commit;

-- S-U->2211
update TMP_CRTESTADT a
    set a.control = 'OK'
    WHERE a.fec_created > trunc(sysdate) AND TIPO_MOVIMIENTO IS NULL AND a.control = 'SU-2211';
Commit;

-- S-S->2142
--No le podemos hacer nada

-- S-U->2009
update CUT_SIEBEL_RESULTDETALLE
    set MODELO = MODELO_UIM
    where MODELO != MODELO_UIM;
Commit;

-- S-S->2208
--No le podemos hacer nada

-- S-U->2249
update Tmp_Fonociclo a
    set a.Grupo = 'OK'
    Where a.Fecha = Trunc(Sysdate) And Grupo = 'Valor ciclo nulo' 
    And Adminstate Not In ('DISCONNECTED', 'PENDING_DISCONNECT');
Commit;

-- S-U->2250
update Tmp_Fonociclo a
    set a.Grupo = 'OK'
    Where a.Fecha = Trunc(Sysdate) And Grupo = 'Valor ciclo 0' 
    And Adminstate Not In ('DISCONNECTED', 'PENDING_DISCONNECT');
Commit;

-- S-U->2248
update Cut_Linecsvuim
    set Validaline = 'Con caracteristica Line'
    Where Validaline = 'Sin caracteristica Line' And Fecha = Trunc(Sysdate);
Commit;

-- S-S->2075
update TMP_CRTESTADT a
    set a.control = 'OK'
    WHERE a.fec_created > trunc(sysdate) AND a.control = 'SS-2075';
Commit;

-- S-P->2174
update TMP_CRTESTADT a
    set a.control = 'OK'
    WHERE a.fec_created > trunc(sysdate) AND a.control = 'SIEBEL-CON-LINE';
Commit;

-- U-S->2192
update tmp_uimsincrm_dbox
    set flg_siebel = Null
    where externalobjectid in (SELECT a.externalobjectid
    FROM tmp_uimsincrm_dbox a, xvtr_siebel_info_series_t b
    WHERE a.cod_serie = b.cod_serie
    AND b.tecnologia = 'IPTV'
    AND nvl(TRIM(flg_siebel), 'X') IN ( 'X', 'SI' )
    AND nvl(TRIM(flg_pdte_siebel), 'X') = 'X'
    AND nvl(TRIM(flg_uim_blancoprod), 'X') = 'X'
    AND nvl(TRIM(flg_bi_pdte), 'X') = 'X'
    AND trunc(lastmodifieddate) < trunc(sysdate) - 10);
commit;

delete Tmp_Equipos_Mta
    where Tmp_Equipos_Mta.x_Ocs_Attrib_59 = 'E457406616E9';
Commit;


-- #################### Validaciones Ongoing de Karim #################### --

--S-P->2337
update Cut_Valida_Teos_Incaux
    set q_iptv = 0
    where q_iptv > 0 and class is not null
    and Fecha = Trunc(Sysdate);
commit;

--P-U->2177
update Cut_Result_Ftth_Plat_SieUIM
    set Flag_Vlan_Plat_distinta = 'NO'
    where object_name in (Select object_name From Cut_Result_Ftth_Plat_SieUIM
    where trim(Flag_SerieDuplicada_Plataforma)='NO' and trim(Flag_ObjectNamePlat_Existe_UIM)!='NO' 
    and trim(Flag_SerieSiebel_Plat_distinta)='NO' and trim(Flag_Vlan_Plat_distinta)='SI');
commit;

--P-U->2182
update Cut_Result_Ftth_Plat_SieUIM
    set Flag_ObjectNamePlat_Existe_UIM = 'SI'
    where object_name in (Select Object_Name From Cut_Result_Ftth_Plat_SieUIM
    where trim(Flag_SerieDuplicada_Plataforma)='NO'
    and trim(Flag_ObjectNamePlat_Existe_UIM)='NO');
commit;

--P-U->2196
update Cut_Result_Ftth_Plat_SieUIM
    set flag_velo_plat_uim_distinta = 'NO'
    where object_name in (Select object_name From Cut_Result_Ftth_Plat_SieUIM
    where trim(Flag_SerieDuplicada_Plataforma)='NO' and trim(Flag_ObjectNamePlat_Existe_UIM)!='NO' 
    and trim(Flag_SerieSiebel_Plat_distinta)='NO' and trim(Flag_Vlan_Plat_distinta)='NO' 
    and trim(flag_velo_plat_uim_distinta)='SI');
commit;

--P-P->2181
update Cut_Result_Ftth_Plat_SieUIM
    set Flag_SerieDuplicada_Plataforma = 'NO'
    Where Flag_SerieDuplicada_Plataforma = 'SI';
commit;


-- #################### UPDATE PREVENTIVOS #################### --

--S-I->2048
--INTERNET - PREVENTIVO - - Velocidad de Siebel distinta con Incognito (NO CONSIDERA FTTH)
Update Cuadra.Cut_Siebel_ResultInet
Set CPE_DISTINVELOSIEBINC = 0
Where CPE in (select cpe from Cuadra.Cut_Siebel_ResultInet
                where CPE_DISTINVELOSIEBINC   = 1
                and con_orden_pend          = 0
                and con_bi_pend             = 0
                and cpe_duplicada_siebel    = 0
                and indica_serv_ensiebel  <> 'Sin Servicios Activos'
                and MAC_Mate_Act_TangoAndes = 0);
commit;

--S-I->2027
Update Cuadra.Cut_Siebel_ResultInet
Set cpe_duplicadaincognito = 0
Where CPE In (Select CPE From Cuadra.Cut_Siebel_ResultInet a
                Where a.cpe_duplicadaincognito  = 1
                And a.con_orden_pend          = 0
                And a.cpe_duplicada_siebel    = 0
                And a.indica_serv_ensiebel <> 'Sin Servicios Activos'
                And a.MAC_Mate_Act_TangoAndes = 0
                And a.con_bi_pend             = 0
                And a.cpe not in (select distinct mac from sut_internet b where clusters='138' and a.cpe=b.mac));
commit;

--S-D->2058
--PREMIUM - PREVENTIVO - - dBox con Tecnolog¿a del Retorno Distinta en DAC (NO CONSIDERA IPTV)
Update Cut_Siebel_ResultTVDac
Set ERROR_TECNODAC = 0
Where CPE In (select a.CPE from Cut_Siebel_ResultTVDac a, Cuadra.Cut_Siebel_ResultdBox b
                where a.ERROR_TECNODAC            = 1
                and b.cpe                       = a.cpe
                and b.con_orden_pend            = 0
                and b.con_bi_pend               = 0
                and b.cpe_distinretorno_siebuim = 0
                and b.CPE_Duplicada_MismoRut    = 0);
commit;

--S-U->2024
--INTERNET - PREVENTIVO - - Routing Mode SIEBEL distinto con UIM (NO CONSIDERA FTTH)
Update Cut_Siebel_ResultInet
Set CPE_Distinto_RoutingMode = 0
Where CPE In (select CPE from Cuadra.Cut_Siebel_ResultInet
                where CPE_Distinto_RoutingMode = 1
                and con_orden_pend           = 0
                and con_bi_pend              = 0);
commit;

--S-D->2049
--PREMIUM - PREVENTIVO - - material SIEBEL sin Pack de canal en DAC (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultTVDac c
Set c.ERROR_PROGRAMAC = Null
Where CPE In (select a.CPE from Cuadra.Cut_Siebel_ResultTVDac a, Cuadra.Cut_Siebel_ResultdBox b
                where a.cpe=b.cpe
                and Length(Trim(a.ERROR_PROGRAMAC)) > 0
                and a.CPE_NoExist_DAC               = 0
                and a.con_orden_pend                = 0
                and a.cpe_handles                   = 0
                and a.cpe_onplant                   = 0
                and a.cpe_activated                 = 0
                and a.cpe not like '%PAER%'
                and b.CPE_Duplicada_MismoRut        = 0);
commit;

--S-D->2052
--PREMIUM - PREVENTIVO -  - Canales de Grilla Siebel no existen en Dac (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultTVDac
Set paqu_faltante_grilla = Null
Where CPE In (select d.CPE from Cuadra.Cut_Siebel_ResultTVDac d, Cuadra.Cut_Siebel_ResultdBox b
                where d.paqu_faltante_grilla is not null
                and d.CPE                    = b.cpe
                and d.cpe_noexist_dac        = 0
                and d.cpe_activated          = 0
                and d.cpe_onplant            = 0
                and d.cpe_handles            = 0
                and b.con_orden_pend         = 0
                and substr(d.cpe,1,1)       != 'P'
                and substr(d.cpe,1,1)       != 'G'
                And b.CPE_Duplicada_MismoRut = 0);
commit;

--S-U->2008
--PREMIUM - PREVENTIVO - - material SIEBEL distinta marca con UIM (CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultDetalle
Set Marca_UIM = Marca
Where CPE In (Select a.CPE
                    From Cuadra.Cut_Siebel_ResultDetalle a,
                        Cuadra.Xvtr_Siebel_Info_Series_t b,
                        Cuadra.Cut_Siebel_ResultdBox c
                    Where a.Marca         != a.Marca_UIM 
                    And a.Marca_UIM     != '*'
                    And b.Cod_Serie      = a.Cpe
                    And c.Cpe            = a.Cpe
                    And nvl(c.Con_Orden_Pend,0) = 0);
commit;

--S-A->2071
--PREMIUM - PREVENTIVO - - Canales de Grilla Siebel no existen en ADRENALINE (NO CONSIDERA IPTV)
Update Cut_Siebel_ResultTVADR_1
Set GrillaCRM_NoAdrenalin = 0
Where CPE In (Select a.Cpe from Cut_Siebel_ResultTVADR_1 a, Cut_Siebel_ResultdBox_1 b, cuadra.sut_adrenalin_aux c
                where a.GrillaCRM_NoAdrenalin = 1
                and b.CPE_NoExist_Adrenalin = 0
                and a.cust_limite_cred      = 0
                and a.Cust_IsBarred         = 0
                and b.cpe                   = a.cpe
                and b.con_orden_pend        = 0
                and b.con_bi_pend           = 0
                and a.cust_noexist_adr      = 0
                and c.rut_vivienda          = a.customer_id
                and substr(a.cpe,1,1)      != 'P'
                and substr(a.cpe,1,1)      != 'G');
commit;

--S-A->2069
--PREMIUM - PREVENTIVO - - dbox est¿ activo en Siebel pero no en Adrenalin (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultdBox_1
Set CPE_NoExist_Adrenalin = 0
Where CPE In (Select a.CPE from Cuadra.Cut_Siebel_ResultdBox_1 b,Cuadra.Cut_Siebel_ResultTVADR_1 a
                where b.CPE_NoExist_Adrenalin     = 1
                and b.cpe_distinretorno_siebuim = 0
                and a.cpe                       = b.cpe
                and a.cust_noexist_adr          = 0
                and substr(a.cpe,1,1)          != 'P'
                and substr(a.cpe,1,1)          != 'G'
                and a.Cust_IsBarred             = 0
                and a.cust_limite_cred          = 0
                and b.con_orden_pend            = 0);
commit;

--S-A->2066
--PREMIUM - PREVENTIVO - - Material Siebel Falta Canal Adicional en Adrenalin (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultTVADR_1
Set canalcrm_noadrenalin = 0
Where Customer_Id In (select a.Customer_Id from Cut_Siebel_ResultTVADR_1 a, cut_siebel_resultdbox_1 b,sut_adrenalin_aux c
                        where a.canalcrm_noadrenalin  = 1
                            and canalcrm_prognoadre   <> '0'
                            and a.cust_noexist_adr      = 0
                            and b.CPE_NoExist_Adrenalin = 0
                            and a.cust_limite_cred      = 0
                            and a.Cust_IsBarred         = 0
                            and b.cpe                   = a.cpe
                            and b.con_orden_pend        = 0
                            and b.con_bi_pend           = 0
                            and c.rut_vivienda          = a.customer_id
                            and substr(a.cpe,1,1)      != 'P'
                            and substr(a.cpe,1,1)      != 'G');
commit;

--S-S->2242
--INTERNET Y/O TELEFONIA - PREVENTIVO - asset equipo no vinculado a los productos principales (CONSIDERA FTTH Y NO CONSIDERA VP)
Update Cgm_Ea_Seu
    Set Valida_Pp_Eq = 'PP con EQ'
    Where Pp_Integration_Id In (Select a.Pp_Integration_Id From Cgm_Ea_Seu a
                            Where a.Fecha                   = Trunc(Sysdate)
                                And a.Orden_Pd                = 0
                                And Nvl(a.Valida_Pp57, '*')   = 'NO nulo'
                                And Nvl(a.Valida_Pp_Eq, '*') != 'PP con EQ'
                                And a.tipocpe                != 'VP'
                                And Dummy                     = 0);
commit;

--S-A->2068
--PREMIUM - PREVENTIVO - - Material Siebel sin Pack HD en Adrenalin (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultTVADR_1
    Set PackHDCRM_NoAdrenalin = 0
    Where CPE In (Select a.cpe from Cuadra.Cut_Siebel_ResultTVADR_1 a, cut_siebel_resultdbox_1 b,cuadra.sut_adrenalin_aux c
                    where a.PackHDCRM_NoAdrenalin = 1
                    and b.CPE_NoExist_Adrenalin = 0
                    and a.cust_limite_cred      = 0
                    and a.Cust_IsBarred         = 0
                    and a.cust_noexist_adr      = 0
                    and b.cpe                   = a.cpe
                    and b.con_orden_pend        = 0
                    and c.rut_vivienda          = a.customer_id
                    and substr(a.cpe,1,1)      != 'P'
                    and substr(a.cpe,1,1)      != 'G');
commit;

--S-U->2035
--PREMIUM - PREVENTIVO - - Retorno del Servicio de Siebel Distinto en UIM (CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultdBox
    Set CPE_DistinRetorno_SiebUIM = 0
    Where CPE In (select CPE from Cuadra.Cut_Siebel_ResultdBox
                    where CPE_DistinRetorno_SiebUIM = 1
                    and con_orden_pend            = 0
                    and con_bi_pend               = 0);
commit;

--S-I->2026
--INTERNET - ISSUE 24562 - Inconsistencia en PLATAFORMA (SERIE NO EXISTE) (NO CONSIDERA FTTH)
Update Cuadra.Cut_Siebel_ResultInet
    Set cpe_noexisteincognito = 0
    Where CPE In (Select a.CPE From Cuadra.Cut_Siebel_ResultInet a
                    Where a.cpe_noexisteincognito   = 1
                    and con_orden_pend            = 0
                    and con_bi_pend               = 0
                    and a.cpe_duplicada_siebel    = 0
                    and a.indica_serv_ensiebel   <> 'Sin Servicios Activos'
                    and a.MAC_Mate_Act_TangoAndes = 0
                    and a.cpe not in (select mac from sut_internet where clusters='146' and mac=a.cpe));
commit;

--S-U->2004
--PREMIUM - PREVENTIVO - - material SIEBEL no esta en UIM (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultdBox
    Set cpe_noexist_uim = 0
    Where CPE In (select a.CPE from Cuadra.Cut_Siebel_ResultdBox a, Cuadra.Xvtr_Siebel_Info_Series_t b
                    where a.cpe_noexist_uim   = 1
                    and a.con_orden_pend    = 0
                    and a.con_bi_pend       = 0
                    And b.Cod_Serie         = a.Cpe
                    And Trim(b.tecnologia) != 'IPTV');
commit;

--S-I->2042
--INTERNET - PREVENTIVO - - RoutingMode SIEBEL Distinto en Incognito (NO CONSIDERA FTTH)
Update Cuadra.Cut_Siebel_ResultInet
    Set CPE_ROUTINGMODEINCOGNITO = 0
    Where CPE In (select cpe from Cuadra.Cut_Siebel_ResultInet
                    where CPE_ROUTINGMODEINCOGNITO = 1
                    and con_orden_pend           = 0
                    and con_bi_pend              = 0
                    and cpe_duplicada_siebel     = 0
                    and indica_serv_ensiebel    <> 'Sin Servicios Activos'
                    and MAC_Mate_Act_TangoAndes  = 0);
commit;

--S-I->2030
--INTERNET - PREVENTIVO - - la Localidad del Material Siebel Distinto en Incognito (NO CONSIDERA FTTH)
Update cuadra.cut_siebel_resultinet
    Set cpe_locadistinincognito = 0
    Where CPE In (SELECT CPE FROM cuadra.cut_siebel_resultinet
                    WHERE cpe_locadistinincognito = 1
                    AND con_orden_pend          = 0
                    AND con_bi_pend             = 0
                    AND cpe_duplicada_siebel    = 0
                    AND indica_serv_ensiebel   <> 'Sin Servicios Activos'
                    AND mac_mate_act_tangoandes = 0
                    AND cuenta_serv NOT IN ( SELECT cuenta_serv FROM cut_siebel_ctaserv_2promo )
                    AND rut_persona NOT IN ( SELECT rut_persona FROM cut_locaclusters ));
commit;

--S-U->2073
--PREMIUM - PREVENTIVO - - Canales de Grilla Siebel no existen en UIM (CONSIDERA IPTV)
Update cut_siebel_resultdbox
    Set errorgridtypeuim = 0
    Where CPE In (SELECT a.cpe
                    FROM cut_siebel_resultdbox a
                    WHERE errorgridtypeuim = 1
                    AND con_orden_pend   = 0
                    AND con_bi_pend      = 0 );
commit;

--S-A->2050
--PREMIUM - PREVENTIVO - - IsBarred en ADRENALINE igual a True (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultTVADR_1
    Set cust_isbarred = 0
    Where Customer_id In (select Customer_id from Cuadra.Cut_Siebel_ResultTVADR_1 a, Cuadra.Cut_Siebel_ResultdBox_1 b
                            where a.cust_isbarred  = 1
                            and a.CPE            = b.cpe
                            and b.con_orden_pend = 0
                            and b.con_bi_pend    = 0);
commit;

--S-U->2040
--PREMIUM - PREVENTIVO - - Servicio con Programaci¿n en Siebel No Existe Canal en UIM (CONSIDERA IPTV)
Update cuadra.cut_siebel_resultdbox
    Set cpe_noexistecanal_siebuim = 0
    Where CPE In (SELECT a.cpe
                    FROM cuadra.cut_siebel_resultdbox a
                    WHERE cpe_noexistecanal_siebuim = 1
                    AND con_orden_pend            = 0
                    AND con_bi_pend               = 0);
commit;

--S-A->2051
--PREMIUM - PREVENTIVO - - l¿mite de cr¿dito en Cero en ADRENALINE (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultTVADR_1
    Set cust_limite_cred = 0
    Where Customer_Id In (select customer_id from Cuadra.Cut_Siebel_ResultTVADR_1 a, Cuadra.Cut_Siebel_ResultdBox_1 b
                            where a.cust_limite_cred = 1
                            and a.CPE              = b.cpe
                            and b.con_orden_pend   = 0
                            and b.con_bi_pend      = 0);
commit;

--S-A->2053
--PREMIUM - PREVENTIVO - - CustomerId Siebel no existen en Adrenalin (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultTVADR_1
    Set Cust_NoExist_Adr = 0
    Where Customer_Id In (select a.customer_id from Cut_Siebel_ResultTVADR_1 a, Cut_Siebel_ResultdBox_1 b
                            where a.Cust_NoExist_Adr = 1
                            and a.CPE              = b.cpe
                            and b.con_orden_pend   = 0
                            and b.con_bi_pend      = 0);
commit;

--S-I->2031
--INTERNET - PREVENTIVO - - la Marca del Material Siebel Distinto en Incognito (NO CONSIDERA FTTH)
Update Cuadra.Cut_Siebel_ResultInet
    Set CPE_MarcaDistinIncognito = 0
    Where CPE In (Select a.CPE From Cuadra.Cut_Siebel_ResultInet a
                    Inner Join Cut_Siebel_ResultDetaInet b on a.cpe = b.cpe
                    Inner Join xvtr_siebel_info_series_t c on a.cpe = c.cod_serie
                    Where a.CPE_MarcaDistinIncognito = 1
                    and a.cpe_DuplicadaIncognito   = 0
                    and a.con_orden_pend           = 0
                    and a.cpe_rutdistinincognito   = 0
                    and a.cpe_locadistinincognito  = 0
                    and a.cpe_noexisteincognito    = 0
                    and a.cpe_duplicada_siebel     = 0
                    and (b.marca_incog            != c.cod_marca));
commit;

--S-U->2043
--INTERNET - PREVENTIVO - - Velocidad de Siebel distinta con UIM (NO CONSIDERA FTTH)
Update Cuadra.Cut_Siebel_ResultInet
    Set CPE_DISTINVELOSIEBUIM = 0
    Where CPE In (select CPE from Cuadra.Cut_Siebel_ResultInet
                    where CPE_DISTINVELOSIEBUIM = 1
                    and con_orden_pend        = 0
                    and con_bi_pend           = 0);
commit;

--S-A->2065
--PREMIUM - PREVENTIVO - - Material Siebel sin VOD en Adrenalin (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultTVADR_1
    Set VODCRM_NoAdrenalin = 0
    Where Customer_Id In (Select Customer_Id from Cuadra.Cut_Siebel_ResultTVADR_1 a, Cut_Siebel_ResultdBox_1 b
                            Where a.VODCRM_NoAdrenalin    = 1
                            and b.CPE_NoExist_Adrenalin = 0
                            and a.cust_limite_cred      = 0
                            and a.Cust_IsBarred         = 0
                            and  b.cpe                  = a.cpe
                            and b.con_orden_pend        = 0
                            and b.con_bi_pend           = 0
                            and a.cust_noexist_adr      = 0);
commit;

--S-I->2028
--INTERNET - PREVENTIVO - - el Material Siebel en otro Rut en Incognito (NO CONSIDERA FTTH)
Update Cuadra.Cut_Siebel_ResultInet
    Set cpe_rutdistinincognito = 0
    Where CPE In (select CPE from Cuadra.Cut_Siebel_ResultInet
                    where cpe_rutdistinincognito  = 1
                    and con_orden_pend          = 0
                    and con_bi_pend             = 0
                    and cpe_duplicada_siebel    = 0
                    and indica_serv_ensiebel   <> 'Sin Servicios Activos'
                    and MAC_Mate_Act_TangoAndes = 0
                    and cuenta_serv not In (select cuenta_serv from Cut_Siebel_CtaServ_2Promo)
                    and rut_persona not in (select rut_persona from Cut_RutClusters)
                    and rut_persona not in (select rut_persona from Cut_RutExisteInet));
commit;

--S-D->2054
--PREMIUM - PREVENTIVO -  - Paquete Replay Siebel no existen en Dac (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultdBoxDac_Rep
    Set cpe_packreplay_agregar = 0
    Where CPE In (select a.cpe from Cuadra.Cut_Siebel_ResultdBoxDac_Rep a,Cuadra.Cut_Siebel_ResultTVDac c
                    where a.cpe                    = c.cpe
                    and a.cpe_packreplay_agregar = 1
                    and c.con_orden_pend         = 0
                    and c.cpe_noexist_dac        = 0
                    and c.cpe_activated          = 0
                    and c.cpe_onplant            = 0
                    and c.cpe_handles            = 0);
commit;

--S-S->2241
--INTERNET Y/O TELEFONIA - PREVENTIVO - producto principal con atributo 57 nulo (CONSIDERA FTTH Y NO CONSIDERA VP)
Update Cgm_Ea_Seu
    Set Valida_Pp57 = '999999999'
    Where Nvl(Valida_Pp57, '*') = 'Nulo'
    And TipoCPE              != 'VP'
    And Pp_Integration_Id In (Select a.Pp_Integration_Id From Cgm_Ea_Seu a
                                Where a.Fecha = Trunc(Sysdate)
                                    And a.Orden_Pd              = 0
                                    And Nvl(a.Valida_Pp57, '*') = 'Nulo'
                                    And a.tipocpe              != 'VP'
                                    And Dummy                   = 0);
commit;

--S-D->2044
--PREMIUM - PREVENTIVO - - material SIEBEL sin Pack HD en DAC (NO CONSIDERA IPTV)
Update Cuadra.Cut_Siebel_ResultdBox
    Set CPE_NOEXISTEPACKHD_SIEBDAC = 0
    Where CPE In (Select CPE from Cuadra.Cut_Siebel_ResultdBox
                    where CPE_NOEXISTEPACKHD_SIEBDAC = 1
                    and con_orden_pend             = 0
                    and con_bi_pend                = 0
                    and CPE_Duplicada_MismoRut     = 0);
commit;

--S-I->2032
--INTERNET - PREVENTIVO - - el Modelo del Material Siebel Distinto en Incognito (NO CONSIDERA FTTH)
Update Cuadra.Cut_Siebel_ResultInet
    Set Cpe_ModeloDistinIncognito= 0
    Where CPE In (Select a.CPE From Cuadra.Cut_Siebel_ResultInet a
                    Inner Join Cut_Siebel_ResultDetaInet b
                    on a.cpe = b.cpe
                    Inner Join xvtr_siebel_info_series_t c on a.cpe = c.cod_serie
                    Where a.Cpe_ModeloDistinIncognito = 1
                    and a.cpe_DuplicadaIncognito    = 0
                    and a.con_orden_pend            = 0
                    and a.cpe_rutdistinincognito    = 0
                    and a.cpe_locadistinincognito   = 0
                    and a.cpe_noexisteincognito     = 0
                    and a.cpe_duplicada_siebel      = 0
                    and (b.modelo_incog != c.cod_modelo));
commit;


-- #################### UPDATE FIN DE SEMANA #################### --

--Validacion 2258
Update CUT_24569_Movil_Siebel_UIM a
    Set a.value_uim = a.value_giap
    where upper(trim(a.caracteristica_giap)) = upper(trim(a.caracteristica_uim))
    and caracteristica_Siebel             != 'DataPlan'
    and integration_id in ('migra.806584183','migra.806791504','1-SIL5QV')
    and a.serial_num                       = a.msisdn
    and upper(trim(a.value_giap))         != upper(trim(a.value_uim));
commit; 

--Validación 22insert into Cut_PermittedType_Total
update CUT_24569_Movil_Siebel_UIM
    set value_uim = dataplan_siebel
    where integration_id in ('1-2KJDYZGX','migra.806791504','1-2G1ICPJZ','1-SIL5QV',
                                'migra.805202554','migra.804762335','migra.806584183','migra.812202477','migra.795849337')
    and caracteristica_uim = 'DataPlan';
commit; 

--Validación 2247 --> 
update cut_26557_tv
    set modored_siebel = modoredvivuim_jlg
    where integration_id = '1-2IC1LY6P';
commit;

--S-U->2247
update cut_26557_tv a
    set a.modored_siebel = a.modoredvivuim_jlg
    where a.Cod_Serie_digital is not null
    and a.cod_serie_analogo is null
    and a.externalobjectid is not null
    and a.addr_name_siebel = a.addr_name_serv_uim
    and a.addr_name_siebel not in (select addr_name from Cuadra.CUT_26557_IdentVivienda)
    and a.addr_name_siebel = a.idenvivuim_jlg
    and a.modored_siebel != a.modoredvivuim_jlg
    and a.viviendaduplicada = 'N'
    and No_Existe_ServUIM != 2;
commit; 

--Validacion --> 2350
update cut_dbox_61
    set validar_ua = '*'
    where validar_ua = 'Corregible' and tipocpe = 'D-Box' And integration_id in ('1-2RFGDCO7','1-1P5RHXJB',
    '1-1P5RK3KF','1-1P5RK3BO','1-1P5RK3SB');
commit; 

--2170
update TMP_UIMSINCRM_DBOX
    set FLG_SIEBEL ='NO'
    where COD_SERIE = 'M92011ER7446';
commit; 

--2234
update cgm_ea_seu a
    set a.siebel_ebs = 'OK'
    WHERE a.fecha = trunc(sysdate) AND nvl(a.valida_pp57, '') = 'NO nulo' AND nvl(a.valida_pp_eq, '') = 'PP con EQ' 
    AND nvl(a.valida_59, '') = '59 No nulos' AND nvl(a.compara_59, '') = '59 igual PP-EQ' 
    AND nvl(a.existe_serie_ebs, '') = 'Serie encontrada en EBS' AND nvl(a.valida_cpe_pp, '') = 'CPE compatible con Producto' 
    AND nvl(a.siebel_ebs, '*') != 'OK' AND a.orden_pd = 0 And a.tipocpe NOT IN ('VP','MVP') And Dummy = 0;
commit;

--2243
update Cgm_Comparasu
    set Validadatos_Siebel_Uim = 'OK'
    Where Validadatos_Siebel_Uim = 'Error' And Fecha = Trunc(Sysdate);
commit;

--2008
update Cuadra.Cut_Siebel_ResultDetalle a
    set a.Marca  = a.Marca_UIM 
    Where a.Marca     != a.Marca_UIM 
    And a.Marca_UIM != '*';
commit;

--2242 (preventiva)
Update Cgm_Ea_Seu
    Set Valida_Pp_Eq = 'PP con EQ'
    Where pp_integration_id in ('14276808','1-2HW6DJCZ','1-2HW6DJDX','14819470','14044321','22325527','11661277','1-27MGJ4L5')
    and fecha = Trunc(sysdate);
commit; 

END;