

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="js/jquery.iframe-transport.js"></script>

<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.raty.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.js"></script>
<script type="text/javascript" src="js/jquery-sortable.js"></script>
<script type="text/javascript" src="js/bootstrap-tagsinput.js"></script>
<script type="text/javascript" src="js/jsgrid.min.js"></script>
<script type="text/javascript" src="js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="js/vendor/form-validator/jquery.form-validator.min.js"></script>

<script type="text/javascript" src="js/jquery.fileupload.js"></script>
<script src="js/jquery.fileupload-process.js"></script>
<script src="js/jquery.fileupload-image.js"></script>
<script src="js/jquery.fileupload-audio.js"></script>
<script src="js/jquery.fileupload-video.js"></script>
<script src="js/jquery.fileupload-validate.js"></script>
<script src="js/jquery.fileupload-ui.js"></script> 
<script src="js/main.js"></script>

<script>

		$('select').addClass('filtro-multiselect');
		$('select.numeros-select').removeClass('filtro-multiselect');
</script>
<script type="text/javascript" src="js/aJquery.js?ver=<?=date('dmyhis');?>"></script>

<!--<script type="text/javascript" src="js/aTabs.min.js"></script>-->

<script>
$(document).ready(function() {
	$.validate();
	$('#cvc-code').tooltip();
	var numeroTele = $('button[data-id="numeros-menu"] a').text();
	$('.llamar').attr('href', 'tel:' + numeroTele);
	$(window).on("load",function() {

		$('body').animate({
			'opacity': 1
		},'slow');

	});
	$(function () {
    	$('#tab-principal a.active').tab('show')
 	 })
	$(function() {
		$("#habitaciones").jsGrid({
			width: "100%",
			height: "400px",
		sorting: true,
		paging: true,
			fields: [
				{ name: "Tipo de Habitación", type: "select", width: 250,},
				{ name: "Per Person", type: "number", width: 250 },
				{ name: "Per Room", type: "text", width: 250 },
				{ type: "control" }
			]
		});
	});
	$(function() {
		$('#disponible').bootstrapToggle({
		on: 'Disponible',
		off: 'No Disponible'
		});
  	})
});
</script>


<div id="aPopup-publicity" class="aPopup-ingresos aPopup-publicity zoom-anim-dialog aPopup-content mfp-hide">
	<h2 class="aFz-24 aFc-negro aTa-c aFf-M aMb-25">Loremp Impsiom</h2>
	<div class="aMb-15">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt vehicula velit, luctus fermentum eros ornare ac. Cras vehicula, velit at ornare efficitur, diam eros sodales lorem, eu ultricies odio nulla non mi. Fusce bibendum a mauris quis volutpat. Quisque placerat elementum vehicula. Mauris tristique lobortis risus quis gravida. In vel enim vitae urna rhoncus sagittis. Maecenas iaculis eget mauris varius lobortis. Mauris fermentum felis luctus gravida tincidunt. Cras aliquam metus ac nunc accumsan, sed sollicitudin ligula convallis. Etiam ullamcorper sapien congue lacus euismod facilisis. Vivamus massa neque, commodo ac vulputate tincidunt, tincidunt sed lorem. Cras volutpat nisl a maximus fermentum. Nunc pretium velit eget urna vestibulum, a tincidunt elit commodo. Curabitur maximus gravida pharetra. In euismod est eget odio feugiat, sit amet rhoncus neque volutpat.</p>
	</div>
</div>

<div id="aPopup-valid" class="aPopup-ingresos aPopup-Login zoom-anim-dialog aPopup-content mfp-hide">
		<div class="aMb-20">
		<p>Nombres y Apellidos</p>
		<input type="text" placeholder="Mario Martinez" disabled>
		</div>
		<div class="aMb-20">
		<p>Nacionalidad</p>
		<input type="text" placeholder="Perú" disabled>
		</div>
		<div class="aTa-c">
			<a class="aButton-r-a aFc-blanco aFz-16 aP-10-23" href="javascript:void(0)">Aceptar</a>
		</div>
</div>
<div id="aPopup-Login" class="aPopup-ingresos aPopup-Login zoom-anim-dialog aPopup-content mfp-hide">
	<h2 class="aFz-24 aFc-negro aTa-c aFf-M aMb-25">Soy Usuario  /  I am a User</h2>
	<div class="aMb-15">
		<input type="text" placeholder="Correo electrònico / E-mail address">
	</div>
	<div class="aMb-15">
		<input type="text" placeholder="Contraseña  /  Password">
	</div>
	<div class="aTa-r">
		<a class="aFz-12 aFf-L aFc-texto aFc-h-rojo aBpopup" href="#aPopup-olvidar-contraseña">¿Olvidaste tu contraseña?</a>
	</div>
	<div class="aW-100 aMt-20">
		<input type="submit" value="INGRESAR">
	</div>
