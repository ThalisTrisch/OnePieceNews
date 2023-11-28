<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/one-piece-mugiwara-flag-logo-08F872AFB6-seeklogo.com.png">
    <title>Pagina Inicial - One piece</title>
    <style>
        *{margin:0;padding:0;font-family: sans-serif;color: rgb(101, 132, 161)}
        button{cursor: pointer;}
        body{
            background-image: url("https://wallpapers.com/images/featured/c0pujiakubq5rwas.jpg");
            background-size: cover;background-position: center -60px;
            background-repeat: no-repeat;
            background-color:  rgb(5,3,24);
            height:120vh;
        }
        .header{
            position:fixed;width:100%;display:flex;justify-content:space-between;align-items: center; background-color: #1b193a;align-items: center;height: 56px;
            box-shadow: 2px 2px 10px 1px  #141414;padding-top: 10px;padding-bottom: 10px;
        }
        .gradientback{
            width:100%;height:120vh;
            /* background: linear-gradient(#050318,transparent); */
            background: rgb(5,3,24);
            background: linear-gradient(0deg, rgba(5,3,24,1) 13%, rgba(5,3,24,0.8995973389355743) 33%, rgba(5,3,24,0.7035189075630253) 52%, rgba(5,3,24,0.6671043417366946) 70%, rgba(5,3,24,0.4822303921568627) 88%, rgba(5,3,24,0.26934523809523814) 100%);}.Welcometext{
            width: 100%;height: 120vh;display: flex;justify-content: center;flex-direction: column;font-weight: 900;font-size:30px;
        }.titulo{
            font-size: 62px;margin-bottom: 10px;margin-left: 6%;margin-right: 6%;
        }.subtitulo{
            font-size: 32px;margin-top: 10px;margin-left: 6%;margin-right: 6%;
        }
        .logo{
            height:90px;margin: 10px;margin-left: 40px;
        }
        .cards{
            display: flex; flex-direction: row;flex-wrap:wrap;justify-content: center;width: 100%;
            height: fit-content;gap:20px;
        }
        .card{
            display: flex;flex-direction: column; width: 360px;height: 200px;
        }.cardtop{
            background-color: #0e0b22;border-radius: 10px 10px 0px 0px;width: 360px;height: 100px;display: flex;align-items: center;justify-content: center;
        }.cardbottom{
            background-color: #101931;border-radius: 0px 0px 10px 10px;width: 360px;height: 100px;display: flex;align-items: center;justify-content: center;
        }.cardtext{
            width: fit-content;font-size: x-large;margin: 10px;text-align: center;
        }.cardbutton{
            height:50px;width: 120px;font-size: large;padding: 5px;padding-left: 10px;
            padding-right: 10px;background-color: rgb(73, 133, 73);border-radius: 10px;color:white;
            border:none;
        }.divformcadastro{
            min-height: 500px;display: flex;flex-direction: column;align-items: center;
            justify-content: center;gap: 60px;
        }.form{
            height: 160px;width: 600px;display: flex;flex-direction:column;flex-wrap: wrap;align-items: center;
            justify-content: center;gap: 20px;background-color: #1b193a;
            border-radius: 10px;padding: 40px;
        }.inputform{
            width: 260px;padding: 8px; font-size: 20px;
            height: 30px;border-radius: 10px;border: none;margin-right: 20px;
        }.tituloform{
            font-size: 30px;text-align: center;
        }.rodape{
            width: 100%;height: 100px;background-color: #080808;display: flex;align-items: center;
            padding-top: 20px;padding-bottom: 20px;
        }.contatos{
            padding-left: 10%;padding-right: 10%;
        }.titulocontatos{
            font-size: 20px;margin-bottom: 16px;
        }.menubutton{
            height:42px;width:46px;;cursor: pointer;
        }.divmenubutton{
            margin-right: 40px;background-color: transparent;display: flex;align-items: center;
            border:2px solid #000000;border-radius: 10px;cursor: pointer;
        }.menubar{
            background-color: rgba(14, 13, 26, 0.90);width: 100%;height: 100%;position: fixed;z-index: 10;
        }.menuitens{
            width:100%;height:90%;display: flex;align-items: end;flex-direction: column;
            gap:30px;padding-top: 40px;
        }.itembutton{
            height:40px;width: 200px;font-size: 26px;padding: 5px;padding-left: 10px;
            padding-right: 10px;background-color: rgb(62, 56, 112);border-radius: 6px;color:white;
            border:none;margin-right:40px;
        }.invisible{
            display: none;
        }.headermenu{
            width:100%;display:flex;justify-content:end;align-items: center;padding-top: 14px;
            padding-bottom: 14px
        }.divmenubuttonvoltar{
            margin-right: 40px;background-color: transparent;display: flex;align-items: center;
            border:2px solid #be2929;border-radius: 10px;cursor: pointer;
        }.menubuttonvoltar{
            height:36px;width:40px;;margin: 3px;
        }.mensagem{
            font-size: 20px; font-weight: 500;color:  rgb(111, 201, 111);
        }.selectedformbutton{
            padding: 6px 10px;background-color: rgb(101, 132, 161);border:none;color:black;
            border-radius: 6px 6px 0px 0px; font-size: 20px;width: 200px;
        }.formbutton{
            padding: 6px 10px;background-color: transparent;border: 2px solid rgb(101, 132, 161);color:rgb(101, 132, 161);
            border-radius: 6px 6px 0px 0px; font-size: 20px;width: 200px;border-bottom: none;
        }.formformat{
            display: flex;justify-content: center; gap:20px
        }
    </style>
