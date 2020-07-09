$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  //Add Class Active
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  //show the next fieldset
  next_fs.show();
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  // for making fielset appear animation
  opacity = 1 - now;

  current_fs.css({
    'display': 'none',
    'position': 'relative'
  });

  next_fs.css({
    'opacity': opacity

  });
  },
    duration: 600
  });

  $('html, body').animate({scrollTop:0}, 'slow');
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
$('html, body').animate({scrollTop:0}, 'slow');
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});

const duiArchivo = document.getElementById("duiNit-file");
const botonDui = document.getElementById("duiNit-button");
const textoDui = document.getElementById("duiNit-text");

botonDui.addEventListener("click", function() {
  duiArchivo.click();
});

duiArchivo.addEventListener("change", function() {
  if (duiArchivo.value) {
    textoDui.innerHTML = duiArchivo.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoDuiNit").innerHTML = "Documento ingresado";
    document.getElementById("textoDuiNit").style.color = "#51DF3E";
    setTimeout(function(){tooltipDui()},900);
  } else {
    textoDui.innerHTML = "No has ingresado tu Dui ni el Nit.";
  }
});

function tooltipDui(){
  $("#textoDuiNit").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoDuiNit").tooltip('show');
  setTimeout(function(){$("#textoDuiNit").tooltip('hide')},2500);
}

const archivoEscritura = document.getElementById("escritura-file");
const botonEscritura = document.getElementById("escritura-button");
const textoEscritura = document.getElementById("escritura-text");

botonEscritura.addEventListener("click", function() {
  archivoEscritura.click();
});

archivoEscritura.addEventListener("change", function() {
  if (archivoEscritura.value) {
    textoEscritura.innerHTML = archivoEscritura.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoEscritura").innerHTML = "Documento ingresado";
    document.getElementById("textoEscritura").style.color = "#51DF3E";
    setTimeout(function(){tooltipEscritura()},900);
  } else {
    textoEscritura.innerHTML = "No has ingresado la escritura.";
  }
});

function tooltipEscritura(){
  $("#textoEscritura").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoEscritura").tooltip('show');
  setTimeout(function(){$("#textoEscritura").tooltip('hide')},2500);
}

const archivoCredencial = document.getElementById("credencial-file");
const botonCredencial = document.getElementById("credencial-button");
const textoCredencial = document.getElementById("credencial-text");

botonCredencial.addEventListener("click", function() {
  archivoCredencial.click();
});

archivoCredencial.addEventListener("change", function() {
  if (archivoCredencial.value) {
    textoCredencial.innerHTML = archivoCredencial.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoCredencial").innerHTML = "Documento ingresado";
    document.getElementById("textoCredencial").style.color = "#51DF3E";
    setTimeout(function(){tooltipCredencial()},900);
  } else {
    textoCredencial.innerHTML = "No has ingresado tu tarjeta de IVA.";
  }
});

function tooltipCredencial(){
  $("#textoCredencial").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoCredencial").tooltip('show');
  setTimeout(function(){$("#textoCredencial").tooltip('hide')},2500);
}

const archivoFiscal = document.getElementById("fiscal-file");
const botonFiscal = document.getElementById("fiscal-button");
const textoFiscal = document.getElementById("fiscal-text");

botonFiscal.addEventListener("click", function() {
  archivoFiscal.click();
});

archivoFiscal.addEventListener("change", function() {
  if (archivoFiscal.value) {
    textoFiscal.innerHTML = archivoFiscal.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoFiscal").innerHTML = "Documento ingresado";
    document.getElementById("textoFiscal").style.color = "#51DF3E";
    setTimeout(function(){tooltipFiscal()},900);
  } else {
    textoFiscal.innerHTML = "No has ingresado el documento.";
  }
});

function tooltipFiscal(){
  $("#textoFiscal").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoFiscal").tooltip('show');
  setTimeout(function(){$("#textoFiscal").tooltip('hide')},2500);
}

const archivoActa = document.getElementById("acta-file");
const botonActa = document.getElementById("acta-button");
const textoActa = document.getElementById("acta-text");

botonActa.addEventListener("click", function() {
  archivoActa.click();
});

archivoActa.addEventListener("change", function() {
  if (archivoActa.value) {
    textoActa.innerHTML = archivoActa.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoActa").innerHTML = "Documento ingresado";
    document.getElementById("textoActa").style.color = "#51DF3E";
    setTimeout(function(){tooltipActa()},900);
  } else {
    textoActa.innerHTML = "No has ingresado el documento.";
  }
});

