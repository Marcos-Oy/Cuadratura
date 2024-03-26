---------- CASO 01 BRM ----------
SELECT
	DOM,
	CUENTA,
	ACCOUNT_OBJ,
	PP_TYPE,
	OFFERING,
	RODI_PINPROD01.ORA_UTILS.ORA_UNIXTODATE(purchase_start_t,
	1) PURCHASE_START,
	tPRODUCTO,
	PRODUCT_OBJ,
	SERVICE_TYPE,
	SERVICE_OBJ,
	MONTO,
	PRODI_PINPROD01.ORA_UTILS.ORA_UNIXTODATE(purchase_end_t,
	1) PURCHASE_END,
	PRODI_PINPROD01.ORA_UTILS.ORA_UNIXTODATE(cycle_fee_end_t,
	1) CYCLE_END,
	FACTURADO,
	CASE
		WHEN \"Cuenta en cobranza\" > 0 THEN 'SI'
		ELSE 'NO'
	END COBRANZA
FROM
	(
	SELECT
		bi.actg_cycle_dom DOM,
		acc.account_no CUENTA,
		acc.poid_id0 ACCOUNT_OBJ,
		pur.poid_type PP_TYPE,
		pur.poid_id0 OFFERING,
		pur.purchase_start_t purchase_start_t,
		tprod.name PRODUCTO,
		prod.poid_id0 PRODUCT_OBJ,
		pur.service_obj_type SERVICE_TYPE,
		pur.service_obj_id0 SERVICE_OBJ,
		pur.cycle_fee_amt MONTO,
		pur.purchase_end_t purchase_end_t,
		ppcf.cycle_fee_end_t cycle_fee_end_t,
		decode(min(it.effective_t), 0, 'NO', 'SI') 
    FACTURADO,
		bi.scenario_obj_id0 AS \"Cuenta en cobranza\"
	FROM
		--PRODI_PINPROD01.service_t ser,
		PRODI_PINPROD01.purchased_product_t pur,
		PRODI_PINPROD01.account_t acc,
		PRODI_PINPROD01.product_t prod,
		PRODI_PINPROD01.billinfo_t bi,
		PRODI_PINPROD01.event_billing_product_t ebp,
		PRODI_PINPROD01.event_t ev,
		PRODI_PINPROD01.item_t it,
		PRODI_PINPROD01.purchased_product_cycle_fees_t ppcf
	WHERE
		acc.poid_id0 IN (
		SELECT
			pur.account_obj_id0
		FROM
			PRODI_PINPROD01.product_t prod,
			PRODI_PINPROD01.purchased_product_t pur,
			PRODI_PINPROD01.purchased_product_cycle_fees_t ppcf
		WHERE
			pur.product_obj_id0 = prod.poid_id0
			AND pur.status <> 3
			AND (prod.name IN ('Descuento Primera Caja')
				OR (upper(prod.name) LIKE '%DECO%') (upper(prod.name) LIKE '%D-BOX%') )
				AND pur.poid_id0 = ppcf.obj_id0
				AND (tpur.purchase_end_t = 0
					OR (pur.purchase_end_t <> 0
						AND pur.purchase_end_t > cycle_fee_end_t) )
			GROUP BY
				pur.account_obj_id0
			HAVING
				sum(pur.cycle_fee_amt) < 0 )
		AND pur.account_obj_id0 = acc.poid_id0
		--and pur.service_obj_id0 = ser.poid_id0
		--and acc.poid_id0=ser.account_obj_id0        
		AND pur.product_obj_id0 = prod.poid_id0
		AND (tprod.name IN ('Descuento Primera Caja')
			OR (upper(prod.name) LIKE '%DECO%')
				OR (upper(prod.name) LIKE '%D-BOX%') )
		AND acc.poid_id0 = bi.account_obj_id0
		AND pur.status <> 3
		AND ebp.offering_obj_id0 = pur.poid_id0
		AND ebp.obj_id0 = ev.poid_id0
		AND it.poid_id0 = ev.item_obj_id0
		AND ppcf.obj_id0 = pur.poid_id0
	GROUP BY
		bi.actg_cycle_dom,
		acc.account_no,
		acc.poid_id0,
		pur.poid_type,
		pur.poid_id0,
		prod.name,
		prod.poid_id0,
		pur.service_obj_type,
		pur.service_obj_id0,
		pur.cycle_fee_amt,
		bi.scenario_obj_id0,
		pur.purchase_start_t,
		pur.purchase_end_t,
		ppcf.cycle_fee_end_t )
	--order by DOM, CUENTA, ACCOUNT_OBJ, OFFERING, SERVICE_OBJ";



