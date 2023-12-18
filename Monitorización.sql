SELECT *  FROM CUT_SIEBEL_LOGPROC WHERE FECH_INI LIKE ('31/10/%')
order by fech_ini desc

select fecha, count(1) from Cuadra.Cut_Siebel_ResultdBox      --debe tener al menos 1 registro   
group by fecha


--internet
SELECT *  FROM Cut_Siebel_LogProcInet  WHERE FECH_INI LIKE ('31/10/%')
order by fech_ini desc		

select count(1) from Cuadra.Cut_Siebel_ResultInet;      
select count(1) from Cuadra.Cut_Siebel_ResultDetaInet;


-- telefonia

SELECT * FROM CUT_SIEBEL_LOGPROCFONO WHERE FECH_INI LIKE ('31/10/%')
order by fech_ini desc

select nomb_proceso, to_char(fech_ini,'dd-mm-yyyy hh24:mi:ss'),to_char(fech_fin,'dd-mm-yyyy hh24:mi:ss'),observacion 
from Cuadra.Cut_Siebel_LogProcFonoCorn
 order by fech_ini desc


 -- si las sessiones putty se caen 
select 'alter system kill session'''||b.sid||','||b.serial#||''';' ,b.* 
from  v$session b 
where sid in (select sid from v$access where upper(object) like '%CUP_SIEBEL_EJECUTA_PROCESOS%') 


SELECT * FROM Cuadra.Cut_Procesos_Log_Respaldo