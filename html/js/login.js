//document.getElementById('enviar').addEventListener('click', enviarDatos);
if (window.addEventListener)
window.addEventListener("load", peticionToken, false);
else if (window.attachEvent)
window.attachEvent("onload", peticionToken);
else window.onload = peticionToken;

//document.getElementById('enviar22').addEventListener('click', datosBase);
document.getElementById('enviar22').addEventListener('click', enviarDatos);
/*
	ESTA FUNCION SE HA HECHO CON AJAX
*/

function enviarDatos(){
  /*
    SE SETEAN LOS DATOS DEL FORMULARIO EN VARIABLES PARA EL USO DE ESTAS MÁS ADELANTE
  */
  var exampleInputEmail1 = document.getElementById('exampleInputEmail1').value;
	var pass = document.getElementById('pass').value;
//	var comentario = document.getElementById('comentario').value;
//	var comprobante = document.getElementById('comprobante').value;
  /*
    SE MANDA A LLAMAR LA FUNCION DE VERIFICAR DATOS Y SE GUARDA EN UNA VARIABLE
    YA QUE ESTA RETORNA UN ARREGLO, EL CUAL RECORREREMOS PARA TENER UN CONTROL DE
    LOS ERRORES QUE SE GENERE
  */
  var retorno = verificarDatos(exampleInputEmail1,pass);
  /*
    SE CREA ESTA VARIABLE PARA VERIFICAR SI HUBO O NO UN ERROR
  */
  var verificacionErrores = 0;
  /*
    SE QUITA EL ESTILO DEL BORDE DE CADA INPUT POR SI HA PRESIONADO
    EL BOTON MÁS DE UNA VEZ Y HOY SI HA INGRESADO BIEN LOS DATOS
  */
  document.getElementById("exampleInputEmail1").style.border="";
  //document.getElementById("comentario").style.border="";
 // document.getElementById("divComprobante").style.border="";
  /*
    SE RECORRE EL ARREGLO CON LOS ERRORES PARA IDENTIFICARSELOS AL USUARIO
    EN QUE DATOS SE HA EQUIVOCADO O NO INGRESADO
  */
  for (var i = 0; i < retorno.length; i++) {
    verificacionErrores++;
    /*
      SE VERIFICA CADA UNO, PARA MOSTRAR UN TOOLTIP CON EL ERROR CASO CONTRARIO PASA DE LARGO
    */
    if(retorno[i] == 1){
      $("#exampleInputEmail1").attr('title','INGRESA UN CORREO ELECTRONICO VALIDO');
      $("#exampleInputEmail1").tooltip('show');
      document.getElementById("exampleInputEmail1").style.border="1px solid #f00";
    }
    if(retorno[i] == 2){
      
    }
  /*  if(retorno[i] == 3){
      $("#comentario").attr('title','INGRESA UN COMENTARIO VÁLIDO');
      $("#comentario").tooltip('show');
      document.getElementById("comentario").style.border="1px solid #f00";
    } 
    if(retorno[i] == 4){
      $("#divComprobante").attr('title','INGRESA EL COMPROBANTE CON FORMATO .JPG/.PNG/.PDF');
      $("#divComprobante").tooltip('show');
      document.getElementById("divComprobante").style.border="1px solid #f00";
    }*/
  }
  /*
    SI NO HA RESULTADO NINGUN ERROR, AQUI MANDAMOS A LLAMAR LA FUNCIÓN DE PETICIÓN DEL TOKEN
    PARA LUEGO MANDAR LOS DATOS AL END POINT
  */
  if (verificacionErrores == 0) {
    datosBase(exampleInputEmail1,pass);
  }
}
/*
  ESTO SIRVE PARA QUE APAREZCA EL NOMBRE DEL ARCHIVO EN EL INPUT
  YA QUE POR BUGS SI GUARDA EL ARCHIVO ESCOGIDO PERO NO LE MUESTRA
  EL NOMBRE AL USUARIO EN LA PARTE DE LA VISTA
*/
$('.custom-file-input').on('change', function(event) {
  var inputFile = event.currentTarget;
  $(inputFile).parent()
  .find('.custom-file-label')
  .html(inputFile.files[0].name);
});

