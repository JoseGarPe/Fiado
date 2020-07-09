<div class="container" id="primeraParte">
	<div class="row left-center">
		<div class="col-md-12">
			<h2 class="naranja">¿Necesitas pisto?</h2>
		</div>
	</div>
	<!-- EMPIEZA LA IMAGEN DE LA IZQUIERDA Y TEXTO -->
	<div class="row">
		<div class="col-md-4" id="imagenIzquierda">
			<div class="box-iconsss">
				<center><img class="img-responsive box-iconss-min" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/quieresInvertir.png" style="width: 180px; height: 180px;"></center>
				<br>
			</div>
		</div>
		<div class="col-md-8" id="textoDerecha">
			<h4 align="justify">
				¡Con Fiado solicitarlo es fácil!
			</h4>
			<h4 align="justify">
				Bajá la aplicación, crea tu cuenta y llená el
				formulario. Una vez tu préstamos ha sido
				aprobado y fondeado, podrás retirar tu dinero en
				minutos en más de 120 puntos afiliados.
			</h4>
			<h4 align="justify">
				¡Vos decidís lo que necesitas! Al llenar el
				formulario recordá que tu seleccionas: cuánto
				necesitas, cuánto podes pagar mensual y la
				cantidad de meses en que necesitar prestar.
			</h4>
			<h4 align="justify">
				Manten tu récord y seguí nuestros tips para
				mejorar tu puntuación.
			</h4>
		</div>
	</div>
	<!-- TERMINA LA IMAGEN DE LA IZQUIERDA Y TEXTO -->
	<!-- ////////////////////////////////// -->
	<!-- EMPIEZA IMAGEN CENTRADO DE 500X300 -->
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<img id="imagen500x300" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/dimensiones/500x300.png">
		</div>
	</div>
	<!-- TERMINA IMAGEN CENTRADO DE 500X300 -->
	<!-- ////////////////////////////////// -->
	<br>
	<div class="col-md-12" id="NecesitasPisto">
		<div class="text-center">
			<h1 class="naranja">Así, de facil, así de rápido</h1>
		</div>
	</div>
</div>
<!-- -->
<!-- AQUI EMPIEZA EL CONTENEDOR DE LA CALCULADORA -->
<div class="container">
	<div class="col-lg-12 contenedor_chill">				
        <ul class="nav nav-tabs" role="tablist" id="menuNecesitasPisto">
			<li class="nav-item" id="navCalculadora">
			    <a class="nav-link active" href="#buzz" role="tab" data-toggle="tab">
			    	<img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/calculadora.png" >
            		<span>Calculadora de crédito</span>
            	</a>
			</li>
			<li class="nav-item" id="navPuntuacion">
			    <a class="nav-link" href="#references" role="tab" data-toggle="tab">
			    	<img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/Iconos-12.png">
            		<span>¿Cómo mejoro mi puntuación?</span>
            	</a>
			 </li>
		</ul>
		<div class="tab-content">
		  	<div role="tabpanel" class="tab-pane fade show active " id="buzz">
		  		<div id="contenedorCalculadora" class="row">
		  			<div id="calculadoraResponsive">
						<label for="rangoDinero">¿Cuanto dinero quierés prestar?</label>
						<input type="range" min="1" max="10000" value="5000" class="slider" id="rangoDinero">
							<br>
							<label for="rangoTiempo">¿A cuánto tiempo quieres prestrarlo?</label>
						<input type="range" min="1" max="24" value="12" class="slider" id="rangoTiempo">
						<div class="row" style="padding-top: 10px;">
							<div class="col-sm-3 gestionCalculadora">
								<h6>DINERO</h6><h4>$<span id="dinero" style=" font-family: Helvetica"></span></h4>
							</div>
							<div class="col-sm-3 gestionCalculadora">
								<h6>TIEMPO</h6><h4><span id="tiempo" style=" font-family: Helvetica;"></span></h4>
							</div>
							<div class="col-sm-3 gestionCalculadora">
								<h6>IVA</h6><h4><span id="iva" style=" font-family: Helvetica;"></span></h4>
							</div>
							<div class="col-sm-3 gestionCalculadora">
								<h6>Cuota Mensual</h6><h4>$<span id="cuota" style=" font-family: Helvetica;">70</span></h4>
							</div>
						</div>
					</div>
					<div id="textoCalculadora">
						<p align="justify">
							¡Vos decidis!
						</p>
						<p align="justify">
							Hace tus cálculos. Tu escoges el monto, el plazo y la cuota.
							Aprobación en menos de 5 minutos Tasas desde 4.16% mensual.
						</p> 
					</div>
		  		</div>
		  	</div>
		  	<div role="tabpanel" class="tab-pane fade" id="references">
		  		<div class="row">
		  			<div class="col-sm-12 col-md-6" id="mejoroPuntuacionImagen">
						<img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/dimensiones/500x300.png">
					</div><!-- /.col-md-6 -->
					<div class="col-sm-12 col-md-6 content-text" id="mejoroPuntuacion">
						<p align="justify">
							En Fiado podes mejorar tu puntuación para obtener mejores beneficios.
						</p>
						<p align="justify">
							¿Necesitas incrementar tu monto de préstamo ó la cantidad de meses de pago?
						</p>
						<p align="justify">
							Te compartimos unos tips:
						</p>
						<p align="justify">
							1-Entre más acceso de autorización nos brindes, más conoceremos tu Identidad
							digital. Revisá los permisos brindados y aprobá los que te hagan falta.<br>
							2-Una vez aprobado tu préstamo paga a tiempo tus cuotas.
						</p>
						<p align="justify">
							Para más información contáctanos en nuestras redes sociales. 
						</p>
					</div>
		  		</div>
		  	</div>
		</div>	
	</div>