---------- CASO 05 SBL ----------

SELECT
	t1.OU_NUM_1,
	t1.name,
	t1.CUST_STAT_CD,
	t1.ACCNT_TYPE_CD,
	t1.X_OCS_SUBCLASE,
	t2.X_OCS_CICLO_COB
FROM
	SIEBEL.S_ORG_EXT t1 ,
	SIEBEL.S_INV_PROF t2
WHERE
	t2.ACCNT_ID = t1.PAR_ROW_ID

---------- CASO 05 BRM ----------

SELECT
	p.account_obj_id0,
	p.poid_id0,
	vpa.rut,
	a.account_no,
	vpa.flujo_cobranza,
	vpa.tipo_suscriptor,
	decode (b.payinfo_obj_type,
	'/payinfo/vtr/desc_planilla',
	'Descuento por Planilla',
	'/payinfo/invoice',
	'Medio Pago no Contratado',
	'/payinfo/vtr/pat/ripley',
	'PAT',
	'/payinfo/vtr/pat/transbank',
	'PAT',
	'/payinfo/vtr/pat/falabella',
	'PAT',
	'/payinfo/vtr/pac/corpbanca',
	'PAC',
	'/payinfo/vtr/pac/bci',
	'PAC',
	'PayType Invalido') AS MediodePago
FROM
	SCHEMA_BRM.vtr_profile_account_t vpa,
	SCHEMA_BRM.profile_t p,
	SCHEMA_BRM.account_t a,
	SCHEMA_BRM.billinfo_t b
	WHERE a.poid_id0 = p.account_obj_id0 
	AND a.poid_id0 = b.account_obj_id0 
	AND NOT REGEXP_LIKE(a.account_no, 'M|-')
	AND p.poid_id0 = vpa.obj_id0 
	AND a.status <> 10103 
	AND EXISTS (
	SELECT
		1
	FROM
		SCHEMA_BRM.service_t s
	WHERE
		s.account_obj_id0 = a.poid_id0
		AND s.status <> 10103 );

---------- CASO 06 SBL ----------

SELECT
	CLI.NAME AS cta,
	cli.CUST_STAT_CD AS status,
	fac.EMAIL_ADDR email
FROM
	SIEBEL.S_ORG_EXT CLI,
	SIEBEL.S_INV_PROF FAC
WHERE
	CLI.ROW_ID = FAC.ACCNT_ID
	AND cli.ACCNT_TYPE_CD = FacturaciAND cli.CUST_STAT_CD = 'Activo' 
    AND exists ( SELECT 1 FROM SIEBEL.S_ASSET S WHERE S.STATUS_CD = 'Activo'
	AND S.BILL_PROFILE_ID = FAC.ROW_ID );

---------- CASO 06 BRM ----------

SELECT
	account_no cta,
	pay.email_addr email
FROM
	SCHEMA_BRM account_t a,
	SCHEMA_BRM payinfo_t pay
WHERE
	pay.account_obj_id0 = a.poid_id0
	AND account_no != 'ROOT'
	AND a.status <> 10103
	AND EXISTS (
	SELECT
		1
	FROM
		SCHEMA_BRM service_t s
	WHERE
		s.account_obj_id0 = a.poid_id0
		AND s.status <> 10103 );


---------- CASO 08 SBL ----------

Select p.Name                 Cuenta,
    c.Cust_Stat_Cd         Estado,
    p.Paymt_Meth_Cd        Tipo_Pago,
    p.Media_Type_Cd        Metodo_Pago,
    c.x_Ocs_Subclase       Tipo_Servicios,
    p.x_Ocs_Tipo_Doc       Boleta_Factura,
    p.x_Ocs_Dias_Ext_Plazo,
    p.Bank_Name            Banco,
    p.Email_Addr,
    d.Addr                 Direccion,
    d.City                 Ciudad,
    d.Zipcode              Zip,
    Con.Fst_Name           Nombre,
    Con.Last_Name          Ap_Pat,
    Con.Mother_Maiden_Name Ap_Mat
