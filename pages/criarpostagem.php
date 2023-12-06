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
            position:fixed;width: 100%;height: 70px;background-color: #080808;display: flex;align-items: center;
            padding-top: 20px;bottom:0px;
        }.contatos{
            padding-left: 10%;padding-right: 10%;
        }.titulocontatos{
            font-size: 20px;margin-bottom: 16px;
        }.titulo{
            margin:30px 0px;background-color:transparent;justify-content: center
        }.voltar{
            padding: 10px;border: 2px solid rgb(101, 132, 161);background-color: transparent;
            color:  rgb(101, 132, 161);margin-right: 40px;font-size: 20px;border-radius: 10px;
        }.criarpostagem{
            padding-top:76px;display:flex;flex-direction:column;gap:20px;align-items:center;
        }.textinput{
            width:400px;background-color:transparent;border:2px solid rgb(101, 132, 161);border-radius:5px;
            padding:4px
        }.buttoninput{
            width:200px;background-color:transparent;border:2px solid green;border-radius:5px;
            padding:4px;color:green;font-size:20px
        }#descricao{
            width:200px;padding:20px
        }.divdescricao{
            width:100px;
        }
    </style>
</head>
<body>
    <header class="header">
        <img class="logo" src="https://logosmarcas.net/wp-content/uploads/2021/10/One-Piece-Logo.png" alt="LogoOnePiece">
        <a href="postagem.php"><button class="voltar">Voltar</button></a>
    </header>
    <form action="../php/criarpostagem.php" method="post" class="criarpostagem">
        <h1 class="titulo">Criar Postagem</h1>
        <div>
            <div class="divdescricao"><label for="" id="descricao">titulo</label></div><input type="text" class="textinput" name="titulo">
        </div>
        <div>
            <div class="divdescricao"><label for="" id="descricao">conteudo</label></div><input type="text" class="textinput" name="conteudo">
        </div>
        <div>
            <div class="divdescricao"><label for="" id="descricao">imagem</label></div><input type="text" class="textinput" name="imagem">
        </div>
        <input type="submit" class="buttoninput">
    </form>
    <footer class="rodape">
        <div class="contatos">
            <p class="titulocontatos">Contatos</p>
            <p>telefone: (00) 90000-0000<br>email: emailficticio@gmail.com</p>
        </div>
    </footer>
</body>
</html>