function tooltipActa(){
  $("#textoActa").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoActa").tooltip('show');
  setTimeout(function(){$("#textoActa").tooltip('hide')},2500);
}

const archivoLuz = document.getElementById("luz-file");
const botonLuz = document.getElementById("luz-button");
const textoLuz = document.getElementById("luz-text");

botonLuz.addEventListener("click", function() {
  archivoLuz.click();
});

archivoLuz.addEventListener("change", function() {
  if (archivoLuz.value) {
    textoLuz.innerHTML = archivoLuz.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoLuz").innerHTML = "Documento ingresado";
    document.getElementById("textoLuz").style.color = "#51DF3E";
    setTimeout(function(){tooltipLuz()},900);
  } else {
    textoLuz.innerHTML = "No has ingresado el documento.";
  }
});

function tooltipLuz(){
  $("#textoLuz").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoLuz").tooltip('show');
  setTimeout(function(){$("#textoLuz").tooltip('hide')},2500);
}

/*
  //////////////////////////////////////////////////////////////////////////////////////////////////
*/
/*
  PRIMER PASO
*/
document.getElementById("nombreComercial").addEventListener("keypress", soloLetras, false);
document.getElementById("razonSocial").addEventListener("keypress", soloTelefono, false);
document.getElementById("actividadGiro").addEventListener("keypress", soloDui, false);
document.getElementById("numeroNit").addEventListener("keypress", soloNit, false);

function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    //Usando la definición del DOM level 2, "return" NO funciona.
    e.preventDefault();
  }
}

function soloLetras(e){
  var key = window.event ? e.which : e.keyCode;
  if ((key < 65 || key > 122) && key != 32) {
    e.preventDefault();
  }
}

function soloTelefono(e){
  valor = document.getElementById("telefono").value;
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }else{
    if (valor.length < 9) {
      if (valor.match(/^\d{4}$/)) {
        nuevoValor = valor+"-";
        console.log(nuevoValor);
        document.getElementById("telefono").value = nuevoValor;
      }else{
        document.getElementById("telefono").value = valor;
      }
    }else{
      e.preventDefault();
    }
  }
}

function soloDui(e){
  valor = document.getElementById("numeroDui").value;
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }else{
    if (valor.length < 10) {
      if (valor.match(/^\d{8}$/)) {
        nuevoValor = valor+"-";
        document.getElementById("numeroDui").value = nuevoValor;
      }else{
        document.getElementById("numeroDui").value = valor;
      }
    }else{
      e.preventDefault();
    }
  }
}

function soloNit(e){
  valor = document.getElementById("numeroNit").value;
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }else{
    if (valor.length < 16) {
      if (valor.match(/^\d{4}$/)) {
        nuevoValor = valor+"-";
        console.log(nuevoValor);
        document.getElementById("numeroNit").value = nuevoValor;
      }else if (valor.match(/^\d{4}\-\d{6}$/)) {
        nuevoValor = valor+"-";
        console.log(nuevoValor);
        document.getElementById("numeroNit").value = nuevoValor;
      }else if (valor.match(/^\d{4}\-\d{6}\-\d{3}$/)) {
        nuevoValor = valor+"-";
        document.getElementById("numeroNit").value = nuevoValor;
      }else{
        document.getElementById("numeroNit").value = valor;
      }
    }else{
      e.preventDefault();
    }
  }
}

/*
  FIN PRIMER PASO
*/
/*
  //////////////////////////////////////////////////////////////////////////////////////////////////
*/
/*
  SEGUNDO PASO
*/
document.getElementById("informacionPEP").addEventListener("keypress", soloLetrasPaso2, false);
document.getElementById("nombreRelacionPEP").addEventListener("keypress", soloLetrasPaso2, false);
document.getElementById("cargoRelacionPEP").addEventListener("keypress", soloLetrasPaso2, false);
document.getElementById("relacionPEP").addEventListener("keypress", soloLetrasPaso2, false);

function soloLetrasPaso2(e){
  var key = window.event ? e.which : e.keyCode;
  if ((key < 65 || key > 122) && key != 32) {
    e.preventDefault();
  }
}

/*
  FIN SEGUNDO PASO
*/
/*
  //////////////////////////////////////////////////////////////////////////////////////////////////
*/
/*
  TERCER PASO
*/
document.getElementById("denominaciónSocial").addEventListener("keypress", soloLetrasPaso3, false);
document.getElementById("telefonoFuncionario").addEventListener("keypress", soloTelefonoPaso3, false);
document.getElementById("duiFuncionario").addEventListener("keypress", soloDuiPaso3, false);

