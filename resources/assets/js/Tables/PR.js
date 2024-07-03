$(document).ready(function () {
    // Configuración para la tabla con id "LogProcTable"
    var table = $("#PR-Table").DataTable({
        responsive: false,
        searching: true,
        lengthChange: true,
        autoWidth: true,
        ordering: true,
        info: true,
        paging: true,
        order: [[1, "desc"]], // Ordenar por la segunda columna (FECH_INI) en orden ascendente
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
                title: "PR", // Establece el título directamente aquí
            },
        ],
    })
    .buttons()
    .container()
    .appendTo("#PR-Table_wrapper .col-md-6:eq(0)");
});