</div>

<div id="aPopup-Register" class="aPopup-ingresos aPopup-Register zoom-anim-dialog aPopup-content mfp-hide">
	<div class="aAcordeon-x">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="aAcord-x">
				  <a href="#" class="aAtitulo-x aMb-15">USUARIO<span class="toggle-icon"></span></a>
				  <div class="aAcontent-x">
				    <h3 class="aFz-26 aFc-negro aMb-10 aFf-L">Texto de prueba</h3>
				    <h2 class="aFz-34 aFc-negro aMb-20 aFf-R">Lorem Ipsum text</h2>
				    <div class="aBg-rojo aA-85 aH-2 aMb-25"></div>
				    <div class="aTa-j">
				    	<p>Lorem Ipsum ha sido el texto de relleno estándar de las imprentas sera reemplazado por el texto real lorem text al registrarte con nosotros podrás:</p>
				    	<div class="aListClean aList-check aMt-15">
				    		<ul>
				    			<li>Acceder a miles de promociones, descuentos.</li>
				    			<li>Acceder a miles de promociones, descuentos.</li>
				    			<li>Acceder a miles de promociones, descuentos.</li>
				    		</ul>
				    	</div>
				    	<div class="aTa-c aMt-20">
				    		<a class="aButton-gl-r shadowButton aP-15-25 aFz-16 aMb-30 aBpopup" href="#aPopup-Register-Usuario">REGISTRO DE USUARIO</a>
				    		<p>Al regístrarte aceptas los <a class="aTd-u aFc-rojo aFc-h-rojo" href="javascript:void(0)">Términos y Condiciones</a> de <span style="color: #000000;">myperuguide.com</span></p>
				    		<div class="aBdib-m aPt-10">
				    			<span class="aFz-14 aM-5-10">¿Ya estas registrado?</span>
				    			<a class="aFz-15 aM-5-10 aFc-rojo aFc-h-rojo aTt-u aTd-u aBpopup" href="#aPopup-Login">iniciar sesión</a>
				    		</div>
				    	</div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="aBg-gris2 aA-1 aDn-767 mR--1"></div>
			<div class="col-12 col-md-6">
				<div class="aAcord-x">
				  <a href="#" class="aAtitulo-x aMb-15">OPERADOR<span class="toggle-icon"></span></a>
				  <div class="aAcontent-x">
				    <h3 class="aFz-26 aFc-negro aMb-10 aFf-L">Texto de prueba</h3>
				    <h2 class="aFz-34 aFc-negro aMb-20 aFf-R">Lorem Ipsum text</h2>
				    <div class="aBg-rojo aA-85 aH-2 aMb-25"></div>
				    <div class="aTa-j">
				    	<p>Lorem Ipsum ha sido el texto de relleno estándar de las imprentas sera reemplazado por el texto real lorem text al registrarte con nosotros podrás:</p>
				    	<div class="aListClean aList-check aMt-15">
				    		<ul>
				    			<li>Acceder a miles de promociones, descuentos.</li>
				    			<li>Acceder a miles de promociones, descuentos.</li>
				    			<li>Acceder a miles de promociones, descuentos.</li>
				    		</ul>
				    	</div>
				    	<div class="aTa-c aMt-20">
				    		<a class="aButton-r-a shadowButton aP-15-25 aFz-16 aMb-30 aBpopup" href="#aPopup-Register-Operador">REGISTRO DE OPERADOR</a>
				    		<p>Al regístrarte aceptas los <a class="aTd-u aFc-rojo aFc-h-rojo" href="javascript:void(0)">Términos y Condiciones</a> de <span style="color: #000000;">myperuguide.com</span></p>
				    		<div class="aBdib-m aPt-10">
				    			<span class="aFz-14 aM-5-10">¿Ya estas registrado?</span>
				    			<a class="aFz-15 aM-5-10 aFc-rojo aFc-h-rojo aTt-u aTd-u aBpopup" href="#aPopup-Login">iniciar sesión</a>
				    		</div>
				    	</div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="aPopup-Register-Operador" class="aPopup-ingresos aPopup-Register-Operador zoom-anim-dialog aPopup-content mfp-hide">
	<h2 class="aFz-26 aFc-negro aTa-c aFf-L aMb-25">Registro de Operador</h2>
	<div class="aBdib-t">
		<div class="aW-50 aPr-15 aW-100-767 aP-0-767">
			<div class="aMb-15">
				<label class="aMb-5" for="">Denominación social del negocio</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Página Web</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Número de RUC</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Nombre del registrante (representante del negocio)</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Cargo del registrante</label>
				<input type="text">
			</div>
		</div>
		<div class="aW-50 aPl-15 aW-100-767 aP-0-767">
			<div class="aMb-15">
				<label class="aMb-5" for="">Correo electrónico</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Teléfono de contacto</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Región donde opera el negocio</label>
				<select name="" id="">
					<option value="">Lima</option>
				</select>
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Dirección del local</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Tipo de servicio ofrecido</label>
				<select name="" id="">
					<option value="">Alojamiento</option>
					<option value="">Hospedaje</option>
				</select>
			</div>
		</div>
	</div>

	<div class="aBg-gris2 aW-100 aH-1 aMt-15 aMb-30">&nbsp;</div>

	<div class="aW-100 aBdib-t">
		<div class="aW-50 aPr-15 aW-100-767 aP-0-767">
			<div class="aMb-15">
				<label class="aMb-5" for="">Contraseña</label>
				<input type="password">
			</div>
		</div>
		<div class="aW-50 aPl-15 aW-100-767 aP-0-767">
			<div class="aMb-15">
				<label class="aMb-5" for="">Repetir Contraseña</label>
				<input type="password">
			</div>
		</div>
	</div>

	<div class="aW-100 aMt-25 aTable-t aTl-i aDb-767 aTa-c-767">
		<div class="aCondicion aW-80 aDb-767 aW-100-767 aMb-20-767">
			<p><input type="checkbox" class="checkbox">Estás de acuerdo con los <a class="aFc-rojo aTd-u aFc-h-rojo" href="">Términos y Condiciones</a> de myperuguide.com</p>
		</div>
		<input type="submit" value="ENVIAR">
	</div>
