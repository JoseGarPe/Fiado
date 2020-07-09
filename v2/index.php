<?php include "sitioWeb/php/config.php"; ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/logos/LogosFiadoFianales-06.png"/>
		<title>Fiado</title>
		<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL?>sitioWeb/paginaWeb/css/basico/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL?>sitioWeb/paginaWeb/css/basico/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL?>sitioWeb/paginaWeb/css/basico/tipografia.css">
		<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL?>sitioWeb/paginaWeb/css/basico/menu.css">
		<link rel="stylesheet" href="<?php echo SERVERURL?>sitioWeb/paginaWeb/css/basico/all.min.css">
		<?php
			if (isset($_GET['vista'])) {
				$vistas = explode("/", $_GET['vista']);
				if (is_file('sitioWeb/paginaWeb/css/personalizado/'.$vistas[0].'.css')) {
					print("
						<link rel='stylesheet' type='text/css' href='"); echo SERVERURL; print("sitioWeb/paginaWeb/css/personalizado/".$vistas[0].".css'>
					");
					if ($vistas[0] == 'personaNormal' || $vistas[0] == 'personaJuridica') {
						print("
							<script src='");echo SERVERURL; print("sitioWeb/paginaWeb/js/basico/font_Awesome.js'></script>
						");
					}
				}else{
					print("
						<link rel='stylesheet' type='text/css' href='"); echo SERVERURL; print("sitioWeb/paginaWeb/css/personalizado/index.css'>
					");
				}
			}else{
				print("
					<link rel='stylesheet' type='text/css' href='"); echo SERVERURL; print("sitioWeb/paginaWeb/css/personalizado/index.css'>
				");
			}
		?>
	</head>
	<body>
		<div id="contentMenu">
			<!-- AQUI EMPIEZA EL MENÚ-->
			<header>
				<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="<?php echo SERVERURL?>">
					    <img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/logos/logo_modi.png" width="120" height="50" class="d-inline-block align-top" id="logoNavbar">
					</a>
					 <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation" id="abrirMenu">
						<span class="navbar-toggler-icon"></span>
					</button>
				  	<div class="collapse navbar-collapse" style="margin-top: 0.9%;">
				    	<ul class="navbar-nav mr-auto">
				    		<?php
								if (isset($_GET['vista'])) {
									$activo = explode("/", $_GET['vista']);
								}else{
									$activo[0] = 'index';
								}
							?>
				      		<li class="nav-item">
				      			<?php if($activo[0] == 'index'): ?>
				        			<a class="nav-link active" href="<?php echo SERVERURL?>">Home</a>
				        		<?php else: ?>
				        			<a class="nav-link" href="<?php echo SERVERURL?>">Home</a>
				        		<?php endif ?>
				      		</li>
				      		<li class="nav-item">
				        		<p class="nav-link">|</p>
				      		</li>
				      		<li class="nav-item">
				      			<?php if($activo[0] == 'necesitasPisto'): ?>
				        			<a class="nav-link active" href="<?php echo SERVERURL?>necesitasPisto/">Necesitas Pisto</a>
				        		<?php else: ?>
				        			<a class="nav-link" href="<?php echo SERVERURL?>necesitasPisto/">Necesitas Pisto</a>
				        		<?php endif ?>
				      		</li>
				      		<li class="nav-item">
				        		<p class="nav-link">|</p>
				      		</li>
				      		<li>
				      			<?php if($activo[0] == 'quieresInvertir'): ?>
				        			<a class="nav-link active" href="<?php echo SERVERURL?>quieresInvertir/">Quiéres invertir</a>
				        		<?php else: ?>
				        			<a class="nav-link" href="<?php echo SERVERURL?>quieresInvertir/">Quiéres invertir</a>
				        		<?php endif ?>
				      		</li>
				      		<li class="nav-item">
				        		<p class="nav-link">|</p>
				      		</li>
				      		<li>
				      			<?php if($activo[0] == 'quienesSomos'): ?>
				        			<a class="nav-link active" href="<?php echo SERVERURL?>quienesSomos/">¿ Quienes somos ?</a>
				        		<?php else: ?>
				        			<a class="nav-link" href="<?php echo SERVERURL?>quienesSomos/">¿ Quienes somos ?</a>
				        		<?php endif ?>
				      		</li>
				      		<li class="nav-item">
				        		<p class="nav-link">|</p>
				      		</li>
				      		<li>
				      			<?php if($activo[0] == 'preguntasFrecuentes'): ?>
				        			<a class="nav-link active" href="<?php echo SERVERURL?>preguntasFrecuentes/">Preguntas Frecuentes</a>
				        		<?php else: ?>
				        			<a class="nav-link" href="<?php echo SERVERURL?>preguntasFrecuentes/">Preguntas Frecuentes</a>
				        		<?php endif ?>
				      		</li>
				      		<li class="nav-item">
				        		<p class="nav-link">|</p>
				      		</li>
				      		<li>
				      			<?php if($activo[0] == 'contactanos'): ?>
				        			<a class="nav-link active" href="<?php echo SERVERURL?>contactanos/">Contáctanos</a>
				        		<?php else: ?>
				        			<a class="nav-link" href="<?php echo SERVERURL?>contactanos/">Contáctanos</a>
				        		<?php endif ?>
				      		</li>
				      		<li class="nav-item">
				        		<p class="nav-link">|</p>
				      		</li>
				      		<li>
				      			<?php
				      				if (isset($_SESSION['idUsuario'])) {
				      					print("
				      						<a class='nav-link active' href='"); echo SERVERURL;print("iniciarSesion/'>HOLIWIS</a>
				      					");
				      				}else{
				      					if ($activo[0] == 'iniciarSesion') {
				      						print("
					      						<a class='nav-link active' href='"); echo SERVERURL;print("iniciarSesion/'>Iniciar sesión</a>
					      					");
				      					}else{
				      						print("
					      						<a class='nav-link' href='"); echo SERVERURL;print("iniciarSesion/'>Iniciar sesión</a>
					      					");
				      					}
				      				}
				      			?>
				      		</li>
				    	</ul>
				  	</div>
				  	<!-- AQUI EMPIEZA EL MENU LATERAL -->
				  	<div id='contenedorMenu' class='nav2' style="display: none;">
					    <a class='close' id="cerrarMenu">
					        <i class='fas fa-times'></i>
					    </a>
					    <img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/logos/logo_modi.png" id="imagenMenu">
						<div class='menu'>
							<ul>
								<li><a href="<?php echo SERVERURL?>">HOME</a></li>
								<li><a href="<?php echo SERVERURL?>necesitasPisto/">NECESITAS PISTO</a></li>
								<li><a href="<?php echo SERVERURL?>quieresInvertir/">QUIERES INVERTIR</a></li>
								<li><a href="<?php echo SERVERURL?>quienesSomos/">QUIENES SOMOS</a></li>
								<li><a href="<?php echo SERVERURL?>preguntasFrecuentes/">PREGUNTAS FRECUENTES</a></li>
								<li><a href="<?php echo SERVERURL?>contactanos/">CONTÁCTANOS</a></li>
								<li><a href="<?php echo SERVERURL?>iniciarSesion/">INICIAR SESIÓN</a></li>
							</ul>
						</div>
					</div>
					<!-- AQUI TERMINA EL MENU LATERAL -->
				</nav>
			</header>
			<!-- AQUI TERMINA EL MENÚ-->
			<?php
				if (isset($_GET['vista'])) {
					$vistas = explode("/", $_GET['vista']);
					if (is_file('sitioWeb/views/'.$vistas[0].'.php')) {
						include 'sitioWeb/views/'.$vistas[0].'.php';
					}else{
						include 'sitioWeb/views/home.php';
					}
				}else{
					include 'sitioWeb/views/home.php';
				}
			?>
			<footer style="width: 100%; margin-top: 50px;">
				<div class="container">
					<div class="row">
						<div class="informacionFooter">
							<h3 style="color: #FFFFFF;">¿ Qué es Fiado ?</h3>
							<p>¿Cómo funciona?</p>
							<p>Preguntas precuentes</p>
							<p>Contáctanos</p>
						</div>
						<div class="informacionFooter">
							<h3 style="color: #FFFFFF;">Necesito un credito</h3>
							<p>¿Cómo funciona?</p>
							<p>Requisitos</p>
							<p>Calculadora de crédito</p>
							<p>Depósitos y pagos</p>
						</div>
						<div class="informacionFooter">
							<h3 style="color: #FFFFFF;">Quiero prestar</h3>
		        			<p>¿Cómo funciona?</p>
							<p>Simulador de préstamo</p>
							<p>Inversión y ganancias</p>
						</div>
						<div class="informacionFooter">
							<img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/logos/footer_logo.png" height="50" width="auto" style="margin-bottom: 20px;">
							<p style="margin-top: 5px;">Aviso de privacidad</p>
							<p>Términos y condiciones</p>
							<div class="row">
								<div class="col-3">
									<a href="#"><i class="fab fa-facebook-f" style="color: #FFFFFF; font-size: 25px;"></i></a>
								</div>
								<div class="col-3">
									<a href="#"><i class="fab fa-twitter" style="color: #FFFFFF; font-size: 25px;"></i></a>
								</div>
								<div class="col-3">
									<a href="#"><i class="fab fa-instagram" style="color: #FFFFFF; font-size: 25px;"></i></a>
								</div>
								<div class="col-3">
									<a href="#"><i class="fab fa-tumblr" style="color: #FFFFFF; font-size: 25px;"></i></a>
								</div>
							</div>
						</div>
						<div class="col-12 text-center">
							<h3 align="center" style="color: #FFFFFF; font-size: 20px; margin: 10px;">
								Todos los derechos reservados, Fiado 2020
							</h3>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/basico/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/basico/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/basico/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/basico/all.js"></script>
		<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/basico/menu.js"></script>
		<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/personalizado/comentarios.js"></script>
		<?php if ($activo[0] == 'necesitasPisto'): ?>
			<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/personalizado/calculadora.js"></script>
		<?php endif ?>
		<?php if ($activo[0] == 'quienesSomos'): ?>
			<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/basico/noframework.waypoints.min.js"></script>
			<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/basico/countUp.min.js"></script>
			<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/personalizado/contadores.js"></script>
		<?php endif ?>
		
		<?php if($activo[0] == 'necesitasPisto' || $activo[0] == 'quieresInvertir'): ?>
		    <script type="text/javascript">
				$('.carousel').carousel({
				  interval: 3000
				});
			</script>
		<?php else: ?>
		    <script type="text/javascript">
				$('.carousel').carousel({
				  interval: 5000
				});
			</script>
		<?php endif ?>
		<?php if ($activo[0] == 'personaNormal'): ?>
			<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/personalizado/personaNatural.js"></script>
			<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/personalizado/departamentosYMunicipio.js"></script>
		<?php endif ?>
		<?php if ($activo[0] == 'personaJuridica'): ?>
			<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/personalizado/personaJuridica.js"></script>
			<script type="text/javascript" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/js/personalizado/departamentosYMunicipio.js"></script>
		<?php endif ?>
	</body>
</html>