From Cuadra.s_Org_Ext            c,
    Cuadra.s_Inv_Prof           p,
    Cuadra.s_Addr_Per           d,
    Sbl_Stg.s_Contact@Annapurna Con
Where c.Row_Id = p.Accnt_Id
    And p.Con_Id = Con.Row_Id
    And c.Accnt_Type_Cd = 'Facturación'
    And c.Cust_Stat_Cd = 'Activo'
    And p.Addr_Id = d.Row_Id;


    
---------- CASO 08 BRM ----------

Select a.Account_No,
    a.Poid_Id0 Account_Obj_Id0,
    b.Poid_Id0 Billinfo_Obj_Id0,
    Vpa.Rut,
    Vpa.Tipo_Suscriptor Tipo_Suscriptor_Brm,
    Vpa.Tipo_Documento_Trib,
    b.Pay_Type,
    b.Payinfo_Obj_Type,
    Decode(b.Payinfo_Obj_Type,
            '/payinfo/vtr/desc_planilla',
            'Descuento por Planilla',
            '/payinfo/invoice',
            'Medio Pago no Contratado',
            '/payinfo/vtr/pat/ripley',
            'PAT',
            '/payinfo/vtr/pat/transbank',
            'PAT',
            '/payinfo/vtr/pat/falabella',
            'PAT',
            '/payinfo/vtr/pac/corpbanca',
            'PAC',
            '/payinfo/vtr/pac/bci',
            'PAC',
            'PayType Invalido') As Tipo_Pago_Brm
From Brm_Stg.Billinfo_t@Annapurna            b,
    Brm_Stg.Account_t@Annapurna             a,
    Brm_Stg.Vtr_Profile_Account_t@Annapurna Vpa,
    Brm_Stg.Profile_t@Annapurna             p
Where a.Poid_Id0 = b.Account_Obj_Id0
    And a.Status <> 10103
    And a.Account_No Not Like '0.0.0.1%'
    And a.Poid_Id0 <> 1
    And Vpa.Obj_Id0 = p.Poid_Id0
    And p.Account_Obj_Id0 = a.Poid_Id0;

---------- CASO 09 SBL ----------

SELECT
	CLI.NAME IDENTIF_CTA,
	ADR.ADDR DIRECCION,
	ADR.ZIPCODE ZIP,
	ADR.CITY CIUDAD,
	ADR.COUNTRY PAIS
FROM
	SCHEMA_SBL S_ORG_EXT CLI,
	SCHEMA_SBL S_ADDR_PER ADR
WHERE
	CLI.ACCNT_TYPE_CD = 'Facturaci'
	AND CLI.CUST_STAT_CD = 'Activo'
	AND CLI.PR_ADDR_ID = ADR.ROW_ID

---------- CASO 09 BRM ----------

SELECT
	a.account_no,
	address,
	city,
	zip,
	country
FROM
	SCHEMA_BRM account_t a,
	SCHEMA_BRM account_nameinfo_t ani
WHERE
	a.poid_id0 = ani.obj_id0
	AND a.status <> 10103
	AND EXISTS (
	SELECT
		1
	FROM
		SCHEMA_BRM service_t s
	WHERE
		s.account_obj_id0 = a.poid_id0
		AND s.status <> 10103);

---------- CASO 10 BRM ----------

SELECT
	acc.account_no,
	s.poid_id0 AS ServicePoid,
	sa.rec_id AS id,
	sa.name AS valor
FROM
	SCHEMA_BRM service_t s,
	SCHEMA_BRM service_alias_list_t sa,
	SCHEMA_BRM account_t acc
WHERE
	s.poid_type = '/service/cable'
	AND sa.obj_id0 = s.poid_id0
	AND acc.poid_id0 = s.account_obj_id0
	AND s.status <> 10103
	AND acc.status <> 10103
ORDER BY
	acc.account_no,
	s.poid_id0,
	sa.rec_id;

---------- CASO 13 SBL ----------

