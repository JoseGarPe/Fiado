<div class="container" style="margin-top: 130px;">
	<form method="post" autocomplete="off" class="formulario">
		<div class="text-center">
			<img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/logos/LogosFiadoFianales-02.png" id="logo">
		</div>
  		<div class="form-group">
    		<label for="correoLogin">Correo Electrónico</label>
    		<input type="email" class="form-control" id="correoLogin" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
  		</div>
  		<div class="form-group">
    		<label for="contraseñaLogin">Contraseña</label>
    		<input type="password" class="form-control" id="contraseñaLogin" placeholder="Ingresa tu contraseña">
  		</div>
  		<div class="text-center">
  			<button type="submit" class="btn btn-special">INICIAR SESIÓN</button>
  		</div>
  		<div class="text-center registrarse">
			<a href="<?php echo SERVERURL?>problemasIngresar/">¿Problemas para ingresar?</a>
			<p>¿No tienes cuenta? <a href="<?php echo SERVERURL?>registrarse/">Registrate</a></p>
		</div>
	</form>
</div>