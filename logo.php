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
        <?php include 'assets/header.php'; ?>
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
            <div class="Cinza">
                <?php include('vermais.php'); ?>
                <?php include('linkdownload.php'); ?>
            </div>
        </section>

        <section class="SegundaSessaoLogo fullscreen-bg">            
            <div class="wrapper">
                <div class="esq">
                    <h6>Área de proteção</h6>
                    <div class="wrapper-img">
                        <img src="<? echo $images ?>Logo_SegundaSessao_01.png"/>
                    </div>
                    <p>
                    O logo precisa dessa área de proteção, seja das bordas, seja do texto<br>
                    ou de qualquer outro elemento. A área de segurança é igual a altura<br>
                    da letra “P” do logo. 
                    </p>
                </div>
                <div class="dir">
                    <h6>Redução máxima</h6>
                    <div class="wrapper-img">
                        <img src="<? echo $images ?>Logo_SegundaSessao_02.png"/>
                    </div>
                    <p>
                    Impressos:<br>
                    X=10mm<br><br>
                    
                    Digital:<br>
                    X=70px
                    </p>
                </div>
            </div>            
        </section>

        <section class="BoxMenor">
            <article>
                <h3>Versão Vertical</h3>
                <p>
                Quando não for possível aplicar a versão principal do logo, opte por sua versão<br> 
                vertical. Garanta que o espaço e leitura em aplicações seja respeitado para que<br>
                o logo não perca suas características.
                </p>
            </article>
        </section>

        <section class="TerceiraSessaoLogo ">            
            <div class="wrapper">
                <div class="esq">
                    <div class="SliderLogotipoCor ">
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_01.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_02.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_03.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_04.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_05.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_06.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_07.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_08.png"/>                    
                        </div>
                    </div>
                    <div class="Cinza">
                        <?php include('linkdownload.php'); ?>
                    </div>
                </div>
                <div class="dir">
                    <div>
                        <div>
                            <p>
                                Área de<br> proteção
                            </p>
                            <p>
                                A área de segurança<br> é igual a altura da<br> letra “P” do logo. 
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_Direita_Cima.png"/>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p>
                                Redução<br> 
                                máxima
                            </p>
                            <p>
                                Impressos:<br>
                                X=10mm<br><br>

                                Digital:<br>
                                X=70px  
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_TerceiraSessao_Direita_Baixo.png"/>
                        </div>
                    </div>
                </div>
            </div>            
        </section>

        <section class="BoxMenor">
            <article>
                <h3>Símbolo</h3>
                <p>
                Podemos usar nosso símbolo isolado em lugares em que o Banco Pan esteja<br>
                no contexto, ele representa a síntese do Banco Pan, onde não for possível<br>
                aplicar o logo por completo esta versão continua nos representando,<br>
                independente da situação. Ex: Redes sociais, aplicativo, etc.
                </p>
            </article>
        </section>

        <section class="QuartaSessaoLogo">            
            <div class="wrapper">
                <div class="esq">
                    <div class="SliderLogotipoCor ">
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_01.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_02.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_03.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_04.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_05.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_06.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_07.png"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_08.png"/>                    
                        </div>
                    </div>
                    <div class="Cinza">
                        <?php include('linkdownload.php'); ?>
                    </div>
                </div>
                <div class="dir">
                    <div>
                        <div>
                            <p>
                                Área de<br> proteção
                            </p>
                            <p>
                                A área de segurança<br> é igual a altura da<br> letra “P” do logo. 
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_Direita_Cima.png"/>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p>
                                Redução<br> 
                                máxima
                            </p>
                            <p>
                                Impressos:<br>
                                X=8mm<br><br>

                                Digital:<br>
                                X=40px  
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Logo_QuartaSessao_Direita_Baixo.png"/>
                        </div>
                    </div>
                </div>
            </div>            
        </section>

        <section class="BoxMaior">
            <article>
                <div>
                    <h3>
                    Nosso símbolo acabou<br>
                    de ser lançado e ainda<br>
                    precisa de muito uso<br>
                    para ser reconhecido.
                </h3>
                </div>
                <div>                    
                    <p>
                    Sempre que tivermos peças para divulgação<br>
                    externa devemos utilizar o logo completo.
                    </p>
                    <p class="link">Confira o exemplo de uso na parte de <a href="<? echo $Inspiracoes ?>">inspirações</a></p>
                </div>
            </article>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>Restrições</h3>
                <p>
                Devemos respeitar a nossa marca e seguir os usos adequados pensados<br>
                para ela, por essa razão, qualquer uso fora dos apresentados aqui é vetado<br>
                para garantir a qualidade e força da marca. Abaixo alguns exemplos de<br>
                como NÃO USAR a marca do Banco Pan.
                </p>
            </article>
        </section>  

        <section class="SextaSessaoLogo">            
            <p>Não Fazemos</p>
            <div class ="wrapper">
                <div>
                    <img src="<? echo $images ?>Logo_SextaSessao_01.png"/>
                    <p>
                        Nunca distorcer o logo<br>
                        ou o símbolo.</p>
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_SextaSessao_02.png"/>
                    <p>
                        Não utilizar a cor Coral,<br> 
                        ou qualquer outra fora da paleta,<br>
                        no logo e símbolo.
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_SextaSessao_03.png"/>
                    <p>
                        Não adicionar nenhuma<br>
                        informação ao logo ou símbolo.
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_SextaSessao_04.png"/>
                    <p>
                        Não utilizar o logo ou símbolo<br>
                        em baixa resolução.
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_SextaSessao_05.png"/>
                    <p>
                        <strong>APENAS</strong> adicionar o símbolo junto<br>
                        com o logo se a peça tiver mais de uma<br>
                        face ex. frente e verso de folder, relatório, etc.<br> 
                        <strong>NUNCA</strong> colocar os dois juntos em<br>
                        uma mesma face.
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Logo_SextaSessao_06.png"/>
                    <p>
                        Respeitar o uso do logo para que<br>
                        sempre tenha legibilidade
                    </p>
                </div>                    
            </div>            
        </section>

    
        <?php include 'assets/footer.php'; ?>
	</body>

