/**
 * @Author Marcos Oyarzo
 * 1) Al ingresar a la página desabilitamos los elementos con la función CardDisabled()
 * 2) Si habilitamos la edición en front el switch check pasa a verdadero
 * 3) So deshabilitamos la edición en front el switch check pasa a falso
 */

document.addEventListener("DOMContentLoaded", CardDisabled, false); //Ejecuta una función de forma automática

var nombre;
var paterno;
var materno;
var tel;
var mail;

function CardDisabled() {
  document.getElementById("nombre").disabled = true;
  document.getElementById("paterno").disabled = true;
  document.getElementById("materno").disabled = true;
  document.getElementById("tel").disabled = true;
  document.getElementById("mail").disabled = true;

  document.getElementById("btn1").hidden = true;

  nombre = document.getElementById("nombre").value;
  paterno = document.getElementById("paterno").value;
  materno = document.getElementById("materno").value;
  tel1 = document.getElementById("tel").value;
  mail = document.getElementById("mail").value;
}

function SwitchCheckBox() {
  if (document.getElementById("Hedit").checked == true) {
    document.getElementById("nombre").disabled = false;
    document.getElementById("paterno").disabled = false;
    document.getElementById("materno").disabled = false;
    document.getElementById("tel").disabled = false;
    document.getElementById("mail").disabled = false;

    document.getElementById("btn1").hidden = false;
  } else {
    document.getElementById("nombre").disabled = true;
    document.getElementById("paterno").disabled = true;
    document.getElementById("materno").disabled = true;
    document.getElementById("tel").disabled = true;
    document.getElementById("mail").disabled = true;

    document.getElementById("btn1").hidden = true;

    document.getElementById("nombre").value = nombre;
    document.getElementById("paterno").value = paterno;
    document.getElementById("materno").value = materno;
    document.getElementById("tel").value = tel;
    document.getElementById("mail").value = mail;
  }
}
