<!DOCTYPE HTML>
<html>
	<head>
	<?php 
		include 'assets/config.php';
 
		$tituloPagina = 'Acesso ao Brandbook - '. $empresa;
		$descricaoCompartilhamento = '';
		
		$urlPagina = $Paginalogin;
	?>
<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>

		<meta property="og:title" content="<? echo $tituloPagina ?>" />
		<meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
		<meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->

	</head>
	<body class="Home">
<<<<<<< HEAD
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
				<div class="triangulo"></div>
			</div>
		</section>
        
=======
        <h1>PRAZER,<br>SOMOS<br>BANCO PAN</h1>
        test
>>>>>>> be1ab883f0f33515f35bb9cc46019b1d9c3d27a0
		<?php include 'assets/footer.php'; ?>
	</body>
	
</html>