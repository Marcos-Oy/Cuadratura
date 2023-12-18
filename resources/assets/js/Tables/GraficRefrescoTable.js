$(function() {
    var table = $("#RefrescoTable").DataTable({
        responsive: false,
        searching: true,
        lengthChange: true,
        autoWidth: true,
        ordering: false,
        info: true,
        paging: true,
        buttons: [
            "csv",
            "excel",
            {
                extend: "print",
                text: "Imprimir",
                exportOptions: {
                    columns: ':visible:not(.no-print)'
                }
            },
            {
                extend: "colvis",
                text: "Columnas",
            }
        ]
    });

    // Alinea el contenido de las celdas
    $("#RefrescoTable tbody td").css("text-align", "left");

    // Mueve los botones a la ubicación deseada
    table.buttons().container().appendTo("#RefrescoTable_wrapper .col-md-6:eq(0)");
});