</div>

<div id="aPopup-Register-Usuario" class="aPopup-ingresos aPopup-Register-Usuario zoom-anim-dialog aPopup-content mfp-hide">
	<h2 class="aFz-26 aFc-negro aTa-c aFf-L aMb-25">Registro de Usuario</h2>
	<div class="aBdib-t">
		<div class="aW-50 aPr-15 aW-100-767 aP-0-767">
			<div class="aMb-15">
				<label class="aMb-5" for="">Nombre de usuario</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Apellido de usuario</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Nacionalidad</label>
				<select>
					<option>Perú</option>
				</select>
			</div>
		</div>
		<div class="aW-50 aPl-15 aW-100-767 aP-0-767">
			<div class="aMb-15">
				<label class="aMb-5" for="">Correo</label>
				<input type="text">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Contraseña</label>
				<input type="password">
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Repetir contraseña</label>
				<input type="password">
			</div>
		</div>
	</div>

	<div class="aW-100 aMt-25 aTable-t aTl-i aDb-767 aTa-c-767">
		<div class="aCondicion aW-80 aDb-767 aW-100-767 aMb-20-767">
			<p><input type="checkbox" class="checkbox"> Estás de acuerdo con los <a class="aFc-rojo aTd-u aFc-h-rojo" href="">Términos y Condiciones</a> de myperuguide.com</p>
		</div>
		<input type="submit" value="ENVIAR">
	</div>
</div>

<div id="aPopup-olvidar-contraseña" class="aPopup-ingresos zoom-anim-dialog aPopup-content mfp-hide">
	<h2 class="aFz-26 aFc-negro aTa-c aFf-L aMb-25">¿Haz olvidado tu contraseña?</h2>
	<div class="aBdib-t">
		
		<div class="aW-100 aPl-15 aW-100-767 aP-0-767">
			<div class="aMb-15">
				<p class="text-center">Ingresa tu correo electronico para recuperar tu contraseña</p>
			</div>
			<div class="aMb-15">
				<label class="aMb-5" for="">Correo Electronico</label>
				<input type="email">
			</div>
		</div>
	</div>

	<div class="aW-100 aMt-25 aTable-t aTl-i aDb-767 aTa-c-767">
		<input type="submit" value="ENVIAR">
	</div>
</div>