SELECT
	CLI.ROW_ID,
	CLI.NAME IDENTIF_CTA,
	CLI.OU_NUM_1 RUT,
	CLI.X_OCS_SUBCLASE SUBCLASE,
	FAC.X_OCS_TIPO_DOC DOCUMENTO,
	FAC.MEDIA_TYPE_CD SOPORTE_FACTURA,
	substr(trim(CLI.ALIAS_NAME), 1, 50) NOMBRE,
	substr(trim(CLI.X_OCS_AP_PAT), 1, 50) APELLIDO_P,
	substr(trim(CLI.X_OCS_AP_MAT), 1, 50) APELLIDO_M
FROM
	SCHEMA_SBL S_ORG_EXT CLI,
	SCHEMA_SBL S_INV_PROF FAC
WHERE
	CLI.ROW_ID = FAC.ACCNT_ID
	AND ACCNT_TYPE_CD = 'Facturaci'
	AND CUST_STAT_CD = 'Activo';

---------- CASO 13 BRM ----------

SELECT
	a.account_no,
	a.poid_id0,
	substr(trim(ani.first_name), 1, 50) f_name,
	substr(trim(ani.last_name), 1, 50) l_name,
	decode(vp.b2b_type, 'B2B', 'B2B', 'Residencial') tipo_cliente
FROM
	SCHEMA_BRM account_t a,
	SCHEMA_BRM account_nameinfo_t ani,
	SCHEMA_BRM profile_t p,
	SCHEMA_BRM vtr_profile_account_t vp
WHERE
	a.poid_id0 = ani.obj_id0
	AND a.poid_id0 = p.account_obj_id0
	AND p.poid_id0 = vp.obj_id0
	AND a.status <> 10103
	AND EXISTS (
	SELECT
		1
	FROM
		SCHEMA_BRM service_t s
	WHERE
		s.account_obj_id0 = a.poid_id0
		AND s.status <> 10103)
	AND a.account_no NOT LIKE '0.0.0.1%'
	AND a.poid_id0 <> 1;

---------- CASO 14 SBL ----------

SELECT
	c.name RUT ,
	fact.name Cta_fact,
	fact.X_OCS_SUBCLASE,
	Q.name Padre,
	Q.integration_id INT_ID_PADRE,
	a.integration_id,
	a.row_id,
	a.ASSET_NUM,
	p.name Producto,
	x.X_OCS_ATTRIB_59 Serial ,
	x.ATTRIB_46 Mac,
	x.ATTRIB_42 Mac_CM,
	a.STATUS_CD Estado_Activo,
	a.created,
	a.LAST_UPD
FROM
	SIEBEL.s_asset a,
	siebel.s_org_ext c,
	siebel.s_prod_int p,
	siebel.s_asset_x x,
	siebel.s_org_ext fact,
	(
	SELECT
		pp.name,
		tt.row_id ,
		tt.integration_id,
		tt.prom_integ_id
	FROM
		siebel.s_prod_int pp,
		siebel.s_asset tt
	WHERE
		tt.prod_id = pp.row_id (+) ) Q
WHERE
	a.STATUS_CD IN ('Activo', 'Suspendido')
	AND a.par_asset_id = Q.row_id (+)
	AND a.OWNER_ACCNT_ID = c.row_id
	AND a.BILL_ACCNT_ID = fact.row_id
	AND a.row_id = x.PAR_ROW_ID
	AND a.prod_id = p.row_id
	AND p.X_OCS_FAMILIA = 'Plan'
	AND p.STATUS_CD = 'Activo'
	AND p.FULFLMNT_ITEM_CODE = 'Servicio de Banda Ancha_Class';

---------- CASO 14 BRM ----------

SELECT
	s.poid_id0 AS ServicePoid,
	sa.name AS MACAddressCM
FROM
	SCHEMA_BRM service_t s,
	SCHEMA_BRM service_alias_list_t sa
WHERE
	s.poid_type = '/service/broadband'
	AND sa.obj_id0 = s.poid_id0
	AND sa.rec_id = 1
	AND s.poid_id0 IN ("this.listaParcial") --Revisar
ORDER BY
	s.poid_id0;

---------- CASO 17 BRM ----------

SELECT
	decode (s.status,
	10100,
	'Activo',
	'Suspendido') AS facturado,
	a.account_no,
	s.poid_type,
	s.poid_id0,
	s.account_obj_id0,
	sa.rec_id,
	sa.name,
	PRODI_PINPROD01.ORA_UTILS.ORA_UNIXTODATE(s.created_t) fecha_creacion,
	vp.rut
