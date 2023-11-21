-- Televisión

BEGIN
    cup_siebel_ejecuta_procesos;
    EXCEPTION
    WHEN OTHERS THEN
    dbms_output.put_line(SubStr('Error '||TO_CHAR(SQLCODE)||': '||SQLERRM, 1, 255));
    RAISE;
END;

BEGIN
    cup_siebel_ejecuta_procesos02;
    EXCEPTION
    WHEN OTHERS THEN
    dbms_output.put_line(SubStr('Error '||TO_CHAR(SQLCODE)||': '||SQLERRM, 1, 255));
    RAISE;
END;


-- manual
-- Begin
--     Cup_Siebel_Analiza_dBox_Sieb01;
-- End;

-- manual por defecto
Begin
    Cup_Siebel_Analiza_dBox_Sieb02;
End;

BEGIN
    cup_siebel_ejecuta_procinet;
    EXCEPTION
    WHEN OTHERS THEN
    dbms_output.put_line(SubStr('Error '||TO_CHAR(SQLCODE)||': '||SQLERRM, 1, 255));
    RAISE;
END;

-- cuando al menos la resulinet y la ResultDetaInet tengan un registro se ejecuta el siguiente procedimiento
Begin
    Cup_Siebel_Analiza_Inet_Incogn;
End;

BEGIN
    Cup_Siebel_Ejec_ProcFono;
    EXCEPTION
    WHEN OTHERS THEN
    dbms_output.put_line(SubStr('Error '||TO_CHAR(SQLCODE)||': '||SQLERRM, 1, 255));
    RAISE;
END;

Begin
    Cup_Siebel_Ejec_ProcFonoCorn;
End;

----- AL FINAL DEL DÍA EL RESPALDO

Begin
    CUP_PROCESA_RESPALDO;
End;
