//buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],

$(function () {
  // Configuración para la tabla con id "TableTwo"
  $("#TableTwo").DataTable({
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
              text: "copiar",
          },
          "csv",
          "excel",
          {
              extend: "print",
              text: "imprimir",
          },
      ],
  })
  .buttons()
  .container()
  .appendTo("#TableTwo_wrapper .col-md-6:eq(0)");

});
