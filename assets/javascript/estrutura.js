
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