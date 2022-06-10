<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/default/null.css">
    <link rel="stylesheet" href="../css/default/fonts.css">
    <link rel="stylesheet" href="../css/news/news-header.css">
    <link rel="stylesheet" href="../css/news/news-main.css">
    <link rel="stylesheet" href="../css/news/news-section.css">
    <link rel="stylesheet" href="../css/news/news-footer.css">
</head>
<body>
<script>
    function LogoView() {
        if(window.innerWidth < 1000){
            console.log('darth vader');
            document.querySelector('.header__logo img').setAttribute('src','../images/Logo-light.svg');
        } else {
            document.querySelector('.header__logo img').setAttribute('src','../images/Logo.svg');
        }
    }
    window.addEventListener('DOMContentLoaded',LogoView);
    window.addEventListener('resize', LogoView);
</script>
<header>
    <nav>
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
            <li><a href="about.php">О нас</a></li>
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
</header>
<main>
    <h1 class="main-back-h1 _anim-items _anim-no-hide">Новости</h1>
    <div class="main-header _anim-items _anim-no-hide">
        <h2>Главные новости</h2>
    </div>
    <div class="main-news">
        <a href="news/new-1.php" class="main-card">
            <figure class="main-card-img">
                <img src="../images/news/card-1.png" alt="">
            </figure>
            <div class="main-card-text">
                <p>
                    Это конец: последняя страна Европы
                    отменила ограничения на въезд туристов
                </p>
            </div>
            <div class="main-card-footer">
                <sub>17.05.2022</sub>
            </div>
        </a>
        <a href="news/new-2.php" class="main-card">
            <figure class="main-card-img">
                <img src="../images/news/card-2.png" alt="">
            </figure>
            <div class="main-card-text">
                <p>
                    Ограничение полетов в аэропорты
                    юга и центра России продлили до 19 мая
                </p>
            </div>
            <div class="main-card-footer">
                <sub>05.05.2022</sub>
            </div>
        </a>
    </div>
</main>
<section class="news">
    <div class="news-header">
        <h2>Новости</h2>
    </div>
    <div class="news-body">
        <div class="row">
            <a href="news/new-3.php" id="left" class="main-card _anim-items">
                <figure class="main-card-img">
                    <img src="../images/news/card-3.png" alt="">
                </figure>
                <div class="main-card-text">
                    <p>
                        В России ожидают более 61 миллиона внутренних туристов в 2022 году
                    </p>
                </div>
                <div class="main-card-footer">
                    <sub>05.03.2022</sub>
                </div>
            </a>
            <a href="news/new-4.php" id="right" class="main-card _anim-items">
                <figure class="main-card-img">
                    <img src="../images/news/card-4.png" alt="">
                </figure>
                <div class="main-card-text">
                    <p>
                        Курорты Средиземноморья атакованы чёрными мухами
                    </p>
                </div>
                <div class="main-card-footer">
                    <sub>01.04.2022</sub>
                </div>
            </a>
        </div>
        <div class="row">
            <a href="news/new-5.php" id="left" class="main-card _anim-items">
                <figure class="main-card-img">
                    <img src="../images/news/card-5.png" alt="">
                </figure>
                <div class="main-card-text">
                    <p>
                        Полная капитуляция популярной страны ЮВА
                    </p>
                </div>
                <div class="main-card-footer">
                    <sub>29.01.2022</sub>
                </div>
            </a>
            <a href="news/new-6.php" id="right" class="main-card _anim-items">
                <figure class="main-card-img">
                    <img src="../images/news/card-6.png" alt="">
                </figure>
                <div class="main-card-text">
                    <p>
                        В Таиланде всё меняется
                    </p>
                </div>
                <div class="main-card-footer">
                    <sub>13.05.2022</sub>
                </div>
            </a>
        </div>
        <div class="row" >
            <a href="news/new-7.php" id="left" class="main-card _anim-items">
                <figure class="main-card-img">
                    <img src="../images/news/card-7.png" alt="">
                </figure>
                <div class="main-card-text">
                    <p>
                        Посольство Великобритании в Москве сообщило о росте срока оформления виз
                    </p>
                </div>
                <div class="main-card-footer">
                    <sub>15.05.2022</sub>
                </div>
            </a>
            <a href="news/new-3.php" id="right" class="main-card _anim-items">
                <figure class="main-card-img">
                    <img src="../images/news/card-8.png" alt="">
                </figure>
                <div class="main-card-text">
                    <p>
                        В России ожидают более 61 миллиона внутренних туристов в 2022 году
                    </p>
                </div>
                <div class="main-card-footer">
                    <sub>05.03.2022</sub>
                </div>
            </a>
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
        <a href="../Политика-конфиденциальности.docx">Политика конфиденциальности</a>
    </div>
    <div class="footer-footer">
        <p>© DaunSquad           2022 / все права защищены</p>
    </div>
</footer>
<script src="../js/main/anim_on_scroll.js"></script>
</body>
</html>