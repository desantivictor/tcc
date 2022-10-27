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

   <section>
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
            <?php
            require_once '../conectar/buscaanimal.php';
            foreach ($animal_log['id_animal'] as $key) {
            include_once '../conectar/buscaanimal.php';
            $x = $key['id_animal'];
            $id_animal = $x;
            echo "<a class='link_a' href='pagina_animais.php?id=$x'>Ver Perfil</a>";
                    echo '<div class="imag_card">';
                    echo '<img src="../imagens/jonas-vincent-xulIYVIbYIc-unsplash.jpg" alt="">';
                    echo '</div>';
                    echo '<div class="texto_card">';
                    echo "<h3> ".$animal_log['nome_animal']."</h3>";
                    echo "<p> ".$animal_log['sexo_animal']."</p>";
                    echo "<p> ".$animal_log['descricao_animal']."</p>";
                    echo '</div>';
                echo '</a>';
            }
            ?>
            </div>
        </div>
   </section>
</body>
</html>