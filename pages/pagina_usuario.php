<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../imagens/favicon.png">
    <link rel="stylesheet" href="./splide/css/splide.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>adote</title>
</head>
<body>
    <header>
        <div class="navbar">
            <nav>
                <a class="logo2" href="#">
                    <img src="../imagens/logo2.png" alt="" style="width: 200px;">
                </a>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="./mostroario.php">Quero divulgar um animal</a></li>
                    <li><a href="../pages/login.php">Entrar</a></li>
                    <li><a href="../pages/cadastro.php">Cadastre-se</a></li>
                </ul>
            </nav>
            <script src="../barra_navegação/mobile_navbar.js"></script>
        </div>
    </header>
    <div class="main">
        <div class="lado_txt">
            <h1 class="editar_perfil">Editar perfil</h1>
            <form action="../conectar/incluiusuario.php" method="post">
                <p>Nome</p>
                <input type="text" name="nome_usuario" placeholder="Digite seu nome">
                <p>Email </p>
                <input type="email" name="email_usuario" value=<?php echo $usuario_log['email_usuario'];?>>
                <p>telefone ou celular</p>
                <input type="tel" name="telefone_usuario" id="" pattern="[0-9]2[0-9]{5}-[0-9]{4}">
                <p>Senha</p>
                <input type="text" name="senha_usuario" id="">
                <p>Estado</p>
                <select id="" name="estado_usuario"><option disabled="disabled" selected="selected" value="">Selecione o Estado</option> 
                    <option value="Acre">
                    Acre
                    </option><option value="Alagoas">
                    Alagoas
                    </option><option value="Amapa">
                    Amapá
                    </option><option value="Amazonas">
                    Amazonas
                    </option><option value="Bahia">
                    Bahia
                    </option><option value="Ceara">
                    Ceará
                    </option><option value="Distrito_Federal">
                    Distrito Federal
                    </option><option value="Espirito_Santo">
                    Espírito Santo
                    </option><option value="Goias">
                    Goiás
                    </option><option value="Maranhao">
                    Maranhão
                    </option><option value="Mato_Grosso">
                    Mato Grosso
                    </option><option value="Mato_Grosso_Do_Sul">
                    Mato Grosso do Sul
                    </option><option value="Minas_Gerais">
                    Minas Gerais
                    </option><option value="Para">
                    Pará
                    </option><option value="Paraiba">
                    Paraíba
                    </option><option value="Parana">
                    Paraná
                    </option><option value="Pernambuco">
                    Pernambuco
                    </option><option value="Piaui">
                    Piauí
                    </option><option value="Rio_de_Janeiro">
                    Rio de Janeiro
                    </option><option value="Rio_Grande_do_Norte">
                    Rio Grande do Norte
                    </option><option value="Rio_Grande_do_Sul">
                    Rio Grande do Sul
                    </option><option value="Rondonia">
                    Rondônia
                    </option><option value="Roraima">
                    Roraima
                    </option><option value="Santa_Catarina">
                    Santa Catarina
                    </option><option value="Sao_Paulo">
                    São Paulo
                    </option><option value="Sergipe">
                    Sergipe
                    </option><option value="Tocantins">
                    Tocantins
                    </option>
                </select>
                <button class="btn">concluir</button>
            </form>
        </div>
        <div class="lado_animais">
            <h1>Animais publicados por você</h1>
            <div class="cards">
                <div class="card">
                    <a href="./pagina_animais.php">

                        <div class="img_card">
                            <img src="../imagens/jonas-vincent-xulIYVIbYIc-unsplash.jpg" alt="">
                        </div>
                        <div class="texto_card">
                            <h3>nome do pet</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam ea fuga, maxime iure, inventore soluta eum ratione atque commodi consequatur, iusto reprehenderit in consequuntur quod fugiat asperiores sunt. Tenetur, nulla!</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="./pagina_animais.php">

                        <div class="img_card">
                            <img src="../imagens/jonas-vincent-xulIYVIbYIc-unsplash.jpg" alt="">
                        </div>
                        <div class="texto_card">
                            <h3>nome do pet</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam ea fuga, maxime iure, inventore soluta eum ratione atque commodi consequatur, iusto reprehenderit in consequuntur quod fugiat asperiores sunt. Tenetur, nulla!</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="./pagina_animais.php">

                        <div class="img_card">
                            <img src="../imagens/jonas-vincent-xulIYVIbYIc-unsplash.jpg" alt="">
                        </div>
                        <div class="texto_card">
                            <h3>nome do pet</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam ea fuga, maxime iure, inventore soluta eum ratione atque commodi consequatur, iusto reprehenderit in consequuntur quod fugiat asperiores sunt. Tenetur, nulla!</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="./pagina_animais.php">

                        <div class="img_card">
                            <img src="../imagens/jonas-vincent-xulIYVIbYIc-unsplash.jpg" alt="">
                        </div>
                        <div class="texto_card">
                            <h3>nome do pet</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam ea fuga, maxime iure, inventore soluta eum ratione atque commodi consequatur, iusto reprehenderit in consequuntur quod fugiat asperiores sunt. Tenetur, nulla!</p>
                        </div>
                    </a>
                </div>
        </div>
        <div class="btn_publicar">
            <a href="./cadastro_animal.php">
                <button class="btn">Doe um animal</button>
            </a>
        </div>
    </div>

</body>
</html>