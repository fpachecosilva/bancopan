<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Download;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Download">
        <section class="PrimeiraSessaoDownload fullscreen-bg">
            <div class="wrapper">
                <div class="wrapper-divs">
                    <div class="impressoes">
                        <div>
                            <img src="<? echo $images ?>Download_impressoes.svg"/>
                        </div>
                        <div>
                            <p>
                                PARA<br>
                                IMPRESSÕES
                            </p>
                        </div>
                        <div>
                            <a href="#">Download</a>
                        </div>
                    </div>
                    <div class="digital">
                        <div>
                            <img src="<? echo $images ?>Download_digital.svg"/>
                        </div>
                        <div>
                            <p>
                                PARA<br>
                                O DIGITAL
                            </p>
                        </div>
                        <div>
                            <a href="#">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="fechar" href="#"></a>
        </section>    
    
    
    
    
    
    
    
    <?php include 'assets/footer.php'; ?>
</body>