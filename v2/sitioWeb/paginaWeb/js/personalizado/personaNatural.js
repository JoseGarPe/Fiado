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

const duiArchivo = document.getElementById("dui-file");
const botonDui = document.getElementById("dui-button");
const textoDui = document.getElementById("dui-text");

botonDui.addEventListener("click", function() {
  duiArchivo.click();
});

duiArchivo.addEventListener("change", function() {
  if (duiArchivo.value) {
    textoDui.innerHTML = duiArchivo.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoDui").innerHTML = "Documento ingresado";
    document.getElementById("textoDui").style.color = "#51DF3E";
    setTimeout(function(){tooltipDui()},900);
  } else {
    textoDui.innerHTML = "No has ingresado tu Dui.";
  }
});

function tooltipDui(){
  $("#textoDui").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoDui").tooltip('show');
  setTimeout(function(){$("#textoDui").tooltip('hide')},2500);
}

const archivoNit = document.getElementById("nit-file");
const botonNit = document.getElementById("nit-button");
const textoNit = document.getElementById("nit-text");

botonNit.addEventListener("click", function() {
  archivoNit.click();
});

archivoNit.addEventListener("change", function() {
  if (archivoNit.value) {
    textoNit.innerHTML = archivoNit.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoNit").innerHTML = "Documento ingresado";
    document.getElementById("textoNit").style.color = "#51DF3E";
    setTimeout(function(){tooltipNit()},900);
  } else {
    textoNit.innerHTML = "No has ingresado tu Nit.";
  }
});

function tooltipNit(){
  $("#textoNit").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoNit").tooltip('show');
  setTimeout(function(){$("#textoNit").tooltip('hide')},2500);
}

const archivotIVA = document.getElementById("tIVA-file");
const botontIVA = document.getElementById("tIVA-button");
const textotIVA = document.getElementById("tIVA-text");

botontIVA.addEventListener("click", function() {
  archivotIVA.click();
});

archivotIVA.addEventListener("change", function() {
  if (archivotIVA.value) {
    textotIVA.innerHTML = archivotIVA.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoIva").innerHTML = "Documento ingresado";
    document.getElementById("textoIva").style.color = "#51DF3E";
    setTimeout(function(){tooltipIva()},900);
  } else {
    textotIVA.innerHTML = "No has ingresado tu tarjeta de IVA.";
  }
});

function tooltipIva(){
  $("#textoIva").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoIva").tooltip('show');
  setTimeout(function(){$("#textoIva").tooltip('hide')},2500);
}

const archivoluzAgua = document.getElementById("luzAgua-file");
const botonluzAgua = document.getElementById("luzAgua-button");
const textoluzAgua = document.getElementById("luzAgua-text");

botonluzAgua.addEventListener("click", function() {
  archivoluzAgua.click();
});

archivoluzAgua.addEventListener("change", function() {
  if (archivoluzAgua.value) {
    textoluzAgua.innerHTML = archivoluzAgua.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
    document.getElementById("textoRecibo").innerHTML = "Documento ingresado";
    document.getElementById("textoRecibo").style.color = "#51DF3E";
    setTimeout(function(){tooltipRecibo()},900);
  } else {
    textoluzAgua.innerHTML = "No has ingresado tu recibo de agua y luz.";
  }
});

function tooltipRecibo(){
  $("#textoRecibo").attr('title','Si deseas cambiar el archivo, vuelve a dar click');
  $("#textoRecibo").tooltip('show');
  setTimeout(function(){$("#textoRecibo").tooltip('hide')},2500);
}

/*
  //////////////////////////////////////////////////////////////////////////////////////////////////
*/
/*
  PRIMER PASO
*/
document.getElementById("nombreCompleto").addEventListener("keypress", soloLetras, false);
document.getElementById("telefono").addEventListener("keypress", soloTelefono, false);
document.getElementById("numeroDui").addEventListener("keypress", soloDui, false);
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