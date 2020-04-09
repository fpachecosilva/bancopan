<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Tipografia;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Tipografia">
    <?php include 'assets/header.php'; ?>
        <section class="PrimeiraSessaoTipografia fullscreen-bg">
            <?php include('vermais.php'); ?>
            <?php include('linkdownload.php'); ?>
        </section>
        
        <section class="BoxMenor">
            <article>
                <h3>
                    Tipografia<br>
                    principal
                </h3>
                <p>
                    A tipografia principal do Banco Pan é a Montserrat. Ela dá propriedade à<br> 
                    nossa identidade. Nossa tipografia não existe na maioria dos computadores<br> 
                    e se for usada em apresentações e outros documentos, chegará<br> 
                    desconfigurada ao destinatário, por isso, só as agências e designers devem<br> 
                    usá-la.
                </p>
            </article>
        </section>

        <section class="SegundaSessaoTipografia fullscreen-bg">
            <div class="wrapper">
                <div class="esq">
                    <h2>Use assim</h2>
                    <div class="esq-wrapper">
                        <div>
                            <div>
                                <h3>TÍTULOS</h3>
                                <p>
                                    Para títulos usamos a Monserrat Extra Bold,<br>
                                    SEMPRE EM CAIXA ALTA!
                                </p>
                            </div>
                            <div>
                                <img src="<? echo $images ?>Tipografia_SegundaSessao_01.png"/>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h3>SUB TÍTULOS</h3>
                                <p>
                                    Para subtítulos usamos caixa alta e baixa normalmente,<br> 
                                    em qualquer peso da Montserrat. Usamos a Montserrat<br> 
                                    Bold para os destaques.
                                </p>
                            </div>
                            <div>
                                <img src="<? echo $images ?>Tipografia_SegundaSessao_01.png"/>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h3>TEXTO CORRIDO</h3>
                                <p>
                                    Para textos corrido usamos caixa alta e baixa normalmente,<br> 
                                    em qualquer peso da Montserrat. Usamos a Montserrat Bold<br> 
                                    para os destaques.
                                </p>
                            </div>
                            <div>
                                <img src="<? echo $images ?>Tipografia_SegundaSessao_01.png"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dir">
                    <div class="dir-wrapper">
                        <div>
                            <div>
                                <img src="<? echo $images ?>Tipografia_SegundaSessao_02.png"/>
                            </div>
                            <div>                                
                                <p>
                                    AQUI SEU<br> 
                                    CARRO NOVO<br> 
                                    VAI DAR PÉ.
                                </p>
                            </div>                            
                        </div>
                        <div>
                            <div>
                                <img src="<? echo $images ?>Tipografia_SegundaSessao_03.png"/>
                            </div>
                            <div>                                
                                <p>
                                    Crédito com a gente<br>
                                    é bem <strong>mais fácil</strong> que<br>
                                    fazer baliza na ladeira.
                                </p>
                            </div>                            
                        </div>
                        <div>
                            <div>
                                <img src="<? echo $images ?>Tipografia_SegundaSessao_04.png"/>
                            </div>
                            <div>                                
                                <p>
                                    Lorem ipsum dolor sit <strong>amet,</strong> consectetur<br>
                                    adipiscing elit. Maecenas a est hendrerit,<br> 
                                    mollis nibh ut, <strong>sollicitudin</strong> nibh. Nullam<br> 
                                    neque leo, scelerisque ut elit id, element<br> 
                                    um pellentesque sapien. 
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="proporcao">
                                <p>Proporção:</p>
                                <img src="<? echo $images ?>Tipografia_SegundaSessao_05.png"/>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Tipografia<br>
                    para<br> 
                    aplicativo
                </h3>
                <p>
                    Nossa fonte exclusiva para aplicativo é a Isidora. Apesar de sua estrutura forte e racional, a fonte também<br> 
                    parece amigável e expressiva, graças aos seus terminais arredondados. Além disso, seus cortes terminais na<br> 
                    diagonal proporcionam uma aparência mais suave e arredondada, o que facilita a leitura nos meios digitais.
                </p>
            </article>
        </section>

        <section class="TerceiraSessaoTipografia">
            <p>Isidora</p>
        </section>

        <section class="BoxMenor">
            <article>
                <h3 class="laranja">
                    Tipografia<br>
                    de sistema
                </h3>
                <p>
                    A Verdana é uma fonte que já vem em todos os computadores e com certeza vai funcionar, não<br> 
                    importa quem receba. Ela serve apenas para casos específicos, quando não for possível usar a<br> 
                    Montserrat: assinatura de e-mail ou documentos que serão abertos por terceiros, como<br> 
                    apresentações em PPt etc.
                </p>
            </article>
        </section>

        <section class="QuartaSessaoTipografia">
            <p>Verdana</p>
        </section>

        <section class="QuintaSessaoTipografia">            
            <div class="BoxNaoFazemos">
                <div>
                    <div class="Titulo">
                        <p>NÃO FAZEMOS</p>                            
                    </div>
                </div>
                <div>
                    <div>
                        <img src="<? echo $images ?>Tipografia_QuintaSessao_01.png"/>
                        <p>
                            Evitar títulos muito longos e extensos.<br>
                            Caso seja necessário, divida o título mantendo<br>
                            a parte mais importante e use os outros estilos<br> 
                            de texto para o restante.
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Tipografia_QuintaSessao_02.png"/>
                        <p>
                            Evite colocar elementos e grafismos<br>
                            que atrapalhem a leitura do texto
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Tipografia_QuintaSessao_03.png"/>
                        <p>
                            Deixe sempre uma área de respiro entre os<br> 
                            diferentes estilos de texto e parágrafos
                        </p>
                    </div>
                </div>
            </div>           
        </section>


        <?php include 'assets/footer.php'; ?>
    </body>
