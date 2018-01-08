<?php include "head.php" ?>
    <body>

<?php include "header-user.php"; ?>


	<section class="aPinterna aPresultados aPage-discounts formulario">
		<div class="aDiv-Banner aDiv-Banner-2" style="background: rgba(0, 0, 0, 0) url('img/banner2.jpg') no-repeat scroll center center / cover">
			<h3 class="aFz-34 aFc-blanco aTa-c aMb-0 text-center">Elegir Actividades</h3>
    </div>
  </section>
  <div class="clearfix background-gris pt-4 pb-4">
    <div class="container mt-5 mb-5 p-5 bg-white formulario">
      <div class="row">
        <div class="col-6 col-md-4 align-self-center">
          <p class="text-center text-md-left"><strong>Nombre:</strong> Loremp Impsum Text</p>
        </div>
        <div class="col-6 col-md-4 align-self-center">
          <p class="aFc-rojo text-center text-md-left">Código: VzWoCxysiu</p>
        </div>
        <div class="col-12 col-md-4 text-center  align-self-center">
          <a class="aButton-r-a shadowButton aP-15-25 aFz-16" href="#">RESUMEN DEL VIAJE</a>
        </div>
      </div>
      <div class="row mb-4 mt-4">
        <div class="col-12 col-md-2 text-center text-md-left align-self-center">
          <label>Destino</label>
        </div>
        <div class="col-12 col-md-3">
          <select class="filtro-multiselect">
            <option>Lima</option>
          </select>
        </div>
        <div class="col-12 col-md-1 text-center text-md-left align-self-center">
          <label>Fecha</label>
        </div>
        <div class="col-12 col-md-3">
          <input type="date">
        </div>
      </div>
      <div class="row mb-4 mt-4">
        <div class="col-12 col-md-2 text-center text-md-left align-self-center">
          <label>Tipo de Actividad</label>
        </div>
        <div class="col-12 col-md-7">
          <select class="filtro-multiselect">
            <option>Loremp Impsum</option>
          </select>
        </div>
      </div>
      <div class="row mb-4 mt-4">
          <div class="col-12 col-md-2 text-center text-md-left align-self-center">
            <label>Hora de Inicio</label>
          </div>
          <div class="col-5 col-md-1 pr-0">
            <select class="filtro-multiselect">
              <?php for ($i = 0 ; $i <= 23 ; $i++){?><option><?php echo $i; ?></option><?php } ?>
            </select>
          </div>
          <div class="d-flex pr-0 pl-0">
              <span class="d-inline-block mt-3 ml-1 mr-1">:</span>
            </div>
          <div class="col-5 col-md-1 pl-0">
            <select class="filtro-multiselect">
              <?php for ($i = 0 ; $i <= 59 ; $i++){?><option><?php echo $i; ?></option><?php } ?>
            </select>
          </div>
          <div class="col-12 col-md-2 text-center text-md-left align-self-center">
            <label>Hora de Culminación</label>
          </div>
          <div class="col-5 col-md-1 pr-0 align-self-center ">
            <select class="filtro-multiselect">
              <?php for ($i = 0 ; $i <= 23 ; $i++){?><option><?php echo $i; ?></option><?php } ?>
            </select>
          </div>
          <div class="d-flex pr-0 pl-0">
            <span class="d-inline-block mt-3 ml-1 mr-1">:</span>
          </div>
          <div class="col-5 col-md-1 pl-0">
            <select class="filtro-multiselect">
              <?php for ($i = 0 ; $i <= 59 ; $i++){?><option><?php echo $i; ?></option><?php } ?>
            </select>
          </div>
        </div>
        <div class="row mb-4 mt-4">
          <div class="col-12 col-md-3 text-center text-md-left mb-1 mb-md-0">
            <span class="aButton-r-a shadowButton aP-15-25 mr-1 mb-2 aFz-16 d-inline-block">DIA 1</span> <span class="d-inline-block">21 mar 2017</span>
          </div>
          <div class="col-12 col-md-2 text-center text-md-left mb-1 mb-md-0 align-self-center">
            <p><span class="aFc-negro">From:</span> 15:35</p>
            <p><span class="aFc-negro">To:</span> 17:35</p>
          </div>
          <div class="col-12 col-md-4 text-center text-md-left align-self-center mb-1 mb-md-0">
            <p>Traslado Aeropuerto - Hotel en Miraflores</p>
            <p>Servicio Privado Operador XXX</p>
          </div>
          <div class="col-12 col-md-3 text-center text-lg-right mb-1 mb-md-0">
            <a class="aButton-r-a shadowButton aP-15-25 aFz-16" href="#" data-toggle="modal" data-target="#saveActivity">SAVE ACTIVITY</a>
          </div>


          <div class="modal fade modalCustom" id="saveActivity" tabindex="-1" role="dialog" aria-labelledby="saveActivtylabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">                  
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="h5 text-center">Activity Added. Now, you can add another activity for the same day or save the day and start adding activities for the following day.</p>
                
                </div>
              </div> 
            </div>
            <div class="overlay-modal" data-dismiss="modal" aria-label="Close">
          	</div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-12 col-md-4">
             <div class="aInterior aShadow aBg-blanco aEfect clearfix">
                <a href="#">
                <div class="aDi aHidden">
                  <img src="img/resultados-descuentos-1.jpg" alt="" title=""/>
                  <div class="etiqueta-roja">
                    <div class="float-right" style="margin-left: -20px;"><span class="precio">$ 209</span></div>
                    <div class="float-right"><span class="img">From</span></div>  
                  </div>
                  <div class="aNombre">
                    <h4>Tours</h4>
                    <h3>Lorem Ipsum Text</h3>
                  </div>
                </div>
                </a>
                <div class="aDt">
                  <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto sera reemplazado. </p>
                  <div class="aPie aBdib-t aMt-20 row">
                    <div class="aLugar col-12 col-lg-6"><p>MIRAFLORES, LIMA</p></div>
                    <div class="aValoracion col-12 col-lg-6">
                      <span class="aRaty aRaty-4"></span>
                      <span class="aCant">(8 valoraciones)</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-lg-6 text-center mb-2">
                      <a class="aButton-gl-r shadowButton aPv-10 w-100 aFz-16 aBpopup" href="#aPopup-informacion">Información</a>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                      <a class="aButton-r-a shadowButton aPv-10 w-100 aFz-16" href="#">Agregar</a>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
            <div class="col-12 col-md-4">
               <div class="aInterior aShadow aBg-blanco aEfect clearfix">
                <a href="#">
                <div class="aDi aHidden">
                  <img src="img/resultados-descuentos-1.jpg" alt="" title=""/>
                  <div class="etiqueta-roja">
                    <div class="float-right" style="margin-left: -20px;"><span class="precio">$ 209</span></div>
                    <div class="float-right"><span class="img">From</span></div>  
                  </div>
                  <div class="aNombre">
                    <h4>Tours</h4>
                    <h3>Lorem Ipsum Text</h3>
                  </div>
                </div>
                </a>
                <div class="aDt">
                  <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto sera reemplazado. </p>
                  <div class="aPie aBdib-t aMt-20 row">
                    <div class="aLugar col-12 col-lg-6"><p>MIRAFLORES, LIMA</p></div>
                    <div class="aValoracion col-12 col-lg-6">
                      <span class="aRaty aRaty-4"></span>
                      <span class="aCant">(8 valoraciones)</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-lg-6 text-center mb-2">
                      <a class="aButton-gl-r shadowButton aPv-10 w-100 aFz-16 aBpopup" href="#aPopup-informacion">Información</a>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                      <a class="aButton-r-a shadowButton aPv-10 w-100 aFz-16" href="#">Agregar</a>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
            <div class="col-12 col-md-4">
               <div class="aInterior aShadow aBg-blanco aEfect clearfix">
                <a href="#">
                <div class="aDi aHidden">
                  <img src="img/resultados-descuentos-1.jpg" alt="" title=""/>
                  <div class="etiqueta-roja">
                    <div class="float-right" style="margin-left: -20px;"><span class="precio">$ 209</span></div>
                    <div class="float-right"><span class="img">From</span></div>  
                  </div>
                  <div class="aNombre">
                    <h4>Tours</h4>
                    <h3>Lorem Ipsum Text</h3>
                  </div>
                </div>
                </a>
                <div class="aDt">
                  <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto sera reemplazado. </p>
                  <div class="aPie aBdib-t aMt-20 row">
                    <div class="aLugar col-12 col-lg-6"><p>MIRAFLORES, LIMA</p></div>
                    <div class="aValoracion col-12 col-lg-6">
                      <span class="aRaty aRaty-4"></span>
                      <span class="aCant">(8 valoraciones)</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-lg-6 text-center mb-2">
                      <a class="aButton-gl-r shadowButton aPv-10 w-100 aFz-16 aBpopup" href="#aPopup-informacion">Información</a>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                      <a class="aButton-r-a shadowButton aPv-10 w-100 aFz-16" href="#">Agregar</a>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
        </div>
        <div class="row mb-4">
          <div class="col-12 col-md-4">
             <div class="aInterior aShadow aBg-blanco aEfect clearfix">
                <a href="#">
                <div class="aDi aHidden">
                  <img src="img/resultados-descuentos-1.jpg" alt="" title=""/>
                  <div class="etiqueta-roja">
                    <div class="float-right" style="margin-left: -20px;"><span class="precio">$ 209</span></div>
                    <div class="float-right"><span class="img">From</span></div>  
                  </div>
                  <div class="aNombre">
                    <h4>Tours</h4>
                    <h3>Lorem Ipsum Text</h3>
                  </div>
                </div>
                </a>
                <div class="aDt">
                  <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto sera reemplazado. </p>
                  <div class="aPie aBdib-t aMt-20 row">
                    <div class="aLugar col-12 col-lg-6"><p>MIRAFLORES, LIMA</p></div>
                    <div class="aValoracion col-12 col-lg-6">
                      <span class="aRaty aRaty-4"></span>
                      <span class="aCant">(8 valoraciones)</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-lg-6 text-center mb-2">
                      <a class="aButton-gl-r shadowButton aPv-10 w-100 aFz-16 aBpopup" href="#aPopup-informacion">Información</a>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                      <a class="aButton-r-a shadowButton aPv-10 w-100 aFz-16" href="#">Agregar</a>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
            <div class="col-12 col-md-4">
               <div class="aInterior aShadow aBg-blanco aEfect clearfix">
                <a href="#">
                <div class="aDi aHidden">
                  <img src="img/resultados-descuentos-1.jpg" alt="" title=""/>
                  <div class="etiqueta-roja">
                    <div class="float-right" style="margin-left: -20px;"><span class="precio">$ 209</span></div>
                    <div class="float-right"><span class="img">From</span></div>  
                  </div>
                  <div class="aNombre">
                    <h4>Tours</h4>
                    <h3>Lorem Ipsum Text</h3>
                  </div>
                </div>
                </a>
                <div class="aDt">
                  <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto sera reemplazado. </p>
                  <div class="aPie aBdib-t aMt-20 row">
                    <div class="aLugar col-12 col-lg-6"><p>MIRAFLORES, LIMA</p></div>
                    <div class="aValoracion col-12 col-lg-6">
                      <span class="aRaty aRaty-4"></span>
                      <span class="aCant">(8 valoraciones)</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-lg-6 text-center mb-2">
                      <a class="aButton-gl-r shadowButton aPv-10 w-100 aFz-16 aBpopup" href="#aPopup-informacion">Información</a>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                      <a class="aButton-r-a shadowButton aPv-10 w-100 aFz-16" href="#">Agregar</a>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="aInterior aShadow aBg-blanco aEfect clearfix">
                <a href="#">
                <div class="aDi aHidden">
                  <img src="img/resultados-descuentos-1.jpg" alt="" title=""/>
                  <div class="etiqueta-roja">
                    <div class="float-right" style="margin-left: -20px;"><span class="precio">$ 209</span></div>
                    <div class="float-right"><span class="img">From</span></div>  
                  </div>
                  <div class="aNombre">
                    <h4>Tours</h4>
                    <h3>Lorem Ipsum Text</h3>
                  </div>
                </div>
                </a>
                <div class="aDt">
                  <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto sera reemplazado. </p>
                  <div class="aPie aBdib-t aMt-20 row">
                    <div class="aLugar col-12 col-lg-6"><p>MIRAFLORES, LIMA</p></div>
                    <div class="aValoracion col-12 col-lg-6">
                      <span class="aRaty aRaty-4"></span>
                      <span class="aCant">(8 valoraciones)</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-lg-6 text-center mb-2">
                      <a class="aButton-gl-r shadowButton aPv-10 w-100 aFz-16 aBpopup" href="#aPopup-informacion">Información</a>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                      <a class="aButton-r-a shadowButton aPv-10 w-100 aFz-16" href="#">Agregar</a>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
        </div>
        <div class="aD-paginador aListClean aMt-20 aMb-30-991">
          <ul>
            <li><a class="active" href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
          </ul>
        </div>
        <div class="row justify-content-end">
          <div class="d-flex align-self-end mr-3">
            <a class="d-inline-block aButton-g-r shadowButton aP-15-25 aFz-16" href="#">PREVIOUS</a>
          </div><!--
          <div class="d-flex align-self-end mr-3">
            <a class="d-inline-block aButton-r-a shadowButton aP-15-25 aFz-16" href="#">GUARDAR ESTE DIA</a>
          </div>-->
        </div>
      </div>
    </div>
  </div>


