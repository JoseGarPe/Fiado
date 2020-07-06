<?php 
$id_usuario=$_POST['id_usuario'];
$nombre_usuario=$_POST['nombre_usuario'];
$monto_usuario=$_POST['monto'];
$id_transaccion_usuario=$_POST['id_transaccion'];
$comentario_usuario=$_POST['comentario'];


//Recipiente
//$to = 'josue.garpe96@gmail.com';
$to = 'josue.garpe96@gmail.com,jhosuegarciastarkand@gmail.com';

//remitente del correo
$from = 'jhosuegarciastarkand@gmail.com';
$fromName = 'PM CHiltex';

//Asunto del email
$subject = 'Correo electrónico PHP con datos adjuntos de BaulPHP'; 

//Ruta del archivo adjunto
$file = "../Documentos/usuario".$id_usuario."/comprobante.jpg";

//Contenido del Email
$htmlContent = '<h2><strong>Correo electrónico generado desde Fiado-Productores, </strong></h2>
    <p>El siguiente usuario informa, que realizo un movimiento el dia '.date(DATE_RFC2822).'.</p>
    <table>
    <tr><td>Id de Usuario</td><td>'.$id_usuario.'</td></tr>
    <tr><td>Nombre Usuario</td><td>'.$nombre_usuario.'</td></tr>
    <tr><td>Id de transaccion</td><td>'.$id_transaccion_usuario.'</td></tr>
    <tr><td>Monto de transaccion</td><td>'.$monto_usuario.'</td></tr>
    <tr><td>Comentario de transaccion</td><td>'.$comentario_usuario.'</td></tr>
    </table>
    <p> Se anexa Comprobante ,en este correo</p>
    <small>* Por favor no responder a este correo, caso necesario de mayor informacion envie un correo a:________ o llame a nuestro call center________</small>
    ';

//Encabezado para información del remitente
$headers = "From: $fromName"." <".$from.">";

//Limite Email
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//Encabezados para archivo adjunto 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//límite multiparte
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparación de archivo
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($file)."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//Enviar EMail
$mail = @mail($to, $subject, $message, $headers, $returnpath); 

//Estado de envío de correo electrónico
//$mail?header();header('Location: ../comprobante.php?envio=correcto'):header('Location: ../comprobante.php?envio=incorrecto');
if ($mail==true) {
	header('Location: ../../comprobante.php?envio=correcto');
}else{
	header('Location: ../../comprobante.php?envio=incorrecto?'.basename($file).'');
}


 ?>