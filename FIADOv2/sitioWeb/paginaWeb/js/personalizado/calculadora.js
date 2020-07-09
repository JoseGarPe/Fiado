// Decimal round
if (!Math.round10) {
    Math.round10 = function(value, exp) {
    	return decimalAdjust('round', value, exp);
    };
}

function decimalAdjust(type, value, exp) {
    // Si el exp no está definido o es cero...
    if (typeof exp === 'undefined' || +exp === 0) {
      return Math[type](value);
    }
    value = +value;
    exp = +exp;
    // Si el valor no es un número o el exp no es un entero...
    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
      return NaN;
    }
    // Shift
    value = value.toString().split('e');
    value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
    // Shift back
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
}

var rangoDinero = document.getElementById("rangoDinero");
var dinero = document.getElementById("dinero");
var iva = document.getElementById("iva");
var iva_calculo = 0;
var rangoValue;
dinero.innerHTML = rangoDinero.value;
iva.innerHTML = Math.round10(rangoDinero.value * 0.13, -2);
iva_calculo = Math.round10(rangoDinero.value * 0.13, -2);

rangoDinero.oninput = function() {
	dinero.innerHTML = this.value;
	iva.innerHTML = Math.round10(this.value * 0.13, -2);
	iva_calculo=Math.round10(this.value * 0.13, -2);
	rangoValue=this.value;
}

var rangoTiempo = document.getElementById("rangoTiempo");
var tiempo = document.getElementById("tiempo");
var cuota = document.getElementById("cuota");
var numerador = 0;
var denominador = 0;
var indice = 0;
tiempo.innerHTML = rangoTiempo.value;
indice = Math.pow(1+0.0416,-(rangoTiempo.value));
numerador= (0.0416)*(parseInt(rangoDinero.value)+parseFloat(iva_calculo));
denominador = (1-parseFloat(indice));
cuota.innerHTML = Math.round10((numerador/denominador),-2);
rangoTiempo.oninput = function() {
	tiempo.innerHTML = this.value;
	indice = Math.pow(1+0.0416,-(this.value));
	numerador = (0.0416)*(parseInt(rangoValue)+parseFloat(iva_calculo));
	denominador = (1-parseFloat(indice));
	cuota.innerHTML = Math.round10((numerador/denominador),-2);
}