FROM
	SCHEMA_BRM service_t s,
	SCHEMA_BRM service_alias_list_t sa,
	SCHEMA_BRM account_t a,
	SCHEMA_BRM profile_t p,
	SCHEMA_BRM vtr_profile_account_t vp,
	SCHEMA_BRM product_t pr,
	SCHEMA_BRM purchased_product_t pp,
	SCHEMA_BRM rate_plan_t rp,
	SCHEMA_BRM rate_t r
WHERE
	s.poid_id0 = sa.obj_id0
	AND s.account_obj_id0 = a.poid_id0
	AND a.status <> 10103
	AND s.status <> 10103
	AND a.account_no NOT LIKE '0.0.0.1%'
	AND a.poid_id0 <> 1
	AND s.poid_type NOT LIKE '/service/telco/gsm%'
	AND s.poid_type NOT LIKE '/service/telephony'
	AND a.poid_id0 = p.account_obj_id0
	AND p.poid_id0 = vp.obj_id0
	AND a.poid_id0 = pp.account_obj_id0
	AND pp.status <> 3
	AND pp.product_obj_id0 = pr.poid_id0
	AND pr.permitted = '/service/cable'
	AND pr.poid_id0 = rp.product_obj_id0
	AND rp.poid_id0 = r.rate_plan_obj_id0
	AND r.DESCR LIKE '%_RP_%'
	AND pr.name NOT LIKE '%Analogo%'
	AND EXISTS (
	SELECT
		1
	FROM
		product_t pro,
		purchased_product_t ppr
	WHERE
		pro.name LIKE 'd-BOX%'
		AND pro.permitted = '/service/cable'
		AND pro.poid_id0 = ppr.product_obj_id0
		AND ppr.account_obj_id0 = a.poid_id0
		AND ppr.status <> 3
		AND s.poid_id0 = ppr.service_obj_id0)
	AND MOD (sa.rec_id,
	4) = 1
	AND EXISTS (
	SELECT
		1
	FROM
		SCHEMA_BRM service_alias_list_t sa2
	WHERE
		s.poid_id0 = sa2.obj_id0
		AND sa.REC_ID = sa2.REC_ID
		AND (REGEXP_LIKE (sa2.name,
		'[[:punct:]]',
		'i')
			OR REGEXP_LIKE (sa2.name,
			'[[:space:]]',
			'i')
				OR LENGTH (sa2.name)<5
					OR LENGTH (sa2.name)>17)
			AND sa2.name NOT LIKE 'migra.%'
			AND (upper(sa2.name) NOT LIKE '%BAC'
				AND upper(sa2.name) NOT LIKE '%DX'
					AND upper(sa2.name) NOT LIKE '%BEC'
						AND upper(sa2.name) NOT LIKE '%BACKUP'
							AND upper(sa2.name) NOT LIKE '%_B'
								AND upper(sa2.name) NOT LIKE '%BCK'))
	ORDER BY 1,
	3,
	5 ASC;

---------- CASO 18 SBL ----------