/*
  AQUI MANDO A PEDIR EL TOKEN PARA MANDAR LOS DATOS AL END POINT
*/
function peticionToken(monto,transaccion,comentario,comprobante){
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(){
  	if (this.readyState == 4 && this.status == 200) {
      /*
        UNA VEZ VERIFICADA QUE NUESTRA PETICIÓN HAYA RESULTADO EXITOSA
        MANDAMOS LOS DATOS AL END POINT PARA GUARDARLOS EN LA BASE DE DATOS
      */
     	var array = JSON.parse(this.responseText);
      token = 'Bearer '+array.token;
      document.getElementById("TOKEN").value = token;
   	}
  };
  /*
    DEFINIMOS EL TIPO DE METODO Y LA URL DEL END POINT ESPECIFICO
    LUEGO MANDAMOS LOS HEADERS NECESARIOS PARA NUESTRA API
    Y POR ULTIMO EN LA FUNCION SEND, MANDAMOS LOS DATOS NECESARIOS PARA QUE NOS RETORNE EL TOKE
    EN ESTE CASO EL CLIENTE Y EL ID
  */
  xhr.open("POST", "http://www.chiltex.net/Api-fia2-dev/public/api/jwt/token", true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("client_secret=4ba4e43af92ba04145ed3b987b3d238ec2fe3d39a4d1a5a29e85c89113aed745&id_secret=725e5a219d91686cee29d5734d835d8b35745e880f718fbeda30064a66d1a9aa");
}

/*
  VALIDO TODOS LOS DATOS PARA QUE EN UN PRIMER LUGAR VAYA TODO CORRECTO
*/

function verificarDatos(exampleInputEmail1, pass){
  var expresionMonto = /^[a-zA-Z0-9ñÑáÁéÉíÍóÓúÚ\s#\-_*.]{5,25}@(yahoo|hotmail|gmail|outlook|icloud)\.com$/;
  //var expresionTransaccion = "^[a-zA-Z0-9ñÑáÁéÉíÍóÓúÚ\s\.\$]{1,200}$";
  var expresionComentario = /^[a-zA-Z0-9ñÑáÁéÉíÍóÓúÚ\s\.\$]{1,1200}$/;
  var posicion = 0;
  var errores = new Array();
  if(!expresionMonto.test(exampleInputEmail1)){
    errores[posicion] = 1;
    posicion++;
  }
  if (!expresionComentario.test(pass)) {
    errores[posicion] = 2;
    posicion++;
  }
  return errores;
}

/*
  VALIDO LA EXTENSION DEL ARCHIVO DEL COMPROBANTE
*/

function comprueba_extension(archivo) {
  //DEFINO LOS ARCHIVOS PERMITIDOS, EN ESTE CASO UNA IMAGEN O UN PDF
  extensiones_permitidas = new Array(".jpg", ".pdf", ".png");
  mierror = "";
  //SE RECUPERA LA EXTENSION DEL ARCHIVO PARA PODERLO COMPARAR MAS ADELANTE
  extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
  //SE COMPRUEBA QUE LA EXTENSION DE MI ARCHIVO SEA SIMILAR A LOS QUE DEFINIMOS
  permitida = false;
  for (var i = 0; i < extensiones_permitidas.length; i++) {
    if (extensiones_permitidas[i] == extension) {
      //EN CASO QUE EL ARCHIVO TUVIERA UNA EXTENSION VALIDA SE ROMPRE EL CICLO
      //Y DEVUELVE EL VALOR TRUE PARA PODER ENTRAR EL ELSE DEL IF DE ABAJO
      permitida = true;
      break;
    }
  }
  if (!permitida) {
    //AQUI ENTRA SI EL ARCHIVO NO ES JPG O PDF
    //HUBO UN ERROR
    return false;
  }else{
    //AQUI ENTRA SI EL ARCHIVO ES ES JPG O PDF
    //TODO CORRECTO
    return true;
  }
}

/*
  NUESTRA FUNCION AJAX QUE NOS SERVIRA PARA ENVIAR YA LOS DATOS FINALES A NUESTRO END POINT
  RECIBIRÁ 5 VALORES, EL MONTO, EL ID DE TRANSACCION, EL COMENTARIO, EL COMPROBANTE Y NUESTRO
  TOKEN
*/
function datosBase(exampleInputEmail1,pass) {
  /*
  var monto = document.getElementById('monto').value;
  var transaccion = document.getElementById('idTransaccion').value;
  var comentario = document.getElementById('comentario').value;
  var comprobante = document.getElementById('comprobante').value;
  var token = document.getElementById('TOKEN').value;
  */
 var token = document.getElementById('TOKEN').value;
 /*var id_usuario = document.getElementById('id_usuario').value;
 var nombre_usuario = document.getElementById('nombre_usuario').value;
*/
  console.log('correo : ' + exampleInputEmail1);
  console.log('password : ' + pass);
  console.log('token : ' + token);

  /*var formData = new FormData();
  var files = $('#comprobante')[0].files[0];

  formData.append('monto', monto);
  formData.append('id_transaccion', transaccion);
  formData.append('comentario', comentario);
  formData.append('comprobante','HOLIWIS');*/
  var objetos = {
    "email" : exampleInputEmail1,
    "password" : pass,
  }
  var parametros = JSON.stringify(objetos);

  $.ajax({
    url: 'http://www.chiltex.net/Api-fia2-dev/public/api/login',
    type: 'post',
    headers: {
      'Accept':'application/json',
      'Content-Type':'application/json',
      'Authorization' : token
    },
    data : parametros,
    contentType: "application/json",
    dataType: "json",
    cache: false,
    processData: false,
    success: function(response) {
      console.log(response);
      if(response.error=="false"){
          console.log(response.user_data.jwt);
        enviarToken(exampleInputEmail1,response.user_data.jwt);
      }
    }
  });
     var contenido = document.querySelector('#contenido')
  /*fetch('http://www.chiltex.net/Api-fia2-dev/public/api/producer/comprobante', {
    method: 'GET',        
    headers: {                             
      'Accept':'application/json',
      'Content-Type':'application/json',
      'Authorization' : token
    }
    }).then(response => response.json()).then(json => console.log(json));*/
  }

  function enviarToken(email,token){
    $.ajax({  
      url:"../html/class/controllers/tokenController.php",  
      method:"POST",
      data:{email:email,token:token},  
      success:function(data){    
             //   setTimeout(location.reload(), 5000);
            // location.reload();
            console.log('FUNCIONO PTM');
            location.href="../html/informacionInvestigacion.html";
      },
      error:function(){
            console.log('NO FUNCIONA');
      } 
 });  
  }