</head>
<body>
    <?php
    // require_once("../php/bdconnection.php");
    // if($_SESSION){
    //     header('Location: noticias.php');
    // }
    ?>
    <div class="invisible" id="menuheader" onclick="ocultarMenu()">
        <div class="headermenu">
            <div id="buttonmenuvoltar" class="divmenubuttonvoltar">
                <img class="menubuttonvoltar" src="https://cdn-icons-png.flaticon.com/512/10727/10727988.png" alt="menu">
            </div>
        </div>
        <div class="menuitens" onclick="ocultarMenu()">
            <a href="page2.html"><button class="itembutton">Notícias</button></a>
            <a href="page3.html"><button class="itembutton">Loja</button></a>
            <a href="page4.html"><button class="itembutton">Informações</button></a>
        </div>
    </div>
    <header class="header">
        <img class="logo" src="https://logosmarcas.net/wp-content/uploads/2021/10/One-Piece-Logo.png" alt="LogoOnePiece">
        <div id="buttonmenu" class="divmenubutton" onclick="mostrarMenu()">
            <img class="menubutton" src="../images/menu.png" alt="menu">
        </div>
    </header>
    <div class="gradientback">
        <div class="Welcometext">
            <p class="titulo"> Bem vindo ao One Piece News! </p>
            <p class="subtitulo"> Fique por dentro das principais notícias do anime mais hypado do momento</p>
        </div>
    </div>
    <nav>
        <!-- <div class="cards">
            <div class="card">
                <div class="cardtop">
                    <p class="cardtext">Notícias sobre esse universo</p>
                </div>
                <div class="cardbottom">
                    <a href="page2.html"><Button class="cardbutton">Acessar</Button></a>
                </div>
            </div>
            <div class="card">
                <div class="cardtop">
                    <p class="cardtext">Loja de produtos</p>
                </div>
                <div class="cardbottom">
                    <a href="page3.html"><Button class="cardbutton">Acessar</Button></a>
                </div>
            </div>
        </div> -->
        <div class="divformcadastro" id="formcad">
            <div>
                <p class="tituloform">
                    Cadastre-se para acessar a plataforma!
                </p>
            </div>
            <div>
                <div  class="formformat">
                    <button class="selectedformbutton">Cadastrar</button>
                    <button class="formbutton" onclick="mudarform()">Logar</button>
                </div>
               
                <form class="form" action="../php/cadastrar.php" method="post">
                    <input class="inputform" type="text" name="nome" required placeholder="Nome de usuario"/>
                    <input class="inputform" type="email" name="email" required placeholder="Seu email"/>
                    <input class="inputform" type="password" name="senha" required placeholder="Senha"/>
                    <button type="submit" class="cardbutton">Cadastrar</button>
                </form>
            </div>
            
            <div id="respostaform" class="invisible">
                <p class="mensagem">Email fictício enviado com sucesso!</p>
            </div>
        </div>
        <div class="invisible" id="formlog">
            <div>
                <p class="tituloform">
                    Cadastre-se para acessar a plataforma!
                </p>
            </div>
            <div>
                <div  class="formformat">
                    <button class="formbutton" onclick="mudarform()">Cadastrar</button>
                    <button class="selectedformbutton">Logar</button>
                </div>
                <form class="form" action="../php/logar.php" method="post">
                    <input class="inputform" type="email" name="email" required placeholder="email"/>
                    <input class="inputform" type="password" required name="senha" placeholder="senha"/>
                    <button type="submit" class="cardbutton">Logar</button>
                </form>
            </div>
            
            <div id="respostaform" class="invisible">
                <p class="mensagem">Email fictício enviado com sucesso!</p>
            </div>
        </div>
    </nav>
    <footer class="rodape">
        <div class="contatos">
            <p class="titulocontatos">Contatos</p>
            <p>telefone: (00) 90000-0000<br>email: emailficticio@gmail.com</p>
        </div>
    </footer>
    <script>
        function mostrarMenu(){
            document.getElementById("buttonmenu").className = "invisible";
            document.getElementById("menuheader").className = "menubar";
        }
        function ocultarMenu(){
            document.getElementById("buttonmenu").className = "divmenubutton";
            document.getElementById("menuheader").className = "invisible";
        }
        function mudarform(){
            var formcad = document.getElementById("formcad");
            var formlog = document.getElementById("formlog");
            if(formcad.className == "divformcadastro"){
                formcad.className = "invisible"
                formlog.className = "divformcadastro"
            }else{
                formcad.className = "divformcadastro"
                formlog.className = "invisible"
            }
        }
    </script>
</body>
</html>