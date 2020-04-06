
jQuery(document).ready(function() {

	// Variáveis:
		var BreakPoint = 1000;
		var WidthDevice = $(window).width();
		var heightDevice = $(window).height();		
	// :Variáveis

	// Reload no resize da página:
		// var screen = '';
		// if (WidthDevice < BreakPoint) {
		// 	screen = 'mobile';
		// } else if (WidthDevice > BreakPoint) { 
		// 	screen = 'desktop';
		// }

		// $(window).resize(function(){
		// 	var cur_width = $(window).width();
		// 	if(cur_width < BreakPoint && screen == 'desktop'){
		// 		location.reload(); 
		// 	} else if(cur_width > BreakPoint && screen == 'mobile'){
		// 		location.reload();
		// 	}
		// });
	// :Reload no resize da página

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

	// Header:
		// Scrolldown Menu fixo

			// var PosicaoScrollAtual = $(window).scrollTop();
			// var PosicaoScrollAnterior = 0;

			// $(window).scroll(function(event) {
			// 	PosicaoScrollAtual = $(window).scrollTop();

			// 		if(PosicaoScrollAtual <= (heightDevice/2)) {
			// 			$('.headerFixo').removeClass('headerFixo');
			// 		} else {
			// 			$('header').addClass('headerFixo');
			// 		}

			// 	PosicaoScrollAnterior = $(window).scrollTop();
			// });

		// Menu
			// Fechar o Menu
			// 	function FecharMenu() {
			// 		$('.Aberto').removeClass('Aberto');
			// 		$('.DropDown ul').hide();
			// 		$('#EscMenu').hide();
			// 	}

			// 	$('#EscMenu').click(function() {
			// 		FecharMenu();
			// 	});

			// 	document.onkeydown = function(evt) {
			// 		evt = evt || window.event;
			// 		if (evt.keyCode == 27 || evt.key === 'Escape' || evt.key == 'Esc') {
			// 			FecharMenu();
			// 		}
			// 	};

			// // Abrir o menu
			// 	$('#AbrirFecharMenu').click(function() {
			// 		if($(this).hasClass('Aberto')) {
			// 			FecharMenu();
			// 		} else {
			// 			$(this).addClass('Aberto');
			// 			$('nav').addClass('Aberto');
			// 			$('#EscMenu').show();
			// 		}
			// 	});
	// :Header

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
	})

	$('.Icones .SliderLogotipoCor button').on('click', function(){
		if( $(this).attr('id') == 'slick-slide-control01' || $(this).attr('id') == 'slick-slide-control02' || $(this).attr('id') == 'slick-slide-control03' || $(this).attr('id') == 'slick-slide-control04' ) {
			
			$('.TerceiraSessaoIcones .esq p').css('color','var(--principal')

		} else {
			
			$('.TerceiraSessaoIcones .esq p').css('color','var(--cinzaescuro')
		}	
	})
		
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