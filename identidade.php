<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Identidade;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Identidade">
        <section class="PrimeiraSessaoIdentidade fullscreen-bg">
            <img src="<? echo $images ?>Identidade_PrimeiraSessao_01.svg"/>
            <h1>
                Meu jeito<br>
                de falar
            </h1>
            <div class="Cinza">
                <?php include('vermais.php'); ?>
            </div>  
        </section>

        <section class="SegundaSessaoIdentidade">
            <div class="wrapper">
                <div class="box box1">
                    <div class="wrapper-textos">
                        <p class="titulo">PROTAGONISMO</p>
                        <p>
                            <strong>Chamamos atenção,</strong> somos<br>
                            interessantes e passamos a<br>
                            energia do brasileiro na conversa.<br>
                            Falamos com otimismo sem<br>
                            deixar de ser realistas. 
                        </p>                        
                    </div>
                    <img src="<? echo $images ?>Identidade_SegundaSessao_01.png"/>
                </div>

                <div class="box box2">
                    <div class="wrapper-textos">
                        <p class="titulo">ENTUSIASMO</p>
                        <p>
                            <strong>Chamamos atenção,</strong> somos<br> 
                            interessantes e passamos a<br> 
                            energia do brasileiro na conversa.<br> 
                            Falamos com otimismo sem<br> 
                            deixar de ser realistas. 
                        </p>                        
                    </div>
                    <img src="<? echo $images ?>Identidade_SegundaSessao_02.png"/>
                </div>

                <div class="box box3">
                    <div class="wrapper-textos">
                        <p class="titulo">PROXIMIDADE</p>
                        <p>
                            <strong>De pessoas para pessoas.</strong><br> 
                            Entendemos quem é cada um e<br>
                            seus momentos de vida.Temos<br>
                            empatia, sabemos como falar e<br>
                            explicar e dividimos histórias reais<br>
                            e inspiradoras. 
                        </p>
                    </div>
                    <img src="<? echo $images ?>Identidade_SegundaSessao_03.png"/>
                </div>
            </div>
        </section>

        <section class="TerceiraSessaoIdentidade">
            <div class="wrapper">
                <h3>PROTAGONISMO</h3>
                <div class="wrapper-divs">
                    <div class="esq">
                        <h6>FAZEMOS</h6>
                        <ul>
                            <li>
                                <p>
                                    Trazemos a solução dando um caminho para resolver<br> 
                                    logo o problema.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Abusamos de esquemas visuais, tópicos, ícones e passo a<br> 
                                    passo para ficar bem claro e prático qual ação ele deve<br> 
                                    tomar a seguir. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    Usamos frases como “agora é com você” de forma<br> 
                                    agradável e animada. Empoderamos.
                                </p>

                            </li>
                        </ul>
                    </div>    
                    <div class="dir">
                        <h6>NÃO FAZEMOS</h6>
                        <ul>
                            <li>
                                <p>
                                    Excesso de frases na voz passiva ou verbos no tempo<br> 
                                    imperfeito.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Responsabilizamos o interlocutor pelos problemas,<br> 
                                    gerando sentimento de culpa.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <h3>ENTUSIASMO</h3>
                <div class="wrapper-divs">
                    <div class="esq">
                        <h6>FAZEMOS</h6>
                        <ul>
                            <li>
                                <p>
                                    Usamos chamadas instigantes, promovendo a vontade<br> 
                                    de saber mais. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    Fazemos perguntas retóricas, sabe? Pra despertar o<br> 
                                    interlocutor para a conversa.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Mostramos o lado positivo em todas as situações, mas<br> 
                                    sem deixar de ser realista.
                                </p>
                            </li>
                        </ul>
                    </div>    
                    <div class="dir">
                        <h6>NÃO FAZEMOS</h6>
                        <ul>
                            <li>
                                <p>
                                    Trazemos a dificuldade e o negativismo na conversa.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Textos longos e prolixos. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ser artificial, nos portando de forma mecânica e sem<br> 
                                    vida.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <h3>PROXIMIDADE</h3>
                <div class="wrapper-divs">
                    <div class="esq">
                        <h6>FAZEMOS</h6>
                        <ul>
                            <li>
                                <p>
                                    Usamos a linguagem  do dia a dia, preferimos as palavras<br> 
                                    mais simples: “usar” em vez de “utilizar”, “ter” no lugar de<br> 
                                    “adquirir” etc. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    Levamos em conta os problemas reais e as dificuldades<br> 
                                    do dia a dia.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Escrevemos na primeira pessoa do plural (somos,<br> 
                                    acreditamos, fazemos) para engajar o interlocutor na<br> 
                                    história.
                                </p>
                            </li>
                        </ul>
                    </div>    
                    <div class="dir">
                        <h6>NÃO FAZEMOS</h6>
                        <ul>
                            <li>
                                <p>
                                    Deixamos sigla sem explicações e termos em inglês<br> 
                                    desconhecidos.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ser impessoal e não levar em conta que o consumidor é<br> 
                                    uma pessoa também, com desejos e medos.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="QuartaSessaoIdentidade">
            <p class="titulo">CHECKLIST</p>
            <ul>
                <li>O texto chama para a ação e estimula as pessoas a tomar frente? </li>
                <li>Fica claro o que fazer a seguir?</li>
                <li>Estou sendo útil?</li>
                <li>Eu pararia para ler isso?</li>
                <li>Estou trazendo a mensagem de um jeito positivo e estimulante?</li>
                <li>Eu falaria assim em uma conversa?</li>
                <li>A mensagem leva em consideração o momento da pessoa?</li>
            </ul>
        </section>


        <?php include 'assets/footer.php'; ?>
	</body>