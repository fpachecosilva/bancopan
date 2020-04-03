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
            <!-- <article> -->
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
            <!-- </article> -->
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
            <!-- <article> -->
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
            <!-- </article> -->
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

        <section class="GrafismosQuartaSessao">
            <!-- <article> -->
                <div class="SliderGrafismos">
                    <img src="<? echo $images ?>Grafismos_QuartaSessao_01.png"/>
                    <img src="<? echo $images ?>Grafismos_QuartaSessao_02.png"/>
                    <img src="<? echo $images ?>Grafismos_QuartaSessao_03.png"/>
                    <img src="<? echo $images ?>Grafismos_QuartaSessao_04.png"/>
                    <img src="<? echo $images ?>Grafismos_QuartaSessao_05.png"/>
                </div>
                <?php include('linkdownload.php'); ?>
            <!-- </article> -->
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Grafismo<br>
                    flexível
                </h3>
                <p>
                    <strong>Para comunicação promocional:</strong> peças com um pouco mais texto.<br>
                    Os  tamanhos e combinações de cores são flexíveis.<br><br>

                    Onde aplicar:<br>
                    Anúncios, cartazes, folders, banners digitais, etc.
                </p>
            </article>
        </section>

        <section class="GrafismosQuintaSessao">
            <!-- <article> -->
                <div class="SliderGrafismos">
                    <img src="<? echo $images ?>Grafismos_QuintaSessao_01.png"/>
                    <img src="<? echo $images ?>Grafismos_QuintaSessao_02.png"/>
                    <img src="<? echo $images ?>Grafismos_QuintaSessao_03.png"/>
                    <img src="<? echo $images ?>Grafismos_QuintaSessao_04.png"/>
                    <img src="<? echo $images ?>Grafismos_QuintaSessao_05.png"/>
                </div>
                <?php include('linkdownload.php'); ?>
            <!-- </article> -->
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Usos
                </h3>
                <p>
                    Minha identidade possui 5 modelos de grafismos. Cada um atente uma<br>
                    necessidade específica da nossa comunicação. São eles:
                </p>
            </article>
        </section>

        <section class="GrafismosSextaSessao">
            <!-- <article> -->
                <div class="BoxGridImagens">
                    <div>
                        <img src="<? echo $images ?>Grafismos_SextaSessao_01.png"/>
                        <p>O pixel pode variar de tamanho.</p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_SextaSessao_02.png"/>
                        <p>E posição.</p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_SextaSessao_03.png"/>
                        <p>
                            Com a possibilidade de ajustar-se conforme a<br>
                            necessidade (mais texto, menos texto, imagens<br>
                            maiores ou menores).
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_SextaSessao_04.png"/>
                        <p>
                            Para facilitar e harmonizar a diagramação<br>
                            conforme o formato.
                        </p>
                    </div>
                </div>                
            <!-- </article> -->
        </section>

        <section class="GrafismosSetimaSessao">
            <!-- <article> -->
                <div class="BoxNaoFazemos">
                    <div>
                        <div class="Titulo">
                            <p>NÃO FAZEMOS</p>                            
                        </div>
                        <div class="Desc">
                            <p>
                                É preciso atentar-se ao uso do grafismo e suas regras.<br>
                                Abaixo alguns exemplos de como <strong>NÃO USAR</strong> os grafismos.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_SetimaSessao_01.png"/>
                            <p>
                                Não deixar as bordas muito<br> 
                                estreitas de modo que não dê para<br> 
                                enxergar a perspectiva.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_SetimaSessao_02.png"/>
                            <p>
                                Não mostrar mais do que uma<br> 
                                aresta na posição escolhida.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_SetimaSessao_03.png"/>
                            <p>
                                Não mostrar mais do que uma<br> 
                                aresta na posição escolhida.
                            </p>
                        </div>
                    </div>
                </div>                
            <!-- </article> -->
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Grafismo<br>
                    Pixel Box
                </h3>
                <p>
                    <strong>Para comunicação promocional:</strong> peças com bastante texto. É usado sobre<br>
                    fotos para que o texto fique legível.<br><br>

                    Onde aplicar:<br>
                    Anúncios, cartazes, folders, banners digitais, etc.
                </p>
            </article>
        </section>

        <section class="GrafismosOitavaSessao">
            <!-- <article> -->
                <div class="SliderGrafismos">
                    <img src="<? echo $images ?>Grafismos_OitavaSessao_01.png"/>
                    <img src="<? echo $images ?>Grafismos_OitavaSessao_02.png"/>
                    <img src="<? echo $images ?>Grafismos_OitavaSessao_03.png"/>
                    <img src="<? echo $images ?>Grafismos_OitavaSessao_04.png"/>
                    <img src="<? echo $images ?>Grafismos_OitavaSessao_05.png"/>
                </div>
                <?php include('linkdownload.php'); ?>
            <!-- </article> -->
        </section>

        <section class="GrafismosNonaSessao">
            <!-- <article> -->
                <div class="BoxNaoFazemos">
                    <div>
                        <div class="Titulo">
                            <p>NÃO FAZEMOS</p>                            
                        </div>
                        <div class="Desc">
                            <p>
                                É preciso atentar-se ao uso do grafismo e suas regras.<br>
                                Abaixo alguns exemplos de como <strong>NÃO USAR</strong> os grafismos.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_NonaSessao_01.png"/>
                            <p>
                                O pixel e as linhas não podem<br> 
                                passar por cima do rosto dos<br> 
                                personagens.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_NonaSessao_02.png"/>
                            <p>
                                Não criar mais do que duas linhas<br> 
                                partindo das arestas do pixel.
                            </p>
                        </div>                        
                        <div>
                            <img src="<? echo $images ?>Grafismos_NonaSessao_03.png"/>
                            <p>
                                Linhas devem ser da mesma<br>
                                cor entre elas.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_NonaSessao_04.png"/>
                            <p>
                                Respeitar a proporção da<br> 
                                espessura nas linhas do box.
                            </p>
                        </div>
                    </div>
                </div>                
            <!-- </article> -->
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Grafismo<br>
                    Linha
                </h3>
                <p>
                    <strong>Para comunicação interna:</strong> Os textos dos títulos podem se sobrepor a ele.<br> 
                    Pode ser usado com ou sem foto.<br><br> 

                    Exemplos :<br>
                    Comunicados, cartazes, folders, etc.
                </p>
            </article>
        </section>

        <section class="GrafismosDecimaSessao">
            <!-- <article> -->
                <div class="SliderGrafismos">
                    <img src="<? echo $images ?>Grafismos_DecimaSessao_01.png"/>
                    <img src="<? echo $images ?>Grafismos_DecimaSessao_02.png"/>
                    <img src="<? echo $images ?>Grafismos_DecimaSessao_03.png"/>
                    <img src="<? echo $images ?>Grafismos_DecimaSessao_04.png"/>
                    <img src="<? echo $images ?>Grafismos_DecimaSessao_05.png"/>
                </div>
                <?php include('linkdownload.php'); ?>
            <!-- </article> -->
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Usos
                </h3>
                <p>
                    Minha identidade possui 5 modelos de grafismos. Cada um atente uma<br> 
                    necessidade específica da nossa comunicação. São eles:
                </p>
            </article>
        </section>

        <section class="GrafismosDecimaPrimeiraSessao">
            <!-- <article> -->
                <div class="BoxGridImagens">
                    <div>
                        <img src="<? echo $images ?>Grafismos_DecimaPrimeiraSessao_01.png"/>
                        <p>
                            Interagindo com<br>
                            imagens de pessoas
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_DecimaPrimeiraSessao_02.png"/>
                        <p>Interagindo com textos</p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_DecimaPrimeiraSessao_03.png"/>
                        <p>Interagindo com ícones</p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_DecimaPrimeiraSessao_04.png"/>
                        <p>Interagindo com imagens de objetos</p>
                    </div>
                </div>                
            <!-- </article> -->
        </section>

        <section class="GrafismosDecimaSegundaSessao">
            <!-- <article> -->
                <div class="BoxNaoFazemos">
                    <div>
                        <div class="Titulo">
                            <p>NÃO FAZEMOS</p>                            
                        </div>
                        <div class="Desc">
                            <p>
                                É preciso atentar-se ao uso do grafismo e suas regras.<br>
                                Abaixo alguns exemplos de como <strong>NÃO USAR</strong> os grafismos.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_DecimaSegundaSessao_01.png"/>
                            <p>
                                Não ultrapassar a imagem,<br>
                                texto ou ícone com a linha.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_DecimaSegundaSessao_02.png"/>
                            <p>
                                Não ultrapassar a imagem,<br>
                                texto ou ícone com a linha.
                            </p>
                        </div>                        
                        <div>
                            <img src="<? echo $images ?>Grafismos_DecimaSegundaSessao_03.png"/>
                            <p>
                                Não utilizar mais de uma linha.
                            </p>
                        </div>                        
                    </div>
                </div>                
            <!-- </article> -->
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Grafismo<br>
                    Estampa
                </h3>
                <p>
                    Para detalhes de papelaria e brindes.<br><br>

                    Exemplos:<br>
                    Cadernos, blocos de notas, envelopes, etc.
                </p>
            </article>
        </section>

        <section class="GrafismosDecimaTerceiraSessao">
            <!-- <article> -->
                <div class="SliderGrafismos">
                    <img src="<? echo $images ?>Grafismos_DecimaTerceiraSessao_01.png"/>
                    <img src="<? echo $images ?>Grafismos_DecimaTerceiraSessao_02.png"/>                    
                </div>
                <?php include('linkdownload.php'); ?>
            <!-- </article> -->
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Usos
                </h3>
                <p>
                    Minha identidade possui 5 modelos de grafismos. Cada um atente uma<br> 
                    necessidade específica da nossa comunicação. São eles:
                </p>
            </article>
        </section>

        <section class="GrafismosDecimaQuartaSessao">
            <!-- <article> -->
                <div class="BoxGridImagens">
                    <div>
                        <img src="<? echo $images ?>Grafismos_DecimaQuartaSessao_01.png"/>
                        <p>
                            <strong>LIGHT</strong><br>
                            Utilizar esse peso para peças em<br> 
                            grandes formatos: banners, adesivos<br> 
                            de parede, envelopamentos, tótens<br> 
                            informativos, divisórias.
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_DecimaQuartaSessao_02.png"/>
                        <p>
                            <strong>MEDIUM</strong><br>                            
                            Utilizar esse peso para peças<br> 
                            digitais: banners web, e-mail<br> 
                            marketing, redes sociais.
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Grafismos_DecimaQuartaSessao_03.png"/>
                        <p>
                            <strong>BOLD</strong><br>                               
                            Utilizar esse peso para peças<br> 
                            impressas de menor formato:<br> 
                            flyers, folders, anúncios.
                        </p>
                    </div>                    
                </div>                
            <!-- </article> -->
        </section>

        <section class="GrafismosDecimaQuintaSessao">
            <!-- <article> -->
                <div class="BoxNaoFazemos">
                    <div>
                        <div class="Titulo">
                            <p>NÃO FAZEMOS</p>                            
                        </div>
                        <div class="Desc">
                            <p>
                                É preciso atentar-se ao uso do grafismo e suas regras.<br>
                                Abaixo alguns exemplos de como <strong>NÃO USAR</strong> os grafismos.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_DecimaQuintaSessao_01.png"/>
                            <p>
                                Não utilizar cores fora da<br> 
                                paleta do Banco Pan.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_DecimaQuintaSessao_02.png"/>
                            <p>
                                Não distorcer nenhuma<br> 
                                forma do grafismo. 
                            </p>
                        </div>                        
                        <div>
                            <img src="<? echo $images ?>Grafismos_DecimaQuintaSessao_03.png"/>
                            <p>
                                Não utilizar diferentes pesos<br> 
                                no mesmo grafismo.
                            </p>
                        </div>                        
                    </div>
                </div>                
            <!-- </article> -->
        </section>

        <section class="BoxMenor">
            <article>
                <h3>
                    Restrições
                </h3>
                <p>
                    Essas regras valem para  todos os grafismos:
                </p>
            </article>
        </section>

        <section class="GrafismosDecimaSextaSessao">
            <!-- <article> -->
                <div class="BoxNaoFazemos">
                    <div>
                        <div class="Titulo">
                            <p>NÃO FAZEMOS</p>                            
                        </div>                        
                    </div>
                    <div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_DecimaSextaSessao_01.png"/>
                            <p>
                                Não desalinhe os grafismos<br>
                                das quinas do pixel.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>Grafismos_DecimaSextaSessao_02.png"/>
                            <p>
                                Não faça peças utilizando as 4<br> 
                                quinas da perspectiva do pixel,<br> 
                                utilize no máximo 3. 
                            </p>
                        </div>                        
                        <div>
                            <img src="<? echo $images ?>Grafismos_DecimaSextaSessao_03.png"/>
                            <p>
                                Não misture os grafismos em<br>
                                uma mesma peça.
                            </p>
                        </div>                        
                    </div>
                </div>                
            <!-- </article> -->
        </section>

        <?php include 'assets/footer.php'; ?>
	</body>