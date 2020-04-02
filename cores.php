<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Cores;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Cores">
        <section class="PrimeiraSessaoCores fullscreen-bg">
            <?php include('vermais.php'); ?>
        </section>

        <section class="SegundaSessaoCores">
            <article>
                <div class="wrapper">
                    <div class="TituloCor">
                        <p>CINZA</p>
                    </div>
                    <div class="DescCor">
                        <p> 
                            Pantone: Cool Gray 11 C<br>
                            C.44  M.34  Y.22  K.77<br><br>

                            R.65   G.65   B.65<br>
                            #414141
                        </p>
                    </div>
                </div>                
            </article>
        </section>

        <section class="TerceiraSessaoCores">
            <article>
                <div class="wrapper">
                    <div class="Box1">
                        <div class="TituloCor">
                            <p>CINZA CLARO</p>
                        </div>
                        <div class="DescCor">
                            <p> 
                                Pantone: Cool Gray 9 C<br>
                                C.30  M.22  Y.17  K.57<br><br>

                                R.97   G.97   B.97<br>
                                #616161
                            </p>
                        </div>
                    </div>
                    <div class="Box2">
                        <div class="TituloCor">
                            <p>AZUL</p>
                        </div>
                        <div class="DescCor">
                            <p> 
                                Pantone: 306 C<br>
                                C.75  M.0  Y.5  K.0<br><br>

                                R.0   G.197   B.255<br>
                                #00C5FF
                            </p>
                        </div>
                    </div>
                    <div class="Box3">
                        <div class="TituloCor">
                            <p>CORAL</p>
                        </div>
                        <div class="DescCor">
                            <p> 
                                Pantone: Warm Red C<br>
                                C.0  M.83  Y.80  K.0<br><br>

                                R.255   G.86   B.48<br>
                                #FF5630
                            </p>
                        </div>
                    </div>
                </div>                
            </article>
        </section>

        <section class="QuartaSessaoCores">
            <article>
                <h2>
                    Cada cor em<br>
                    uma dose.<br>
                    Mas sempre,<br>
                    e só essas.
                </h2>
                <img src="<? echo $images ?>Cores_QuartaSessao_01.png"/>
            </article>
        </section>

        <section class="BoxMenor">
            <article>
                <h3>Cores para UX</h3>
                <p>
                    As cores UX são restritas e são para uso exclusivo em interfaces digitais pois<br> 
                    atendem os padrões técnicos de acessibilidade.
                </p>
            </article>
        </section>


        <section class="QuintaSessaoCores">
            <article>                
                <div class="wrapper">
                    <div class="esq">
                        <div class="esq-cima">
                            <div class="box1">
                                <p>PRIMÁRIAS</p>
                                <div class="boxes">
                                    <div>
                                        <span>900</span>
                                        <span>#212121</span>
                                    </div>
                                    <div>
                                        <span>800</span>
                                        <span>#414141</span>
                                    </div>
                                    <div>
                                        <span>700</span>
                                        <span>#616161</span>
                                    </div>
                                    <div>
                                        <span>600</span>
                                        <span>#757575</span>
                                    </div>
                                    <div>
                                        <span>500</span>
                                        <span>#9E9E9E</span>
                                    </div>
                                    <div>
                                        <span>400</span>
                                        <span>#BDBDBD</span>
                                    </div>
                                    <div>
                                        <span>300</span>
                                        <span>#E0E0E0</span>
                                    </div>
                                    <div>
                                        <span>200</span>
                                        <span>#EEEEEE</span>
                                    </div>
                                    <div>
                                        <span>100</span>
                                        <span>#F5F5F5</span>
                                    </div>
                                    <div>
                                        <span>50</span>
                                        <span>#FAFAFA</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box2">
                                <p>SECUNDÁRIAS</p>
                                <div class="boxes">
                                    <div>
                                        <span>900</span>
                                        <span>#01579B</span>
                                    </div>
                                    <div>
                                        <span>800</span>
                                        <span>#0277BD</span>
                                    </div>
                                    <div>
                                        <span>700</span>
                                        <span>#0288D1</span>
                                    </div>
                                    <div>
                                        <span>600</span>
                                        <span>#039BE5</span>
                                    </div>
                                    <div>
                                        <span>500</span>
                                        <span>#03A9F4</span>
                                    </div>
                                    <div>
                                        <span>400</span>
                                        <span>#29B6F6</span>
                                    </div>
                                    <div>
                                        <span>300</span>
                                        <span>#4FC3F7</span>
                                    </div>
                                    <div>
                                        <span>200</span>
                                        <span>#81D4FA</span>
                                    </div>
                                    <div>
                                        <span>100</span>
                                        <span>#B3E5FC</span>
                                    </div>
                                    <div>
                                        <span>50</span>
                                        <span>#E1F5FE</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box3">
                                <p>TERCIÁRIAS</p>
                                <div class="boxes">
                                    <div>
                                        <span>900</span>
                                        <span>#BF360C</span>
                                    </div>
                                    <div>
                                        <span>800</span>
                                        <span>#D84315</span>
                                    </div>
                                    <div>
                                        <span>700</span>
                                        <span>#E64A19</span>
                                    </div>
                                    <div>
                                        <span>600</span>
                                        <span>#F4511E</span>
                                    </div>
                                    <div>
                                        <span>500</span>
                                        <span>#FF5630</span>
                                    </div>
                                    <div>
                                        <span>400</span>
                                        <span>#FF7043</span>
                                    </div>
                                    <div>
                                        <span>300</span>
                                        <span>#FF8A65</span>
                                    </div>
                                    <div>
                                        <span>200</span>
                                        <span>#FFAB91</span>
                                    </div>
                                    <div>
                                        <span>100</span>
                                        <span>#FFCCBC</span>
                                    </div>
                                    <div>
                                        <span>50</span>
                                        <span>#FBE9E7</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="esq-baixo">
                            <div class="box1">
                                <p>SUCESSO</p>
                                <div class="boxes">
                                    <div>
                                        <span>Dark</span>
                                        <span>#008648</span>
                                    </div>
                                    <div>
                                        <span>Medium</span>
                                        <span>#00CC88</span>
                                    </div>
                                    <div>
                                        <span>Light</span>
                                        <span>#86E7C7</span>
                                    </div>
                                    <div>
                                        <span>Background</span>
                                        <span>#E4F8EE</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box2">
                                <p>ALERTA</p>
                                <div class="boxes">
                                    <div>
                                        <span>Dark</span>
                                        <span>#D2A500</span>
                                    </div>
                                    <div>
                                        <span>Medium</span>
                                        <span>#FFC925</span>
                                    </div>
                                    <div>
                                        <span>Light</span>
                                        <span>#FFDE7B</span>
                                    </div>
                                    <div>
                                        <span>Background</span>
                                        <span>#FFF8E1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box3">
                                <p>PERIGO</p>
                                <div class="boxes">
                                    <div>
                                        <span>Dark</span>
                                        <span>#E32000</span>
                                    </div>
                                    <div>
                                        <span>Medium</span>
                                        <span>#FF5E33</span>
                                    </div>
                                    <div>
                                        <span>Light</span>
                                        <span>#FFA289</span>
                                    </div>
                                    <div>
                                        <span>Background</span>
                                        <span>#FEE7E5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dir">
                        <p>EXEMPLOS DE USO</p>
                        <div class="wrapper-boxes">
                            <div class="box1">

                            </div>
                            <div class="box2">

                            </div>
                        </div>
                    </div>

                </div>
            </article>
        </section>


        <section class="SextaSessaoCores">
            <article>
                <p>Onde não usar as cores ux</p>
                <div class ="wrapper">
                    <div>
                        <img src="<? echo $images ?>Cores_SextaSessao_01.png"/>
                        <p>
                            Não usamos em nenhum grafismo
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Cores_SextaSessao_02.png"/>
                        <p>
                            Não usamos no logo.
                        </p>
                    </div>
                    <div>
                        <img src="<? echo $images ?>Cores_SextaSessao_03.png"/>
                        <p>
                            Nunca usamos como cor<br> 
                            principal na estrutura da peça
                        </p>
                    </div>                 
                </div>
            </article>
        </section>
    
        <?php include 'assets/footer.php'; ?>
    </body>
