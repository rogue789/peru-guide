<?php include "head.php" ?>
<body>
	<?php include "header.php"; ?>



	<section class="aPinterna aPage-providers-section aPage-providers-perfil checkout">
		
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/banner-seccion-operador.jpg') no-repeat scroll center center / cover">
			<div class="aWrapper">
				<h3 class="aFz-34 aFc-blanco aTa-ci aMb-0">Checkout</h3>
			</div>
		</div>

		<div class="aBg-gris1 aPt-35 aPb-35 formulario">
			<div class="aWrapper">
				<div class="aTable-t aDb-991">

					<div class="aDiv">
						<div class="aP-30 aBg-blanco aShadow aP-30-20-767">
                            <div class="background-blanco pl-3 pr-3 pt-3 pb-3">
                                <div class="row">
                                   <div class="proceso">
                                       <a href="checkout.php">01 Resumen</a>
                                       <a href="checkout-login.php">02 Login</a>
                                       <a class="activo"href="checkout-pay.php">03 Pay</a> 
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <div class="nav flex-column nav-pills pills-red" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-tarjeta-tab" data-toggle="pill" href="#v-pills-tarjeta" role="tab" aria-controls="v-pills-tarjeta" aria-selected="true">Tarjeta de Credito</a>
                                            <a class="nav-link" id="v-pills-paypal-tab" data-toggle="pill" href="#v-pills-paypal" role="tab" aria-controls="v-pills-paypal" aria-selected="false">Paypal</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-tarjeta" role="tabpanel" aria-labelledby="v-pills-tarjeta-tab">
                                                <h3 class="mt-md-0 mt-3">COMPLETA PARA TERMINAR TU COMPRA</h3>
                                                <p>Te encuentras en una zona segura</p>
                                                <img src="img/tarjetas.jpg">
                                                <form class="mt-3">
                                                    <label><p>Nombre y apellido<span class="aFc-rojo">*</span> <span class="gris">(como tu tarjeta)</span></p></label>
                                                    <input type="text">
                                                    <label><p>Numero de tarjeta<span class="aFc-rojo">*</span></p></label>
                                                    <input type="number">
                                                    <div class="row no-gutters">
                                                        <div class=" col-md-3">
                                                            <label><p>Mes de vencimiento<span class="aFc-rojo">*</span></p></label>
                                                            <select class="filtro-multiselect">
                                                                <option>Enero</option>
                                                                <option>Febrero</option>
                                                                <option>Marzo</option>
                                                                <option>Abril</option>
                                                                <option>Mayo</option>
                                                                <option>Junio</option>
                                                                <option>Julio</option>
                                                                <option>Agosto</option>
                                                                <option>Septiembre</option>
                                                                <option>Octubre</option>
                                                                <option>Noviembre</option>
                                                                <option>Diciembre</option>
                                                            </select>
                                                        </div>
                                                        <div class=" col-md-3">
                                                            <label><p>Año de vencimiento<span class="aFc-rojo">*</span></p></label>
                                                            <select class="filtro-multiselect">
                                                                <?php
                                                                $año = date('Y');
                                                                $año_final = $año + 10;
                                                                $i = $año;
                                                                while ( $i <= $año_final ):
                                                                    echo '<option>';
                                                                    echo $i;
                                                                    echo '</option>';
                                                                    $i++;
                                                                endwhile; ?> 
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label><p>Codigo de seguridad<span class="aFc-rojo">*</span> <a id="cvc-code" data-toggle="tooltip" data-placement="right" data-html="true" title="<img class='cvc' src='http://wataweb.info/peruguide-2/img/cvc-code.png'>"><i class="fa fa-info-circle" aria-hidden="true"></i></a></p></label>
                                                            <input type="number">
                                                        </div>
                                                    </div>
                                                    <div class="row no-gutters">
                                                    </div>
                                                    <hr>
                                                    <h4 class="mb-3">Billing Adress</h4>
                                                    <label><p>Street Adress<span class="aFc-rojo">*</span></p></label>
                                                    <input type="text">
                                                    <label><p>Apartament</p></label>
                                                    <input type="text">
                                                    <label><p>State<span class="aFc-rojo">*</span></p></label>
                                                    <input type="text">
                                                    <label><p>Zip Code<span class="aFc-rojo">*</span></p></label>
                                                    <input type="number">
                                                    <label><p>Country<span class="aFc-rojo">*</span></p></label>
                                                    <select class="filtro-select">
                                                        <option>Perú</option>
                                                    </select>
                                                    <label><p>Phone Number<span class="aFc-rojo">*</span></p></label>
                                                    <input type="tel">
                                                    <div class="clear"></div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-paypal" role="tabpanel" aria-labelledby="v-pills-paypal-tab">
                                                <form class="mt-3">
                                                    <div class="text-center"><a class="aButton-r-a shadowButton aP-15-25 aFz-16 aMb-30 mx-auto" href="#">Conectar con Paypal</a></div>
                                                    <hr>
                                                    <h4 class="mb-3">Billing Adress</h4>
                                                    <label><p>Street Adress<span class="aFc-rojo">*</span></p></label>
                                                    <input type="text">
                                                    <label><p>Apartament</p></label>
                                                    <input type="text">
                                                    <label><p>State<span class="aFc-rojo">*</span></p></label>
                                                    <input type="text">
                                                    <label><p>Zip Code<span class="aFc-rojo">*</span></p></label>
                                                    <input type="number">
                                                    <label><p>Country<span class="aFc-rojo">*</span></p></label>
                                                    <select class="filtro-select">
                                                        <option>Perú</option>
                                                    </select>
                                                    <label><p>Phone Number<span class="aFc-rojo">*</span></p></label>
                                                    <input type="tel">
                                                    <div class="clear"></div>
                                                </form>                                                
                                            </div>
                                           
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-6"><div class="float-right"><a class="aButton-g-r aP-15-25 aFz-16 aMb-30 shadowButton mr-2" href="#">Continue Shopping</a> <a class="aButton-r-a shadowButton aP-15-25 aFz-16 aMb-30" href="#">NEXT</a></div></div>
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


