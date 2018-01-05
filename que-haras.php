<?php include "head.php" ?>
    <body>

<?php include "header-user.php"; ?>


	<section class="aPinterna aPresultados aPage-discounts formulario">
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/banner2.jpg') no-repeat scroll center center / cover">
			<h3 class="aFz-34 aFc-blanco aTa-c aMb-0 text-center">¿Que harás?</h3>
		</div>
    <div class="background-gris">
      <div class="container pt-5 pb-5">
        <div class="bg-white p-5 formulario">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2 class="aFc-negro">¿De dónde y adónde irás?</h2>
                </div>
                <div class="col-12 col-md-6">
                    <p class="aFc-rojo text-right">Código: VzWoCxysiu</p>
                </div>
            </div>
            <div class="borde1 mt-3 mb-3"></div>
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <label>¿De qué país?</label>
                    <input type="text">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label>Ciudad</label>
                    <input type="text">      
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <label>¿A qué país?</label>
                    <input type="text">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label>Ciudad</label>
                    <input type="text">      
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <label>Medio de transporte</label>
                    <select class="filtro-multiselect">
                        <option>Bus</option>
                        <option>Avion</option>
                        <option>Automovil</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label>Compañia</label>
                    <input type="text">      
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <label>Servicio de bus</label>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label>Fecha y hora de salida</label>
                </div>
                <div class="col-6">
                        <label>Fecha y hora de LLegada</label>
                    </div>
            </div>
            <div class="row mb-4">
                <div class="col-6">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="date">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row no-gutters">
                                <div class="col-5 col-md-5 pr-0">
                                    <select class="filtro-multiselect">
                                        <?php for ($i = 0 ; $i <= 23 ; $i++){?><option><?php echo $i; ?></option><?php } ?>
                                    </select>
                                </div>
                                <div class="d-flex pr-0 pl-0">
                                    <span class="d-inline-block mt-3 ml-1 mr-1">:</span>
                                </div>
                                <div class="col-5 col-md-5 pl-0">
                                    <select class="filtro-multiselect">
                                        <?php for ($i = 0 ; $i <= 59 ; $i++){?><option><?php echo $i; ?></option><?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="date">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row no-gutters">
                                <div class="col-5 pr-0 align-self-center ">
                                    <select class="filtro-multiselect">
                                        <?php for ($i = 0 ; $i <= 23 ; $i++){?><option><?php echo $i; ?></option><?php } ?>
                                    </select>
                                </div>
                                <div class="d-flex pr-0 pl-0">
                                    <span class="d-inline-block mt-3 ml-1 mr-1">:</span>
                                </div>
                                <div class="col-5 pl-0">
                                    <select class="filtro-multiselect">
                                        <?php for ($i = 0 ; $i <= 59 ; $i++){?><option><?php echo $i; ?></option><?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="d-inline-block" src="img/play-btn.png">
                    <p class="d-inline-block">Cómo usar la herramienta</p>
                </div>
                <div class="col-12 col-md-6 text-right">
                    <a class="aButton-r-a shadowButton aP-15-25 aFz-16" href="#">NEXT</a>
                </div>
            </div>
        </div>
      </div>
    </div>


	</section>


<?php include "footer.php"; ?>
    </body>
</html>
