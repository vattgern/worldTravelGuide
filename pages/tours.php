<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Туры</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/default/null.css">
    <link rel="stylesheet" href="../css/default/fonts.css">
    <link rel="stylesheet" href="../css/tours/tours-header.css">
    <link rel="stylesheet" href="../css/tours/tours.css">
    <link rel="stylesheet" href="../css/tours/tours-footer.css">
</head>
<script>
    function LogoView() {
        if(window.innerWidth < 1366){
            console.log('darth vader');
            document.querySelector('.header__logo img').setAttribute('src','../images/Logo-light.svg');
        } else {
            document.querySelector('.header__logo img').setAttribute('src','../images/Logo.svg');
        }
    }
    window.addEventListener('DOMContentLoaded',LogoView);
    window.addEventListener('resize', LogoView);
</script>
<body>
<header>
    <nav class="header__menu">
        <figure class="header__logo">
            <img src="../images/Logo.svg" alt="">
        </figure>
        <a href="#burger-menu" class="header__list__burger">
            <div></div>
            <div></div>
            <div></div>
        </a>
        <ul id="burger-menu" class="header__list _anim-items _anim-no-hide">
            <a href="#" class="exit">
                <div></div>
                <div></div>
            </a>
            <li><a href="main.php">Главная</a></li>
            <li><a href="">Новости</a></li>
            <li><a href="tours.php">Туры</a></li>
            <?php
            if(isset($_SESSION['user'])){
                echo "<li><a href='profile.php'>{$_SESSION['user']['login']}</a></li>
                         <li style='position: relative; bottom: 5px'>
                            <a href='../functions/logout.php'>
                                <span class='material-symbols-outlined'>
                                    logout
                                </span>
                            </a>
                        </li>";
            }else{
                echo '<li><a href="auth.php">Войти</a></li>';
            }
            ?>
        </ul>
    </nav>
    <div class="header__body">
        <div class="header__back__title _anim-items _anim-no-hide">
            <h1>Туры</h1>
        </div>
        <a href="#dubai" class="header__moblie"></a>
    </div>
</header>
<section class="tours">
    <div class="tour _anim-items _anim-no-hide" id="dubai">
        <div class="tour-shadow"></div>
        <div class="tour-content">
            <div class="tour-title">
                <h2>Дубай</h2>
            </div>
            <div class="tour-body">
                <p>Дубай - это город в пустыни</p>
            </div>
        </div>
    </div>
    <a href="moscow.php" class="tour _anim-items _anim-no-hide" id="moscow">
        <div class="tour-shadow"></div>
        <div class="tour-content">
            <div class="tour-title">
                <h2>Москва</h2>
            </div>
            <div class="tour-body">
                <p>Москва - жестокая и циничная</p>
            </div>
        </div>
    </a>
    <div class="tour _anim-items _anim-no-hide" id="rome">
        <div class="tour-shadow"></div>
        <div class="tour-content">
            <div class="tour-title">
                <h2>Рим</h2>
            </div>
            <div class="tour-body">
                <p>Я принял Рим кирпичным, а оставлю его мраморным</p>
            </div>
        </div>
    </div>
    <div class="tour _anim-items _anim-no-hide" id="london">
        <div class="tour-shadow"></div>
        <div class="tour-content">
            <div class="tour-title">
                <h2>Лондон</h2>
            </div>
            <div class="tour-body">
                <p>Лондон - это место, которое постоянно удивляет</p>
            </div>
        </div>
    </div>
    <div class="tour _anim-items _anim-no-hide" id="paris">
        <div class="tour-shadow"></div>
        <div class="tour-content">
            <div class="tour-title">
                <h2>Париж</h2>
            </div>
            <div class="tour-body">
                <p>Париж - это просто увеселительный парк</p>
            </div>
        </div>
    </div>
    <div class="tour _anim-items _anim-no-hide" id="venice">
        <div class="tour-shadow"></div>
        <div class="tour-content">
            <div class="tour-title">
                <h2>Венеция</h2>
            </div>
            <div class="tour-body">
                <p>Венеция - это рыба</p>
            </div>
        </div>
    </div>
    <div class="tour _anim-items _anim-no-hide" id="kazan">
        <div class="tour-shadow"></div>
        <div class="tour-content">
            <div class="tour-title">
                <h2>Казань</h2>
            </div>
            <div class="tour-body">
                <p>Казань - городок Москвы уголок</p>
            </div>
        </div>
    </div>
    <div class="tour _anim-items _anim-no-hide" id="new-york">
        <div class="tour-shadow"></div>
        <div class="tour-content">
            <div class="tour-title">
                <h2>Нью-Йорк</h2>
            </div>
            <div class="tour-body">
                <p>Нью-Йорк - в действительности выглядит лучше, чем на открытках</p>
            </div>
        </div>
    </div>
    <div class="tour _anim-items _anim-no-hide" id="prague">
        <div class="tour-shadow"></div>
        <div class="tour-content">
            <div class="tour-title">
                <h2>Прага</h2>
            </div>
            <div class="tour-body">
                <p>Прага - это Париж 90-х</p>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="footer-one">
        <h2>WTG</h2>
        <p>Контакты: +7 902 942 78 11</p>
        <p>Email: Dmitrii1976@mail.ru</p>
    </div>
    <div class="footer-two">
        <p>Ссылки</p>
        <ul>
            <li><a href="main.php">Главная</a></li>
            <li><a href="news.php">Новости</a></li>
            <li><a href="">О нас</a></li>
            <li><a href="tours.php">Туры</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
        </ul>
    </div>
    <div class="footer-three">
        <p>Ресурсы</p>
        <ul>
            <li>Контакты</li>
            <li>Поддержка</li>
        </ul>
    </div>
    <div class="footer-four">
        <p>Партнеры</p>
        <ul>
            <li>GWPU</li>
            <li>Second life</li>
            <li>s7 airlines</li>
            <li>Психика Александра</li>
            <li>Нервы Антона</li>
            <li>Эчпочмак corporation</li>
        </ul>
    </div>
    <div class="footer-doc">
        <a href="">Политика конфиденциальности</a>
    </div>
    <div class="footer-footer">
        <p>© DaunSquad           2022 / все права защищены</p>
    </div>
</footer>
<script src="../js/main/anim_on_scroll.js"></script>
</body>
</html>