<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Icones;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Icones">
        <section class="PrimeiraSessaoIcones fullscreen-bg">
            <div>
                <div class="wrapper">
                    <div>
                        <img src="<? echo $images ?>Icones_PrimeiraSessao_01.svg"/>
                    </div>
                    <div>
                        <h1>
                            Falamos<br>
                            mesmo Sem<br>
                            escrever. 
                        </h1>
                        <p>
                            Nossos dois tipos de ícones nos<br>
                            ajudam a contar histórias.
                        </p>
                    </div>
                </div>
            </div>
            <?php include('vermais.php'); ?>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Ícones<br> 
                    da marca
                </h3>
                <p>
                    Mais estilizados e simpáticos combinam o pixel do logo com um detalhe <br>
                    de cor.<br><br>

                    Onde usamos?<br>
                    Ele é indicado para peças institucionais. Exp.: Anúncios, folhetos, mídia<br> 
                    exterior, etc.                    
                </p>
            </article>
        </section>

        <section class="SegundaSessaoIcones">
            <img src="<? echo $images ?>Icones_SegundaSessao_01.svg"/>
        </section>

        <section class="TerceiraSessaoIcones">            
            <div class="wrapper">
                <div class="esq">
                    <p>
                        Aplicação sobre fundos
                    </p>  
                    <div class="SliderLogotipoCor ">
                        <div>
                            <img src="<? echo $images ?>Icones_TerceiraSessao_01.svg"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Icones_TerceiraSessao_02.svg"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Icones_TerceiraSessao_03.svg"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Icones_TerceiraSessao_04.svg"/>                    
                        </div>
                        <div>
                            <img src="<? echo $images ?>Icones_TerceiraSessao_05.svg"/>                    
                        </div>
                    </div>                    
                </div>
                <div class="dir">
                    <p>
                        Grid de construção
                    </p>                       
                    <img src="<? echo $images ?>Icones_TerceiraSessao_06.png"/>                                    
                </div>
            </div>
            <div class="Cinza ComTexto">
                <?php include('linkdownload.php'); ?>
            </div>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Ícones<br> 
                    para o<br>
                    dia a dia
                </h3>
                <p>
                    Nosso ícone do dia a dia é mais prático e direto.<br>
                    Ele deve ser usado na versão outline e apenas em uma das cores da paleta do Banco Pan.<br>
                    Ele é exclusivo para materiais de UX/UI Exp.; Menu de app, botões do site, etc.                   
                </p>
            </article>
        </section>

        <section class="QuartaSessaoIcones">
            <div class="ComTexto">
                <img src="<? echo $images ?>Icones_QuartaSessao_01.svg"/>
            </div>
            <div class="ComTexto">
                <?php include('linkdownload.php'); ?>
            </div>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                   Restrições
                </h3>
                <p>
                    Para melhor usabilidade e para manter a essência da marca, devemos<br>
                    respeitar as regras de uso dos ícones. Abaixo alguns exemplos de como<br>
                    NÃO USAR os ícones do Banco Pan.
                </p>
            </article>
        </section>

        <section class="QuintaSessaoIcones">            
            <p>Não Fazemos</p>
            <div class ="wrapper">
                <div>
                    <img src="<? echo $images ?>Icones_QuintaSessao_01.png"/>
                    <p>
                        Não utilizar os ícones<br>
                        preenchidos.
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Icones_QuintaSessao_02.png"/>
                    <p>
                        Não utilizar cores fora<br>
                        da paleta do Banco Pan.
                    </p>
                </div>
                <div>
                    <img src="<? echo $images ?>Icones_QuintaSessao_03.png"/>
                    <p>
                        Evitar espessuras muito<br>
                        grossas e pesadas.
                    </p>
                </div>                   
            </div>            
        </section>



        <?php include 'assets/footer.php'; ?>
	</body>