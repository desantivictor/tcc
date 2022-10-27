<?php session_start(); if ($_SESSION['log']=="") {header("Location:../pages/login.php");}?>
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
            <h1 class="editar_perfil">informações do animal</h1>
            <form action="../conectar/incluianimal.php" method="post">
                <p>Nome do animal</p>
                <input type="text" name="nome_animal" placeholder="Digite o nome do animal">
                <p>Sexo do animal</p>
                <select name="sexo_animal" >
                    <option disabled="disabled" selected="select" value="">Selecione o sexo do animal</option>
                    <option value="macho">Macho</option>
                    <option value="Femea">Femêa</option>
                </select>
                <p>Porte</p>
                <select name="porte_animal" >
                    <option disabled="disabled" name="porte_animal" selected="select" value="">Selecione o porte do animal</option>
                    <option value="grande">Grande</option>
                    <option value="medio">Médio</option>
                    <option value="pequeno">Pequeno</option>
                </select>
                <p>Estado</p>
                <select name="estado_animal"><option disabled="disabled" selected="selected" value="">Selecione o Estado</option> 
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
                <p>Cidade</p>
                <input type="text" name="cidade_animal" placeholder="Digite seu numero">
                <p>Data a qual você encontrou o animal</p>
                <input type="date" name="data_animal" >
                <p>Sobre o animal</p>
                <textarea name="sobre_animal" cols="30" rows="10" ></textarea>
                <button class="btn">concluir</button>
            </form>
        </div>

    </div>

</body>
</html>