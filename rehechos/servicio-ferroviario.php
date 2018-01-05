<?php include "head.php" ?>
    <body>

<?php include "header-user.php"; ?>


	<section class="aPinterna aPresultados aPage-discounts formulario">
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/perfil-banner.jpg') no-repeat scroll center center / cover">
			<h3 class="aFz-34 aFc-blanco aTa-c aMb-0 text-center">Mi perfil</h3>
		</div>
    <div class="background-gris">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class=" pt-3 pb-3 background-blanco">
              <div class="logo-user mb-3">
                <img src="img/puro-peru-logo.jpg">
              </div>
              <div class="w-100 mb-3">
                <span class="aRaty aRaty-4 mb-1 mr-auto ml-auto w-content">&nbsp;</span>
                <p class="gris text-center">(18 valoraciones)</p>
              </div>
              <h3 class="text-center negro">Nombre Operador</h3>
              <div class="borde1 mt-3 mb-3 "></div>
              <p class="text-center"><a href="#" class="">MI PERFIL</a></p>
              <div class="borde1 mt-3 mb-3"></div>
              <p class="text-center"><a href="#" class="activo">MIS SERVICIOS</a></p>
              <div class="borde1 mt-3 mb-3"></div>
              <p class=" text-center"><a href="#" class="">MIS COMENTARIOS</a></p>
              <div class="borde1 mt-3 mb-3"></div>
              <p class="text-center"><a href="#" class="">MIS DESCUENTOS</a></p>
              <div class="borde1 mt-3 mb-3"></div>
              <p class="text-center"><a href="#" class="">DESCUENTOS APLICADOS</a></p>
            </div>

          </div>
          <div class="col-12 col-md-9">
            <form id="fileupload" method="POST" enctype="multipart/form-data">
            <div class="background-blanco pl-3 pr-3 pt-3 pb-3 formulario">
              <div class="row mb-4">
                <div class="col-12 col-md-6">
                  <label>Tipo de servicio ofrecido</label>
                  <select class="filtro-multiselect">
                    <option>Transporte Ferroviario de Pasajeros</option>
                  </select>
                </div>
              </div>
              <div class="borde1 mt-3 mb-3"></div>
              
              <div class="row mb-4">
                <div class="col-12 ferroviario">
                    <label>Destinos en los que tiene estación de tren:</label>
                    <div class="w-100 mb-2">
                        <button class="boton-ferroviario" href="#" onclick="return false;">Arequipa<br></button>
                        <button class="boton-ferroviario" href="#" onclick="return false;">Poroy<br></button>
                        <button class="boton-ferroviario" href="#" onclick="return false;">Puno<br></button>
                        <button class="boton-ferroviario" href="#" onclick="return false;">Wanchaq<br></button>
                        <button class="boton-ferroviario" href="#" onclick="return false;">Machu Picchu Pueblo<br></button>
                        <button class="boton-ferroviario" href="#" onclick="return false;">Hidroeléctrica Santa Teresa</button>
                      
                    </div>

                    <input id="ferroviario" type="text" data-role="tagsinput">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-12 servicio-ferroviario">
                    <label>Tipo de servicio ofrecido:</label>
                    <div class="w-100 mb-2">
                        <button class="boton-servicio-ferroviario" href="#" onclick="return false;">Hiram Bighamt<br></button>
                        <button class="boton-servicio-ferroviario" href="#" onclick="return false;">PerúRail Sacred Valley<br></button>
                        <button class="boton-servicio-ferroviario" href="#" onclick="return false;">Vistadome<br></button>
                        <button class="boton-servicio-ferroviario" href="#" onclick="return false;">Expedition<br></button>
                        <button class="boton-servicio-ferroviario" href="#" onclick="return false;">Andean Explorer<br></button>
                        <button class="boton-servicio-ferroviario" href="#" onclick="return false;">PerúRail Titicaca<br></button>
                        <button class="boton-servicio-ferroviario" href="#" onclick="return false;">Presidential Class<br></button>
                        <button class="boton-servicio-ferroviario" href="#" onclick="return false;">First Class<br></button>
                        <button class="boton-servicio-ferroviario" href="#" onclick="return false;">Executive Class<br></button>
                       
                    </div>

                    <input id="servicio-ferroviario" type="text" data-role="tagsinput">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-12 col-md-6">
                    <label>¿Reserva anticipada?</label>
                    <select class="filtro-multiselect">
                        <option>Si</option>
                        <option>No</option>
                    </select>
                    
                </div>
                <div class="col-12 col-md-6">
                    <label>Breve descripción de su servicio</label>
                    <textarea rows="4"></textarea>
                </div>
              </div>
              <div class="borde1 mt-3 mb-3"></div>
              <div class="row">
                <div class="col-12">
                  <label>Adjuntar Logotipo</label>
                  <input type="file" name="adjunto">
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12 col-md-12">
                  <div class="row fileupload-buttonbar">
                    <div class="col-7">
                        <!-- The fileinput-button span is used to style the file input field as button -->
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
          </div>
        </div>
      </div>
    </div>


	</section>


<?php include "footer.php"; ?>
    </body>
</html>
