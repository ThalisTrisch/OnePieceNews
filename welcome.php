<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/one-piece-mugiwara-flag-logo-08F872AFB6-seeklogo.com.png">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <title>Pagina Inicial - One piece</title>
</head>
<body>
    <?php
    
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
            <img class="menubutton" src="images/menu.png" alt="menu">
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
               
                <form class="form" action="php/cadastrar.php" method="post">
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
                <form class="form" action="php/logar.php" method="post">
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