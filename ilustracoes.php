<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Ilustracoes;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Ilustracoes">
    <?php include 'assets/header.php'; ?>
        <section class="PrimeiraSessaoIlustracoes fullscreen-bg">
            <img src="<? echo $images ?>Ilustracoes_PrimeiraSessao_01.svg"/>
            <div class="Cinza">
                <?php include('vermais.php'); ?>
            </div>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Nossas<br>
                    ilustrações    
                </h3>
                <p>
                    Nossa ilustração ajuda a comunicação a ser entendida facilmente.
                </p>
            </article>
        </section>

        <section class="SegundaSessaoIlustracoes fullscreen-bg">
            <div class="SliderIlustracoes">
                <div class="wrapper-img">
                    <img src="<? echo $images ?>Ilustracoes_SegundaSessao_01.svg"/>
                </div>
                <div class="wrapper-img">
                    <img src="<? echo $images ?>Ilustracoes_SegundaSessao_02.svg"/>
                </div>
                <div class="wrapper-img">
                    <img src="<? echo $images ?>Ilustracoes_SegundaSessao_03.svg"/>
                </div>
                <div class="wrapper-img">
                    <img src="<? echo $images ?>Ilustracoes_SegundaSessao_04.svg"/>
                </div>
                <div class="wrapper-img">
                    <img src="<? echo $images ?>Ilustracoes_SegundaSessao_05.svg"/>
                </div>                
            </div>
        </section>
              
        <section class="TerceiraSessaoIlustracoes fullscreen-bg">
            <div class="wrapper">
                <div class="esq">
                    <div class="esq-cima">
                        <h3 class="titulo">Diretrizes conceituais</h3>
                        <p>
                            Elegante<br>
                            Minimalista<br>
                            Próxima<br>
                            Autêntica
                        </p>
                    </div>
                    <div class="esq-baixo">
                        <h3 class="titulo">Diretrizes técnicas</h3>
                        <p>
                            _Com ação/movimento;<br>
                            _Mostrando a experiência do usuário;<br>
                            _Desenho flat (sem volume);<br>
                            _Desenho orgânico (sem regras de alinhamento, <br>
                            sem cantos retos);<br>
                            _Até 8 combinações de tons cores;<br>
                            _Formas simples;<br>
                            _Sem muitos detalhes<br>
                            _Sem contorno<br>
                            _Sem os olhos;<br>
                            _Sem sombra.<br>
                            _Sem degradê
                        </p>
                    </div>
                </div>
                <div class="dir">
                    <h3 class="titulo">Construção</h3>
                    <div class="wrapper-boxes">
                        <div class="box box1">
                            <div>
                                <div>
                                    <p>Passo 1</p>
                                </div>
                                <div>
                                    <p>Desenho</p>
                                </div>
                                <div>
                                    <p>
                                        Ao desenhar, garanta que ele esteja dentro<br> 
                                        das diretrizes conceituais e técnicas.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="<? echo $images ?>Ilustracoes_TerceiraSessao_01.svg"/>
                            </div>
                            <div>
                                <p>
                                    Diretrizes conceituais<br>
                                    Diretrizes técnicas
                                </p>
                            </div>
                        </div>
                        <div class="box box2">
                            <div>
                                <div>
                                    <p>Passo 2</p>
                                </div>
                                <div>
                                    <p>Pixel</p>
                                </div>
                                <div>
                                    <p>
                                        Coloque o pixel do logo do<br>
                                        Banco Pan para interagir com o desenho.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="<? echo $images ?>Ilustracoes_TerceiraSessao_01.svg"/>
                            </div>
                            <div>
                                <img src="<? echo $images ?>Ilustracoes_TerceiraSessao_02.png"/>
                            </div>
                        </div>
                        <div class="box box3">
                            <div>
                                <div>
                                    <p>Passo 3</p>
                                </div>
                                <div>
                                    <p>Cores</p>
                                </div>
                                <div>
                                    <p>
                                        Para finalizar, use as cores da nossa<br>
                                        paleta especial para ilustrações
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="<? echo $images ?>Ilustracoes_TerceiraSessao_01.svg"/>
                            </div>
                            <div>
                                <img src="<? echo $images ?>Ilustracoes_TerceiraSessao_03.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="QuartaSessaoIlustracoes fullscreen-bg">
            <p class="titulo">
                Uso do pixel
            </p>
            <div class="wrapper">
                <div class="esq">
                    <div>
                        <p>
                            1# COMO BASE DA<br> 
                            ILUSTRAÇÃO
                        </p>
                    </div>
                    <div>
                        <p>
                            Use como fundo da lustração, sempre com uma uma<br> 
                            tonalidade bem suave de cor
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Ilustracoes_QuartaSessao_01.svg"/>
                    </div>
                </div>
                <div class="dir">
                    <div>
                        <p>
                            2# INTERAGINDO COM<br>
                            A ILUSTRAÇÃO
                        </p>
                    </div>
                    <div>
                        <p>
                            Aproveite o formato do pixel para substituir outros elementos<br>
                            na ilustração. Ele pode virar várias coisas, como um banco,<br> 
                            uma janela, etc.

                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Ilustracoes_QuartaSessao_02.svg"/>
                    </div>
                </div>
            </div>
        </section>

        <section class="QuintaSessaoIlustracoes">
            <p class="titulo">Uso das cores</p>
            <p>
                Use estas cores nas ilustrações.<br>
                Obs.: O uso das cores é livre para objetos que perdem sua característica quando mudam de cor (Ex.: folhas, sol, cabelo, tons de pele, etc.) 
            </p>
            <div class="wrapper">
                <div class="linha linha1">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="linha linha2">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="linha linha3">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="linha linha4">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Panmojis   
                </h3>
                <p>
                    Ficam restritos apenas aos canais digitais da<br> 
                    marca, aplicado apenas como emoji
                </p>
            </article>
        </section>

        <section class="SextaSessaoIlustracoes fullscreen-bg">
            <div class="wrapper">
                <div class="esq">
                    <img src="<? echo $images ?>Ilustracoes_SextaSessao_01.svg"/>
                </div>
                <div class="dir">
                    <img src="<? echo $images ?>Ilustracoes_SextaSessao_02.svg"/>
                </div>
            </div>
        </section>

        <section class="SetimaSessaoIlustracoes">            
            <p>Não Fazemos isso</p>
            <div class ="wrapper">
                <div>
                    <img src="<? echo $images ?>Ilustracoes_SetimaSessao_01.png"/>
                    <p>
                        Não usamos a ilustração<br>
                        sem o Pixel
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Ilustracoes_SetimaSessao_02.png"/>
                    <p>
                        Não usamos cores fora<br>
                        da nossa paleta
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Ilustracoes_SetimaSessao_03.png"/>
                    <p>
                        Não usamos nenhum<br>
                        outro estilo de ilustração.
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Ilustracoes_SetimaSessao_04.png"/>
                    <p>
                        Uso do PANmoji fica restrito apenas<br>
                        aos canais digitais.
                    </p>
                </div>                
            </div>            
        </section>


        <?php include 'assets/footer.php'; ?>
	</body>