SELECT C.OU_NUM_1 AS RUT, C.ACCNT_TYPE_CD AS \"TIPO CUENTA\", C.NAME AS CUENTA, C.CUST_STAT_CD
AS \"ESTADO CF\", O.ROW_ID AS \"ID ORDEN\", O.ORDER_NUM AS \"NUMERO ORDEN\", O.REV_NUM, T.NAME
AS \"TIPO DE ORDEN\", O.STATUS_CD AS \"ESTADO ORDEN\", I.ROW_ID
AS \"ID ITEM ORDEN\",I.ASSET_INTEG_ID, P.NAME                                          
AS \"NOMBRE DEL ITEM\",I.STATUS_CD
AS \"ESTADO ITEM ORDEN\",I.ACTION_CD
AS \"ACTION CODE\",I.NET_PRI
AS \"PRECIO DEL ASSET EN EL PEDIDO\",A.PURCH_ADJ_UNIT_PRI
AS \"PRECIO ACTUAL DEL ASSET\",(
    SELECT T1.PURCH_ADJ_UNIT_PRI FROM SIEBEL.S_ASSET T1 WHERE IX.X_OCS_ATTRIB_63 = T1.INTEGRATION_ID) 
    AS \"PRECIO ANTERIOR DEL ASSET\", A.STATUS_CD \"ESTADO DEL ASSET\", P.PRICE_TYPE_CD 
    AS \"TIPO DE PRECIO\",A.PURCH_LST_UNIT_PRI
    AS \"PRECIO LISTA CRM\", NVL(CFG.ADJ_VAL_AMT,LST.STD_PRI_UNIT)
    AS \"PRECIO LISTA ITEM\", PRM.NAME
    AS PROMOCION, 
    --TO_CHAR(O.CREATED, 'YYYY-MM-DD HH24:MI:SS')   
    AS \"INICIO ORDEN\", O.CREATED AS \"INICIO ORDEN\", 
    --TO_CHAR(O.LAST_UPD, 'YYYY-MM-DD HH24:MI:SS')
    AS \"FIN ORDEN\" O.LAST_UPD AS \"FIN ORDEN\" FROM 
    SIEBEL.S_ORG_EXT C, 
    SIEBEL.S_ORDER O, 
    SIEBEL.S_ORDER_TYPE T, 
    SIEBEL.S_ORDER_ITEM I, 
    SIEBEL.S_PROD_INT P, 
    SIEBEL.S_ASSET A, 
    SIEBEL.S_ORDER_ITEM_X IX, 
    SIEBEL.S_PRI_LST_ITEM LST, 
    SIEBEL.S_PRO_CFG_ITEM CFG, 
    SIEBEL.S_ORDER_ITEM ROT, 
    SIEBEL.S_PROD_INT PRM 
    WHERE C.ROW_ID = O.BILL_ACCNT_ID 
    AND O.ORDER_TYPE_ID = T.ROW_ID 
    AND O.ROW_ID = I.ORDER_ID 
    AND I.PROD_ID = P.ROW_ID 
    AND O.STATUS_CD = 'Completada' 
    --AND O.CREATED > TO_DATE('" + this.fechaIngresada + "','yyyy-mm-dd')
    AND O.CREATED > TO_DATE('2019-01-01','yyyy-mm-dd')
    AND T.NAME IN ( 'Traslado' )
    AND A.INTEGRATION_ID = I.ASSET_INTEG_ID
    AND I.ROW_ID = IX.ROW_ID (+)
    AND I.PROD_ID = LST.PROD_ID (+)
    AND I.ROOT_ORDER_ITEM_ID = ROT.ROW_ID (+)
    AND ROT.PROMOTION_ID = CFG.PROMO_ID (+)
    AND ROT.PROMOTION_ID = PRM.ROW_ID (+)
    AND I.PROD_ID = CFG.PROD_ID (+)
    --AND I.ACTION_CD = 'Nuevo'
    --AND I.NET_PRI IS NOT NULL
    --AND I.NET_PRI <> '0'
    --AND A.PURCH_ADJ_UNIT_PRI = '0'
    AND A.STATUS_CD = 'Activo'
    --AND P.PRICE_TYPE_CD = 'Recurrente'";

---------- CASO 18 AIA ----------

SELECT
	xrd.value integration_id,
	(
	SELECT
		xrd1.value
	FROM
		AIAPROD_XREF.xref_data xrd1
	WHERE
		xrd1.row_number = xrd.row_number
		AND xrd1.xref_column_name IN ('BRM_01')) offering
FROM
	AIAPROD_XREF.xref_data xrd
WHERE
	xrd.value IN (" + str + ") -- Algún valor integration_id
	AND xrd.xref_column_name IN ('SEBL_01');


---------- CASO 20 BRM ----------

