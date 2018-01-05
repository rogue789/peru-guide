



$(document).ready(function () {
	
	$(".numeros-select").selectpicker({
	});
	$("#numeros-menu").selectpicker({
	});	
	$(".filtro-multiselect").selectpicker({
		noneSelectedText: 'Seleccionar'
	});
	
	$('[data-toggle="datepicker"]').datepicker({
		 dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
		 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
		 dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
		 monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		 monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']
	});
	$("#local").tagsinput();
	$('.local').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-local" ).click(function() {
		var text = $(this).text();
		$("#local").tagsinput('add', text);
	});
	$("#musica").tagsinput();
	$('.musica').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-musica" ).click(function() {
		var text = $(this).text();
		$("#musica").tagsinput('add', text);
	});
	$("#moneda").tagsinput();
	$('.moneda').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-moneda" ).click(function() {
		var text = $(this).text();
		$("#moneda").tagsinput('add', text);
	});
	$("#cursos").tagsinput();
	$('.cursos').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-cursos" ).click(function() {
		var text = $(this).text();
		$("#cursos").tagsinput('add', text);
	});
	$("#d-cursos").tagsinput({
	  maxTags: 1
	});
	$('.duracion').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-duracion" ).click(function() {
		var text = $(this).text();
		$("#duracion").tagsinput('add', text);
	});
	$('.tours').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-tours" ).click(function() {
		var text = $(this).text();
		$("#tours").tagsinput('add', text);
	});
	$('.artesanias').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-artesanias" ).click(function() {
		var text = $(this).text();
		$("#artesanias").tagsinput('add', text);
	});
	$('.region-vinedo').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-region-vinedo" ).click(function() {
		var text = $(this).text();
		$("#region-vinedo").tagsinput('add', text);
	});
	$('.especialidad-vinedo').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-especialidad-vinedo" ).click(function() {
		var text = $(this).text();
		$("#especialidad-vinedo").tagsinput('add', text);
	});
	$('.servicio-vinedo').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-servicio-vinedo" ).click(function() {
		var text = $(this).text();
		$("#servicio-vinedo").tagsinput('add', text);
	});
	$('.region-vehiculos').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-region-vehiculos" ).click(function() {
		var text = $(this).text();
		$("#region-vehiculos").tagsinput('add', text);
	});
	$('.movilidad').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-movilidad" ).click(function() {
		var text = $(this).text();
		$("#movilidad").tagsinput('add', text);
	});
	$('.aereo').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-aereo" ).click(function() {
		var text = $(this).text();
		$("#aereo").tagsinput('add', text);
	});
	$('.aerolinea').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-aerolinea" ).click(function() {
		var text = $(this).text();
		$("#aerolinea").tagsinput('add', text);
	});
	$('.ferroviario').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-ferroviario" ).click(function() {
		var text = $(this).text();
		$("#ferroviario").tagsinput('add', text);
	});
	$('.servicio-ferroviario').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-servicio-ferroviario" ).click(function() {
		var text = $(this).text();
		$("#servicio-ferroviario").tagsinput('add', text);
	});
	$('.terrestre').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-terrestre" ).click(function() {
		var text = $(this).text();
		$("#terrestre").tagsinput('add', text);
	});
	$('.servicio-terrestre').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-servicio-terrestre" ).click(function() {
		var text = $(this).text();
		$("#servicio-terrestre").tagsinput('add', text);
	});
	$('.traslados').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-traslados" ).click(function() {
		var text = $(this).text();
		$("#traslados").tagsinput('add', text);
	});
	$('.servicio-traslados').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-servicio-traslados" ).click(function() {
		var text = $(this).text();
		$("#servicio-traslados").tagsinput('add', text);
	});
	$('.movilidad-traslados').children('.bootstrap-tagsinput').children('input').attr('placeholder','escribir otro...');
	$( ".boton-movilidad-traslados" ).click(function() {
		var text = $(this).text();
		$("#movilidad-traslados").tagsinput('add', text);
	});

	$(".aButton-Menu").click(function(){
	  $( ".aButton-Menu" ).toggleClass( "open" )
	  $( ".aDivMenu-responsive .aMenu" ).stop().slideToggle( "slow" );
	});

	$(".aButton-commentary").click(function(){
	  $( ".aSection-commentary" ).stop().slideToggle( "slow" );
	});

	$(".aButton-commentary2").click(function(){
	  $(this).parent().next(".aSection-commentary").stop().slideToggle( "slow" );
	});



	//Datepicker

	$.datepicker.regional['en'] = {
	 prevText: '<',
	 nextText: '>',
	 dateFormat: 'dd/mm/yy',
	 };
	 $.datepicker.setDefaults($.datepicker.regional['en']);

	$(function () {
		$(".aDate").datepicker();
	});

	//raty
	$('.aRaty-click').raty({
	    path: 'img/',
	    readOnly:  false,
	    score: 0,
	    starHalf: 'star-half.png',
	    starOff: 'star-off.png',
	    starOn: 'star-on.png'
	});
	$('.aRaty').raty({
	    path: 'img/',
	    readOnly:  true,
	    score: 0,
	    starHalf: 'star-half.png',
	    starOff: 'star-off.png',
	    starOn: 'star-on.png'
	});
	$('.aRaty-5').raty({
	    path: 'img/',
	    readOnly:  true,
	    score: 5,
	    starHalf: 'star-half.png',
	    starOff: 'star-off.png',
	    starOn: 'star-on.png'
	});
	$('.aRaty-4').raty({
	    path: 'img/',
	    readOnly:  true,
	    score: 4,
	    starHalf: 'star-half.png',
	    starOff: 'star-off.png',
	    starOn: 'star-on.png'
	});
	$('.aRaty-3').raty({
	    path: 'img/',
	    readOnly:  true,
	    score: 3,
	    starHalf: 'star-half.png',
	    starOff: 'star-off.png',
	    starOn: 'star-on.png'
	});
	$('.aRaty-2').raty({
	    path: 'img/',
	    readOnly:  true,
	    score: 2,
	    starHalf: 'star-half.png',
	    starOff: 'star-off.png',
	    starOn: 'star-on.png'
	});
	$('.aRaty-1').raty({
	    path: 'img/',
	    readOnly:  true,
	    score: 1,
	    starHalf: 'star-half.png',
	    starOff: 'star-off.png',
	    starOn: 'star-on.png'
	});

	//carrousel
	$('.aCarousel-home-logos').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		centerMode: false,
		adaptiveHeight: true,
		infinite: true,
		dots: false,
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnDotsHover: false,
		pauseOnHover:false,
		fade: false,
		cssEase: 'linear',
		responsive: [
	        {
	            breakpoint: 580,
	            settings: {
	                slidesToShow: 2
	            }
	        },{
	            breakpoint: 410,
	            settings: {
	                slidesToShow: 2
	            }
	        }
	    ]
	});

	$('.aCarousel-flight').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		centerMode: false,
		adaptiveHeight: true,
		infinite: true,
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnDotsHover: false,
		pauseOnHover:false,
		fade: false,
		cssEase: 'linear'
	});


	$('.aCarousel-Contenido').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: false,
	    centerMode: false,
	    asNavFor: '.aCarousel-Nav',
	    adaptiveHeight: true,
	    infinite: false,
	    fade: true,
	    cssEase: 'linear'
	});

	$('.aCarousel-Nav').slick({
	    slidesToShow: 5,
	    slidesToScroll: 1,
	    asNavFor: '.aCarousel-Contenido',
	    dots: false,
	    focusOnSelect: true,
	    arrows: false,
	    infinite: false,
	    adaptiveHeight: true,
	    responsive: [
	      {
	        breakpoint: 768,
	        settings: {
	            slidesToShow: 4
	        }
	      },{
	        breakpoint: 531,
	        settings: {
	            slidesToShow: 3
	        }
	      },{
	        breakpoint: 371,
	        settings: {
	            slidesToShow: 2
	        }
	      }
	    ]
	});




	$('.aButton-Anterior').click(function(){
		$(this).parents('.aMain').find(".aCarousel-general").slick("slickPrev");
	});

	$('.aButton-Siguiente').click(function(){
	  $(this).parents('.aMain').find(".aCarousel-general").slick("slickNext");
	});

	$('.aButton-Anterior').click(function(){
		$(this).parents('.aPinterna').find(".aCarousel-general").slick("slickPrev");
	});

	$('.aButton-Siguiente').click(function(){
	  $(this).parents('.aPinterna').find(".aCarousel-general").slick("slickNext");
	});

	//Menu scroll
	if ($('main').hasClass('aMain')) {
		$(window).bind('scroll', function() {
		   	var navHeight = 150;
		   	if ($(window).scrollTop() > navHeight) {
		       	$('.aNav-home').addClass('aNav-home-fixed');
		   	}
		   	else if($(window).scrollTop() <= navHeight) {
		       	$('.aNav-home').removeClass('aNav-home-fixed');
		   	}
		});
	}

	//ocultar menu home
	if (!$('main').hasClass('aMain')) {
		$('.aHeader').css({
		    'display':'block'
		});
	}
	else if($('main').hasClass('aMain')){
		$('.aHeader').css({
		    'display':'none'
		});
	}

	//acordeon
	$(".aAtitulo").click(function(e){
	  e.preventDefault();
	  var contenido=$(this).next(".aAcontent");
	  if(contenido.css("display")=="none"){
	    contenido.slideDown(500);
	    $(this).addClass("open");
	  }
	  else{
	    contenido.slideUp(500);
	    $(this).removeClass("open");
	  }
	});

	//acordeon resp

	$(".aAtitulo-x").click(function(e){
	  e.preventDefault();
	  var contenidox=$('.aAtitulo-x').next(".aAcontent-x");
	  var contenidox2=$(this).next(".aAcontent-x");

	  if($(this).hasClass('open')){
	    $(contenidox2).removeClass("openx");
	    $('.aAtitulo-x').removeClass("open");
	  }
	  else if (!$(this).hasClass('open')) {
	    $(contenidox).removeClass("openx");
	    $('.aAtitulo-x').removeClass("open");
	    $(this).addClass("open");
	    $(contenidox2).addClass("openx");
	  }
	});



	//Popup
	$('.aBpopup').magnificPopup({
	  type:'inline',
	  removalDelay: 300,
	  closeBtnInside: true,
	  mainClass: 'my-mfp-zoom-in',
	  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});

	//video
	$('.popup-youtube').magnificPopup({
		type: 'iframe',
	    iframe: {
	        markup: '<div class="mfp-iframe-scaler">'+
	        '<div class="mfp-close"></div>'+
	        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
	        '<div class="mfp-title">Some caption</div>'+
	        '</div>'
	    },
	    mainClass : 'mfp-fade'
	});






	function aInicio(){

		//acordeon resp

		if ($(window).width() > 767) {
			$('.aAcordeon-x .aAcord-x .aAcontent-x').css({
				'display':''
			});
		}


		//alto ventana
		if(window.innerWidth>991){
			$('.aMain .aSection1').css({
			'height': window.innerHeight
			});
		}else{
			$('.aMain .aSection1').css({
				'height':''
			});
		};


		if ($(window).width() > 767) {
			$('.aAcordeonx .aAcordx .aAcontentx').css({
				'display':''
			});
		}

	}

	$(window).on("load",aInicio);
	$(window).resize(aInicio);


	function aInicio2(){

		var ancho_ventana = $( window ).width();
		var ancho_div = $('.aD-out').width();
		var ancho_wrapper = $('.aWrapper').width();
		var ancho_extra1 = ancho_wrapper - ancho_div;
		var ancho_extra2 = (ancho_ventana - ancho_wrapper)/2;
		var ancho_img = ancho_extra1 + ancho_extra2;

		$('.aImg-out').css({
			'width': ancho_img
		});

		if ($(window).width() > 767) {
			$('.aAcordeonx .aAcordx .aAcontentx').css({
				'display':''
			});
		}

	}

	$(window).on("load",aInicio2);
	$(window).resize(aInicio2);

	$(window).on("load",function() {

		$('body').animate({
			'opacity': 1
		},'slow');

	});
	$('.paquetes-slider').slick({
		centerMode: true,
		variableWidth: true,
		centerPadding: '1px',
		slidesToShow: 5,
		responsive: [
		  {
			breakpoint: 1024,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '1px',
			  slidesToShow: 3
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '1px',
			  slidesToShow: 1
			}
		  }
		]  
	  }); 
	 $('.paquetes-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
		$('#pricing-contentTab .tab-pane').removeClass('show active'); 
		var objetivo = $('.paquetes-slider .slick-current .cuadro').attr('objetivo');
		$('#pricing-contentTab').find('#' + objetivo).addClass('show active'); 
	});
	
});


