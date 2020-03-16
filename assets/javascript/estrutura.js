/* 
	Hello, guys!! :)
	JS desenvolvido pela bs.agency em parceria com a Marcas com SAL em 2018. 

	Façam bom uso :)
*/

jQuery(document).ready(function() {

	// Variáveis:
		var BreakPoint = 1050;
		var WidthDevice = $(window).width();
		var heightDevice = $(window).height();
	// :Variáveis

	// Reload no resize da página:
		var screen = '';
		if (WidthDevice < BreakPoint) {
			screen = 'mobile';
		} else if (WidthDevice > BreakPoint) { 
			screen = 'desktop';
		}

		$(window).resize(function(){
			var cur_width = $(window).width();
			if(cur_width < BreakPoint && screen == 'desktop'){
				location.reload(); 
			} else if(cur_width > BreakPoint && screen == 'mobile'){
				location.reload();
			}
		});
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

	// Funções executadas apenas na versão Desktop:
		function DesktopVersion() {
			// Abrindo divisões do menu
			$('.DropDown > a').click(function() {
				if($('.DropDown ul:visible').length >= 1) {
					$('.DropDown ul').slideUp('slow');
					$(this).removeClass('aberto');
				} else {
					$('.DropDown ul').slideDown('slow');
					$(this).addClass('aberto');
				}
			});

			$('#VoltarDropdown').click(function() {
				$('.DropDown ul').slideUp('slow');
			});

			// Voltar ao topo
			$('#BackTop').click(function() {
				$('html, body').animate({scrollTop: '0px'}, 600);
			});
		}
	// :Funções executadas apenas na versão Desktop

	// Funções executadas apenas na versão Mobile:
		function MobileVersion() {
			// Abrindo divisões do menu
				$('.DropDown > a').click(function() {
					$('.DropDown ul').attr('style', 'left: 0;');
				});

				$('#VoltarDropdown').click(function() {
					$('.DropDown ul').attr('style', 'left: 100%;');
				});
		}
	// :Funções executadas apenas na versão Mobile

	// Header:
		// Scrolldown Menu fixo

			var PosicaoScrollAtual = $(window).scrollTop();
			var PosicaoScrollAnterior = 0;

			$(window).scroll(function(event) {
				PosicaoScrollAtual = $(window).scrollTop();

					if(PosicaoScrollAtual <= (heightDevice/2)) {
						$('.headerFixo').removeClass('headerFixo');
					} else {
						$('header').addClass('headerFixo');
					}

				PosicaoScrollAnterior = $(window).scrollTop();
			});

		// Menu
			// Fechar o Menu
				function FecharMenu() {
					$('.Aberto').removeClass('Aberto');
					$('.DropDown ul').hide();
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
						$('#EscMenu').show();
					}
				});
	// :Header

	// Executando versionamentos
		if(WidthDevice <= 900) { MobileVersion(); } else { DesktopVersion(); }
	// FadeIn da página após o carregamento.
		$('body').fadeIn('slow');
	// ScrollTop
		// $('html, body').animate({scrollTop: '0px'}, 600);


	// Executando funções em páginas específicas
		if($('body').hasClass('Home')) { // Página Inicial
			$('.SliderHome').slick({
				dots: false,
				arrows: false,
				speed: 400,
				infinite: true,
				fade: true,
				cssEase: 'linear',
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				pauseOnHover: false,
				pauseOnFocus: false,
				adaptiveHeight: false
			});

			if(WidthDevice <= 900) {
				$('#NavegacaoHome').slick({
					dots: true,
					arrows: false,
					speed: 400,
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
			}
		}
		else if($('body').hasClass('Logotipo')) {// Página Logotipo
			$('#link-audio').click( function(e) {
				e.preventDefault();
				var filePath = $(this).attr('href');
				console.log(filePath);
				new Audio(filePath).play();
			});
			$('#popup .btn-fechar, #popup .background').click( function(e) {
				e.preventDefault();
		    $('#popup').removeClass('aberto');
		    $('html').removeClass('popup-aberto');
			});
			$('#open-popup').click( function(e) {
				e.preventDefault();
				$('#popup').addClass('aberto');
				$('html').addClass('popup-aberto');
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
				autoplay: true,
				pauseOnHover: false,
				pauseOnFocus: false,
				adaptiveHeight: false
			});
			if(WidthDevice <= 900) {
				$('.slider-mobile').slick({
					dots: true,
					arrows: false,
					speed: 400,
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
				$('.accordion-mobile h3').click( function(e) {
					if( $(this).parents('article').hasClass('aberto') ) {
						$(this).parents('article').removeClass('aberto');
					} 
					else {
						$('.accordion-mobile').removeClass('aberto');
						$(this).parents('article').addClass('aberto');
					}
				});
				$('.SliderLogotipo').slick({
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
					adaptiveHeight: false
				});
			}
			else {
				$('.SliderLogotipo').slick({
					dots: false,
					arrows: true,
					speed: 400,
					infinite: true,
					fade: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
			}
		}
		else if($('body').hasClass('Inspiracional')) {// Página Inspiracional
			if(WidthDevice <= 900) {
				$('.Slider').slick({
					dots: true,
					arrows: false,
					speed: 400,
					infinite: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: false,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
			} else {
				$('.Slider').slick({
					dots: false,
					arrows: true,
					speed: 400,
					infinite: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: false,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
			}
		}
		else if($('body').hasClass('Elementosgraficos')) {// Página Elementos graficos
			if(WidthDevice <= 900) {
				$('.slider-mobile').slick({
					dots: true,
					arrows: false,
					speed: 400,
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: false,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
			} else {
				$('.slider').slick({
					dots: false,
					arrows: true,
					speed: 400,
					infinite: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
				$('#popup .btn-fechar, #popup .background').click( function(e) {
					e.preventDefault();
			    $('#popup').removeClass('aberto');
			    $('html').removeClass('popup-aberto');
				});
				$('#open-popup').click( function(e) {
					e.preventDefault();
					$('#popup').addClass('aberto');
					$('html').addClass('popup-aberto');
				});
				$('#slider2 a').click( function(e) {
					e.preventDefault();
					var index = $(this).attr('data-index')-1;
					$('#slider3').slick('slickGoTo', index);
			    $('#popup').addClass('aberto');
					$('html').addClass('popup-aberto');
				});
				$('#slider3').slick({
					dots: true,
					arrows: true,
					speed: 400,
					fade: true,
					infinite: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: false,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
			}
		}
		else if ( $('body').hasClass('Momentosdamarca') ) {// Página Momentos da marca
			if(WidthDevice <= 900) {
				$('#termometro > div > div > a').click( function(e) {
					e.preventDefault();
				});
				$('.slider-mobile').slick({
					dots: false,
					arrows: false,
					speed: 400,
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: false,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
				$('.slider-mobile').on('beforeChange', function(slick, currentSlide, nextSlide){
				  var cs = currentSlide.currentSlide;
				  var cd = currentSlide.currentDirection;
				  var targetSlide = cs+(cd?-1:1);
				  targetSlide =	(targetSlide<0)?2:(targetSlide>2)?0:targetSlide;
					$('#termometro').attr('class','').addClass('selected-item-' + (targetSlide+1));
				}).on('afterChange', function(slick, currentSlide){
				  var cs = currentSlide.currentSlide;
				  $('#termometro').attr('class','').addClass('selected-item-' + (cs+1));
				});
				$('#popup .btn-fechar').click( function(e) {
						e.preventDefault();
				    $('#popup').removeClass('aberto');
				});
				$('#open-popup').click( function(e) {
					e.preventDefault();
					$('#popup').addClass('aberto');
				});
			}
			else {
				$('#termometro > div > div > a').click( function(e) {
					e.preventDefault();
					$('#termometro').attr('class','').addClass('selected-' + this.parentElement.id);
				});
				$('#popup .btn-fechar, #popup .background').click( function(e) {
						e.preventDefault();
				    $('#popup').removeClass('aberto');
				    $('html').removeClass('popup-aberto');
				});
				$('#open-popup').click( function(e) {
					e.preventDefault();
					$('#popup').addClass('aberto');
					$('html').addClass('popup-aberto');
				});
			}
		}
		else if($('body').hasClass('Tipografias')) {// Página Tipografias
			if(WidthDevice <= 900) {
				$('.slider-mobile').slick({
					dots: true,
					arrows: false,
					speed: 400,
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: false,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
			}
			else {
				$('#popup .btn-fechar, #popup .background').click( function(e) {
					e.preventDefault();
			    $('#popup').removeClass('aberto');
			    $('html').removeClass('popup-aberto');
				});
				$('#open-popup').click( function(e) {
					e.preventDefault();
					$('#popup').addClass('aberto');
					$('html').addClass('popup-aberto');
				});
				$('#slider2 a').click( function(e) {
					e.preventDefault();
					var index = $(this).attr('data-index')-1;
					$('#slider3').slick('slickGoTo', index);
			    $('#popup').addClass('aberto');
					$('html').addClass('popup-aberto');
				});
				$('#slider3').slick({
					dots: true,
					arrows: true,
					speed: 400,
					fade: true,
					infinite: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: false,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
			}
		}
		else if($('body').hasClass('Cores')) {// Página Cores
			if(WidthDevice <= 900) {
				$('.slider-mobile').slick({
					dots: true,
					arrows: false,
					speed: 1000,
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false,
					autoplaySpeed: 5000
				});
			}
			else {
				$('.slider').slick({
					dots: false,
					arrows: true,
					speed: 1000,
					infinite: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false,
					autoplaySpeed: 5000
				});
			}
		}
		else if($('body').hasClass('Arquiteturademarca')) {// Página Arquitetura de marca
			if(WidthDevice <= 900) {
				$('#section3 .hover').click( function(e) {
					if( $(this).hasClass('aberto') ) {
						$('#section3 .hover').removeClass('aberto');
					} 
					else {
						$('#section3 .hover').removeClass('aberto');
						$(this).addClass('aberto');
					}
				});
				$('.popup-trigger').click( function(e) {
					$('.'+this.id).addClass('aberto');
				});
				$('.popup-mobile .btn-fechar').click( function(e) {
					$(this).parent().removeClass('aberto');
				});
				var slideAtual = 1;
				$('.slide-trigger').click( function(e) {
					$('.'+this.id).addClass('aberto');
					$('.voltar ul').append('<li></li>');
					slideAtual = parseInt(this.id.slice(-1));
					slideAtual >= 2 && $('.voltar').css('display', 'block');
				});
				$('.voltar a').click( function(e) {
					slideAtual <= 2 && $('.voltar').css('display', 'none');
					e.preventDefault();
					$('.slide'+slideAtual).removeClass('aberto');
					$('.voltar ul li:first-of-type').remove();
					if (slideAtual == 5 || slideAtual == 7) slideAtual--;
					slideAtual--;
				});
			}
		}
		else if($('body').hasClass('Estilofotografico')) {// Página Estilo fotografico
			if(WidthDevice > 900) {
				$('#slider4').slick({
					dots: false,
					arrows: true,
					speed: 400,
					infinite: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
			} else {
				$('.slider-mobile').slick({
					dots: true,
					arrows: false,
					speed: 400,
					infinite: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					pauseOnHover: false,
					pauseOnFocus: false,
					adaptiveHeight: false
				});
				$('section.hover').click( function(e) {
					if( $(this).hasClass('aberto') ) {
						$(this).removeClass('aberto');
					} 
					else {
						$('section.hover').removeClass('aberto');
						$(this).addClass('aberto');
					}
				});
			}
		}
		else if($('body').hasClass('Tomdevoz')) {// Página Tom de Voz
			if(WidthDevice <= 900) {
				$('.accordion-trigger').click( function(e) {
					var respostaId = $(this).parents('.accordion-mobile').attr('id').substr(-1);
						respostaId = '#resposta'+respostaId;
					if( $(this).parents('.accordion-mobile').hasClass('aberto') ) {
						$(this).parents('.accordion-mobile').removeClass('aberto');
						$(respostaId).removeClass('aberto');
					} 
					else {
						$('.accordion-mobile').removeClass('aberto');
						$('.Resposta').removeClass('aberto');
						$(this).parents('.accordion-mobile').addClass('aberto');
						$(respostaId).addClass('aberto');
					}
				});
				$('.hover a').click( function(e) {
					e.preventDefault();
					$(this).parent().children('.popup').addClass('aberto');
				});
				$('.popup-trigger').click( function(e) {
					$('.'+this.id).addClass('aberto');
				});
				$('.popup-mobile .btn-fechar').click( function(e) {
					$(this).parent().removeClass('aberto');
				});
			}
		}
		else {}
});