SELECT
	r.poid_type poidType,
	c.account_no Cuenta,
	od.name Producto,
	r.poid_id0 Offering,
	code(pur.status,
	1,
	'Activo',
	2,
	'Inactivo',
	3,
	'Cancelado',
	'NA') Estado,
	r.cycle_fee_amt \"Precio Actual BRM\",
	.cycle_fee_amt \"Precio Anterior BRM\",
	.actg_cycle_dom DOM,
	c.poid_id0 Account_obj,
	SE
	WHEN bi.scenario_obj_id0 > 0 EN 'SI'
	ELSE 'NO' D AS \"Cuenta en cobranza\",
	ON
	OVERRIDE' from ODI_PINPROD01.purchased_product_t pur, ODI_PINPROD01.rate_plan_t rp, ODI_PINPROD01.au_purchased_product_t au, ODI_PINPROD01.product_t prod, ODI_PINPROD01.billinfo_t bi, ODI_PINPROD01.account_t acc, ODI_PINPROD01.rate_t  where r.cycle_fee_amt=0 d pur.product_obj_id0 = rp.product_obj_id0 d rp.event_type like ' / event / billing / product / fee / CYCLE / CYCLE%' d r.rate_plan_obj_id0 = rp.poid_id0 d r.descr like '%_RP_%' d pur.status_flags not in (' 1 ',' 2 ',' 4 ',' 8 ',' 10 ',' 0 ',' 16777216 ',' 16777224 ',' 16777218 ',' 4194306 ',' 4194304 ') d pur.status <> 3 d pur.poid_id0 = au.au_parent_obj_id0 d au.created_t =   (select max(au2.created_t) from PRODI_PINPROD01.au_purchased_product_t au2 where au2.au_parent_obj_id0 = au.au_parent_obj_id0 and au2.cycle_fee_amt <> 0) and acc.poid_id0 = pur.account_obj_id0 and acc.business_type <> 0 and acc.status = 10100 and pur.product_obj_id0=prod.poid_id0 and acc.poid_id0=bi.account_obj_id0 UNION select r.poid_type poidType, c.account_no Cuenta, od.name Producto, r.poid_id0 Offering, code(pur.status, 1, ' Activo', 2, ' Inactivo', 3, ' Cancelado', ' NA') Estado, r.cycle_fee_amt \"Precio Actual BRM\", .cycle_fee_amt  \"Precio Anterior BRM\", .actg_cycle_dom DOM, c.poid_id0 Account_obj, SE WHEN bi.scenario_obj_id0 > 0 EN ' SI' ELSE ' NO ' D as \"Cuenta en cobranza\", ON OVERRIDE'
FROM
	ODI_PINPROD01.purchased_product_t pur,
	ODI_PINPROD01.rate_plan_t rp,
	ODI_PINPROD01.au_purchased_product_t au,
	ODI_PINPROD01.product_t prod,
	ODI_PINPROD01.billinfo_t bi,
	ODI_PINPROD01.account_t acc,
	ODI_PINPROD01.purchased_product_t pur2,
	ODI_PINPROD01.rate_t
WHERE
	r.cycle_fee_amt = 0 d pur.product_obj_id0 = rp.product_obj_id0 d rp.event_type LIKE '/event/billing/product/fee/cycle/cycle%' d r.rate_plan_obj_id0 = rp.poid_id0 d r.descr LIKE '%_RP_%' d pur.status_flags NOT IN ('1', '2', '4', '8', '10', '0', '16777216', '16777224', '16777218', '4194306', '4194304') d pur.status <> 3 d pur.account_obj_id0 = pur2.account_obj_id0 d pur.product_obj_id0 = pur2.product_obj_id0 d pur2.cycle_fee_amt <> 0 d pur2.status_flags NOT IN ('1', '2', '4', '8', '10', '0', '16777216', '16777224', '16777218', '4194306', '4194304') d pur2.status = 3 d pur2.poid_id0 = au.au_parent_obj_id0 d au.created_t = (
	SELECT
		max(au2.created_t)
	FROM
		PRODI_PINPROD01.au_purchased_product_t au2
	WHERE
		au2.au_parent_obj_id0 = au.au_parent_obj_id0
		AND au2.cycle_fee_amt <> 0) d EXISTS (
	SELECT
		1
	FROM
		PRODI_PINPROD01.event_t e,
		PRODI_PINPROD01.event_billing_product_t ebp
	WHERE
		e.account_obj_id0 = pur2.account_obj_id0
		AND e.service_obj_id0 = pur2.service_obj_id0
		AND e.poid_type = '/event/billing/product/action/cancel'
		AND e.program_name LIKE 'AIA: SalesOrder - 1-%'
		AND e.poid_id0 = ebp.obj_id0
		AND ebp.product_obj_id0 = pur2.product_obj_id0
		AND ebp.offering_obj_id0 = pur2.poid_id0) d acc.poid_id0 = pur.account_obj_id0 d acc.business_type <> 0 d acc.status = 10100 d pur.product_obj_id0 = prod.poid_id0
	AND acc.poid_id0 = bi.account_obj_id0;

