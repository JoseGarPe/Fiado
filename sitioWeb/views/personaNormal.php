<!-- AQUI EMPIEZA EL CONTENIDO PARA REALIZAR EL LOGIN -->
<div class="col-sm-12" style="margin-top: 10%;">
	<div class="container-fluid" id="grad1">
	    <div class="row justify-content-center mt-0">
	        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
	                <div class="row">
	                    <div class="col-md-12 mx-0">
	                        <form id="msform" autocomplete="off">
	                            <!-- progressbar -->
	                            <ul id="progressbar">
	                                <li class="active" id="PASO1"><strong>Paso 1</strong></li>
	                                <li id="PASO2"><strong>Paso 2</strong></li>
	                                <li id="PASO3"><strong>Paso 3</strong></li>
	                                <li id="PASO4"><strong>Paso 4</strong></li>
	                                <li id="PASO5"><strong>Final</strong></li>
	                            </ul>
	                            <!-- AQUI EMPIEZA LA PRIMERA PARTE, DATOS GENERALES -->
	                            <fieldset>
	                                <div class="form-card">
	                                	<h2 class="naranja">Perfil del Cliente - Personal Natural</h2>
	                                    <div class="form-group row">
										    <label for="nombreCompleto" class="col-sm-3 col-form-label">Nombre y Apellido</label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="correo" class="col-sm-3 col-form-label">Correo electrónico</label>
										    <div class="col-sm-9">
										    	<input type="email" class="form-control" id="correo" name="correo">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="telefono" class="col-sm-3 col-form-label">Teléfono</label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="telefono" name="telefono">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="domicilio" class="col-sm-3 col-form-label">Domicilio</label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="domicilio" name="domicilio">
										    </div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6" style="padding: 0;">
												<label for="departamento" class="col-sm-4 col-form-label" style=" float: left;">
													Departamento
												</label>
												<div class="col-sm-6" style=" float: left;">
											    	<select class="form-control departamento" id="departamento" name="departamento">
													</select>
											    </div>	
											</div>
											<div class="col-sm-6" style="padding: 0;">
												<label for="municipio" class="col-sm-4 col-form-label" style=" float: left;">
													Municipio
												</label>
												<div class="col-sm-8" style=" float: left;">
											    	<select class="form-control municipio" id="municipio" name="municipio">
														<option value="0">Selecciona departamento</option>
													</select>
											    </div>	
											</div>
										</div>
										<div class="form-group row">
										    <label for="fechaNacimiento" class="col-sm-4 col-form-label">
										    	Fecha Nacimiento
											</label>
										    <div class="col-sm-6">
										    	<input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="actividadEconomica" class="col-sm-4 col-form-label">
										    	Actividad economica
											</label>
										    <div class="col-sm-6">
										    	<select class="form-control" id="actividadEconomica" name="actividadEconomica">
													<option>Default select</option>
												</select>
										    </div>
										</div>
										<div class="form-group row">
											<div class="col-md-6" style="padding: 0;">
												<label for="numeroDui" class="col-sm-5 col-form-label" style=" float: left;">
													Número de DUI
												</label>
												<div class="col-sm-7" style=" float: left;">
											    	<input type="text" class="form-control" id="numeroDui" name="numeroDui">
											    </div>	
											</div>
											<div class="col-md-6" style="padding: 0;">
												<label for="numeroNit" class="col-sm-5 col-form-label" style=" float: left;">
													Número de NIT
												</label>
												<div class="col-sm-7" style=" float: left;">
											    	<input type="text" class="form-control" id="numeroNit" name="numeroNit">
											    </div>	
											</div>
										</div>
										<div class="form-group row">
										    <label for="provenienciaFondos" class="col-sm-4 col-form-label">
										    	Proveniencia de los fondos
											</label>
										    <div class="col-sm-6">
										    	<select class="form-control" id="provenienciaFondos" name="provenienciaFondos">
													<option>Default select</option>
												</select>
										    </div>
										</div>
	                                </div> 
	                                <input type="button" name="next" class="next action-button" value="Siguiente" />
	                            </fieldset>
	                            <!-- AQUI TERMINA LA PRIMERA PARTE, DATOS GENERALES -->
								<!-- ////////////////////////////////////////////// -->
								<!-- AQUI EMPIEZA LA SEGUNDA PARTE, DATOS DEL PEPS -->
	                            <fieldset>
	                                <div class="form-card">
	                                	<h3 class="naranja" align="center">Identificación de personas expuestas politicamente [PEPs]</h3>
	                                    <h4 class="naranja" align="left">
	                                    	Personal Natural
	                                    </h4>
										<div class="form-group row">
										    <label for="nombreCompleto" class="col-sm-7 col-form-label">
										    	Es Ud o está relacionado a una Persona Expuesta Públicamente [PEPs]
										    </label>
										    <div class="col-sm-5">
										    	<div class="col-sm-12">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	Soy PEP
													  	</label>
													</div>
										    	</div>
										    	<div class="col-sm-12">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	Estoy relacionado a un PEP
													  	</label>
													</div>
										    	</div>
										    </div>
										</div>
										<div class="form-group row">
										    <label for="informacionPEP" class="col-sm-8 col-form-label">
										    	Si Ud es PEP, ¿Cuál es la Institución y el cargo ocupado ?
										    </label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="informacionPEP" name="informacionPEP" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="informacionPEP" class="col-sm-12 col-form-label">
										    	Si Ud está relacionado a un PEP, completar la siguiente información de las Personas Expuestas Públicamente [PEPs]
										    </label>
										    <div class="col-sm-4">
										    	<input type="text" class="form-control" id="nombreRelacionPEP" name="nombreRelacionPEP" autocomplete="off" placeholder="Nombre:">
										    </div>
										    <div class="col-sm-4">
										    	<input type="text" class="form-control" id="cargoRelacionPEP" name="cargoRelacionPEP" autocomplete="off" placeholder="Institución y cargo ocupado">
										    </div>
										    <div class="col-sm-4">
										    	<input type="text" class="form-control" id="relacionPEP" name="relacionPEP" autocomplete="off" placeholder="Relación">
										    </div>
										</div>
	                                </div> 
	                                <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> 
	                                <input type="button" name="next" class="next action-button" value="Siguiente" />
	                            </fieldset>
	                            <!-- AQUI TERMINA LA SEGUNDA PARTE, DATOS DEL PEPS -->
								<!-- ////////////////////////////////////////////// -->
								<!-- AQUI EMPIEZA LA TERCERA PARTE, DATOS DEL FUNCIONARIO -->
	                            <fieldset>
	                                <div class="form-card">
	                                    <h3 style="font-size: 20px;" class="naranja" align="center">Regulación sujetos obligados según ley contra el lavado de dinero y operación</h3>
										<h5 align="center">[Responder únicamente si la persona natural ó empresa es sujeto obligado de acuerdo al Art 12 de la Ley contra el Lavado de Dinero y de Activos]</h5>
										<div class="form-group row">
										    <label for="nombreCompleto" class="col-sm-7 col-form-label">
										    	La empresa cuenta con un funcionario responsable de las medidas de prevención del Lavado de Dinero y Activos/ Financiación del Terrorismo ?
										    </label>
										    <div class="col-sm-5" style="margin-top: 1%;">
										    	<div class="col-sm-6" style="float: left;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	Sí
													  	</label>
													</div>
										    	</div>
										    	<div class="col-sm-6" style="float: left;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	No
													  	</label>
													</div>
										    	</div>
										    </div>
										</div>
										<div class="form-group row">
										    <label for="denominaciónSocial" class="col-sm-4 col-form-label">
										    	Tu nombre ó denominación social :
										    </label>
										    <div class="col-sm-8">
										    	<input type="text" class="form-control" id="denominaciónSocial" name="denominaciónSocial" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="correoFuncionario" class="col-sm-3 col-form-label">
										    	Correo electrónico:
										    </label>
										    <div class="col-sm-9">
										    	<input type="email" class="form-control" id="correoFuncionario" name="correoFuncionario" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="telefonoFuncionario" class="col-sm-2 col-form-label">
										    	Teléfono:
										    </label>
										    <div class="col-sm-10">
										    	<input type="text" class="form-control" id="telefonoFuncionario" name="telefonoFuncionario" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="domicilioFuncionario" class="col-sm-2 col-form-label">
										    	Domicilio:
										    </label>
										    <div class="col-sm-10">
										    	<input type="text" class="form-control" id="domicilioFuncionario" name="domicilioFuncionario" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="duiFuncionario" class="col-sm-2 col-form-label">
										    	Dui:
										    </label>
										    <div class="col-sm-4">
										    	<input type="text" class="form-control" id="duiFuncionario" name="duiFuncionario" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <h4 for="nombreCompleto" class="col-sm-8 col-form-label">
										    	¿Está acreditado ante la Unidad de Investigación Financiera? Si su respuesta es sí, no contestar las demás preguntas
										    </h4>
										    <div class="col-sm-4">
										    	<div class="col-sm-6" style="float: left; margin-top: 2%;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	<h4>Si</h4>
													  	</label>
													</div>
										    	</div>
										    	<div class="col-sm-6" style="float: left; margin-top: 2%;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	<h4>No</h4>
													  	</label>
													</div>
										    	</div>
										    </div>
										</div>
										<div class="form-group row">
										    <h4 for="nombreCompleto" class="col-sm-8 col-form-label">
										    	¿Cuenta con Manual de prevención del Lavado de Dinero y Financiamiento del Terrorismo?
										    </h4>
										    <div class="col-sm-4">
										    	<div class="col-sm-6" style="float: left; margin-top: 2%;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	<h4>Si</h4>
													  	</label>
													</div>
										    	</div>
										    	<div class="col-sm-6" style="float: left; margin-top: 2%;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	<h4>No</h4>
													  	</label>
													</div>
										    	</div>
										    </div>
										</div>
										<div class="form-group row">
										    <h4 for="nombreCompleto" class="col-sm-8 col-form-label">
										    	¿Cuenta con un Plan de Capacitación anual en materia de prevención del lavado de Dinero y Financiamiento del Terrorismo?
										    </h4>
										    <div class="col-sm-4">
										    	<div class="col-sm-6" style="float: left; margin-top: 2%;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	<h4>Si</h4>
													  	</label>
													</div>
										    	</div>
										    	<div class="col-sm-6" style="float: left; margin-top: 2%;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	<h4>No</h4>
													  	</label>
													</div>
										    	</div>
										    </div>
										</div>
										<div class="form-group row">
										    <h4 for="nombreCompleto" class="col-sm-8 col-form-label">
										    	¿Cuenta con un sistema de Monitoreo de operaciones y reportes a la Unidad de Investigación Financiera?
										    </h4>
										    <div class="col-sm-4">
										    	<div class="col-sm-6" style="float: left; margin-top: 2%;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	<h4>Si</h4>
													  	</label>
													</div>
										    	</div>
										    	<div class="col-sm-6" style="float: left; margin-top: 2%;">
										    		<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													  	<label class="form-check-label" for="defaultCheck1">
													    	<h4>No</h4>
													  	</label>
													</div>
										    	</div>
										    </div>
										</div>
	                                </div> 
	                                <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> 
	                                <input type="button" name="make_payment" class="next action-button" value="Siguiente" />
	                            </fieldset>
	                            <!-- AQUI TERMINA LA TERCERA PARTE, DATOS DEL FUNCIONARIO -->
								<!-- ////////////////////////////////////////////// -->
								<!-- AQUI EMPIEZA LA CUARTA PARTE, DATOS DE LA PERSONA BENEFICIARIA -->
	                            <fieldset>
	                                <div class="form-card">
	                                    <h2 class="naranja" align="center">
											Persona beneficiaria
										</h2>
										<h5 align="center">
											Datos para casos fortuidos el designado o beneficiario de la cuenta
										</h5>
										<h3 style="font-size: 22px;" class="naranja" align="left">
											Beneficiario 1:
										</h3>
										<div class="form-group row">
										    <label for="nombreBeneficiario1" class="col-sm-3 col-form-label">
										    	Nombre completo :
										    </label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="nombreBeneficiario1" name="nombreBeneficiario1" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="telefonoBeneficiario1" class="col-sm-1 col-form-label">
										    	Teléfono:
										    </label>
										    <div class="col-sm-10">
										    	<input type="text" class="form-control" id="telefonoBeneficiario1" name="telefonoBeneficiario1" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="domicilioBeneficiario1" class="col-sm-2 col-form-label">
										    	Domicilio:
										    </label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="domicilioBeneficiario1" name="domicilioBeneficiario1" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="nacionalidadBeneficiario1" class="col-sm-3 col-form-label">
										    	Nacionalidad :
										    </label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="nacionalidadBeneficiario1" name="nacionalidadBeneficiario1" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <div class="col-sm-6" style="padding: 0;">
										    	<label for="duiBeneficiario1" class="col-sm-2 col-form-label" style="float: left;">
											    	Dui:
											    </label>
											    <div class="col-sm-10" style="float: left;">
											    	<input type="text" class="form-control" id="duiBeneficiario1" name="duiBeneficiario1" autocomplete="off">
											    </div>
										    </div>
										    <div class="col-sm-6" style="padding: 0;">
										    	<label for="participacionduiBeneficiario1" class="col-sm-6 col-form-label" style="float: left;">
											    	% de Participación:
											    </label>
											    <div class="col-sm-6" style="float: left;">
											    	<input type="text" class="form-control" id="participacionBeneficiario1" name="participacionBeneficiario1" autocomplete="off">
											    </div>
										    </div>
										</div>
										<h3 style="font-size: 22px;" class="naranja" align="left">
											Beneficiario 2:
										</h3>
										<div class="form-group row">
										    <label for="nombreBeneficiario2" class="col-sm-3 col-form-label">
										    	Nombre completo :
										    </label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="nombreBeneficiario2" name="nombreBeneficiario2" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="telefonoBeneficiario2" class="col-sm-1 col-form-label">
										    	Teléfono:
										    </label>
										    <div class="col-sm-10">
										    	<input type="text" class="form-control" id="telefonoBeneficiario2" name="telefonoBeneficiario2" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="domicilioBeneficiario2" class="col-sm-2 col-form-label">
										    	Domicilio:
										    </label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="domicilioBeneficiario2" name="domicilioBeneficiario2" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <label for="nacionalidadBeneficiario2" class="col-sm-3 col-form-label">
										    	Nacionalidad :
										    </label>
										    <div class="col-sm-9">
										    	<input type="text" class="form-control" id="nacionalidadBeneficiario2" name="nacionalidadBeneficiario2" autocomplete="off">
										    </div>
										</div>
										<div class="form-group row">
										    <div class="col-sm-6" style="padding: 0;">
										    	<label for="duiBeneficiario2" class="col-sm-2 col-form-label" style="float: left;">
											    	Dui:
											    </label>
											    <div class="col-sm-10" style="float: left;">
											    	<input type="text" class="form-control" id="duiBeneficiario2" name="duiBeneficiario2" autocomplete="off">
											    </div>
										    </div>
										    <div class="col-sm-6" style="padding: 0;">
										    	<label for="participacionduiBeneficiario2" class="col-sm-6 col-form-label" style="float: left;">
											    	% de Participación:
											    </label>
											    <div class="col-sm-6" style="float: left;">
											    	<input type="text" class="form-control" id="participacionBeneficiario2" name="participacionBeneficiario2" autocomplete="off">
											    </div>
										    </div>
										</div>
										<div class="form-group row text-center">
											 <div class="col-md-6 col-sm-6 col-xs-12">
		                                      <canvas id='canvasCliente' width="350" height="155" style='border: 1px solid #CCC;'>
		                                              <p>Tu navegador no soporta canvas</p>
		                                          </canvas>

		                                      <input type='hidden' name='imagenC' id='imagenC' />

		                                   </div>
										</div>

	                                </div> 
	                                <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> 
	                                <input type="button" name="make_payment" class="next action-button" value="Siguiente" />
	                            </fieldset>
	                            <!-- AQUI TERMINA LA CUARTA PARTE, DATOS DE LA PERSONA BENEFICIARIA -->
								<!-- ////////////////////////////////////////////// -->
								<!-- AQUI EMPIEZA LA QUINTA Y ULTIMA PARTE, DOCUMENTACIÓN REQUERIDA -->
	                            <fieldset>
	                                <div class="form-card">
	                                	<div class="form-group row" style="margin-right: 100px;">
										    <h2 class="naranja" align="left">
												Documentación
											</h2>
										</div>
										<h3 class="naranja" align="left">
											Perfil del Cliente - Persona Natural
										</h3>
										<div class="form-group row" style="margin-left: 1%;">
											<input type="file" id="dui-file" style="display: none;">
											<span id="dui-button" class="custom-button2">Sube la imagen de tu Dui <u id="textoDui" class="subrayado">>>Click Aqui<<</u></span>
											<span id="dui-text" class="custom-text">No ha anexado su archivo</span>
										</div>
										<div class="form-group row" style="margin-left: 1%;">
											<input type="file" id="nit-file" style="display: none;">
											<span id="nit-button" class="custom-button2">Sube la imagen de tu Nit <u id="textoNit" class="subrayado">>>Click Aqui<<</u></span>
											<span id="nit-text" class="custom-text">No ha anexado su archivo</span>
										</div>
										<div class="form-group row" style="margin-left: 1%;">
											<input type="file" id="tIVA-file" style="display: none;">
											<span id="tIVA-button" class="custom-button2">Sube la imagen de tu tarjeta de IVA<u id="textoIva" class="subrayado">>>Click Aqui<<</u></span>
											<span id="tIVA-text" class="custom-text">No ha anexado su archivo</span>
										</div>
										<div class="form-group row" style="margin-left: 1%;">
											<input type="file" id="luzAgua-file" style="display: none;">
											<span id="luzAgua-button" class="custom-button2">Sube la imagen de su recibo de Luz y Agua<u id="textoRecibo" class="subrayado">>>Click Aqui<<</u></span>
											<span id="luzAgua-text" class="custom-text">No ha anexado su archivo</span>
										</div>
	                                </div>
	                                <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> 
	                                <input type="button" name="make_payment" class="next action-button" value="Finalizar" />
	                            </fieldset>
	                            <!-- AQUI TERMINA LA QUINTA Y ULTIMA PARTE, DOCUMENTACIÓN REQUERIDA -->
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<!-- AQUI TERMINA EL CONTENIDO PARA REALIZAR EL LOGIN -->