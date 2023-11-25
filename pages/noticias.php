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
        <a href="welcome.php"><button class="voltar">Voltar</button></a>
    </header>
    <section>
        <div class="titulobar">
            <div class="titulo">
                <p class="titulotext">Notícias</p>
                <div class="tituloicons">
                    <button>meu perfil</button>
                    <button>criar postagem</button>
                    <button>salvar postagem</button>
                </div>
            </div>
        </div>
        <div class="divnoticias">
            <?php
                require_once('../php/bdconnection.php');
                $sql = "SELECT * from tb_novidade";
                $stmt = $conexao->query($sql);
                $data = $stmt->fetchAll();
                // var_dump($data);
                for($i=0;$i<count($data);$i++){
                    $imagem = $data[$i]['url_imagem'];
                    $titulo = $data[$i]['vl_titulo'];
                    $autor = $data[$i]['vl_email'];
                    echo('<div class="cardnoticia"><img class="cardimg" src="'.$imagem.'"><div class="divcardtext"><p class="cardtext">'.$titulo.'</p><br><p class="cardtext">'.$autor.'</p></div></div>');
                };
            ?>
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