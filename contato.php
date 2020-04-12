<?php 
    include 'assets/config.php';

    $tituloPagina = 'Brandbook - '. $empresa;
    $descricaoCompartilhamento = '';

    $urlPagina = $Contato;
?>
    <title><? echo $tituloPagina ?></title>
    <?php include 'assets/head.php'; ?>
        <meta property="og:title" content="<? echo $tituloPagina ?>" />
        <meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
        <meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->
        </head>
    <body class="Contato">
        <div class="Laranja">
            <?php include 'assets/header.php'; ?>
        </div>
        <section class="PrimeiraSessaoContato fullscreen-bg">
            <div class="wrapper">
                <div class="esq"></div>
                <div class="dir">
                    <form action="" method="post">
                        <h1>
                            Dúvidas?<br>
                            Mande pra<br>
                            gente!
                        </h1>
                        <div>
                            <div>
                                <label for="nome">Nome:</label>
                                <input id="nome" type="text" name="nome" autofocus />
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <input id="email" type="email" name="email" />
                            </div>
                        </div>
                        <div>
                            <label for="assunto">Assunto:</label>
                            <input id="assunto" type="text" name="assunto" />
                        </div>
                        <div>
                            <label for="mensagem">Mensagem:</label>
                            <textarea id="mensagem" name="mensagem"></textarea>
                        </div>
                        <a href="">ENVIAR</a>
                    </form>
                </div>
            </div>
        </section>







        <?php include 'assets/footer.php'; ?>
    </body>