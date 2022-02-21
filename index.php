<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confeitaria das Amigas</title>

    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <a href="./index.html">Confeitaria das Amigas</a>

            <div id="nav_menu">
                <ion-icon name="menu-outline" id="btn__menu"></ion-icon>
                <ul id="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            Inicio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            Catálogo
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            Contato
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            Perfil
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home section">
            <div class="home__container container">
                <div class="home__info">
                    <h1 class="home__title">Confeitaria das Amigas</h1>
                    <p class="home__description">A melhor confeitaria da região, aqui encontra-se bolos com diversos temas, e contamos com salgados de diversos tipos, como também tortas geladas de sua preferência.</p>

                    <a href="#">Faça seu pedido</a>
                </div>
                <div class="home__img">
                    <img src="./img/cake.jpg" alt="Imagem Bolo">
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <h2 id="footer__title">Confeitaria das Amigas</h2>
        <span id="copy">&copy; Copyright Confeitaria das Amigas 2022 - Todos os direitos reservados</span>

        <ul id="social__media">
            <li class="social__item"><a href="#"><ion-icon name="logo-instagram" class="social__icon" ></ion-icon></a></li>
            <li class="social__item"><a href="#"><ion-icon name="logo-whatsapp" class="social__icon"></ion-icon></a></li>
        </ul>

    </footer>

    <script src="./scripts/menu.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>