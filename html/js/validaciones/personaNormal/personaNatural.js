document.getElementById("FASE1").addEventListener("click", FASE1);
document.getElementById("FASE2").addEventListener("click", FASE2);
document.getElementById("FASE3").addEventListener("click", FASE3);
document.getElementById("FASE4").addEventListener("click", FASE4);

function FASE1() {
	document.getElementById("primeraFase").style.display="none";
    document.getElementById("segundaFase").style.display="block";
    $('html, body').animate({scrollTop:0}, 'slow');
	return false;
}

function FASE2() {
	document.getElementById("segundaFase").style.display="none";
    document.getElementById("terceraFase").style.display="block";
    $('html, body').animate({scrollTop:0}, 'slow');
	return false;
}

function FASE3() {
	document.getElementById("terceraFase").style.display="none";
    document.getElementById("cuartaFase").style.display="block";
    $('html, body').animate({scrollTop:0}, 'slow');
	return false;
}

function FASE4() {
	document.getElementById("cuartaFase").style.display="none";
    document.getElementById("quintaFase").style.display="block";
    $('html, body').animate({scrollTop:0}, 'slow');
	return false;
}