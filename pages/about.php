<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/default/null.css">
    <link rel="stylesheet" href="../css/about/header-about.css">
    <link rel="stylesheet" href="../css/default/fonts.css">
    <link rel="stylesheet" href="../css/about/about-sec-one.css">
    <link rel="stylesheet" href="../css/about/about-sec-two.css">
    <link rel="stylesheet" href="../css/about/about-footer.css">
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
            <li><a href="news.php">Новости</a></li>
            <li><a href="tours.php">Туры</a></li>
            <li><a href="#">О нас</a></li>
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
        <div class="header__title _anim-items _anim-no-hide">
            <h1>Кто мы</h1>
        </div>
        <div class="header__back__title _anim-items _anim-no-hide">
            <h1>О нас</h1>
        </div>
        <div class="header__back__continent"></div>
        <a href="#sec-one" class="header__moblie"></a>
    </div>
</header>
<section class="sec-1" id="sec-one">
    <div class="sec-one-img _anim-items _anim-no-hide">
        <img src="../images/about/for-sec-one.png" alt="">
    </div>
    <div class="cards _anim-items _anim-no-hide">
        <div class="divined _anim-items _anim-no-hide"></div>
        <div class="cards__title">
            <h5>Наша история</h5>
            <h5>1/3</h5>
        </div>
        <div class="cards__body">
            <p>
                Daun Sqwad как компания основана на уникальном опыте работы над проектами для путешествий по всему миру.
                Мы работаем с 2010 года и являемся командой A для компаний для путешествий, нуждающихся в лучшем дизайне и
                сайте созданных с помощью лучших технологий.
            </p>
            <p>
                Будучи русской компанией, базирующейся в Астрахани, философия
                нашей студии основывается на мировых принципах
                разработки сайтов и креативностью.
            </p>
            <p>
                Мы намерены использовать наш многолетний коллективный опыт работы
                для создания проекта WTG (World Travel Guide) среди прочих, для создания
                собственных проектов и сделать наш первый шаг к тому, чтобы стать
                ведущей компанией.
            </p>
        </div>
    </div>
</section>
<section class="sec-2" id="sec-two">
    <div class="sec-2-item">
        <div class="sec-2-card">
            <div class="sec-2-divined _anim-items _anim-no-hide"></div>
            <div class="sec-2__title">
                <h5>Мы посвящены</h5>
                <h5>2/3</h5>
            </div>
            <div class="sec-2__body">
                <p>
                    Созданию уникальных и захватывающих сайтов
                    с помощью профессиональной команды и создавая
                    сложные проекты, которые выбивают почву из-под
                    ваших ног.
                </p>
            </div>
        </div>
        <div id="one-step" class="sec-2-img _anim-items _anim-no-hide">
            <img src="../images/about/for-sec-two.png" alt="">
        </div>
    </div>
    <div class="sec-2-item">
        <div id="two-step" class="sec-2-img _anim-items _anim-no-hide">
            <img src="../images/about/for-sec-two-3.png" alt="">
        </div>
        <div class="sec-2-card">
            <div class="sec-2-divined _anim-items _anim-no-hide"></div>
            <div class="sec-2__title">
                <h5>Наша миссия</h5>
                <h5>3/3</h5>
            </div>
            <div class="sec-2__body">
                <p>
                    Наша миссия была в создании нового проекта для путешествия «WTG»,
                    используя новейшие технологии и многолетний опыт работы.
                    В итоге вы можете взирать на наш готовый проект.
                    <!-- Ссылка на главную страницу -->
                </p>
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
            <li><a href="about.php">О нас</a></li>
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