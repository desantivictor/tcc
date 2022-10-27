<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./imagens/favicon.png">
    <link rel="stylesheet" href="./splide/css/splide.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./splide/js/splide.min.js"></script>
    <title>Esqueceu a Senha</title>
</head> 
<body>

    <header class="header-top">
        <a class="header-top__link" href="../index.php">X</a>
    </header>

    <main class="conteudo-login">
        <form action="env_email_senha.php" method="post" class="form">
            <label class="form-label" for="nome">Email</label>
            <input class="form-input" type="email" id="email" name="email" required>

            <input type="submit" value="Login" class="enviar">
        </form>
    </main>

    <footer class="foo-bot">
        <div class="foo-caixa">
            <p class="copyright">&copy; Copyright melhor amigo - 2022</p>
            <img class="logo" src="./imagens/logo2.png" alt="">
        </div>
    </footer>
</body>
</html>