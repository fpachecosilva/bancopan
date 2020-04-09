<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Inspiracoes;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Inspiracoes">
    <?php include 'assets/header.php'; ?>
        <section class="PrimeiraSessaoInspiracoes fullscreen-bg"></section>
        <section class="SegundaSessaoInspiracoes fullscreen-bg"></section>
        <section class="TerceiraSessaoInspiracoes fullscreen-bg"></section>
        <section class="QuartaSessaoInspiracoes">
            <img src="<? echo $images ?>Inspiracoes_QuartaSessao_01.png"/>
            <img src="<? echo $images ?>Inspiracoes_QuartaSessao_02.png"/>
        </section>        
        <section class="QuintaSessaoInspiracoes fullscreen-bg"></section>
        <section class="SextaSessaoInspiracoes">
            <img src="<? echo $images ?>Inspiracoes_SextaSessao_01.png"/>
            <img src="<? echo $images ?>Inspiracoes_SextaSessao_02.png"/>
        </section>
        <section class="SetimaSessaoInspiracoes fullscreen-bg"></section>
        <section class="OitavaSessaoInspiracoes fullscreen-bg"></section>
        <section class="NonaSessaoInspiracoes fullscreen-bg"></section>
        <section class="DecimaSessaoInspiracoes fullscreen-bg"></section>
        <section class="DecimaPrimeiraSessaoInspiracoes fullscreen-bg"></section>
        <section class="DecimaSegundaSessaoInspiracoes fullscreen-bg"></section>
        <section class="DecimaTerceiraSessaoInspiracoes fullscreen-bg"></section>    
    <?php include 'assets/footer.php'; ?>
</body>