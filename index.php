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
        <h1>PRAZER,<br>SOMOS<br>BANCO PAN</h1>
        
		<?php include 'assets/footer.php'; ?>
	</body>
	
</html>