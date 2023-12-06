<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/one-piece-mugiwara-flag-logo-08F872AFB6-seeklogo.com.png">
    <link rel="stylesheet" type="text/css" href="style2.css">
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
        }.voltar{
            padding: 10px;border: 2px solid rgb(101, 132, 161);background-color: transparent;
            color:  rgb(101, 132, 161);margin-right: 40px;font-size: 20px;border-radius: 10px;
        }.cardnoticia{
            padding:0px;background-color:rgb(101, 132, 161);
        }.divnoticias{
            display: flex;justify-content: center;flex-wrap: wrap;gap:20px;padding: 10px;
        }.cardimg{
            width: 200px; height:150px;margin:0px;
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
        }.perfil{
            padding-top:76px;width:100%;height:140px;background-color:black;display:flex;gap:100px;
            justify-content: center;align-items: center;
        }.fotoperfil{
            width:100px;height:100px;border-radius:100%
        }.excluirpostagem{
            width:40px;height:40px;background-color:#add8e6 ;border-radius:20px 20px 0px 0px;
            display:flex;justify-content:center;align-items: center;border:1px solid #141414;position:absolute;margin-left:42px;
        }.excluirpostagem>img{
            width:22px;height:22px;
        }.editarpostagem{
            width:40px;height:40px;background-color:#ea899a;border-radius:20px 20px 0px 0px;
            display:flex;justify-content:center;align-items: center;border:1px solid #141414;
        }.editarpostagem>img{
            width:22px;height:22px;
        }.textpostagens{
            text-align:center;margin:30px 0px;
        }.imagemlixeira{
            width:20px;height:20px
        }.textinput{
            width:400px;background-color:transparent;border:2px solid rgb(101, 132, 161);border-radius:5px;
            padding:4px
        }.buttoninput{
            width:200px;background-color:transparent;border:2px solid green;border-radius:5px;
            padding:4px;color:green;font-size:20px;margin-top:10px;
        }.editarperfil{
            display:flex;align-items:center ;gap:10px;flex-direction:column;margin:40px 0px;
        }
    </style>
</head>
<body>
    <header class="header">
        <img class="logo" src="https://logosmarcas.net/wp-content/uploads/2021/10/One-Piece-Logo.png" alt="LogoOnePiece">
        <a href="postagem.php"><button class="voltar">Voltar</button></a>
    </header>
        <?php 
        session_start();
        require_once("../php/bdconnection.php");

        $sql = "SELECT * from tb_usuario where vl_email = '".$_SESSION['user_email']."'";
        $stmt = $conexao->query($sql);
        $data = $stmt->fetchAll();
        echo('
        <div class="perfil">
            <img src="'.$data[0]['url_foto'].'" alt="" class="fotoperfil">
            <div>
                <h1>'.$data[0]['nm_usuario'].'</h1>
                <p>'.$data[0]['vl_email'].'</p>
            </div>
            <p>Biografia: <br>'.$data[0]['vl_biografia'].'</p>
        </div>
        <div>
            <form action="../php/editarperfil.php" method="post" class="editarperfil">
                <h2 class="titulo">Editar perfil</h2>
                <div>
                    <div class="divdescricao"><label for="" id="descricao">nome</label></div><input type="text" class="textinput" name="nome" value="'.$data[0]['nm_usuario'].'">
                </div>
                <div>
                    <div class="divdescricao"><label for="" id="descricao">biografia</label></div><input type="text" class="textinput" name="biografia" value="'.$data[0]['vl_biografia'].'">
                </div>
                <div>
                    <div class="divdescricao"><label for="" id="descricao">foto</label></div><input type="text" class="textinput" name="foto" value="'.$data[0]['url_foto'].'">
                </div>
                <button type="submit" class="buttoninput">editar</button>
            </form>
        </div>
            ');
        ?>
    
    <h2 class="textpostagens">Suas Postagens</h2>
    <div class="divnoticias">
        <?php
                require_once("../php/bdconnection.php");
                $sql = "SELECT * from tb_postagem as A, tb_usuario as B where A.vl_email = B.vl_email and A.vl_email = '".$_SESSION['user_email']."'";
                $stmt = $conexao->query($sql);
                $data = $stmt->fetchAll();
                for($i=0;$i<count($data);$i++){
                    $imagem = $data[$i]['url_imagem'];
                    $foto = $data[$i]['url_foto'];
                    $titulo = $data[$i]['vl_titulo'];
                    $autor = $data[$i]['vl_email'];
                    $postagem = $data[$i]['id_postagem'];
                    // href="../php/excluirpostagem.php
                    echo('

                        <div>    
                            <form action="editarpostagem.php" method="post">
                                <button class="excluirpostagem" type="submit" name="postagem" value="'.$postagem.'">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png"/>
                                </button>
                            </form>
                            <form action="../php/excluirpostagem.php" method="post">
                                <button  class="editarpostagem" type="submit" name="postagem" value="'.$postagem.'">
                                    <img src="https://cdn-icons-png.flaticon.com/512/126/126468.png"/>
                                </button>
                            </form>
                        
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
                            </div>
                        </div>
                        '
                    );
                };
            ?>
    </div>
</body>
</html>