<?php include "head.php" ?>

	<body>

<?php include "header.php"; ?>


				<section class="aNav-home">
					<div class="aWrapper">
						<div class="aBdib-m">
							<div class="aW-50 aTa-l aDn-767">
								<div class="aCel d-inline-block">
									<i class="sprite sprite-celular-rojo"></i>
									<span class="aFz-17 aFc-blanco aFf-M aMl-5">
										<select class="numeros-select">
											<option data-content="<a href='tel:943 386 641'><img src='img/pe.png' style='margin: 0 10px;'>943 386 641</a>">943 386 641</option>
											<option data-content="<img src='img/pe.png' style='margin: 0 10px;'>943 386 641">943 286 641</option>
											<option data-content="<img src='img/pe.png' style='margin: 0 10px;'>943 386 641">943 286 641</option>
										</select>
									</span>
								</div>
								<div class="aEmail d-inline-block aMl-30 pt-2">
									<i class="d-inline-block sprite sprite-carta-rojo"></i>
									<span class=" aFz-17 aFc-blanco aMl-5 aFw-400">933 162 681</span>
								</div>
							</div>

							<div class="aW-50 aTa-r aW-100-767">
								<div class="aBdib-m mt-2">
									<a class="aFz-17 aFc-blanco aFf-R aBpopup" href="#aPopup-Login">Iniciar Seción</a>
									<div class="aA-1 aH-14 aBg-blanco aMl-15 aMr-15"></div>
									<a class="aFz-17 aFc-blanco aFf-R aBpopup" href="#aPopup-Register">Regístrate</a>
									<a class="aButton-Menu aMl-50" data-toggle="modal" data-target="#menu-principal" href="#"
									><i class="fa fa-bars" aria-hidden="true"></i></a>

								</div>
							</div>
						</div>
					</div>
				</section>

		    <main class="aMain">
					<section class="aSection1" style="background: rgba(0, 0, 0, 0) url('img/home-sec1-bg.jpg') no-repeat scroll center center / cover">

						<div class="aWrapper">
							<div class="aTa-c"><img src="img/home-sec1-logo.png" alt="" title=""/></div>
							<div class="aCaption aPl-35 aMt-25 aPl-0-767">
								<h2 class="aFz-37 aFf-UL aFc-blanco aMb-15 aTa-c-767">Info, tips & reviews</h2>
								<h3 class="aFz-48 aFf-L aFc-blanco aMb-0 aPl-150 aTa-c-767 aPl-0-767">Travel to Perú</h3>
							</div>
						</div>

						<div class="aBuscador-principal">

								<div class="aWrapper">
									<ul id="tab-principal" class="justify-content-center nav aTabs aListClean aBdib aBdib-t nav-tabs" role="tablist">
										<li><a id="accommodations-tab" href="#tab1" data-toggle="pill" role="tab" aria-controls="accommodations" aria-selected="false">ACCOMMODATIONS</a></li>
										<li class="nav-item"><a id="restaurants-tab" href="#tab2" data-toggle="pill" role="tab" aria-controls="restaurants" aria-selected="false">RESTAURANTS</a></li>
										<li><a id="attractions-tab" href="#tab3" data-toggle="pill" role="tab" aria-controls="attractions" aria-selected="false">ATTRACTIONS</a></li>
										<li><a class="active" id="tours-tab" href="#tab4" data-toggle="pill" role="tab" aria-controls="tours" aria-selected="true">TOURS</a></li>
										<li><a id="providers-tab" href="#tab5" data-toggle="pill" role="tab" aria-controls="providers" aria-selected="false">PROVIDERS</a></li>
									</ul>
								</div>

								<div class="aBg-blanco">
									<div class="aWrapper">
										<div id="" class="aTabcontent aBg-blanco tab-content">
											<div class="aPanel tab-pane fade" role="tabpanel" id="tab1" aria-labelledby="accommodations-tab">
												<div class="aBdib-t aTa-c">
													<div class="aInput1">
														<select name="" id="">
															<option value="">Name of the Region</option>
															<option value="">Lima</option>
															<option value="">Arequipa</option>
														</select> 
													</div>
													<div class="aInput1">
														<select name="" id="">
															<option value="">Miraflores</option>
															<option value="">San isidro</option>
															<option value="">Downtown Lima</option>
														</select>
													</div>
													<div class="aInput1">
														<select name="" id="">
															<option value="">Accommodation Category</option>
															<option value="">Youth Hostel / Backpacker</option>
															<option value="">Bed & Breakfast</option>
														</select>
													</div>
													<a class="aButt" href="">Buscar</a>
												</div>
											</div>
											<div class="aPanel tab-pane fade" role="tabpanel" id="tab2" aria-labelledby="restaurants-tab">
												<div class="aBdib-t aTa-c">
													<div class="aInput1">
														<select name="" id="">
															<option value="">Name of the Region</option>
															<option value="">Lima</option>
															<option value="">Arequipa</option>
														</select>
													</div>
													<div class="aInput1">
														<select name="" id="">
															<option value="">Miraflores</option>
															<option value="">San isidro</option>
															<option value="">Downtown Lima</option>
														</select>
													</div>
													<div class="aInput1">
														<select name="" id="">
															<option value="">Type of Restaurant</option>
															<option value="">Ethnic (Peruvian Food)</option>
															<option value="">Fast Food</option>
															<option value="">Casual Dining</option>
															<option value="">Gourmet</option>
														</select>
													</div>
													<a class="aButt" href="">Buscar</a>
												</div>
											</div>
											<div class="aPanel tab-pane fade" role="tabpanel" id="tab3" aria-labelledby="attractions-tab">
												<div class="aBdib-t aTa-c">
													<div class="aInput1">
														<select name="" id="">
															<option value="">Name of the Region</option>
															<option value="">Lima</option>
															<option value="">Arequipa</option>
														</select>
													</div>
													<div class="aInput1">
														<select name="" id="">
															<option value="">Type of Tourist Attraction</option>
															<option value="">Museums</option>
															<option value="">Pre-Inca & Inca Sites</option>
															<option value="">Colonial Churches</option>
															<option value="">Adventure Activities</option>
															<option value="">Festivals & Celebrations</option>
														</select>
													</div>
													<a class="aButt" href="">Buscar</a>
												</div>
											</div>
											<div class="aPanel tab-pane fade show active" role="tabpanel" id="tab4" aria-labelledby="tours-tab">
												<div class="aBdib-t aTa-c">
													<div class="aInput1">
														<select name="" id="">
															<option value="">Name of the Region</option>
															<option value="">Lima</option>
															<option value="">Arequipa</option>
															<option value="">Multicity</option>
														</select>
													</div>
													<div class="aInput1">
														<select name="" id="">
															<option value="">Type of Activity</option>
															<option value="">Archeological & Historical Sightseeing</option>
															<option value="">TV Riding</option>
															<option value="">Birdwatching</option>
															<option value="">Bungee Jumping</option>
															<option value="">Gastronomy & Wine Tasting</option>
														</select> 
													</div>
													<a class="aButt" href="">Buscar</a>
												</div>
											</div>
											<div class="aPanel tab-pane fade" id="tab5" aria-labelledby="providers-tab">
												<div class="aBdib-t aTa-c">
													<div class="aInput1">
														<select name="" id="">
															<option value="">Name of the Region</option>
															<option value="">Lima</option>
															<option value="">Arequipa</option>
														</select>
													</div>
													<div class="aInput1">
														<select name="" id="">
															<option value="">Type of Service Provided</option>
															<option value="">Tour Operators</option>
															<option value="">Downtown</option>
															<option value="">Transfers</option>
															<option value="">Car Rental</option>
															<option value="">Ground Transportation</option>
															<option value="">Nightlife / Bars</option>
														</select>
													</div>
													<a class="aButt" href="">Buscar</a>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

					</section>

					<section class="aSection2 aBg-gris1 aPt-25 aPb-25">
						<div class="aWrapper">
							<div class="aBdib-m">
								<div class="aW-50 aTa-c aDn-767">
									<img src="img/home-sec2-1.png" alt="" title=""/>
								</div>
								<div class="aW-50 aPl-40 aPr-55 aPr-20-991 aW-100-767 aPl-0-767 aPr-0-767">
									<div class="aTitular aMb-20">
										<h3>Welcome to</h3>
										<h2>MyPeruGuide.com</h2>
									</div>
									<div class="aFz-17 aFf-Roman">
										<p>Has been designed to provide all necessary information to plan a fabulous trip, helping visitors make informed choices concerning the activities and pastimes that most appeal to them while also enabling them to experience first-hand the Peruvian way of life, its history, its natural splendor, and its delicious cuisine. </p>
									</div>
									<div class="aTa-l aMt-20"><a href="javascript:void(0)" class="aButton-r-a aFz-16 aP-10-23">Más Información</a></div>
								</div>
							</div>
						</div>
					</section>

					<section class="aSection3 aPt-35">
						<div class="aTitular aTa-c aMb-35">
							<h3>Whatever your style</h3>
							<h2>See it your way</h2>
						</div>

						<div class="aDestinos aBdib-m">
							<div class="aDestino" style="background: rgba(0, 0, 0, 0) url('img/home-lugar-1-bg1.jpg') no-repeat scroll center center / cover">
								<div class="aInterior aShadow">
									<h1>LIMA</h1>
									<img class="aIbg" src="img/home-lugar-1-bg2.jpg" alt="" title=""/>
									<img class="aSimbolo" src="img/simbolo-mas.png" alt="" title=""/>
									<img class="aSombra" src="img/home-destino-sombra.png" alt="" title=""/>
									<div class="aLinea"></div>
									<div class="aInformacion">
										<h2>INFORMACIÓN</h2>
										<div class="aBdib-m">
											<div class="aDinf1"><a class="aInf aInf1" href=""></a></div>
											<div class="aDinf2"><a class="aInf aInf2" href=""></a></div>
											<div class="aDinf3"><a class="aInf aInf3" href=""></a></div>
											<div class="aDinf4"><a class="aInf aInf4" href=""></a></div>
											<div class="aDinf5"><a class="aInf aInf5" href=""></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="aDestino" style="background: rgba(0, 0, 0, 0) url('img/home-lugar-2-bg1.jpg') no-repeat scroll center center / cover">
								<div class="aInterior aShadow">
									<h1>ICA</h1>
									<img class="aIbg" src="img/home-lugar-2-bg2.jpg" alt="" title=""/>
									<img class="aSimbolo" src="img/simbolo-mas.png" alt="" title=""/>
									<img class="aSombra" src="img/home-destino-sombra.png" alt="" title=""/>
									<div class="aLinea"></div>
									<div class="aInformacion">
										<h2>INFORMACIÓN</h2>
										<div class="aBdib-m">
											<div class="aDinf1"><a class="aInf aInf1" href=""></a></div>
											<div class="aDinf2"><a class="aInf aInf2" href=""></a></div>
											<div class="aDinf3"><a class="aInf aInf3" href=""></a></div>
											<div class="aDinf4"><a class="aInf aInf4" href=""></a></div>
											<div class="aDinf5"><a class="aInf aInf5" href=""></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="aDestino" style="background: rgba(0, 0, 0, 0) url('img/home-lugar-3-bg1.jpg') no-repeat scroll center center / cover">
								<div class="aInterior aShadow">
									<h1>AREQUIPA</h1>
									<img class="aIbg" src="img/home-lugar-3-bg2.jpg" alt="" title=""/>
									<img class="aSimbolo" src="img/simbolo-mas.png" alt="" title=""/>
									<img class="aSombra" src="img/home-destino-sombra.png" alt="" title=""/>
									<div class="aLinea"></div>
									<div class="aInformacion">
										<h2>INFORMACIÓN</h2>
										<div class="aBdib-m">
											<div class="aDinf1"><a class="aInf aInf1" href=""></a></div>
											<div class="aDinf2"><a class="aInf aInf2" href=""></a></div>
											<div class="aDinf3"><a class="aInf aInf3" href=""></a></div>
											<div class="aDinf4"><a class="aInf aInf4" href=""></a></div>
											<div class="aDinf5"><a class="aInf aInf5" href=""></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="aDestino" style="background: rgba(0, 0, 0, 0) url('img/home-lugar-4-bg1.jpg') no-repeat scroll center center / cover">
								<div class="aInterior aShadow">
									<h1>PUNO</h1>
									<img class="aIbg" src="img/home-lugar-4-bg2.jpg" alt="" title=""/>
									<img class="aSimbolo" src="img/simbolo-mas.png" alt="" title=""/>
									<img class="aSombra" src="img/home-destino-sombra.png" alt="" title=""/>
									<div class="aLinea"></div>
									<div class="aInformacion">
										<h2>INFORMACIÓN</h2>
										<div class="aBdib-m">
											<div class="aDinf1"><a class="aInf aInf1" href=""></a></div>
											<div class="aDinf2"><a class="aInf aInf2" href=""></a></div>
											<div class="aDinf3"><a class="aInf aInf3" href=""></a></div>
											<div class="aDinf4"><a class="aInf aInf4" href=""></a></div>
											<div class="aDinf5"><a class="aInf aInf5" href=""></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="aDestino" style="background: rgba(0, 0, 0, 0) url('img/home-lugar-5-bg1.jpg') no-repeat scroll center center / cover">
								<div class="aInterior aShadow">
									<h1>CUSCO</h1>
									<img class="aIbg" src="img/home-lugar-5-bg2.jpg" alt="" title=""/>
									<img class="aSimbolo" src="img/simbolo-mas.png" alt="" title=""/>
									<img class="aSombra" src="img/home-destino-sombra.png" alt="" title=""/>
									<div class="aLinea"></div>
									<div class="aInformacion">
										<h2>INFORMACIÓN</h2>
										<div class="aBdib-m">
											<div class="aDinf1"><a class="aInf aInf1" href=""></a></div>
											<div class="aDinf2"><a class="aInf aInf2" href=""></a></div>
											<div class="aDinf3"><a class="aInf aInf3" href=""></a></div>
											<div class="aDinf4"><a class="aInf aInf4" href=""></a></div>
											<div class="aDinf5"><a class="aInf aInf5" href=""></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="aSection4 aPt-40 aPb-40" style="background: rgba(0, 0, 0, 0) url('img/home-sec4-bg.jpg') no-repeat scroll center center / cover">
						<div class="aWrapper">
							<div class="aTitular aMb-35">
								<h3>Guaranteed Quality</h3>
								<h2>Recommented Tours</h2>
							</div>

							<div class="aDivRecomendados aBdib-t">
								<div class="aRecomend">
									<a href="" class="aInterior aShadow aEfect">
										<div class="aIm aHidden">
											<img src="img/home-recomendado-1.jpg" alt="" title=""/>
											<div class="aSombra"><img src="img/home-recomendado-sombra.png" alt="" title=""/></div>
											<div class="aPrecio aShadow aButton-r-a aP-10-23 aFz-16 aFf-R">$ 209</div>
											<div class="aTit">
												<span class="aFz-16 aFc-blanco aMb-10 aDb aFf-L aLh-1">Hotel</span>
												<span class="aFz-22 aFc-blanco aMb-0 aDb aFf-R aLh-1">Lorem Ipsum Text</span>
											</div>
										</div>
										<div class="aTx">
											<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto sera reemplazado. </p>
											<div class="aBdib-m aMt-20 aPr">
												<span class="aDias aFz-14 aFc-texto aLh-1">3 DÍAS</span>
												<span class="aPersonas aFz-14 aFc-texto aLh-1">1-2 PERSONAS</span>
												<span class="aRat aRaty-4 aLh-1">&nbsp;</span>
											</div>
										</div>
									</a>
								</div>
								<div class="aRecomend">
									<a href="" class="aInterior aShadow aEfect">
										<div class="aIm aHidden">
											<img src="img/home-recomendado-2.jpg" alt="" title=""/>
											<div class="aSombra"><img src="img/home-recomendado-sombra.png" alt="" title=""/></div>
											<div class="aPrecio aShadow aButton-r-a aP-10-23 aFz-16 aFf-R">$ 209</div>
											<div class="aTit">
												<span class="aFz-16 aFc-blanco aMb-10 aDb aFf-L aLh-1">Hotel</span>
												<span class="aFz-22 aFc-blanco aMb-0 aDb aFf-R aLh-1">Lorem Ipsum Text</span>
											</div>
										</div>
										<div class="aTx">
											<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto sera reemplazado. </p>
											<div class="aBdib-m aMt-20 aPr">
												<span class="aDias aFz-14 aFc-texto aLh-1">3 DÍAS</span>
												<span class="aPersonas aFz-14 aFc-texto aLh-1">1-2 PERSONAS</span>
												<span class="aRat aRaty-4 aLh-1">&nbsp;</span>
											</div>
										</div>
									</a>
								</div>
								<div class="aRecomend">
									<a href="" class="aInterior aShadow aEfect">
										<div class="aIm aHidden">
											<img src="img/home-recomendado-3.jpg" alt="" title=""/>
											<div class="aSombra"><img src="img/home-recomendado-sombra.png" alt="" title=""/></div>
											<div class="aPrecio aShadow aButton-r-a aP-10-23 aFz-16 aFf-R">$ 209</div>
											<div class="aTit">
												<span class="aFz-16 aFc-blanco aMb-10 aDb aFf-L aLh-1">Hotel</span>
												<span class="aFz-22 aFc-blanco aMb-0 aDb aFf-R aLh-1">Lorem Ipsum Text</span>
											</div>
										</div>
										<div class="aTx">
											<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto sera reemplazado. </p>
											<div class="aBdib-m aMt-20 aPr">
												<span class="aDias aFz-14 aFc-texto aLh-1">3 DÍAS</span>
												<span class="aPersonas aFz-14 aFc-texto aLh-1">1-2 PERSONAS</span>
												<span class="aRat aRaty-4 aLh-1">&nbsp;</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</section>

					<section class="aSection5 aPt-40 aPb-40" style="background: rgba(0, 0, 0, 0) url('img/home-sec5-bg.jpg') no-repeat scroll center center / cover">
						<div class="aWrapper">
							<div class="aTa-c">
								<div class="aPromo aBdib-m">
									<div class="aDesc aBdib-m aDb-767 aMb-10-767">
										<div class="aA1"><span>30</span></div>
										<div class="aA2">
											<span class="aSp1 aTa-l aLh-">%</span>
											<span class="aSp2 aLh-1">Dscto.</span>
										</div>
									</div>
									<div class="aContent">
										<h4 class="aFz-26 aFf-L aMb-5 aLh-1 aFc-blanco">Welcome to</h4>
										<h3 class="aFz-34 aFf-R aMb-20 aLh-1 aFc-blanco">Lorem Ipsum Text</h3>
										<div class="aBg-rojo aH-2 aW-100 aMb-20">&nbsp;</div>
										<p class="aFc-blanco aFz-17 aMb-0">Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año cuando es impresor.</p>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="aSection6 aBg-gris1 aPt-45 aPb-45">
						<div class="aWrapper">
							<div class="aBdib-m">
								<div class="aW-50 aPl-10 aPr-25 aW-100-991 aPl-0-991 aPr-0-991 aTa-c-991 aMb-20-991">
									<div class="aDivVideo aShadow">
										<a class="aW-100" href="">
											<img class="aW-100" src="img/home-video.jpg" alt="" title=""/>
											<img class="aI-play" src="img/icon-play.png" alt="" title=""/>
										</a>
									</div>
								</div>
								<div class="aW-50 aPl-20 aPr-45 aW-100-991 aPl-0-991 aPr-0-991">
									<div class="aTitular aMb-20">
										<h3>What is</h3>
										<h2>MyPeruGuide</h2>
									</div>
									<div class="aTa-j">
										<p>This free virtual tour guide of Peru covers most areas of the country but focuses in particular on its southern regions, including Lima, Ica, Arequipa, Puno, and Cusco. MyPeruGuide includes pertinent information concerning such topics as Peru's history and chronology, its location and tips on getting to Peru and traveling around the country, its population, culture and costumes, its natural regions, and some good reasons to travel to Peru. Similar information is provided for the regions of Lima, Ica <strong>( Nazca & Paracas )</strong>, Arequipa <strong>( Colca Canyon )</strong>, Puno <strong>( Lake Titicaca )</strong>, and Cusco <strong>( Machu Picchu )</strong>.</p>
										<p>For these five popular tourist destinations, we also offer information about recommended Pre-Inca, Inca, Colonial, Republican, and Modern sites as well as Natural Attractions. </p>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="aSection7 aPt-30 aPb-30">
						<div class="aWrapper">
							<div class="aTa-c">
								<h2 class="aFz-34 aFf-R">Lorem Ipsum Text</h2>
							</div>

							<div class="aCarousel-home-logos aCarousel-general">
								<div class="aSlide">
									<img src="img/home-logo-1.png" alt="" title=""/>
								</div>
								<div class="aSlide">
									<img src="img/home-logo-2.png" alt="" title=""/>
								</div>
								<div class="aSlide">
									<img src="img/home-logo-3.png" alt="" title=""/>
								</div>
								<div class="aSlide">
									<img src="img/home-logo-2.png" alt="" title=""/>
								</div>
							</div>
						</div>
					</section>

		    </main>


<?php include "footer.php"; ?>

	</body>

</html>
