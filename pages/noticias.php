<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/one-piece-mugiwara-flag-logo-08F872AFB6-seeklogo.com.png">
    <link rel="stylesheet" type="text/css" href="../css/noticias.css">
    <title>Pagina Inicial</title>
    <style>
        *{margin:0;padding:0;font-family: sans-serif;color: rgb(101, 132, 161)}
        button{cursor: pointer;}
        body{
            background-color:  rgb(5,3,24);
        }
        .header{
            position:fixed;width:100%;display:flex;justify-content:space-between;align-items: center;
            background-color: #1b193a;align-items: center;height: 56px;box-shadow: 2px 2px 10px 1px  #141414;
            padding-top: 10px;padding-bottom: 10px;
        }.logo{
            height:90px;margin: 10px;margin-left: 40px;
        }.rodape{
            position:fixed;width: 100%;height: 100px;background-color: #080808;display: flex;align-items: center;
            padding-top: 20px;bottom:0px;
        }.contatos{
            padding-left: 10%;padding-right: 10%;
        }.titulocontatos{
            font-size: 20px;margin-bottom: 16px;
        }.titulobar{
            min-height: 60px;padding-top: 88px;padding-left:10px;padding-right:10px;
        }.titulo{
            width: 100%;min-height: 60px;background-color: #0e0d22;display: flex;
            align-items: center;justify-content: space-between
        }.titulotext{
            padding-left: 40px;font-size: 30px;
        }.voltar{
            padding: 10px;border: 2px solid rgb(101, 132, 161);background-color: transparent;
            color:  rgb(101, 132, 161);margin-right: 40px;font-size: 20px;border-radius: 10px;
        }.cardnoticia{
            padding:0px;
        }.divnoticias{
            display: flex;justify-content: center;flex-wrap: wrap;gap:20px;padding: 10px;
        }.cardimg{
            width: 200px;margin:0px;
        }.nomeusuario{
            font-size:10px;
        }.fotousuario{
            width: 30px;height:30px;border-radius: 100%;
        }.titulopostagem{
            height:24px;background-color:rgb(101, 132, 161);color:black;text-align:center;
        }.descricao{
            display: flex;flex-direction: row;justify-content: space-around;align-items: center; 
            height: 60px; background-color:#0e0d22;margin:0px
        }.autor{
            display: flex;align-items: center;gap: 20px;
        }.fotosalva{
            height: 30%;
        }.btntitulo{
            width:fit-content; background-color:transparent;font-size:20px;margin-right:20px;border-radius:10px;border: 2px solid rgb(101, 132, 161);padding:5px 20px 5px 20px;
        }
    </style>
</head>
<body>
    <?php
        require_once("../php/bdconnection.php");
        if(!$_SESSION){
            header('Location: welcome.php');
        }
    ?>
    <header class="header">
        <img class="logo" src="https://logosmarcas.net/wp-content/uploads/2021/10/One-Piece-Logo.png" alt="LogoOnePiece">
        <a href="welcome.php"><button class="voltar">Voltar</button></a>
    </header>
    <section>
        <div class="titulobar">
            <div class="titulo">
                <p class="titulotext">Postagens</p>
            </div>
        </div>
        <div class="divnoticias">
            <?php
                require_once('./php/bdconnection.php');
                $sql = "SELECT * from tb_novidade";
                $stmt = $conexao->query($sql);
                $data = $stmt->fetchAll();
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