<?php include "footer.php"; ?>
<div id="aPopup-informacion" class="aPage-detail w-700px zoom-anim-dialog aPopup-content mfp-hide">
  <div class="aD2 arcordion-resp">
    <ul class="aTabs nav nav-tabs aListClean aTable-m aMb-25 aShadow aDn-767">
      <li><a class="active" href="#Información" data-toggle="tab">Información</a></li>
      <li><a href="#LaCarta" data-toggle="tab">La Carta</a></li>
      <li><a href="#Cocteleria" data-toggle="tab">Coctelería</a></li>
      <li><a href="#Ubicacion" data-toggle="tab">Ubicacion</a></li>
      <li><a href="#Comentarios" data-toggle="tab">Comentarios</a></li>
    </ul>




    <div id="" class="aTabcontent tab-content aAcordeon-x">


      <div class="aPanel aShadow tab-pane fade in active" id="Información">
        <div class="aAcord-x">
          <a href="#" class="aAtitulo-x">Información<span class="toggle-icon"></span></a>
          <div class="aAcontent-x">
            <div class="aD-carousel-contenido aBg-blanco">
              <div class="aCarousel-Contenido">
                <div class="aSlide">
                  <img src="img/img-carousel-grande-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-grande-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-grande-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-grande-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-grande-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-grande-2.jpg" alt="" title=""/>
                </div>
              </div>
            </div>

            <div class="aD-carousel-nav aBg-blanco aTable-m">
              <a href="javascript:void(0);" class="aButton-Carousel aButton-Anterior"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
              <div class="aCarousel-Nav aCarousel-general">
                <div class="aSlide">
                  <img src="img/img-carousel-chico-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-chico-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-chico-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-chico-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-chico-2.jpg" alt="" title=""/>
                </div>
                <div class="aSlide">
                  <img src="img/img-carousel-chico-2.jpg" alt="" title=""/>
                </div>
              </div>
              <a href="javascript:void(0);" class="aButton-Carousel aButton-Siguiente"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>

            <div class="aP-30-35 aBg-blanco aTa-j aP-30-20-767">
              <h3 class="aFz-22 aFc-negro2">Restaurant Lorem</h3>
              <div class="aA-55 aH-2 aBg-rojo aMt-20 aMb-20"></div>
              <p><strong>Text:</strong> No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
              <p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene raices en una pieza cl´sica de la literatura del Latin, que data del año 45.</p>
              <p><strong>Restaurant Category:</strong> Food court in common area, restaurants after passing security control, bookstores, handcraft stores, locker storage at a cost, pharmacy, Internet shop, coffee shops.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="aPanel aShadow tab-pane fade" id="LaCarta">
        <div class="aAcord-x">
          <a href="#" class="aAtitulo-x">La Carta<span class="toggle-icon"></span></a>
          <div class="aAcontent-x">
            <div class="aP-30-35 aBg-blanco aP-30-20-767">
              <div class="aTa-j">
                <h3 class="aFz-22 aFc-negro2">Puro Perú</h3>
                <div class="aA-55 aH-2 aBg-rojo aMt-20 aMb-20"></div>
                <p><strong>Text:</strong> No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset".</p>
              </div>
              <div class="aD-circulos aBdib-t">
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/carta-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/carta-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/carta-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/carta-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/carta-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/carta-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/carta-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/carta-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/carta-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
              </div>
              <div class="aD-paginador aListClean aMt-20 aMb-30-991">
                <ul>
                  <li><a class="active" href="">1</a></li>
                  <li><a href="">2</a></li>
                  <li><a href="">3</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="aPanel aShadow tab-pane fade" id="Cocteleria">
        <div class="aAcord-x">
          <a href="#" class="aAtitulo-x">Coctelería<span class="toggle-icon"></span></a>
          <div class="aAcontent-x">
            <div class="aP-30-35 aBg-blanco aP-30-20-767">
              <div class="aTa-j">
                <h3 class="aFz-22 aFc-negro2">Puro Perú</h3>
                <div class="aA-55 aH-2 aBg-rojo aMt-20 aMb-20"></div>
                <p><strong>Text:</strong> No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset".</p>
              </div>
              <div class="aD-circulos aBdib-t">
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/coctel-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/coctel-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/coctel-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/coctel-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/coctel-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/coctel-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/coctel-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/coctel-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
                <div class="aD-circulo">
                  <div class="aInterior">
                    <img src="img/coctel-1.jpg" alt="" title=""/>
                    <h4 class="aFz-17 aFc-negro2 aMb-10">Lorem Ipsum text sera reemplazado</h4>
                    <p class="aFz-13 aFs-i">(ingredientes: lorem ipsum texto falso de prueba)</p>
                    <span class="aPrecio aFz-18 aFc-negro2">S/. 16.00</span>
                  </div>
                </div>
              </div>
              <div class="aD-paginador aListClean aMt-20 aMb-30-991">
                <ul>
                  <li><a class="active" href="">1</a></li>
                  <li><a href="">2</a></li>
                  <li><a href="">3</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="aPanel aShadow tab-pane fade" id="Ubicacion">
        <div class="aAcord-x">
          <a href="#" class="aAtitulo-x">Ubicación<span class="toggle-icon"></span></a>
          <div class="aAcontent-x">
            <div class="aMapa">
              <div id="aMapa"></div>
            </div>
            <div class="aP-30-35 aBg-blanco aTa-j aP-30-20-767">
              <h3 class="aFz-22 aFc-negro2">Restaurant Nombre</h3>
              <div class="aA-55 aH-2 aBg-rojo aMt-20 aMb-20"></div>
              <p><strong>Location :</strong> Simplemente son los textos  de relleno de las imprentas y archivos.</p>
              <p><strong>Distance from Lima :</strong>No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset".</p>
              <p>Las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Ipsum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="aPanel aShadow tab-pane fade" id="Comentarios">
        <div class="aAcord-x">
          <a href="#" class="aAtitulo-x">Comentarios<span class="toggle-icon"></span></a>
          <div class="aAcontent-x">
            <div class="aP-30-35 aBg-blanco aTa-j aP-30-20-767">
              <div class="aBg-gris1 aB-gris aP-30-45 aTable-m">
                <div class="aPr-10 aPr-0-767 aDb-767 aMb-10-767 aTa-c-767"><p class="aMb-0 aFc-negro2">Your opinion is important</p></div>
                <div class="aA-110 aDb-767 aM-x-auto-767">
                  <a class="aButton-commentary aButton-g-r aDb aP-10 aFz-14 aTa-c" href="javascript:void(0)">Commentary</a>
                </div>
              </div>

              <div class="aSection-commentary aBg-gris1 aB-gris aP-30-45 aDn aP-30-20-767">

                <div class="aBdib-m aMb-15">
                  <div class="aC1">
                    <label for="">Rate your Experience</label>
                  </div>
                  <div class="aC2">
                    <span class="aRaty aRaty-4"></span>
                  </div>
                </div>

                <div class="aBdib-m aMb-15">
                  <div class="aC1">
                    <label for="">First Name</label>
                  </div>
                  <div class="aC2">
                    <input type="text">
                  </div>
                </div>

                <div class="aBdib-m aMb-15">
                  <div class="aC1">
                    <label for="">Last Name</label>
                  </div>
                  <div class="aC2">
                    <input type="text">
                  </div>
                </div>

                <div class="aBdib-m aMb-15">
                  <div class="aC1">
                    <label for="">E-Mail</label>
                  </div>
                  <div class="aC2">
                    <input type="text">
                  </div>
                </div>

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

                <div class="aBdib-m aMb-15">
                  <div class="aC1">
                    <label for="">Your review is about</label>
                  </div>
                  <div class="aC2">
                    <input type="text" placeholder="Hotel Cardoso">
                  </div>
                </div>

                <div class="aBdib-m aMb-15">
                  <div class="aC1">
                    <label for="">Title of your review</label>
                  </div>
                  <div class="aC2">
                    <input type="text">
                  </div>
                </div>

                <div class="aBdib-m aMb-15">
                  <div class="aC1">
                    <label for="">Write your review</label>
                  </div>
                  <div class="aC2">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                  </div>
                </div>

                <fieldset class="aFiltrosCheck aTa-l">
                  <input type="checkbox" id="check1">
                  <label for="check1">I accept the terms and conditions of <strong>MyPeruGuide.com.</strong></label>
                </fieldset>
                
                <div class="aBdib-m aMt-30 aTa-r aTa-c-767">
                  <div class="aA-110 aMr-10 aTa-r aTa-c-430 aW-100-430 aM-0-430 aMb-10-430">
                    <img src="img/captcha.png" alt="" title=""/>
                  </div>
                  <div class="aA-160 aMr-10 aM-0-430">
                    <input type="text" placeholder="Código Captcha">
                  </div>
                  <div class="aA-130 aDb-767 aM-x-auto aW-100-767 aMt-20-767">
                    <a class="aButton-g-r aDb aP-10 aFz-14 aTa-c aDib-767 aP-10-50-767" href="">Enviar</a>
                  </div>
                </div>

              </div>

              <div class="aD-comentario">
                <h4 class="aFz-17 aFc-negro2 aMb-10">Titulo del comentario</h4>
                <span class="aDb aRaty aRaty-4"></span>
                <div class="aBdib-m aMb-10">
                  <img class="aBandera" src="img/bandera.jpg" alt="" title=""/>
                  <span class="aI-user aFz-15">Nombre usuario</span>
                </div>
                <p>Esta es una versión muy agradable del clásico de V. He estado tocando la guitarra desde hace más de 20 años y he tenido muchos Gibson V.</p>
                <span class="aFecha aDb aFz-14 aFc-negro2">20 de diciembre 2016</span>
              </div>
              <div class="aD-comentario">
                <h4 class="aFz-17 aFc-negro2 aMb-10">Titulo del comentario</h4>
                <span class="aDb aRaty aRaty-4"></span>
                <div class="aBdib-m aMb-10">
                  <img class="aBandera" src="img/bandera.jpg" alt="" title=""/>
                  <span class="aI-user aFz-15">Nombre usuario</span>
                </div>
                <p>Esta es una versión muy agradable del clásico de V. He estado tocando la guitarra desde hace más de 20 años y he tenido muchos Gibson V.</p>
                <span class="aFecha aDb aFz-14 aFc-negro2">20 de diciembre 2016</span>
              </div>
              <div class="aD-comentario">
                <h4 class="aFz-17 aFc-negro2 aMb-10">Titulo del comentario</h4>
                <span class="aDb aRaty aRaty-4"></span>
                <div class="aBdib-m aMb-10">
                  <img class="aBandera" src="img/bandera.jpg" alt="" title=""/>
                  <span class="aI-user aFz-15">Nombre usuario</span>
                </div>
                <p>Esta es una versión muy agradable del clásico de V. He estado tocando la guitarra desde hace más de 20 años y he tenido muchos Gibson V.</p>
                <span class="aFecha aDb aFz-14 aFc-negro2">20 de diciembre 2016</span>
              </div>
              <div class="aD-comentario">
                <h4 class="aFz-17 aFc-negro2 aMb-10">Titulo del comentario</h4>
                <span class="aDb aRaty aRaty-4"></span>
                <div class="aBdib-m aMb-10">
                  <img class="aBandera" src="img/bandera.jpg" alt="" title=""/>
                  <span class="aI-user aFz-15">Nombre usuario</span>
                </div>
                <p>Esta es una versión muy agradable del clásico de V. He estado tocando la guitarra desde hace más de 20 años y he tenido muchos Gibson V.</p>
                <span class="aFecha aDb aFz-14 aFc-negro2">20 de diciembre 2016</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
  <div class="overlay-tour" data-dismiss="modal" aria-label="Close">
	</div>
    </body>
</html>



<script>
  function initialize() {
      var map;
      var mapOptions = {
          zoom: 16,
          center: new google.maps.LatLng(-12.122060, -77.031322),
          disableUi: true,
          scrollwheel: false
      };
      map = new google.maps.Map(document.getElementById('aMapa'),
          mapOptions);
      var image_central = "img/pin-mapa.png";
      var myLatlng = new google.maps.LatLng(-12.122060, -77.031322);

      var contentString = '<h3 class="aFc-rojo aFz-18 aMb-5">Dirección</h3><p class="aMb-0">Lorem ipsum dolor siamet, consectetur adipisicing elit.</p>';

      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var marker_1 = new google.maps.Marker({
          position: myLatlng,
          map: map,
          icon: image_central
      });

      google.maps.event.addListener(marker_1, 'click', function() {
          infowindow.open(map,marker_1);
      });
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
