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
    <div class="container">
        <div class="lado_imagem">
           <img src="../imagens/imagem_cachorro_touca2.png" alt="">
        </div>
        <div class="lado_texto">
            <h1><?php echo "Perfil de ",$animal_log['nome_animal'];?></h1>
            <h3><?php echo $animal_log['sexo_animal'];?></h3>
            <h3><?php echo "Encontrado dia ",$animal_log['data_animal'];?></h3>
            <h3><?php echo "Porte ",$animal_log['porte_animal'];?></h3>
            <h3>publicado por araujo</h3>
            <h3><?php echo $animal_log['estado_animal'];?></h3>
            <h2><?php echo "Sobre ",$animal_log['nome_animal'];?></h2>
            <p><?php echo $animal_log['descricao_animal'];?></p>
            <button class="btn">Entrar em contato</button>
        </div>
    </div>
</body>
</html>