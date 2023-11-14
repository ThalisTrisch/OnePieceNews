<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/one-piece-mugiwara-flag-logo-08F872AFB6-seeklogo.com.png">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <title>Pagina Inicial</title>
</head>
<body>
    <header class="header">
        <img class="logo" src="https://logosmarcas.net/wp-content/uploads/2021/10/One-Piece-Logo.png" alt="LogoOnePiece">
        <a href="page1.html"><button class="voltar">Voltar</button></a>
    </header>
    <section>
        <div class="titulobar">
            <div class="titulo">
                <p class="titulotext">Notícias</p>
            </div>
        </div>
        <div class="divnoticias">
            <?php
                require_once('./php/bdconnection.php');
                $sql = "SELECT * from tb_novidade";
                $stmt = $conexao->query($sql);
                $data = $stmt->fetchAll();
                // var_dump($data);
                for($i=0;$i<count($data);$i++){
                    $imagem = $data[$i]['url_imagem'];
                    $conteudo = $data[$i]['vl_conteudo'];
                    $autor = $data[$i]['vl_email'];
                    echo('<div class="cardnoticia"><img class="cardimg" src="'.$imagem.'"><div class="divcardtext"><p class="cardtext">'.$conteudo.'</p><br><p class="cardtext">'.$autor.'</p></div></div>');
                };
            ?>
            <div class="cardnoticia">
                <div>
                    <img class="cardimg" src="https://www.guiaviagensbrasil.com/imagens/Imagem%20do%20mar%20calma%20e%20belo%20da%20Praia%20da%20Engenhoca-Itacar%C3%A9-Bahia-BA.jpg">
                    <div class="divcardtext">
                        <p class="cardtext">Lançamento da live action de One Piece será 31/08</p>
                    </div>
                </div>
                
            </div>
            <div class="cardnoticia">
                <img class="cardimg" src="https://rare-gallery.com/mocahbig/1375199-luffy-gear-5-sun-god-nika-one-piece-4k-pc-wallpaper.jpg">
                <div class="divcardtext">
                    <p class="cardtext">Despertar de luffy está previsto para final de julho</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="rodape">
        <div class="contatos">
            <p class="titulocontatos">Contatos</p>
            <p>telefone: (00) 90000-0000<br>email: emailficticio@gmail.com</p>
        </div>
    </footer>
</body>
</html>