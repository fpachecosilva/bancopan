<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Grafismos;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
    </head>

    <body class="Grafismos">
        <section class="GrafismosPrimeiraSessao fullscreen-bg">
            <?php include('vermais.php'); ?>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>Conceito</h3>
                <p>
                    Nosso grafismo nasce do pixel. Ele é o ponto de partida para novas<br>
                    perspectivas. Veja como funciona:
                </p>
            </article>
        </section>

        <section class="GrafismosSegundaSessao">
            <article>
                <div class="wrapper">
                    <div>
                        <img src="<? echo $images ?>Grafismos_SegundaSessao_01.png"/>
                        <p>1</p>
                        <p>
                            Pixel do logo
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_SegundaSessao_02.png"/>
                        <p>2</p>
                        <p>A perspectiva é construida por linhas diagonais com ângulo<br>
                           de 45° a partir do centro até fora do pixel, passando pelas<br> 
                           quatro quinas.
                        </p>
                    </div>
                    <div> 
                        <img src="<? echo $images ?>Grafismos_SegundaSessao_03.png"/>
                        <p>3</p>
                        <p>
                            Com as linhas traçadas, podemos ver as perspectivas saindo<br> 
                            do pixel.  Podemos trabalhar as cores nos recortes formados<br> 
                            pelas linhas.
                        </p>
                    </div>                    
                </div>
            </article>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>Modelos</h3>
                <p>
                    Minha identidade possui 5 modelos de grafismos. Cada um atente uma<br> 
                    necessidade específica da nossa comunicação. São eles:
                </p>
            </article>
        </section>

        <section class="GrafismosTerceiraSessao">
            <article>
                <div class="wrapper">
                    <div>
                        <img src="<? echo $images ?>Grafismos_TerceiraSessao_01.png"/>
                        <p>Grafismo 01</p>
                        <p>
                            Para comunicação<br>
                            Institucional
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_TerceiraSessao_02.png"/>
                        <p>Grafismo 02</p>
                        <p>
                            Para peças com<br>
                            mais texto.
                        </p>
                    </div>  
                    <div>
                        <img src="<? echo $images ?>Grafismos_TerceiraSessao_03.png"/>
                        <p>Grafismo 03</p>
                        <p>
                            Para peças com<br>
                            pouco texto.
                        </p>
                    </div>  
                    <div>
                        <img src="<? echo $images ?>Grafismos_TerceiraSessao_04.png"/>
                        <p>Grafismo 04</p>
                        <p>
                            Para peças<br>
                            sem imagem
                        </p>
                    </div>  
                    <div>
                        <img src="<? echo $images ?>Grafismos_TerceiraSessao_05.png"/>
                        <p>Grafismo 05</p>
                        <p>
                            Para detalhes
                        </p>
                    </div>  
                </div>
            </article>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Grafismo<br>
                    perspectiva
                </h3>
                <p>
                    <strong>Para comunicação institucional:</strong> peças inspiradoras com pouco texto e uma<br> 
                    mensagem em destaque. Pode ser usado com ou sem foto.<br><br>

                    Onde aplicar:<br>
                    Anúncios, cartazes, folders, banners digitais, etc.
                </p>
            </article>
        </section>

        <?php include 'assets/footer.php'; ?>
	</body>