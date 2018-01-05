<?php include "head.php" ?>
    <body>

<?php include "header-user.php"; ?>


	<section class="aPinterna aPresultados aPage-discounts formulario">
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/perfil-banner.jpg') no-repeat scroll center center / cover">
			<h3 class="aFz-34 aFc-blanco aTa-c aMb-0 text-center">Mis descuentos</h3>
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
              <p class="text-center"><a href="#" class="">MIS SERVICIOS</a></p>
              <div class="borde1 mt-3 mb-3"></div>
              <p class=" text-center"><a href="#" class="">MIS COMENTARIOS</a></p>
              <div class="borde1 mt-3 mb-3"></div>
              <p class="text-center"><a href="#" class="activo">MIS DESCUENTOS</a></p>
              <div class="borde1 mt-3 mb-3"></div>
              <p class="text-center"><a href="#" class="">DESCUENTOS APLICADOS</a></p>
            </div>

          </div>
            <div class="col-12 col-md-9 tab-custom">
                <ul class="nav" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-descuentos-tab" data-toggle="pill" href="#pills-descuentos" role="tab" aria-controls="pills-descuentos" aria-selected="true">Mis Descuentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-informacion-tab" data-toggle="pill" href="#pills-informacion" role="tab" aria-controls="pills-informacion" aria-selected="false">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-condicion-tab" data-toggle="pill" href="#pills-condicion" role="tab" aria-controls="pills-condicion" aria-selected="false">Condición</a>
                    </li>
                </ul>
                <div class="background-blanco pt-4 pl-4 pr-4 pb-4">
                    <div class="tab-content" id="pills-tabContent">                    
                        <div class="tab-pane fade show active" id="pills-descuentos" role="tabpanel" aria-labelledby="pills-descuentos-tab">
                            <div class="box-gris p-5 formulario">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <p>Nombre</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-12 col-md-3">
                                        <p>Descripción</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-12 col-md-3">
                                        <p>Codigo</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="row no-gutters">
                                            <div class="col-12 col-md-9">
                                                <input type="text">
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <a class="btn btn-random mw-100"><i class="fa fa-random" aria-hidden="true"></i> Generar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12 col-md-3">
                                        <p>Estado</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="checkbox" id="disponible">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a class="float-right aButton-r-a shadowButton aP-15-25 aFz-16" href="#">GUARDAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-informacion" role="tabpanel" aria-labelledby="pills-informacion-tab">
                            <div class="box-gris p-5 formulario">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <p>Cliente</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select class="filtro-multiselect">
                                            <option>Extranjeros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-12 col-md-3">
                                        <p>Validez</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="row no-gutters">
                                            <div class="col-12 col-md-6 pr-1">
                                                <input type="date">
                                            </div>
                                            <div class="col-12 col-md-6 pl-1">
                                                <input type="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-12 col-md-3">
                                        <p>Total disponible por cliente</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select class="filtro-multiselect">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12 col-md-3">
                                        <p>Restricciones</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p><input type="checkbox"> Para uso en <span class="aFc-rojo">MyperuGuide.com</span></p>
                                        <p><input type="checkbox"> Para uso en el local del operador</p>
                                        <p><input type="checkbox"> Para uso en ambos</span></p>
                                        <p><input type="checkbox"> No acumulable con otras promociones</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a class="float-right aButton-r-a shadowButton aP-15-25 aFz-16" href="#">GUARDAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-condicion" role="tabpanel" aria-labelledby="pills-condicion-tab">
                            <div class="box-gris p-5 formulario">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <p>Tipo de Promoción</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p><input type="checkbox"> Porcentaje</p>
                                        <p><input type="checkbox"> Descuento en dinero</span></p>
                                        <p><input type="checkbox"> Degustación</p>
                                        <p><input type="checkbox"> Ninguno</p>
                                        <div class="row no-gutters">
                                            <div class="col-1 mr-2">
                                                <p class="mt-2">valor</p>
                                            </div>
                                            <div class="col-1">
                                                <label class="label">%</label>
                                            </div>
                                            <div class="col-5">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12 col-md-3">
                                        <p>Condiciones de la Promoción</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea row="3"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a class="float-right aButton-r-a shadowButton aP-15-25 aFz-16" href="#">GUARDAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
  </div>


	</section>


<?php include "footer.php"; ?>
    </body>
</html>