</div>
<br>
<!-- AQUI TERMINA EL CONTENEDOR DE LA CALCULADORA -->
<!-- //////////////////////////////////// -->
<!-- EMPIEZA EL TEXTO DE : ESTO Y MÁS -->
<div class="container">
	<div class="col-md-12">
		<div class="text-center">
			<h1 class="naranja">esto y más</h1>
		</div>
	</div>
</div>
<!-- TERMINA EL TEXTO DE : ESTO Y MÁS -->
<!-- //////////////////////////////// -->
<!-- EMPIEZA LOS VALORES QUE APARECERAN EN LA PANTALLA DE PC -->
<div class="container" id="iconosEstoMas" style="width: 100%;">
	<div class="row">
		<div id="tira" style="width: 100%;">
    		<div class="box-iconss">
				<center><img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/aprobacionInmediata.png" style="border-radius: 10px;"></center>
				<h5>
					Aprobación Inmediata
				</h5>
			</div>
			<div class="box-iconss">
				<center><img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/pagosFlexibles.png" style="border-radius: 10px;" ></center>
				<h5>
					Pagos Flexibles
				</h5>
			</div>
			<div class="box-iconss">
				<center><img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/desembolsoMinutos.png" style="border-radius: 10px;"></center>
				<h5>
					Desembolso en minutos
				</h5>
			</div>
			<div class="box-iconss">
				<center><img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/dondeSea.png" style="border-radius: 10px;"></center>
				<h5>
					Donde sea que estés
				</h5>
			</div>
			<div class="box-iconss">
				<center><img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/tasasJustas.png" style="border-radius: 10px;"></center>
				<h5>
					Tasas Justas
				</h5>
			</div>
			<div class="box-iconss">
				<center><img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/procesoDigital.png" style="border-radius: 10px;"></center>
				<h5>
					Proceso Digital
				</h5>
			</div>
			<div class="box-iconss">
				<center><img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/miMedida.png" style="border-radius: 10px;"></center>
				<h5>
					A mi medida
				</h5>
			</div>
		</div>
	</div>
</div>
<!-- TERMINA LOS VALORES QUE APARECERAN EN LA PANTALLA DE PC -->
<!-- //////////////////////////////// -->
<!-- AQUI EMPIEZA EL SLIDER QUE APARECERA EN LAS VISTAS DE MOVIL -->
<div class="container" id="caruselEstoMas">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
		</ol>
		<div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/Iconos-11-m.png" class="d-block w-100" alt="...">
		      <div class="carousel-caption">
		        <p>Crea tu cuenta, llená el formulario y retirá tu dinero en minutos</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/Iconos-17-m.png" class="d-block w-100" alt="...">
		      <div class="carousel-caption">
		        <p>Cuotas accesibles para préstamos a tu medida</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/Iconos-39-m.png" class="d-block w-100" alt="...">
		      <div class="carousel-caption">
		        <p>Retirá tu dinero en más de 120 puntos autorizados</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/Iconos-24-m.png" class="d-block w-100" alt="...">
		      <div class="carousel-caption">
		        <p>Fiado pone el pisto en tu mano</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/Iconos-12-m.png" class="d-block w-100" alt="...">
		      <div class="carousel-caption">
		        <p>Mejorá tu puntuación y obtené mejores beneficios</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/Iconos-23-m.png" class="d-block w-100" alt="...">
		      <div class="carousel-caption">
		        <p>Todo en la palma de tu mano Decile adiós a trámites y papeleos burocráticos</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/iconos/Iconos-18-m.png" class="d-block w-100" alt="...">
		      <div class="carousel-caption">
		        <p>El monto que necesitás con cuotas accesibles en tiempo récord</p>
		      </div>
		    </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!-- AQUI TERMINA EL SLIDER QUE APARECERA EN LAS VISTAS DE MOVIL -->
<!-- /////////////////////////////////////////////////////////// -->
<!-- AQUI EMPIEZA EL TEXTO DE LLEGO LA APP.... -->
<div class="container text-center" style="margin-top: 50px;">
	<div class="row">
        <div class="col-sm-12 text-center">
        	<h2 class="naranja">Llego la APP que pone pisto en tus manos</h1>
        </div>
        <div class="col-sm-12 text-center">
        	<h3>hoy si, y mañana tambien</h2>
        </div>
        <div class="col-sm-12 text-center">
        	<img class="googlePlay" src="<?php echo SERVERURL?>sitioWeb/paginaWeb/img/google_play.png">
        </div>
  	</div>
</div>
<!-- AQUI TERMINA EL TEXTO DE LLEGO LA APP.... -->