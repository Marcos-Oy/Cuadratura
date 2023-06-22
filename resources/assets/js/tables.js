//buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],

$(function () {
  //Usuarios
  $("#UsersTable")
    .DataTable({
      responsive: true,
      searching: true,
      lengthChange: true,
      autoWidth: false,
      ordering: true,
      info: false,
      paging: true,
      buttons: [
        {
          extend: "copy",
          text: "copiar",
        },
        "csv",
        "excel",
        "pdf",
        {
          extend: "print",
          text: "imprimir",
        },
        {
          extend: "colvis",
          text: "columnas visibles",
        },
      ],
    })
    .buttons()
    .container()
    .appendTo("#UsersTable_wrapper .col-md-6:eq(0)");
});