---------- CASO 10 SBL ----------

      String str = "select\r\n    c.name CUENTA,\r\n    p.name PRODUCTO,\r\n    a.status_cd ESTADO,\r\n    f.bill_cycle_day DOM,\r\n    c.X_OCS_COB_FLG EN_COBRANZA,\r\n    --p.prod_cd TIPO,\r\n    --p.x_ocs_familia FAMILIA,\r\n    a.integration_id,\r\n    a.PURCH_LST_UNIT_PRI PRECIO_LISTA_CRM,\r\n    a.PURCH_ADJ_UNIT_PRI PRECIO_AJUSTADO_CRM,\r\n    lst.STD_PRI_UNIT PRECIO_LISTA_ITEM,\r\n    a.db_last_upd\r\nfrom\r\n--dentro del parentesis van los integration_id que vienen desde BRM\r\n    (";
      for (byte b = 0; b < this.dataFromAIABRM.size(); b++) {
        if (b == this.dataFromAIABRM.size() - 1) {
          str = str + " select '" + ((BRMProdObject)this.dataFromAIABRM.get(b)).getIntegrationID() + "' integ_id from dual) xls,\r\n";
        } else {
          str = str + " select '" + ((BRMProdObject)this.dataFromAIABRM.get(b)).getIntegrationID() + "' integ_id from dual union ";
        } 
      } 
      str = str + "siebel.s_asset a,\r\n" + "    siebel.s_prod_int p,\r\n" + "    siebel.S_PRI_LST_ITEM lst,\r\n" + "    siebel.s_org_ext c,\r\n" + "    siebel.s_inv_prof f\r\n" + "where\r\n" + "    xls.integ_id = a.integration_id (+)\r\n" + "    and a.prod_id = p.row_id (+)\r\n" + "    and p.row_id = lst.prod_id\r\n" + "    and c.row_id = a.bill_accnt_id\r\n" + "    and f.row_id = a.bill_profile_id";

---------- CASO 47 BRM ----------

SELECT
	ta.account_no account,
	pp.poid_type,
	pp.poid_id0 offering,
	p.name producto,
	decode 
(pp.status,
	1,
	'Activo',
	2,
	'Inactivo',
	3,
	'Cancelado',
	'NA') estado_producto,
	tpb.name promo,
	decode(pb.status, 1, 'Activo', 2, 'Suspendido', 3, 'Inactivo') estado_promo,
	pp.service_obj_type,
	pp.service_obj_id0,
	pp.status_flags,
	pp.cycle_fee_amt monto,
	PRODI_PINPROD01.ORA_UTILS.ORA_UNIXTODATE(pp.purchase_start_t,
	1)
fecha_compra
FROM
	tPRODI_PINPROD01.account_t a ,
	PRODI_PINPROD01.product_t p,
	PRODI_PINPROD01.purchased_product_t pp,
	PRODI_PINPROD01.purchased_bundle_t p nwhere a.poid_id0 = pp.account_obj_id0
	AND p.poid_id0 = pp.product_obj_id0
	AND pp.plan_obj_id0 = pb.poid_id0(+)
	AND pp.account_obj_id0 IN (
	SELECT
		a.poid_id0
	FROM
		tPRODI_PINPROD01.purchased_product_t pp,
		PRODI_PINPROD01.account_t
	WHERE
		tpp.account_obj_id0 = a.poid_id0
		AND pp.status <> 3
		AND a.status <> 10103
		AND pp.product_obj_id0 IN (
		SELECT
			poid_id0
		FROM
			PRODI_PINPROD01.product_t
		WHERE
			name LIKE 'Descuento Upselling%' )
		AND pp.purchase_end_t = 0
		--NUEVO
	GROUP BY
		a.poid_id0
	HAVING
		count (pp.poid_id0) >1 )
	AND pp.product_obj_id0 IN 
(
	SELECT
		poid_id0
	FROM
		PRODI_PINPROD01.product_t
	WHERE
		name LIKE 'Descuento Upselling%' )
	AND pp.status <> 3
	AND pp.purchase_end_t = 0
	--NUEVO

