<?php include "head.php" ?>
<body>
	<?php include "header-user.php"; ?>



	<section class="aPinterna aPage-providers-section aPage-providers-discounts aPage-providers-discounts-new">
		
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/banner-seccion-operador.jpg') no-repeat scroll center center / cover">
			<div class="aWrapper">
				<h3 class="aFz-34 aFc-blanco aTa-ci aMb-0">Mis Descuentos</h3>
			</div>
		</div>

		<div class="aBg-gris1 aPt-35 aPb-35">
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
									<li><a href="providers-commentary.php"> Mis Comentarios</a></li>
									<li><a href="providers-services.php"> Mis Servicios</a></li>
									<li><a href="providers-discounts.php"> Mis Descuentos</a></li>
									<li><a class="active" href="providers-discounts-applied.php"> Descuentos Aplicados</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="aD2">


					
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