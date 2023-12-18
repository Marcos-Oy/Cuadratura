$(function() {
    var table = $("#PlataformaTable").DataTable({
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
    $("#PlataformaTable tbody td").css("text-align", "left");

    // Mueve los botones a la ubicación deseada
    table.buttons().container().appendTo("#PlataformaTable_wrapper .col-md-6:eq(0)");
});