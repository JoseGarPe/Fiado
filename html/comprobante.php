<!DOCTYPE html>
<html>
<head>
	<title>Prueba envio de correo</title>
</head>
<body>
	<?php
	if (isset($_GET['envio'])) {
		if ($_GET['envio']=='correcto') {
			echo "<h1> Correo enviado con exito</h1>";
		}else{
			
			echo "<h1> Correo NO enviado</h1>";
		
		}
	}
	?>
<form action="class/controllers/comprobante_mailController.php" method="POST">
	<input type="text" name="id_transaccion">
	<input type="text" name="monto">
	<input type="text" name="comentario">
	<input type="hidden" name="id_usuario" value="1">
	<input type="hidden" name="nombre" value="Josue Garcia">
	<input type="submit" name="enviar">
</form>
</body>
</html>