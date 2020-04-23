<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Download;
    $urlAnterior =  $_SERVER['HTTP_REFERER'];    
    $nomePagina = explode("/", parse_url($urlAnterior, PHP_URL_PATH));
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
                            <img src="<?php echo $images ?>Download_impressoes.svg"/>
                        </div>
                        <div>
                            <p>
                                PARA<br>
                                IMPRESSÕES
                            </p>
                        </div>
                        <div>
                            
                            <?php

                                if ( $nomePagina[2] == "logo.php" ) 
                                {
                                    echo '<a href="'. $LogosImpressao .'">Download</a>';
                                }
                                elseif ( $nomePagina[2] == "grafismos.php" )
                                {
                                    echo '<a href="'. $GrafismosImpressao .'">Download</a>';
                                }
                                elseif ( $nomePagina[2] == "icones.php" )
                                {
                                    echo '<a href="'. $IconesImpressao .'">Download</a>';
                                } 
                                else 
                                {
                                    echo '<a href="">Download</a>';
                                }

                            ?>

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

                            <?php

                                if ( $nomePagina[2] == "logo.php" ) 
                                {
                                    echo '<a href="'. $LogosDigital .'">Download</a>';
                                }
                                elseif ( $nomePagina[2] == "grafismos.php" )
                                {
                                    echo '<a href="'. $GrafismosDigital .'">Download</a>';
                                }
                                elseif ( $nomePagina[2] == "icones.php" )
                                {
                                    echo '<a href="'. $IconesDigital .'">Download</a>';
                                } 
                                else 
                                {
                                    echo '<a href="">Download</a>';
                                }
                                
                            ?>

                        </div>
                    </div>
                    
                </div>
            </div>

            <?php echo '<a class="fechar" href="'. $_SERVER['HTTP_REFERER'] .'"></a>'; ?>
            
        </section>  
    
    
    <?php include 'assets/footer.php'; ?>
</body>