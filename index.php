<!DOCTYPE HTML>
<html>
	<head>
		<?php 
			include 'assets/config.php';
	
			$tituloPagina = 'Brandbook - '. $empresa;
			$descricaoCompartilhamento = '';
			
			$urlPagina = $Home;
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
		<meta property="og:title" content="<? echo $tituloPagina ?>" />
		<meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
		<meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
	</head>
	<body class="Home">
		<section class="PrimeiraSessaoHome fullscreen-bg">
			<img class="Logo" src="<? echo $images ?>Home_PrimeiraSessao_Logo.png" />
			<div class="div-esq">
				<h1>PRAZER,<br>SOMOS<br>BANCO PAN</h1>
				<p>
					Um banco que dá crédito e acesso à informação com tecnologia para você<br>
					transformar desafios em conquistas.
				</p>
			</div>
			<div class="div-dir">
				<div class="quadrado"></div>
				<div class="triangulobaixo"></div>
				<div class="triangulocima"></div>
			</div>
			<?php include('vermais.php'); ?>
		</section>

		<section class="SegundaSessaoHome">
			<div class="teste">
				<div class="wrapper">
					<h2>
						Existimos para 
						dar um novo 
						olhar para os 
						desafios 
						financeiros 
						e superá-los.
					</h2>
					<h4>
						Para todos que querem enfrentar 
						e vencer os obstáculos da vida.
					</h4>
				</div>
				<div class="box-direita">
					<div class="box-cima">
						<p>
							Sempre com
						</p>
					</div>					
					<div class="box-baixo">
						<div class="wrapper">
							<h6>Conhecimento sem comodismo</h6>
							<p>
								Ouvir e entender o que os clientes precisam é o nossoponto de partida para buscar a melhor solução. Sabemos que a soma de diversas visões com troca e transparência agindo com autonomia só potencializa esse resultado.
							</p>
						</div>
						<div class="wrapper">
							<h6>Vontade de resolver</h6>
							<p>
								Um time que une o legado
								e o novo. Somos feitos de
								gente expert e inquieta, com bagagem e ferramentas na manga para pensar fora da
								caixa. Essa é a nossa fórmula
								para seguir evoluindo.
							</p>
						</div>
						<div class="wrapper">
							<h6>Simplicidade que conecta</h6>
							<p>
								Traduzimos o que é complicado
								e simplificamos tanto os processos quanto as relações entre as pessoas. Quebramos barreiras e burocracias para que todos se sintam mais confiantes.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="TerceiraSessaoHome">
			<!-- <article> -->
				<a href="<? echo $Logo ?>">
					<p>LOGO E SÍMBOLO</p>
					<img src="<? echo $images ?>Home_TerceiraSessao_01.png" />
				</a>
				<a href="<? echo $Cores ?>">
					<p>CORES</p>
					<img src="<? echo $images ?>Home_TerceiraSessao_02.png" />
				</a>
				<a href="<? echo $Tipografia ?>">
					<p>TIPOGRAFIA</p>
					<img src="<? echo $images ?>Home_TerceiraSessao_03.png" />
				</a>
				<a href="<? echo $Grafismos ?>">
					<p>GRAFISMOS</p>
					<img src="<? echo $images ?>Home_TerceiraSessao_04.png" />
				</a>
				<a href="<? echo $Icones ?>">
					<p>ÍCONES</p>
					<img src="<? echo $images ?>Home_TerceiraSessao_05.png" />
				</a>
				<a href="<? echo $Fotografia ?>">
					<p>FOTOGRAFIA</p>
					<img src="<? echo $images ?>Home_TerceiraSessao_06.png" />
				</a>
				<a href="<? echo $Ilustracoes ?>">
					<p>ILUSTRAÇÕES</p>
					<img src="<? echo $images ?>Home_TerceiraSessao_07.png" />
				</a>
				<a href="<? echo $Identidade ?>">
					<p>IDENTIDADE VERBAL</p>
					<img src="<? echo $images ?>Home_TerceiraSessao_08.png" />
				</a>
			<!-- </article> -->
		</section>

		<section class="QuartaSessaoHome fullscreen-bg">			
			<a href="<? echo $Inspiracoes ?>">
				<p>INSPIRAÇÕES</p>
				<!-- <img class="fullscreen-bg" src="<? echo $images ?>Home_QuartaSessao.png" /> -->
			</a>			
		</section>

        
		<?php include 'assets/footer.php'; ?>
	</body>
	
</html>