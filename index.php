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
    <title>Melhor amigo</title>
</head>
<body>
    <header>
        <div class="navbar">
            <nav>
                <a class="logo" href="#">
                    <img src="./imagens/logo2.png" alt="" style="width: 200px;">
                </a>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="./pages/mostroario.php">Quero adotar</a></li>
                    <li><a href="./pages/login.php">Quero divulgar um animal</a></li>
                    <li><a href="./pages/login.php">Entrar</a></li>
                    <li><a href="./pages/cadastro.php">Cadastre-se</a></li>
                </ul>
            </nav>
            <script src="./barra_navegação/mobile_navbar.js"></script>
        </div>
    </header>
    <div class="header">
        <p> As melhores amizades</p>
        <a href="./pages/mostroario.php">
            <button class="btn">Quero adotar</button>
        </a>
    </div>
    <div class="container">
        <section class="about">
            <div class="lado_texto">
                <h1>Quem <span class="destaque">Somos?</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor qui similique numquam obcaecati, omnis ad, pariatur reprehenderit cumque, repellendus excepturi laboriosam fugiat beatae ipsa impedit porro repellat officiis reiciendis aperiam.</p>
            </div>
            <div class="lado_imagem">
            </div>
        </section>
        <div class="titulo_carrosel">
            <h1>Por que <span class="destaque">adotar?</span></h1>
        </div>
        <section class="carrosel">
            <section class="splide"  aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <a href="/pages/mostroario.php">
                                <img src="imagens/cachorro_rua.jpg">
                                <h2 style="text-align: center; position: relative; left: 10px; padding: 10px; margin: 10px;">você nos tira das ruas</h2>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="/pages/mostroario.php">
                                <img src="imagens/cachorro e cara.jpg">
                                <h2 style="text-align: center; position: relative; left: 10px; padding: 10px; margin: 10px;">seremos grandes companheiros por toda a vida </h2>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="/pages/mostroario.php">
                                <img src="imagens/cachorro_idosa.jpg">
                                <h2 style="text-align: center; position: relative; left: 10px; padding: 10px; margin: 10px;">estarei sempre ao seu lado</h2>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="/pages/mostroario.php">
                                <img src="imagens/cachorro_flor.jpg">
                                <h2 style="text-align: center; position: relative; left: 10px; padding: 10px; margin: 10px;">posso fazer parte de sua familia?</h2>
                            </a>
                        </li>
    
                    </ul>
                </div>
            </section>
        </section>
        <div class="area_comentarios">
            <h1>Pessoas que <span class="destaque">adotaram</span></h1>
        
            <div class="comentarios">
                <div class="com1">
                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nesciunt sunt et accusamus sed blanditiis similique qui voluptatum ut temporibus dolore necessitatibus, rem officia sapiente est nostrum? Molestias, dolor deleniti!
                    </p>
                </div>
                <div class="com2">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eos voluptatum molestias aspernatur atque quibusdam soluta ex rerum quod mollitia, sed laudantium? Corporis, nemo enim in eaque ipsum libero similique!
                    </p>
                </div>
                <div class="com3">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nam aperiam deserunt omnis harum, consectetur beatae optio laborum soluta iusto! Voluptatum nemo, saepe placeat veritatis vel id laudantium dolorem quisquam?
                    </p>
                </div>

            </div>
        </div>
    </div>
</body>

</html>

<script>
    new Splide('.splide').mount();
    var splide = new Splide('.splide', {
        perPage: 1,
        padding: 0,
        cover      : true,
        heightRatio: 0.5,
        type:loop,
        breakpoints: {
            770: {
                perPage: 2,
            },
            500: {
                perPage: 1,
            },
        }
    });

    splide.mount();
</script>