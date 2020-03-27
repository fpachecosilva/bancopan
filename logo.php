<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Logo;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Logo">
        <section class="PrimeiraSessaoLogo fullscreen-bg">
            <div class="SliderLogotipoCor fullscreen-bg">
                <div>
                    <img src="<? echo $images ?>Logo_PrimeiraSessao_01.png"/>                    
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_PrimeiraSessao_02.png"/>                    
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_PrimeiraSessao_03.png"/>                    
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_PrimeiraSessao_04.png"/>                    
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_PrimeiraSessao_05.png"/>                    
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_PrimeiraSessao_06.png"/>                    
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_PrimeiraSessao_07.png"/>                    
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_PrimeiraSessao_08.png"/>                    
                </div>
            </div>
            <div class="texto-circulos">
                <p>Clique nas bolinhas para ver as aplicações em outro fundos.</p>
            </div>
            <?php include('vermais.php'); ?>
            <?php include('linkdownload.php'); ?>
        </section>
    
        <?php include 'assets/footer.php'; ?>
	</body>

