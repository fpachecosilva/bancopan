
jQuery(document).ready(function() {

	// Variáveis:
		var BreakPoint = 1000;
		var WidthDevice = $(window).width();
		var heightDevice = $(window).height();		
	// :Variáveis

	// Decodificando SVG:
		$('img.svg').each(function() {
			var $img = $(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');
			$.get(imgURL, function(data) { var $svg = $(data).find('svg'); 
			if(typeof imgID !== 'undefined') {$svg = $svg.attr('id', imgID);} 
			if(typeof imgClass !== 'undefined') {$svg = $svg.attr('class', imgClass+' replaced-svg');}$svg = $svg.removeAttr('xmlns:a'); 
			if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))} $img.replaceWith($svg);}, 'xml');
		});
	// :Decodificando SVG
	
	// Executando versionamentos
		// if(WidthDevice <= 900) { MobileVersion(); } else { DesktopVersion(); }
	// FadeIn da página após o carregamento.
		$('body').fadeIn('slow');
	// ScrollTop
		// $('html, body').animate({scrollTop: '0px'}, 600);
		
	});

	$('.SliderLogotipoCor').slick({
		dots: true,
		arrows: false,
		speed: 400,
		infinite: true,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		pauseOnHover: false,
		pauseOnFocus: false,
		adaptiveHeight: true
	});
	
	$('.SliderGrafismos').slick({
		dots: true,
		arrows: true,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		speed: 400,
		infinite: true,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		pauseOnHover: false,
		pauseOnFocus: false,
		adaptiveHeight: true
	});

	$('.SliderFotografia').slick({
		dots: true,
		arrows: true,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		speed: 400,
		infinite: true,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		pauseOnHover: false,
		pauseOnFocus: false,		
	});

	$('.SliderIlustracoes').slick({
		dots: true,
		arrows: true,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		speed: 400,
		infinite: true,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		pauseOnHover: false,
		pauseOnFocus: false,		
	});

	
	$('.Logo .SliderLogotipoCor button').on('click', function(){
		if( $(this).attr('id') == 'slick-slide-control00' || $(this).attr('id') == 'slick-slide-control07' || $(this).attr('id') == 'slick-slide-control10' || $(this).attr('id') == 'slick-slide-control17' || $(this).attr('id') == 'slick-slide-control20' || $(this).attr('id') == 'slick-slide-control27'  ) {
			
			$('.Logo .texto-circulos p').css('color','var(--cinza)')
			$('.Logo .VerMais').addClass('Cinza');
			$('.Logo .Download').addClass('Cinza');

		} else {

			$('.Logo .texto-circulos p').css('color','var(--principal)')
			$('.Logo .VerMais').removeClass('Cinza');
			$('.Logo .Download').removeClass('Cinza');
		}

		if( $(this).attr('id') == 'slick-slide-control02' || $(this).attr('id') == 'slick-slide-control03' || $(this).attr('id') == 'slick-slide-control04' || $(this).attr('id') == 'slick-slide-control05' ) {

			$('#BotaoHome').addClass('Branco');
			$('#AbrirFecharMenu').addClass('Branco');

		} else { 

			$('#BotaoHome').removeClass('Branco');
			$('#AbrirFecharMenu').removeClass('Branco');

		}
	})

	$('.Icones .SliderLogotipoCor button').on('click', function(){
		if( $(this).attr('id') == 'slick-slide-control01' || $(this).attr('id') == 'slick-slide-control02' || $(this).attr('id') == 'slick-slide-control03' || $(this).attr('id') == 'slick-slide-control04' ) {
			
			$('.TerceiraSessaoIcones .esq p').css('color','var(--principal')

		} else {
			
			$('.TerceiraSessaoIcones .esq p').css('color','var(--cinzaescuro')
		}	
	})
	
	$('.GrafismosQuartaSessao .SliderGrafismos').on('afterChange', function(event, slick, currentSlide, nextSlide){
		
		if ( $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide01' || $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide03' || $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide04' ) { 
			$('.GrafismosQuartaSessao .SliderGrafismos button').addClass('Cinza')
		} else {
			$('.GrafismosQuartaSessao .SliderGrafismos button').removeClass('Cinza')
		}

		if ( $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide01' || $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide02' || $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide03' || $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide04' ) {
			$('.GrafismosQuartaSessao .SliderGrafismos .slick-arrow').addClass('Laranja')
		} else {
			$('.GrafismosQuartaSessao .SliderGrafismos .slick-arrow').removeClass('Laranja')
		}		
	});

	$('.GrafismosQuintaSessao .SliderGrafismos').on('afterChange', function(event, slick, currentSlide, nextSlide){
		
		if ( $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide13' ) { 
			$('.GrafismosQuintaSessao .SliderGrafismos button').addClass('Cinza')			
		} else {
			$('.GrafismosQuintaSessao .SliderGrafismos button').removeClass('Cinza')
		}
		
		if ( $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide13' ) {
			$('.GrafismosQuintaSessao .SliderGrafismos .slick-arrow').addClass('Cinza')
		} else {
			$('.GrafismosQuintaSessao .SliderGrafismos .slick-arrow').removeClass('Cinza')
		}		
	});

	$('.GrafismosDecimaSessao .SliderGrafismos').on('afterChange', function(event, slick, currentSlide, nextSlide){
		console.log( $(slick.$slides.get(currentSlide)).attr('id') )
		if ( $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide33' ) { 
			$('.GrafismosDecimaSessao .SliderGrafismos button').addClass('Cinza')			
		} else {
			$('.GrafismosDecimaSessao .SliderGrafismos button').removeClass('Cinza')
		}
		
		if ( $(slick.$slides.get(currentSlide)).attr('id') == 'slick-slide33' ) {
			$('.GrafismosDecimaSessao .SliderGrafismos .slick-arrow').addClass('Cinza')
		} else {
			$('.GrafismosDecimaSessao .SliderGrafismos .slick-arrow').removeClass('Cinza')
		}		
	});

		
	// Botão Download
	$('.Cinza').each(function() {
		$(this).children().find('.Download').addClass('Cinza')
	})

	$('.ComTexto').each(function() {
		$(this).children().find('.Download').addClass('ComTexto')
	})

	// Ícone Ver Mais
	$('.Cinza').each(function() {
		$(this).find('.VerMais').addClass('Cinza')
	})

	// Menu
		// Fechar o Menu
			function FecharMenu() {
				$('.Aberto').removeClass('Aberto');				
				$('#EscMenu').hide();
			}

			$('#EscMenu').click(function() {
				FecharMenu();
			});

			document.onkeydown = function(evt) {
				evt = evt || window.event;
				if (evt.keyCode == 27 || evt.key === 'Escape' || evt.key == 'Esc') {
					FecharMenu();
				}
			};

		// Abrir o menu
			$('#AbrirFecharMenu').click(function() {
				if($(this).hasClass('Aberto')) {
					FecharMenu();
				} else {
					$(this).addClass('Aberto');
					$('nav').addClass('Aberto');
					$('#BotaoHome').addClass('Aberto');
					$('#EscMenu').show();
				}
			});

		// Mudar cores dos ícones
			$('.Laranja').each(function() {
				$(this).children().find('#AbrirFecharMenu').addClass('Laranja')
				$(this).children().find('#BotaoHome').addClass('Laranja')
			})

			$('.Branco').each(function() {
				$(this).children().find('#AbrirFecharMenu').addClass('Branco')
				$(this).children().find('#BotaoHome').addClass('Branco')
			})
	// Menu