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
            padding:0px; background-color:rgb(101, 132, 161);
        }.divnoticias{
            display: flex;justify-content: center;flex-wrap: wrap;gap:20px;padding: 10px;
        }.cardimg{
            width: 200px;height:150px;margin:0px;
        }.nomeusuario{
            font-size:10px;
        }.fotousuario{
            width: 30px;height:30px;border-radius: 100%;
        }.titulopostagem{
            background-color:rgb(101, 132, 161);color:black;text-align:center;padding-bottom:2px;
            max-width:200px;
        }.descricao{
            display: flex;flex-direction: row;justify-content: space-around;align-items: center; 
            height: 60px; background-color:#0e0d22;margin:0px
        }.autor{
            display: flex;align-items: center;gap: 20px;
        }.fotosalva{
            height: 30%;
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
    <header class="header">
        <img class="logo" src="https://logosmarcas.net/wp-content/uploads/2021/10/One-Piece-Logo.png" alt="LogoOnePiece">
        <a href="welcome.php"><button class="voltar">Voltar</button></a>
    </header>
    <section>
        <div class="titulobar">
            <div class="titulo">
                <div>
                    <p class="titulotext">Postagens</p>
                </div>
                <div class="links">
                    <a href="criarpostagem.php"><button class="btntitulo">Criar Postagem</button></a>
                    <a href="meuperfil.php"><button class="btntitulo">Perfil</button></a>
                    
                </div>
                
            </div>
        </div>
        <div class="divnoticias">
            <?php
                require_once("../php/bdconnection.php");
                $sql = "SELECT * from tb_postagem as A, tb_usuario as B where A.vl_email = B.vl_email";
                $stmt = $conexao->query($sql);
                $data = $stmt->fetchAll();
                for($i=0;$i<count($data);$i++){
                    $imagem = $data[$i]['url_imagem'];
                    $foto = $data[$i]['url_foto'];
                    $titulo = $data[$i]['vl_titulo'];
                    $autor = $data[$i]['vl_email'];
                    echo('
                        <div class="cardnoticia">
                            <img class="cardimg" src="'.$imagem.'"/>
                            <div class="titulopostagem">
                                <p class="titulopostagem">'.$titulo.'</p>
                            </div>
                            <div class="descricao">
                                <div class="autor">
                                    <img class="fotousuario" src="'.$foto.'" alt="">
                                    <p class="nomeusuario">'.$autor.'</p> 
                                </div>
                                <img class="fotosalva" src="https://cdn-icons-png.flaticon.com/512/5662/5662990.png" alt="">
                            </div>
                        </div>'
                    );
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