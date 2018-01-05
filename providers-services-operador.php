<?php include "head.php" ?>
<body>
	<?php include "header-user.php"; ?>



	<section class="aPinterna aPage-providers-section aPage-providers-perfil formulario">
		
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/banner-seccion-operador.jpg') no-repeat scroll center center / cover">
			<div class="aWrapper">
				<h3 class="aFz-34 aFc-blanco aTa-ci aMb-0">Mis Servicios</h3>
			</div>
		</div>

		<div class="aBg-gris1 aPt-35 aPb-35 formulario">
			<div class="aWrapper">
				<div class="aTable-t aDb-991">

					<div class="aD1">
						<div class="aD-info aShadow aBg-blanco">
							<div class="aBb-gris-claro aPb-25 aTa-c">
								<div class="aDib aB-gris aBr-4 aHidden">
									<img src="img/provider-120.jpg" alt="" title=""/>
								</div>
								<span class="aDb aMt-5 aRaty-4"></span>
								<span class="aTa-c aDb aFz-12 aFc-gris2 aMt-5 aMb-10">(18 valoraciones)</span>
								<h3 class="aFz-17 aFc-negro2 aMb-0 aTt-u">Operador Buen Viaje</h3>
							</div>
							<div class="aD-nav-operador aListClean">
								<ul>
									<li><a href="providers-perfil.php"> Mi Perfil</a></li>
									<li><a class="active" href="providers-services.php"> Mis Servicios</a></li>
									<li><a href="providers-commentary.php"> Mis Comentarios</a></li>
									<li><a href="providers-discounts.php"> Mis Descuentos</a></li>
									<li><a href="providers-discounts-applied.php"> Descuentos Aplicados</a></li>
								</ul>
							</div>
						</div>
					</div>
 
					<div class="aD2">
						<div class="aP-30 aBg-blanco aShadow aP-30-20-767">
						    <div class="background-blanco pl-3 pr-3 pt-3 pb-3">


                                                    
                                <form id="fileupload" method="POST" enctype="multipart/form-data">
                                <div class="background-blanco pl-3 pr-3 pt-3 pb-3 formulario">
                                <div class="row mb-4">
                                    <div class="col-12 col-md-6">
                                    <label>Tipo de servicio ofrecido</label>
                                    <select class="filtro-multiselect">
                                        <option>Operador de Turismo Local</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="borde1 mt-3 mb-3"></div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                    <p>Esta opción únicamente aplica a Operadores Locales de Turismo (Agencias de Turismo abstenerse de continuar).  </p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12 col-md-6">
                                    <label>Seleccionar Región</label>
                                    <select class="filtro-multiselect" multiple>
                                        <option>Amazonas</option>
                                        <option>Áncash</option>
                                        <option>Apurímac</option>
                                        <option>Arequipa</option>
                                        <option>Ayacucho</option>
                                        <option>Cajamarca</option>
                                        <option>Cusco</option>
                                        <option>Huancavelica</option>
                                        <option>Huánuco</option>
                                        <option>Ica</option>
                                        <option>Junín</option>
                                        <option>La Libertad</option>
                                        <option>Lambayeque</option>
                                        <option>Lima</option>
                                        <option>Loreto</option>
                                        <option>Madre de Dios</option>
                                        <option>Moquegua</option>
                                        <option>Pasco</option>
                                        <option>Piura</option>
                                        <option>Puno</option>
                                        <option>San Martín</option>
                                        <option>Tacna</option>
                                        <option>Tumbes</option>
                                        <option>Ucayali</option>
                                    </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <label>Tipo de servicio ofrecido</label>
                                    <select class="filtro-multiselect" multiple>
                                        <option>Tradicional</option>
                                        <option>Aventura</option>
                                        <option>Privado</option>
                                        <option>Grupal</option>
                                        <option>Sólo Inglés</option>
                                        <option>Inglés y Español</option>
                                        <option>Tradicional</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                    <div class="col-12 tours mb-4">
                                        <label>Selecciona uno o mas de los siguientes Tours:</label>
                                        <div class="w-100 mb-2">
                                        <div class="arequipa tradicional">
                                            <button class="boton-tours" href="#" onclick="return false;">cañón de colca</button>
                                            <button class="boton-tours" href="#" onclick="return false;">City Tour</button>
                                            <button class="boton-tours" href="#" onclick="return false;">City Tour y Campiña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">City Tour y Casonas</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Lagunas de Mejía</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Toro Muerto</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour Culinario</button>
                                        </div>
                                        <div class="arequipa aventura">
                                            <button class="boton-tours" href="#" onclick="return false;">Ascenso al Mitsi</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Avistamiento de Aves</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Caminatas en el Colca</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Canotaje</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Ciclismo de Montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Escalada de Montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Pesca</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Sand Boarding</button>
                                        </div>
                                        <div class="cusco tradicional">
                                            <button class="boton-tours" href="#" onclick="return false;">City Tour</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour Culinario</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour Cusco a Puno</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Barroco Andino</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour del Valle Sagrado</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour del Valle Sur</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Chinchero</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Maras y Moray</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Machu picchu</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour Espiritual</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour Vivencial</button>
                                        </div>
                                        <div class="cusco aventura">
                                            <button class="boton-tours" href="#" onclick="return false;">Avistamiento de Aves</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Caminatas</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Canopy o Zipline</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Canotaje</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Ciclismo de montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Escalada de montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Paperente</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Pesca</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Salto en Bungee</button>
                                            <button class="boton-tours" href="#" onclick="return false;">via Ferrata</button>
                                        </div>
                                        <div class="ica tradicional">
                                            <button class="boton-tours" href="#" onclick="return false;">City Tour en Ica</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de las Islas Balletas</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de la Reserva Nacional de Paracas</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Cahuachi</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de sobrevuelo de las lineas de Nasca</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Escalada de montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de los Acueductos de Cantayoc</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour del Cementerio de Chauchilla</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Visita a Viñedos en Ica</button>
                                        </div>
                                        <div class="ica aventura">
                                            <button class="boton-tours" href="#" onclick="return false;">Avistamento de Aves</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Buceo</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Parapente</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Pesca</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Sand Boarding en Ica</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Sand Boarding en Nasca</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de la Reserva Nacional de Paracas en ATV</button>
                                            <button class="boton-tours" href="#" onclick="return false;">our de la Reserva de San Fernando</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de las Dunas en la Huacachina (Dune Buggy)</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de las Dunas en Nasca (Dune Buggy)</button>
                                        </div>
                                        <div class="lima tradicional">
                                            <button class="boton-tours" href="#" onclick="return false;">City Tour</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour Culinario</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Barranco</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Caral</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Museos</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Pachacamac</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour Lima de Noche</button>
                                        </div>
                                        <div class="lima aventura">
                                            <button class="boton-tours" href="#" onclick="return false;">Avistamiento de Aves</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Canopy o Zipline</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Canotaje</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Ciclismo de Montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Escalada de Montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Parapente</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Pesca</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Surf</button>
                                        </div>
                                        <div class="puno tradicional">
                                            <button class="boton-tours" href="#" onclick="return false;">City Tour</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de las Islas Flotantes Uros</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de las Islas Flotantes Uros y Taquile</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour de Sillustani</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour Puno a Cusco</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Tour Vivencial en las Islas</button>
                                        </div>
                                        <div class="puno aventura">
                                            <button class="boton-tours" href="#" onclick="return false;">Avistamiento de Aves</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Caminatas</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Canotaje</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Ciclismo de Montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Escalada de Montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Pesca</button>
                                        </div>
                                        <div class="tradicional">
                                            <button class="boton-tours" href="#" onclick="return false;">City Tour</button>
                                        </div>
                                        <div class="aventura">
                                            <button class="boton-tours" href="#" onclick="return false;">Avistamiento de Aves</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Caminatas</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Canopy o Zipline</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Canotaje</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Ciclismo de Montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Escalada de Montaña</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Parapente</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Pesca</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Surfing</button>
                                            <button class="boton-tours" href="#" onclick="return false;">Vie Ferrata</button>
                                        </div>

                                        </div>
                                        </div>

                                        <input id="tours" type="text" data-role="tagsinput" placeholder="escribir otro...">

                                    </div>
                                    </div>


                                <div class="row mb-2">
                                    <div class="col-12">
                                    <label>Breve descripción de su servicio</label>
                                    <textarea rows="6"></textarea>
                                    </div>
                                </div>

                                <div class="borde1 mt-3 mb-3"></div>
                               
                                <div class="row mt-4">
                                    <div class="col-12 col-md-12">
                                    <div class="row fileupload-buttonbar">
                                        <div class="col-7">
                                            <!-- The fileinput-button span is used to style the file input field as button -->
                                            <label>Adjuntar Imagenes del negocio</label>
                                                <div class="clear"></div>
                                            <span class="btn btn-rojo fileinput-button">
                                                <span>Add files...</span>
                                                <input type="file" name="files[]" multiple>
                                            </span>
                                            <button type="submit" class="btn btn-gris start">
                                                <span>Start upload</span>
                                            </button>
                                            <p class="instrucciones mt-4">Tipos de archivo: <span class="rojo">JPG</span> y <span class="rojo">PNG</span> Dimensiones <span class="rojo">100x100</span></p>
                                            <p class="instrucciones"><span class="rojo">+ Organizar imágenes:</span> Arrastra y suelta las imagenes para organizarlas</p>
                                            <p class="instrucciones"><span class="rojo">x Eliminar imágenes</span></p>
                                        </div>
                                        <!-- The global progress state -->
                                        <div class="col-5 fileupload-progress fade">
                                            <!-- The global progress bar -->
                                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                            </div>
                                            <!-- The extended global progress state -->
                                            <div class="progress-extended">&nbsp;</div>
                                        </div>
                                    </div>
                                    <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                                    <p class="comentario">Adjuntar archivo JPG o PNG, Tamaño maximo 10mb.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <a class="float-right aButton-r-a shadowButton aP-15-25 aFz-16 aMb-30" href="#">GUARDAR</a>
                                    </div>
                                </div>
                                </div>
                            </form>
                            <div class="popup-servicios"><a href="#" data-toggle="modal" data-target="#videoTutorial"><img src="img/play-btn.png"> Ver Tutorial</a></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
	</section>
    <div class="modal fade" id="videoTutorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-custom" role="document">
            <div class="modal-content">
        
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="mx-auto"><div class="d-block text-center"><iframe class="pt-5" width="560" height="315" src="https://www.youtube.com/embed/1_c0WBTQFl8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div></div>
                    <div class="clear"></div>
                </div>

            </div>
        </div>
        <div class="overlay-modal" data-dismiss="modal" aria-label="Close">
	    </div>
    </div>


	<?php include "footer.php"; ?>
</body>
</html>



