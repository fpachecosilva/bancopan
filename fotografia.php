<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Fotografia;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Fotografia">
    <?php include 'assets/header.php'; ?>
        <section class="PrimeiraSessaoFotografia fullscreen-bg">
            <p>
                Para enfrentar<br>
                os desafios<br>
                da vida.
            </p>
            <?php include('vermais.php'); ?>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Estilo<br>
                    Fotográfico    
                </h3>
                <p>
                    nosso estilo fotográfico retrata pessoas determinadas, inseridas em diversos<br> 
                    contextos.
                </p>
            </article>
        </section>

        <section class="SegundaSessaoFotografia fullscreen-bg">
            <div class="wrapper">
                <div class="esq">
                    <div class="SliderFotografia">
                        <img src="<? echo $images ?>Fotografia_SegundaSessao_01.png"/>
                        <img src="<? echo $images ?>Fotografia_SegundaSessao_02.png"/>
                        <img src="<? echo $images ?>Fotografia_SegundaSessao_03.png"/>
                        <img src="<? echo $images ?>Fotografia_SegundaSessao_04.png"/>
                        <img src="<? echo $images ?>Fotografia_SegundaSessao_05.png"/>
                        <img src="<? echo $images ?>Fotografia_SegundaSessao_06.png"/>
                    </div>
                </div>

                <div class="dir">
                    <div class="wrapper-dir">
                        <div class="dir-cima">
                            <p>MOOD</p>
                            <p>
                                O olhar para a câmera<br> 
                                enfatiza coragem de seguir<br> 
                                adiante e enfrentar os<br> 
                                desafios da vida.
                            </p>
                        </div>
                        <div class="dir-baixo">
                            <p>Nossas fotografias devem:</p>
                            <p>
                                _ser ambientadas<br>
                                ​​_ter movimento <br>
                                ​​_evitar situações e ângulos clichês <br>
                                ​​_ser coloridas <br>
                                ​​_ter luz natural, sem filtros <br>
                                ​​_trazer diversidade e várias faixas etárias <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Fotografia<br>
                    com objetos    
                </h3>
                <p>
                    Objetos que contam histórias
                </p>
            </article>
        </section>

        <section class="TerceiraSessaoFotografia fullscreen-bg">
            <p>
                Que contam<br>
                histórias
            </p>
        </section>

        <section class="QuartaSessaoFotografia fullscreen-bg">
            <div class="wrapper">
                <div class="esq">
                    <div class="SliderFotografia">
                        <img src="<? echo $images ?>Fotografia_QuartaSessao_01.png"/>
                        <img src="<? echo $images ?>Fotografia_QuartaSessao_02.png"/>
                        <img src="<? echo $images ?>Fotografia_QuartaSessao_03.png"/>
                        <img src="<? echo $images ?>Fotografia_QuartaSessao_04.png"/>
                    </div>
                </div>

                <div class="dir">
                    <div class="wrapper-dir">
                        <div class="dir-cima">
                            <p>MOOD</p>
                            <p>
                                A história de<br> 
                                superação / conquista<br> 
                                contada por meio de<br> 
                                um objeto.<br>
                                A imagem tem uma<br> 
                                história e traz o<br> 
                                contexto da vida das<br> 
                                pessoas.
                            </p>
                        </div>
                        <div class="dir-baixo">
                            <p>Nossas fotografias devem:</p>
                            <p>
                                _ser ambientadas<br>
                                ​​_ter movimento <br>
                                ​​_evitar situações e ângulos clichês <br>
                                ​​_ser coloridas <br>
                                ​​_ter luz natural, sem filtros <br>                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="QuintaSessaoFotografia">            
            <p>Não Fazemos isso</p>
            <div class ="wrapper">
                <div>
                    <img src="<? echo $images ?>Fotografia_QuintaSessao_01.png"/>
                    <p>
                        Fotos com pessoas felizes<br> 
                        demais
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Fotografia_QuintaSessao_02.png"/>
                    <p>
                        Montagens, efeitos de luz e<br> 
                        composições artificiais
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Fotografia_QuintaSessao_03.png"/>
                    <p>
                        Fotos em preto e branco
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Fotografia_QuintaSessao_04.png"/>
                    <p>
                        Fotos carregadas ou escuras<br>
                        demais
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Fotografia_QuintaSessao_05.png"/>
                    <p>
                        Fotos com objetos não<br> 
                        ambientados
                    </p>
                </div>  
            </div>            
        </section>

        <?php include 'assets/footer.php'; ?>
	</body>