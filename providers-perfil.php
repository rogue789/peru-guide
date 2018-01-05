<?php include "head.php" ?>
<body>
	<?php include "header-user.php"; ?>



	<section class="aPinterna aPage-providers-section aPage-providers-perfil">
		
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/banner-seccion-operador.jpg') no-repeat scroll center center / cover">
			<div class="aWrapper">
				<h3 class="aFz-34 aFc-blanco aTa-ci aMb-0">Mi Perfil</h3>
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
									<li><a class="active" href="providers-perfil.php"> Mi Perfil</a></li>
									<li><a href="providers-services.php"> Mis Servicios</a></li>
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
              <h3 class="mb-3 negro">Perfil del Operador</h3>
              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Denominación social del negocio</label>
                  <input type="text">
                </div>
                <div class="col-12 col-md-6">
                  <label>Página Web</label>
                  <input type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Número de RUC</label>
                  <input type="text">
                </div>
                <div class="col-12 col-md-6">
                  <label>Representante del negocio</label>
                  <input type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Cargo del registrante</label>
                  <input type="text">
                </div>
                <div class="col-12 col-md-6">
                  <label>Télefono de contacto</label>
                  <input type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Región donde opera el negocio</label>
                  <select class="filtro-multiselect">
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="col-12 col-md-6">
                  <label>Correo electrónico</label>
                  <input type="text">
                </div>
              </div>              
              <div class="row">
                <div class="col-12">
                  <label>Dirección del local</label>
                  <input type="text">
                </div>
              </div>
              <div class="borde1 mt-3 mb-3"></div>
              <div class="row mb-3">
                <div class="col-12 col-md-6">
                  <label>Cambiar contraseña</label>
                  <input type="password">
                </div>
                <div class="col-12 col-md-6">
                  <label>Confirmar contraseña</label>
                  <input type="password">
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <label>Adjuntar Logotipo</label>
                  <input type="file" name="adjunto">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <a class="float-right aButton-r-a shadowButton aP-15-25 aFz-16 aMb-30" href="#">GUARDAR</a>
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



