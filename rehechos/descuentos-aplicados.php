<?php include "head.php" ?>
    <body>

<?php include "header-user.php"; ?>


	<section class="aPinterna aPresultados aPage-discounts formulario">
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/perfil-banner.jpg') no-repeat scroll center center / cover">
			<h3 class="aFz-34 aFc-blanco aTa-c aMb-0 text-center">Mis Descuentos</h3>
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
              <p class="text-center"><a href="#" class="">MIS DESCUENTOS</a></p>
              <div class="borde1 mt-3 mb-3"></div>
              <p class="text-center"><a href="#" class="activo">DESCUENTOS APLICADOS</a></p>
            </div>

          </div>
          <div class="col-12 col-md-9">
            <form id="fileupload" method="POST" enctype="multipart/form-data">
              <div class="background-blanco pl-3 pr-3 pt-3 pb-3 formulario">
                <div class="row mb-4">
                  <div class="col-12 col-md-8 col-lg-9 pr-md-1">
                      <input type="text" placeholder="Código de la Promoción">
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 pl-md-1">
                      <a class="aButton-r-a shadowButton aP-15-25 aFz-16" href="#"><i class="fa fa-search" aria-hidden="true"></i> Buscar</a>
                  </div>
                  
                </div>
                <div class="borde1 mt-3 mb-3"></div>
                <div class="row-mb-4">
                  <div class="col">
                    <h3 class="aFc-negro text-center">Descuentos Aplicados</h3>
                    <div class="aBg-rojo aA-55 aH-2 aMt-20 aMb-20 aM-x-auto aDb"></div>
                  </div>  
                </div>
                <div class="row mb-4">
                  <div class="col">
                    <table class="w-100 table table-bordered table-responsive-sm">
                      <thead>
                        <tr class="table-secondary">
                          <td scope="col">Código</td>
                          <td scope="col">Cliente</td>
                          <td scope="col">Tipo de Descuento</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>VzWoCxysiu</td>
                          <td><img src="img/pe.png"> Loremp Impsum text</td>
                          <td class="text-center">Vale por 20$</td>
                        </tr>
                        <tr class="table-secondary">
                          <td>VzWoCxysiu</td>
                          <td><img src="img/pe.png"> Loremp Impsum text</td>
                          <td class="text-center">Vale por 20$</td>
                        </tr>
                        <tr>
                          <td>VzWoCxysiu</td>
                          <td><img src="img/pe.png"> Loremp Impsum text</td>
                          <td class="text-center">Vale por 20$</td>
                        </tr>
                        <tr class="table-secondary">
                          <td>VzWoCxysiu</td>
                          <td><img src="img/pe.png"> Loremp Impsum text</td>
                          <td class="text-center">Vale por 20$</td>
                        </tr>
                        <tr>
                          <td>VzWoCxysiu</td>
                          <td><img src="img/pe.png"> Loremp Impsum text</td>
                          <td class="text-center">Vale por 20$</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-center">
                    <div class="aD-paginador aListClean aMt-20 aMb-30-991">
                      <ul>
                        <li><a href=""><i class="fa fa-angle-left"></i></a></li>
                        <li><a class="active" href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </div>
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
