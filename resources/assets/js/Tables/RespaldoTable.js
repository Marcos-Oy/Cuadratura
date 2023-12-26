$(document).ready(function () {
    // Configuración para la tabla con id "TableOne"
    var table = $("#RespaldoTable").DataTable({
        responsive: false,
        searching: true,
        lengthChange: true,
        autoWidth: true,
        ordering: true,
        info: true,
        paging: true,
        buttons: [
            {
                extend: "copy",
                text: "Copiar",
            },
            "csv",
            "excel",
            {
                extend: "print",
                text: "Imprimir",
                title: "RESPALDO", // Establece el título directamente aquí
            },
        ],
    })
    .buttons()
    .container()
    .appendTo("#RespaldoTable_wrapper .col-md-6:eq(0)");
});
