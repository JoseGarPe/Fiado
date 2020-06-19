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
  } else {
    textoDui.innerHTML = "No has ingresado tu Dui.";
  }
});

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
  } else {
    textoNit.innerHTML = "No has ingresado tu Nit.";
  }
});

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
  } else {
    textotIVA.innerHTML = "No has ingresado tu tarjeta de IVA.";
  }
});

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
  } else {
    textoluzAgua.innerHTML = "No has ingresado tu recibo de agua y luz.";
  }
});