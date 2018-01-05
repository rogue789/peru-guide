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
                    <option>Moneda Extranjera</option>
                  </select>
                </div>
              </div>
              <div class="borde1 mt-3 mb-3"></div>
              <div class="row">
                <div class="col-12 moneda mb-4">
                  <label>Cambio de monedas:</label>
                  <div class="w-100 mb-2">
                    <button class="boton-moneda" href="#" onclick="return false;">Dólar Amerícano<br></button>
                    <button class="boton-moneda" href="#" onclick="return false;">Dólar Australiano<br></button>
                    <button class="boton-moneda" href="#" onclick="return false;">Dólar Canadiense</button>
                    <button class="boton-moneda" href="#" onclick="return false;">Euro</button>
                    <button class="boton-moneda" href="#" onclick="return false;">Libra Esterlina</button>
                    <button class="boton-moneda" href="#" onclick="return false;">Yen</button>
                  </div>

                  <input id="moneda" type="text" data-role="tagsinput">

                </div>
              </div>
              <div class="row mb-4">
                <div class="col-12 col-md-6">
                  <label class="w-100">Dias de atención</label>
                  <p class="d-inline-block mx-2"><input type="checkbox"> Lunes</p>
                  <p class="d-inline-block mx-2"><input type="checkbox"> Martes</p>
                  <p class="d-inline-block mx-2"><input type="checkbox"> Miercoles</p>
                  <p class="d-inline-block mx-2"><input type="checkbox"> Jueves</p>
                  <p class="d-inline-block mx-2"><input type="checkbox"> Viernes</p>
                  <p class="d-inline-block mx-2"><input type="checkbox"> Sabado</p>
                  <p class="d-inline-block mx-2"><input type="checkbox"> Domingo</p>
                  <p class="d-inline-block mx-2"><input type="checkbox"> Todos los dias</p>
                  <label class="w-100">Horario</label>
                  <div class="row no-gutters">
                    <div class="col-6 pr-2">
                      <input type="text" placeholder="Desde">
                    </div>
                    <div class="col-6">
                      <input type="text" placeholder="Hasta">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label class="w-100">Breve descripción de su servicio</label>
                  <textarea rows="8"></textarea>
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