function soloLetrasPaso3(e){
  var key = window.event ? e.which : e.keyCode;
  if ((key < 65 || key > 122) && key != 32) {
    e.preventDefault();
  }
}

function soloTelefonoPaso3(e){
  valor = document.getElementById("telefonoFuncionario").value;
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }else{
    if (valor.length < 9) {
      if (valor.match(/^\d{4}$/)) {
        nuevoValor = valor+"-";
        console.log(nuevoValor);
        document.getElementById("telefonoFuncionario").value = nuevoValor;
      }else{
        document.getElementById("telefonoFuncionario").value = valor;
      }
    }else{
      e.preventDefault();
    }
  }
}

function soloDuiPaso3(e){
  valor = document.getElementById("duiFuncionario").value;
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }else{
    if (valor.length < 10) {
      if (valor.match(/^\d{8}$/)) {
        nuevoValor = valor+"-";
        document.getElementById("duiFuncionario").value = nuevoValor;
      }else{
        document.getElementById("duiFuncionario").value = valor;
      }
    }else{
      e.preventDefault();
    }
  }
}

/*
  FIN TERCER PASO
*/
/*
  //////////////////////////////////////////////////////////////////////////////////////////////////
*/
/*
  CUARTO PASO
*/

//BENEFICIARIO 1
document.getElementById("nombreBeneficiario1").addEventListener("keypress", soloLetrasPaso4, false);
document.getElementById("telefonoBeneficiario1").addEventListener("keypress", soloTelefonoPaso41, false);
document.getElementById("nacionalidadBeneficiario1").addEventListener("keypress", soloLetrasPaso4, false);
document.getElementById("duiBeneficiario1").addEventListener("keypress", soloDuiPaso41, false);
document.getElementById("participacionBeneficiario1").addEventListener("keypress", soloNumeros, false);
//BENEFICIARIO 2
document.getElementById("nombreBeneficiario2").addEventListener("keypress", soloLetrasPaso4, false);
document.getElementById("telefonoBeneficiario2").addEventListener("keypress", soloTelefonoPaso42, false);
document.getElementById("nacionalidadBeneficiario2").addEventListener("keypress", soloLetrasPaso4, false);
document.getElementById("duiBeneficiario2").addEventListener("keypress", soloDuiPaso42, false);
document.getElementById("participacionBeneficiario2").addEventListener("keypress", soloNumeros, false);


function soloLetrasPaso4(e){
  var key = window.event ? e.which : e.keyCode;
  if ((key < 65 || key > 122) && key != 32) {
    e.preventDefault();
  }
}

function soloTelefonoPaso41(e){
  valor = document.getElementById("telefonoBeneficiario1").value;
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }else{
    if (valor.length < 9) {
      if (valor.match(/^\d{4}$/)) {
        nuevoValor = valor+"-";
        console.log(nuevoValor);
        document.getElementById("telefonoBeneficiario1").value = nuevoValor;
      }else{
        document.getElementById("telefonoBeneficiario1").value = valor;
      }
    }else{
      e.preventDefault();
    }
  }
}

function soloDuiPaso41(e){
  valor = document.getElementById("duiBeneficiario1").value;
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }else{
    if (valor.length < 10) {
      if (valor.match(/^\d{8}$/)) {
        nuevoValor = valor+"-";
        document.getElementById("duiBeneficiario1").value = nuevoValor;
      }else{
        document.getElementById("duiBeneficiario1").value = valor;
      }
    }else{
      e.preventDefault();
    }
  }
}

function soloTelefonoPaso42(e){
  valor = document.getElementById("telefonoBeneficiario2").value;
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }else{
    if (valor.length < 9) {
      if (valor.match(/^\d{4}$/)) {
        nuevoValor = valor+"-";
        console.log(nuevoValor);
        document.getElementById("telefonoBeneficiario2").value = nuevoValor;
      }else{
        document.getElementById("telefonoBeneficiario2").value = valor;
      }
    }else{
      e.preventDefault();
    }
  }
}

function soloDuiPaso42(e){
  valor = document.getElementById("duiBeneficiario2").value;
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }else{
    if (valor.length < 10) {
      if (valor.match(/^\d{8}$/)) {
        nuevoValor = valor+"-";
        document.getElementById("duiBeneficiario2").value = nuevoValor;
      }else{
        document.getElementById("duiBeneficiario2").value = valor;
      }
    }else{
      e.preventDefault();
    }
  }
}

/*
  FIN CUARTO PASO
*/
/*
  //////////////////////////////////////////////////////////////////////////////////////////////////
*/