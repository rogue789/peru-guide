<?php include "head.php" ?>
<body>
	<?php include "header-user.php"; ?>



	<section class="aPinterna aPage-providers-section aPage-providers-discounts aPage-providers-discounts-new">
		
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/banner-seccion-operador.jpg') no-repeat scroll center center / cover">
			<div class="aWrapper">
				<h3 class="aFz-34 aFc-blanco aTa-ci aMb-0">Generación de Promoción</h3>
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
									<li><a class="active" href="providers-discounts.php"> Mis Descuentos</a></li>
									<li><a href="providers-discounts-applied.php"> Descuentos Aplicados</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="aD2 tab-custom">
					
					<ul class="nav" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-descuentos-tab" data-toggle="pill" href="#pills-descuentos" role="tab" aria-controls="pills-descuentos" aria-selected="true">Generación</a>
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
							<form action="" id="registration-form">
								<div class="box-gris p-5 formulario">
									<div class="row">
										<div class="col-12 col-md-3">
											<p>Nombre</p>
										</div>
										<div class="col-12 col-md-9">
											<input type="text" data-validation="required">
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-12 col-md-3">
											<p>Descripción</p>
										</div>
										<div class="col-12 col-md-9">
											<textarea rows="5" data-validation="required"></textarea>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-12 col-md-3">
											<p>Codigo</p>
										</div>
										<div class="col-12 col-md-9">
											<div class="row no-gutters">
												<div class="col-12 col-md-9">
													<input type="text" data-validation="required">
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
											<a class="float-right aButton-r-a shadowButton aP-15-25 aFz-16" href="#">Guardar</a>
										</div>
									</div>
								</div>
							</form>
                        </div>
                        <div class="tab-pane fade" id="pills-informacion" role="tabpanel" aria-labelledby="pills-informacion-tab">
                            <div class="box-gris p-5 formulario">
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <p>Cliente</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select class="filtro-multiselect"  data-validation="required">
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
                                                <input type="date"  data-validation="required">
                                            </div>
                                            <div class="col-12 col-md-6 pl-1">
                                                <input type="date"  data-validation="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-12 col-md-3">
                                        <p>Total disponible por cliente</p>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select class="filtro-multiselect"  data-validation="required">
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
                                            <div class="col-2 mr-2">
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
            	
					
					<!--
						
						<ul class="aTabs aTabs-discounts-new aListClean aBdib aBdib-t">
						  <li class="active"><a href="#tab1" data-toggle="tab">Generación</a></li>
						  <li><a href="#tab2" data-toggle="tab">Información</a></li>
						  <li><a href="#tab3" data-toggle="tab">Condición</a></li>
						</ul>
						    
						<div id="" class="aTabcontent aShadow">
						  <div class="aPanel aBg-blanco fade in active" id="tab1">
						  	<div class="aP-40">
						   		<div class="aSection-commentary aBg-gris1 aB-gris aP-40">

						   			<div class="aBdib-m aMb-15">
						   				<div class="aC1">
						   					<label for="">Nombre</label>
						   				</div>
						   				<div class="aC2">
						   					<input type="text">
						   				</div>
						   			</div>

						   			<div class="aBdib-m aMb-15">
						   				<div class="aC1">
						   					<label for="">Descripción</label>
						   				</div>
						   				<div class="aC2">
						   					<textarea name="" id="" cols="30" rows="10"></textarea>
						   				</div>
						   			</div>

						   			<div class="aBdib-m aMb-15">
						   				<div class="aC1">
						   					<label for="">Código</label>
						   				</div>
						   				<div class="aC2">
						   					<input type="text" placeholder="VzWoCxysiu">
						   				</div>
						   			</div>

						   			<div class="aBdib-m aMb-15">
						   				<div class="aC1">
						   					<label for="">Estado</label>
						   				</div>
						   				<div class="aC2">
						   					<a class="aBdisp aBg-blanco aBg-gris2 aFc-texto aFz-16 aP-10-23 active" href="javascript:void(0)">Disponible</a>
						   					<a class="aBdisp aBg-blanco aBg-gris2 aFc-texto aFz-16 aP-10-23" href="javascript:void(0)">No Disponible</a>
						   				</div>
						   			</div>
						   		
						   			<div class="aBdib-m aMt-30 aTa-r aTa-c-767">
						   				<div class="aA-130 aDb-767 aM-x-auto aW-100-767 aMt-20-767">
						   					<a class="aButton-g-r aDb aP-10 aFz-14 aTa-c aDib-767 aP-10-50-767" href="">Guardar</a>
						   				</div>
						   			</div>

						   		</div>
						   	</div>
						  </div>
						  <div class="aPanel aBg-blanco fade" id="tab2">
						    	<div class="aP-40">
						     		<div class="aSection-commentary aBg-gris1 aB-gris aP-40">

						     			<div class="aBdib-m aMb-15">
						     				<div class="aC1">
						     					<label for="">Cliente</label>
						     				</div>
						     				<div class="aC2">
						     					<select name="" id="">
						     						<option value="">Extranjeros</option>
						     						<option value="">Nacionales</option>
						     					</select>
						     				</div>
						     			</div>

						     			<div class="aBdib-m aMb-15">
						     				<div class="aC1">
						     					<label for="">Validez</label>
						     				</div>
						     				<div class="aC2 aBdib-m">
						     					<div class="aW-49 aPr-10">
						     						<input class="aDate aI-fecha aW-100" type="text" id="" placeholder="mm/dd/yyyy">
						     					</div>
						     					<div class="aW-49 aPl-10">
						     						<input class="aDate aI-fecha aW-100" type="text" id="" placeholder="mm/dd/yyyy">
						     					</div>
						     				</div>
						     			</div>

						     			<div class="aBdib-m aMb-15">
						     				<div class="aC1">
						     					<label for="">Total disponible por cliente</label>
						     				</div>
						     				<div class="aC2">
						     					<select name="" id="">
						     						<option value="">1</option>
						     						<option value="">2</option>
						     					</select>
						     				</div>
						     			</div>

						     			<div class="aBdib-m aMb-15">
						     				<div class="aC1">
						     					<label for="">Total disponible por cliente</label>
						     				</div>
						     				<div class="aC2">
						     					<fieldset class="aFiltrosCheck aTa-l">
						     					  <input type="checkbox" id="check1">
						     					  <label for="check1">Para uso en MyperuGuide.com</label>
						     					  <input type="checkbox" id="check2">
						     					  <label for="check2">Para uso en el local del operador.</label>
						     					  <input type="checkbox" id="check3">
						     					  <label for="check3">Para uso en ambos.</label>
						     					  <input type="checkbox" id="check4">
						     					  <label for="check4">No acumulable con otras promociones</label>
						     					</fieldset>
						     				</div>
						     			</div>

						     		
						     			<div class="aBdib-m aMt-30 aTa-r aTa-c-767">
						     				<div class="aA-130 aDb-767 aM-x-auto aW-100-767 aMt-20-767">
						     					<a class="aButton-g-r aDb aP-10 aFz-14 aTa-c aDib-767 aP-10-50-767" href="">Guardar</a>
						     				</div>
						     			</div>

						     		</div>
						     	</div>
						  </div>
						  <div class="aPanel aBg-blanco fade" id="tab3">
						    	<div class="aP-40">
						     		<div class="aSection-commentary aBg-gris1 aB-gris aP-40">

						     			<div class="aBdib-m aMb-15">
						     				<div class="aC1">
						     					<label for="">Tipo de Descuento</label>
						     				</div>
						     				<div class="aC2">
						     					<fieldset class="aFiltrosCheck aTa-l">
						     					  <input type="checkbox" id="check5">
						     					  <label for="check5">Porcentaje</label>
						     					  <input type="checkbox" id="check6">
						     					  <label for="check6">Descuento en dinero</label>
						     					  <input type="checkbox" id="check7">
						     					  <label for="check7">Degustación</label>
						     					  <input type="checkbox" id="check8">
						     					  <label for="check8">Ninguno</label>
						     					</fieldset>
						     				</div>
						     			</div>

						     			<div class="aBdib-m aMb-15">
						     				<div class="aC1">
						     					<label for="">Valor</label>
						     				</div>
						     				<div class="aC2">
						     					<input type="text">
						     				</div>
						     			</div>

						     			<div class="aBdib-m aMb-15">
						     				<div class="aC1">
						     					<label for="">Condiciones del descuento</label>
						     				</div>
						     				<div class="aC2">
						     					<textarea name="" id="" cols="30" rows="10"></textarea>
						     				</div>
						     			</div>

						     		
						     			<div class="aBdib-m aMt-30 aTa-r aTa-c-767">
						     				<div class="aA-130 aDb-767 aM-x-auto aW-100-767 aMt-20-767">
						     					<a class="aButton-g-r aDb aP-10 aFz-14 aTa-c aDib-767 aP-10-50-767" href="">Guardar</a>
						     				</div>
						     			</div>

						     		</div>
						     	</div>
						  </div>
						</div>

-->
					</div>
					
				</div>
			</div>
		</div>

	</section>



	<?php include "footer.php"; ?>
</body>
</html>


<div class="aBdib-m aMb-15">
	<div class="aC1">
		<label for="">Country of Residence</label>
	</div>
	<div class="aC2">
		<select name="" id="">
			<option value="">Perú</option>
			<option value="">Colombia</option>
			<option value="">Argentina</option>
		</select>
	</div>
</div>

<fieldset class="aFiltrosCheck aTa-l">
  <input type="checkbox" id="check1">
  <label for="check1">I accept the terms and conditions of <strong>MyPeruGuide.com.</strong></label>
</fieldset>