$(document).ready(function () {
    // Configuración para la tabla con id "TableOne"
    var table = $("#LogProcFonoTable").DataTable({
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
                title: "LogProcFono", // Establece el título directamente aquí
            },
        ],
    })
    .buttons()
    .container()
    .appendTo("#LogProcFonoTable_wrapper .col-md-6:eq(0)");
});
