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
                                            <option>Escuela de Español</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="borde1 mt-3 mb-3"></div>
                                    <div class="row">
                                        <div class="col-12 cursos mb-4">
                                            <label>Tipo de cursos ofrecidos:</label>
                                            <div class="w-100 mb-2">
                                            <button class="boton-cursos" href="#" onclick="return false;">privado</button>
                                            <button class="boton-cursos" href="#" onclick="return false;">Grupal</button>
                                            </div>

                                            <input id="cursos" type="text" data-role="tagsinput">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 duracion mb-4">
                                            <label>Duración del curso Grupal:</label>
                                            <div class="w-100 mb-2">
                                            <button class="boton-duracion" href="#" onclick="return false;">1 semana</button>
                                            <button class="boton-duracion" href="#" onclick="return false;">2 semanas</button>
                                            <button class="boton-duracion" href="#" onclick="return false;">3 semanas</button>
                                            <button class="boton-duracion" href="#" onclick="return false;">1 mes</button>
                                            <button class="boton-duracion" href="#" onclick="return false;">2 meses</button>
                                            </div>

                                            <input id="duracion" type="text" data-role="tagsinput">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 duracion mb-4">
                                            <label>Duración del curso Privado:</label>
                                            <div class="w-100 mb-2">
                                            <button class="boton-duracion" href="#" onclick="return false;">1 semana</button>
                                            <button class="boton-duracion" href="#" onclick="return false;">2 semanas</button>
                                            <button class="boton-duracion" href="#" onclick="return false;">3 semanas</button>
                                            <button class="boton-duracion" href="#" onclick="return false;">1 mes</button>
                                            <button class="boton-duracion" href="#" onclick="return false;">2 meses</button>
                                            </div>

                                            <input id="duracion" type="text" data-role="tagsinput">

                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-6">

                                        <label>¿Reserva anticipada?</label>
                                        <select class="filtro-multiselect mb-4">
                                            <option>Si</option>
                                            <option>No</option>
                                        </select>
                                        <label >¿Reconocida por el Ministerio de Educación?</label>
                                        <select class="filtro-multiselect">
                                            <option>Si</option>
                                            <option>No</option>
                                        </select>
                                        </div>
                                        <div class="col-12 col-md-6">
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



