$(document).ready(function () {
    // Configuración para la tabla con id "TableOne"
    var table = $("#CSiebelTable").DataTable({
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
                title: "Correccines Siebel", // Establece el título directamente aquí
            },
        ],
    })
    .buttons()
    .container()
    .appendTo("#CSiebelTable_wrapper .col-md-6:eq(0)");
});
