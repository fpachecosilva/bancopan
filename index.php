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
		</section>

		<section class="SegundaSessaoHome">
			<article>
				<h2>
					Existimos para 
					dar um novo 
					olhar para os 
					desafios 
					financeiros 
					e superá-los.
				</h2>
			</article>
		</section>
        
		<?php include 'assets/footer.php'; ?>
	</body>
	
</html>